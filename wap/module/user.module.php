<?php
namespace com\default_wap;
use \re\rgx as RGX;

class user_module extends base_module {
    public $login_user_id = 0;

    /**
     * [__construct description]
     * @param array $params [description]
     */
    public function __construct ($params = []) {
        session_start();
        parent::__construct($params);
        //$this->sess();
        //$this->login = $this->sess_get('login');

        //$current_url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        $current_url = $_SERVER['REQUEST_URI'];

        $this->login = $_SESSION['user'];
        if ( empty($this->login) ) {
            $url = RGX\router::url('login-index-redirect-' . $current_url);
            //$this->redirect('login-index-redirect-' . $current_url);
        }
        $this->login_user_id = $_SESSION['user']['user_id'];
        $this->login_user_mobile = $_SESSION['user_mobile'];
        $this->assign('user' , $this->login);
    }
} // Class End
