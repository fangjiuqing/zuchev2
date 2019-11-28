<?php
namespace com\default_wap;
use \re\rgx as RGX;

class login_module extends base_module {
    /**
     * 登录页
     * @return [type] [description]
     */
    public function index_action () {
        session_start();

        if ( isset($_SESSION['user']) ) {
            $this->redirect('my-order');
        }

        $redirect = $this->get('redirect');
        $this->assign('redirect' , $redirect);

        $this->assign('title' , '手机号登录');
        $this->display('login.tpl');
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

        $data = $this->get('data' , 'p');

        $sms_code = $_SESSION['sms_code'];
        $verify_code = $this->get('verify_code' , 'p');

        if ( $sms_code == $verify_code ) {
            $redirect = $this->get('redirect' , 'p');
            if ( $redirect ) {
                $result['url']  =  $redirect;
            }else{
                $result['url']  = RGX\router::url('my-order');
            }

            $result['code'] = 200;
            $_SESSION['user'] = $data;
        }else{
            $result['msg'] = '验证码错误';
            $this->ajaxout($result);
        }

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