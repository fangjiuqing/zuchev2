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
             'default'   => 'host=127.0.0.1;port=3306;db=rentcar;user=root;passwd=fang123wei;charset=utf8;profiling=1',
             //'default'   => 'host=localhost;port=3306;db=rentcar;user=root;passwd=;charset=utf8;profiling=1',
        ],
    ],
   'CACHE_VER'  => 2,
   'SYS_NAME'  => '我要租车',
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
  'static_url'  => 'http://47.108.136.102/static/',
  'upload_url'  => 'http://47.108.136.102/data/attachment/',
  //'static_url'  => 'http://127.0.01/zuchev2/static/',
  // 'upload_url'  => 'http://127.0.01/zuchev2/data/attachment/',
];

//UPDATE mysql.user SET Password = PASSWORD('3yG8tL2mI') WHERE User = 'bdm289907605' limit 1;
