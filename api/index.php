<?php
/*
  +-------------------------------------------------------
  + default App entry file
  + ------------------------------------------------------
  + @update 2019-03-11 22:02:16
  + @cmd /bin/php rgx/build.php -c -d=../wap -i=wap -n=default -id=../include/
  +-------------------------------------------------------
*/
chdir(__DIR__);
define('IN_RGX',   true);
define('RUN_MODE', 'debug');
define('APP_VER', '1.0.0');
define('DS',       DIRECTORY_SEPARATOR);
define('NS',       'com\\default_api');
define('APP_ID',   'api');
define('APP_NAME', 'api');
define('APP_PATH', realpath('./') . DS);
define('INC_PATH', realpath('../core/include') . DS);
define('DATA_PATH', realpath('../core/data') . DS);
include('../core/rgx/rgx.php');