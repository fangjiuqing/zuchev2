<?php
return [
    'db'    => [
        'pre'       => '',
        'type'      => 'mysql',
        'mysql'     => [
            //'default'   => 'host=bdm289907605.my3w.com;port=3306;db=bdm289907605_db;user=bdm289907605;passwd=3yG8tL2mI;charset=utf8;profiling=1',
             'default'   => 'host=bdm64396441.my3w.com;port=3306;db=bdm64396441_db;user=bdm64396441;passwd=Jxzjrl2019#;charset=utf8;profiling=1',
        ],
    ],
   'CACHE_VER'  => 2,
   'SYS_NAME'  => '福建中京人力有限公司',
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
  'ROOR_URL'  => 'http://www.jxzjrl.com/'
];

//UPDATE mysql.user SET Password = PASSWORD('3yG8tL2mI') WHERE User = 'bdm289907605' limit 1;