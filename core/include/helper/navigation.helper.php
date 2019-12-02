<?php
namespace re\rgx;
// PASSED
/**
 * 导航助手类
 * $Id: navigation.helper.php 951 2017-12-18 06:43:09Z fangwei $
 */
class navigation_helper extends rgx {
    public static $navs    =    [
        [
            'name'   =>    '订单管理',
            'icon'   =>    'fa fa-home',
            'urls'    =>   [
                ['url' => 'order-index', 'name' => '订单处理'],
            ],
        ],

        [
            'name'   =>    '代理管理',
            'icon'   =>    'fa fa-area-chart',
            'urls'    =>   [
                ['url' => 'agent-index' , 'name' => '代理维护'],
                ['url' => 'agent-add' , 'name' => '新增代理'],
            ],
        ],

        [
            'name'   =>    '车辆管理',
            'icon'   =>    'fa fa-handshake-o',
            'urls'    =>   [
                ['url' => 'car-index' ,   'name' => '车辆维护'],
                ['url' => 'car-add' , 'name' => '新增车辆'],
            ],
        ],

        [
            'name'   =>    '用户管理',
            'icon'   =>    'fa fa-map-o',
            'urls'    =>   [
                ['url' => 'user-index' ,  'name' => '用户列表'],
                ['url' => 'user-add' ,   'name' => '新增用户'],
            ],
        ],
    ];

    /**
     * 根据当前登录用户获取导航菜单
     * @param  [type] $login [description]
     * @return [type]        [description]
     */
    public static function get ($login = []) {
        if ( $login['is_admin'] ) {
            return self::$navs + self::$admin_navs;
        }
        return self::$navs;
    }

    /**
     * [format description]
     * @method format
     * @param  array  $except [description]
     * @return [type] [description]
     */
    public static function format ($except = [] ) {
        $data    =    [];
        foreach( self::$navs as $k => $v ) {
            if ( $v['url'] ) {
                $data[$v['url']]    =    $v['name'];
            }
            if ( !empty($v['urls']) ) {
                foreach ( $v['urls'] as $sk => $sv ) {
                    $data[$sv['url']]    =    $sv['name'];
                }
            }
        }
        return $data;
    }
} //Class End