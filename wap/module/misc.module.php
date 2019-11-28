<?php
namespace com\default_wap;
use \re\rgx as RGX;

class misc_module extends base_module {
    /**
     * 图片验证码
     * @return [type] [description]
     */
    public function verify_action () {
        $this->sess();
        $code = mt_rand(1000, 9999);
        $this->sess_set('verify', $code);
        $this->nocache();
        RGX\image::get_instance()->captcha($code, [
            'font'      => DATA_PATH . 'fonts/Microsoft_Yahei.ttf',
            'width'     => 80,
            'height'    => 34,
            'fontsize'  => 24
        ]);
    }

    /**
     * 短信验证码
     * @return [type] [description]
     */
    public function sms_action () {
        session_start();
        $code = mt_rand(1000, 9999);

        $mobile = $this->get('mobile');
        $type = 'login';

        if ($_SESSION['last_sms_send'] > (REQUEST_TIME - 60)) {
            $this->ajaxout(['code' => 500, 'msg' => '您的操作太频繁了, 请稍后再试!']);
        }

        $code = mt_rand(1000, 9999);

        $send = RGX\sms_helper::send_verfiy($mobile, $code, 0, $type == 'login' ? 2 : 1);

        if ( $send ) {
            $_SESSION['sms_code'] = $code;
            $_SESSION['last_sms_send'] = REQUEST_TIME;
            $this->ajaxout(['code' => 200, 'msg' => '短信验证码已发送, 请注意查收!']);
        }

        $this->ajaxout([
            'code' => 500,
            'msg'  => 'error'
        ]);
    }

    /**
     * [logout_action description]
     * @return [type] [description]
     */
    public function logout_action () {
        session_start();
        $_SESSION['user'] = null;

        $this->redirect('login');
    }

} // Class End