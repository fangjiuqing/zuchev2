<?php
namespace com\default_wap;
use \re\rgx as RGX;

class register_module extends base_module {
    /**
     * 登录页
     * @return [type] [description]
     */
    public function index_action () {
        $this->assign('title' , '立即注册');

        $this->assign('right_link' , '<a href="' . RGX\router::url('login') . '">登录</a>');

        $redirect = $this->get('redirect');
        $this->assign('redirect' , $redirect);
        $this->display('register.tpl');
    }

    /**
     * 登录提交
     * @return [type] [description]
     */
    public function submit_action () {
        session_start();
        $result = [
            'code' => 500,
            'msg'  => '',
            'data' => ''
        ];

        $redirect = $this->get('redirect' , 'p');

        $data = $this->get('data' , 'p');

        $verify_code = $this->get('verify_code' , 'p');
        if( $this->sess_get('verify') != $verify_code ) {
            $result['msg'] = '验证码错误';
            $this->ajaxout($result);
        }

        $tab = RGX\OBJ('user_table');

        ## 手机号已存在
        $user = $tab->where("user_mobile = '" . $data['user_mobile'] ."'")->limit(1)->get();
        if ( !empty($user) ) {
            $result['msg'] = '手机号已存在';
            $this->ajaxout($result);
        }

        $data['user_salt'] = mt_rand(100001,900009);
        $data['user_password'] = sha1(md5($data['user_password']) . $data['user_salt']);
        $data['user_register_date'] = date('Y-m-d H:i:s');

        $tab->load($data);
        $res = $tab->save();
        if ( !empty($res['row_id']) ) {
            $data['user_id'] = $res['row_id'];
            unset($data['user_password'] , $data['user_salt']);
            $result['code'] = 200;
            $result['data'] = $data;

            if ( $redirect ) {
                $result['url']  =  $redirect;
            }else{
                $result['url']  =  RGX\router::url('index');
            }

        }

        unset($data['user_salt'] , $data['user_password']);
        $_SESSION['user'] = $data;
        $this->ajaxout($result);
    }

    /**
     * 检查是否登录
     * @return [type] [description]
     */
    public function check_action () {
        $result = [
            'code' => 403
        ];
        if ( !empty($this->login)) {
            $result['code'] = 200;
            $result['data'] = $this->login;
        }

        $this->ajaxout($result);
    }

} // Class End