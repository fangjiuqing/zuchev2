<?php
/**
 * 别兴奋，拿到我的数据库服务器权限也没什么卵用
 * 都是个人测试数据，没有什么价值，懒得麻烦才直接用root账号以及直接往git上提交的
 */
return [
    'db'    => [
        'pre'       => 'pre_',
        'type'      => 'mysql',
        'mysql'     => [
             'default'   => 'host=111.231.106.198;port=3306;db=rentcar;user=root;passwd=fang123wei;charset=utf8;profiling=1',
        ],
    ],
   'CACHE_VER'  => 2,
   'SYS_NAME'  => 'API',
   'tpl'        => [
      'style'     => 'default',
      '404_tpl'   => '404.tpl',
      'msg_tpl'   => 'msg.tpl',
      'ob'        => true,
      'native'    => false,
      'tpl_pre'   => '{',
      'tpl_suf'   => '}',
      'cmod'      => false,
      'charset'   => 'utf-8',
      'allow_php' => false
  ],
];

