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
            $this->redirect('order');
        }

        $redirect = $this->get('redirect');
        $this->assign('redirect' , $redirect);

        $this->assign('title' , '普通登录');

        $this->assign('right_link' , '<a href="' . RGX\router::url('register') . '">注册</a>');
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

        $verify_code = $this->get('verify_code' , 'p');
        if( $this->sess_get('verify') != $verify_code ) {
            $result['msg'] = '验证码错误';
            $this->ajaxout($result);
        }

        $tab = RGX\OBJ('user_table');

        ## 手机号已存在
        $user = $tab->where("user_mobile = '" . $data['user_mobile'] ."'")->limit(1)->get();
        if ( empty($user) ) {
            $result['msg'] = '用户不存在';
            $this->ajaxout($result);
        }

        $password = sha1(md5($data['user_password']) . $user['user_salt']);
        if ( $password != $user['user_password'] ) {
            $result['msg'] = '密码错误';
            $this->ajaxout($result);
        }

        $redirect = $this->get('redirect' , 'p');
        if ( $redirect ) {
            $result['url']  =  $redirect;
        }else{
            $result['url']  = RGX\router::url('order');
        }

        $result['code'] = 200;
        //$this->set_login($user);
        $_SESSION['user'] = $user;
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