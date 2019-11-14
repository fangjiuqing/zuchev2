<?php
namespace com\default_wap;
use \re\rgx as RGX;

class order_module extends user_module {
    /**
     * 订单列表
     * @return [type] [description]
     */
    public function index_action () {

        $this->assign('title' , '订单列表');
        $order_type = RGX\common_helper::$order_status;
        $this->assign('order_type' , $order_type);

        # all orders
        $tab = RGX\OBJ('order_table');
        //$tab->where("order_user_id = " . $this->login_user_id);
        $tab->where("order_user_mobile = " . $this->login_user_mobile);
        $tab->map(function($row) {
            $order_car_info = json_decode($row['order_car_info'] , true );
            unset($row['order_car_info']);
            $row = array_merge($row , $order_car_info);

            $row['order_start_time'] = date('Y/m/d' , strtotime($row['order_start_time']));
            $row['order_end_time'] = date('Y/m/d' , strtotime($row['order_end_time']));

            return $row;
        });
        $orders = $tab->get_all();

        $results = [];
        foreach ( $orders as $order ) {
            $results[$order['order_status']][] = $order;
        }
        $this->assign('orders' , json_encode($results));
        $this->display('order/index.tpl');
    }

    /**
     * 订单确认
     * @return [type] [description]
     */
    public function confirm_action () {
        $this->assign('title' , '订单预览');
        $car_id = intval($this->get('cid'));
        if ( !$car_id ) {
            $this->redirect('index');
        }

        $car_info = RGX\OBJ('car_table')->where("car_id = $car_id")->get();
        $this->assign('car_info' , $car_info);
        $this->display('order/confirm.tpl');
    }

    /**
     * 订单预览
     * @return [type] [description]
     */
    public function preview_action () {
        $this->assign('title' , '订单预览');
        $car_id = intval($this->get('cid'));
        if ( !$car_id ) {
            $this->redirect('index');
        }

        $car_info = RGX\OBJ('car_table')->where("car_id = $car_id")->get();
        $this->assign('car_info' , $car_info);
        $this->display('order/preview.tpl');
    }

    /**
     * 订单查看
     * @return [type] [description]
     */
    public function view_action () {
        $this->assign('title' , '订单详情');
        $order_id = intval($this->get('id'));
        if ( !$order_id ) {
            $this->redirect('index');
        }

        $tab = RGX\OBJ('order_table')->where("order_id = $order_id");
        $tab->where("order_user_id = " . $this->login_user_id);

        $order_info = $tab->get();
        $order_car_info = json_decode($data['order_car_info'] , true);
        $order_info = array_merge($order_info , $order_car_info);

        $order_info['order_start_time'] = date('Y/m/d' , strtotime($order_info['order_start_time']));
        $order_info['order_end_time'] = date('Y/m/d' , strtotime($order_info['order_end_time']));
        $order_info['order_create_date'] = date('Y/m/d H:i:s' , strtotime($order_info['order_create_date']));

        $ostatus = RGX\common_helper::$order_status;
        $order_info['order_status_text'] = $ostatus[$order_info['order_status']];

        $ostatus_color = RGX\common_helper::$order_status_color;
        $order_info['order_status_color'] = $ostatus_color[$order_info['order_status']];

        $car_type = RGX\common_helper::$car_type;
        $order_info['car_type_text'] = $car_type[$order_info['car_type']];

        $this->assign('order_info' , $order_info);
        $this->display('order/view.tpl');
    }

    /**
     * 订单提交
     * @return [type] [description]
     */
    public function submit_action () {
        session_start();
        $result = [
            'code' => 500,
            'msg'  => '操作异常稍后重试',
            'data' => ''
        ];
        $data = $this->get('data' , 'p');

        $verifycode = $this->get('verifycode' , 'p');

        if ( $verifycode != '8712' ) {
            $result['msg'] = '验证码错误';
            $this->ajaxout($result);
        }
        $car_id = intval($data['order_car_id']);
        $car_info = RGX\OBJ('car_table')->where("car_id = $car_id")->get();
        if ( !empty($car_info) ) {
            if ( !$data['order_user_mobile'] ) {
                $result['msg'] = '手机号必填';
                $this->ajaxout($result);
            }

            if ( !$data['order_user_fullname'] ) {
                $result['msg'] = '联系人必填';
                $this->ajaxout($result);
            }

            if ( !$data['order_user_sno'] ) {
                $result['msg'] = '学号必填';
                $this->ajaxout($result);
            }

            if ( !$data['order_user_sname'] ) {
                $result['msg'] = '所在学校必填';
                $this->ajaxout($result);
            }

            if ( !$data['order_user_license'] ) {
                $result['msg'] = '驾照信息必填';
                $this->ajaxout($result);
            }

            if ( !floatval($data['order_duration_days']) ) {
                $result['msg'] = '取还车时间不正确';
                $this->ajaxout($result);
            }
            $nowdaytime = date('YmdHis');
            $data['order_no'] = $nowdaytime . mt_rand(1000,9999);
            $data['order_title'] = $car_info['car_name'];
            $data['order_amount'] = $car_info['car_rent_price'] * $data['order_duration_days'];
            //$data['order_user_id'] = $this->login_user_id;
            $data['order_create_date'] = $nowdaytime;
            $data['order_status'] = RGX\common_helper::STATUS_WAITING;
            $data['order_car_info'] = json_encode($car_info , JSON_UNESCAPED_UNICODE);
            $data['order_start_time'] = date('Y-m-d H:i:s' , strtotime($data['order_start_time']));
            $data['order_end_time'] = date('Y-m-d H:i:s' , strtotime($data['order_end_time']));
            $tab = RGX\OBJ('order_table');
            $tab->load($data);
            $res = $tab->save();

            if ( $res['row_id'] ) {
                $result['code'] = 200;
                $result['msg']  = '';
                $result['url']  = RGX\router::url('index');
            }
        }

        $_SESSION['user_mobile'] = $data['order_user_mobile'];
        $this->ajaxout($result);
    }


} // Class End