<?php
namespace com\default_wap;
use \re\rgx as RGX;

class base_module extends RGX\module {

    public $login = null;

    /**
     * [__construct description]
     */
     public function __construct ($params = []) {
        session_start();
        parent::__construct($params);
        // $this->sess();
        // $this->login = $this->sess_get('login');
        //
        if ( isset($_SESSION['user']) ) {
            $this->assign('user' , $_SESSION['user']);
        }
    }

    /**
     * 设置当前登录用户
     * @param [type] $user [description]
     */
    public function set_login ($admin) {
        $this->sess_set('login', $admin);
    }


} // Class End