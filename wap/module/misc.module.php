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

} // Class End