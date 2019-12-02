<?php
namespace re\rgx;

/**
 * 短信助手类
 * $Id: sms.helper.php 490 2018-08-26 13:33:42Z reginx $
 */
class sms_helper extends rgx {

    /**
     * 记录发送记录
     * @param [type] $data [description]
     */
    public static function add_log ($data) {
        $tab = OBJ('sms_table');
        if ($tab->load($data)) {
            return $tab->save()['code'] === 0;
        }
        return false;
    }

    /**
     * 发送短信验证码
     * @param  [type]  $mobile  [description]
     * @param  [type]  $code    [description]
     * @param  integer $user_id [description]
     * @return [type]           [description]
     */
    public static function send_verfiy ($mobile, $code, $user_id = 0, $type = 1) {
        $resp = curl_helper::gethtml(APP_URL . "sendsms.php?mobile={$mobile}&params[code]={$code}");
        if ($resp['code'] == '200' && $resp['html'] == 'Success') {
            return self::add_log([
                'sms_id'        => 0,
                'sms_user_id'   => $user_id,
                'sms_mobile'    => $mobile,
                'sms_type'      => $type,
                'sms_adate'     => REQUEST_TIME,
                'sms_text'      => $code
            ]);
            return true;
        }
        return false;
    }

    /**
     * 发送短信验证码
     * @param  [type]  $mobile  [description]
     * @param  [type]  $code    [description]
     * @param  integer $user_id [description]
     * @return [type]           [description]
     */
    public static function send_notify ($uid = 0, $amount = 0) {
        $resp = curl_helper::gethtml(APP_ABS_URL . "sendsms.php?params[status]={$uid}&params[remark]={$amount}");
        if ($resp['code'] == '200' && $resp['html'] == 'Success') {
            return true;
        }
        return false;
    }

    /**
     * 最后发送
     * @param  [type] $user_id  [description]
     * @param  [type] $mobile   [description]
     * @param  [type] $sms_type [description]
     * @return [type]           [description]
     */
    public static function last_send ($user_id, $mobile = '', $sms_type = 1) {
        $tab = OBJ('sms_table');
        $tab->where([
            'sms_type'  => $sms_type
        ]);
        if ($user_id > 0) {
            $tab->where("sms_user_id = {$user_id}");
        }
        if (!empty($mobile)) {
            $tab->where("sms_mobile = '{$mobile}'");
        }
        return $tab->where("sms_adate >= " . (REQUEST_TIME - 600))->order('sms_id desc')->get();
    }

    /**
     * 删除短信记录
     * @param  array  $ids [description]
     * @return [type]      [description]
     */
    public static function del_logs ($ids = []) {
        return OBJ('sms_table')->delete([
            'sms_id'       => $ids,
        ])['code'] === 0;
    }

    /**
     * 用户发送统计
     * @param  [type] $user_id [description]
     * @return [type]          [description]
     */
    public static function user_total ($user_id, $date = 0) {
        $date = $date ?: strtotime('midnight', REQUEST_TIME);
        return OBJ('sms_table')->where([
            'sms_user_id'       => $user_id
        ])->where("sms_adate > {$date}")->count();
    }

    /**
     * 用户发送统计
     * @param  [type] $user_id [description]
     * @return [type]          [description]
     */
    public static function user_total_mobile ($mobile, $date = 0) {
        $date = $date ?: strtotime('midnight', REQUEST_TIME);
        return OBJ('sms_table')->where([
            'sms_mobile'       => $mobile
        ])->where("sms_adate > {$date}")->count();
    }
}
