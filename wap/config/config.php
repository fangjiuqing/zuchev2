<?php
return [
    'db'    => [
        'pre'       => 'pre_',
        'type'      => 'mysql',
        'mysql'     => [
             'default'   => 'host=111.231.106.198;port=3306;db=rentcar;user=root;passwd=fang123wei;charset=utf8;profiling=1',
             //'default'   => 'host=localhost;port=3306;db=rentcar;user=root;passwd=;charset=utf8;profiling=1',
        ],
    ],
   'CACHE_VER'  => 2,
   'SYS_NAME'  => '在线租车',
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
  'static_url'  => 'https://case.isoftware.xyz/carrent/static/',
  'upload_url'  => 'https://case.isoftware.xyz/carrent/data/attachment/',
  // 'static_url'  => 'http://192.168.0.104/zuchev2/static/',
  // 'upload_url'  => 'http://192.168.0.104/zuchev2/data/attachment/',
];

//UPDATE mysql.user SET Password = PASSWORD('3yG8tL2mI') WHERE User = 'bdm289907605' limit 1;
