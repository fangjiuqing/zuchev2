<?php
/**
 * app api config file 
 * @modified by RGX v1.0.0
 */
 return array (
  'app' => 
  array (
    'lang' => 'zh_cn',
    'timezone' => 8,
  ),
  'tpl' => 
  array (
    'style' => 'default',
    '404_tpl' => '404.tpl',
    'msg_tpl' => 'msg.tpl',
    'ob' => true,
    'native' => false,
    'tpl_pre' => '{',
    'tpl_suf' => '}',
    'cmod' => false,
    'charset' => 'utf-8',
    'allow_php' => false,
  ),
  'cache' => 
  array (
    'type' => 'file',
    'pre' => 'rgx_',
    'file' => 
    array (
    ),
  ),
  'route' => 
  array (
    'def_mod' => 'index',
    'def_act' => 'index',
    'ma_sep' => '/',
    'ap_sep' => '?',
    'pg_sep' => '&',
    'pp_sep' => '=',
    'suf' => '.html',
    'rewrite' => false,
    '404_tpl' => '404.tpl',
  ),
  'log' => 
  array (
    'type' => 'file',
    'file' => 
    array (
      'dev' => false,
    ),
  ),
  'db' => 
  array (
    'pre' => '',
    'type' => 'mysql',
    'mysql' => 
    array (
      'default' => 'host=bdm64396441.my3w.com;port=3306;db=bdm64396441_db;user=bdm64396441;passwd=Jxzjrl2019#;charset=utf8;profiling=1',
    ),
  ),
  'sess' => 
  array (
    'type' => 'php',
    'php' => 
    array (
      'ttl' => 7200,
    ),
  ),
  'CACHE_VER' => 2,
  'SYS_NAME' => '福建中京人力有限公司',
  'ROOR_URL' => 'http://www.jxzjrl.com/',
);