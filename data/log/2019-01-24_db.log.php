<?php
/*
 * @ip   ::1
 * @app  http://localhost:8888/qingniu2/
 * @url  /qingniu2/index.php/brand/index
 * @date 2019-01-24 00:49:02 
 * @desc PDOException: SQLSTATE[HY000] [2000] mysqlnd cannot connect to MySQL 4.1+ using the old insecure authentication. Please use an administration tool to reset your password with the command SET PASSWORD = PASSWORD('your_existing_password'). This will store a new, and more secure, hash value in mysql.user. If this user is used in other scripts executed by PHP 5.2 or earlier you might need to remove the old-passwords flag from your my.cnf file in /Applications/MAMP/htdocs/qingniu2/rgx/extra/db/mysql.db.php:74
Stack trace:
#0 /Applications/MAMP/htdocs/qingniu2/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=qdm2...', 'qdm21740786', '6lQ8fU1bD')
#1 /Applications/MAMP/htdocs/qingniu2/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
#2 /Applications/MAMP/htdocs/qingniu2/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /Applications/MAMP/htdocs/qingniu2/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /Applications/MAMP/htdocs/qingniu2/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /Applications/MAMP/htdocs/qingniu2/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /Applications/MAMP/htdocs/qingniu2/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('re\\rgx\\new_cat_...', true, NULL)
#7 /Applications/MAMP/htdocs/qingniu2/module/base.module.php(92): re\rgx\OBJ('new_cat_table')
#8 /Applications/MAMP/htdocs/qingniu2/module/base.module.php(28): com\default_www\base_module->cat_tree()
#9 /Applications/MAMP/htdocs/qingniu2/rgx/class/app.class.php(70): com\default_www\base_module->__construct()
#10 /Applications/MAMP/htdocs/qingniu2/rgx/rgx.php(157): re\rgx\app::init()
#11 /Applications/MAMP/htdocs/qingniu2/index.php(21): include('/Applications/M...')
#12 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(PDOException: SQLSTATE[HY000] [2000] mysqlnd cannot connect to MySQL 4.1+ using the old insecure authentication. Please use an administration tool to reset your password with the command SET PASSWORD = PASSWORD('your_existing_password'). This will store a new, and more secure, hash value in mysql.user. If this user is used in other scripts executed by PHP 5.2 or earlier you might need to remove the old-passwords flag from your my.cnf file in /Applications/MAMP/htdocs/qingniu2/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /Applications/MAMP/htdocs/qingniu2/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=qdm2...', 'qdm21740786', '6lQ8fU1bD')
    #1 /Applications/MAMP/htdocs/qingniu2/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /Applications/MAMP/htdocs/qingniu2/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /Applications/MAMP/htdocs/qingniu2/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /Applications/MAMP/htdocs/qingniu2/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /Applications/MAMP/htdocs/qingniu2/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /Applications/MAMP/htdocs/qingniu2/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('re\\rgx\\new_cat_...', true, NULL)
    #7 /Applications/MAMP/htdocs/qingniu2/module/base.module.php(92): re\rgx\OBJ('new_cat_table')
    #8 /Applications/MAMP/htdocs/qingniu2/module/base.module.php(28): com\default_www\base_module->cat_tree()
    #9 /Applications/MAMP/htdocs/qingniu2/rgx/class/app.class.php(70): com\default_www\base_module->__construct()
    #10 /Applications/MAMP/htdocs/qingniu2/rgx/rgx.php(157): re\rgx\app::init()
    #11 /Applications/MAMP/htdocs/qingniu2/index.php(21): include('/Applications/M...')
    #12 {main},1,)
 # line:00078 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,PDOException: SQLSTATE[HY000] [2000] mysqlnd cannot connect to MySQL 4.1+ using the old insecure authentication. Please use an administration tool to reset your password with the command SET PASSWORD = PASSWORD('your_existing_password'). This will store a new, and more secure, hash value in mysql.user. If this user is used in other scripts executed by PHP 5.2 or earlier you might need to remove the old-passwords flag from your my.cnf file in /Applications/MAMP/htdocs/qingniu2/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /Applications/MAMP/htdocs/qingniu2/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=qdm2...', 'qdm21740786', '6lQ8fU1bD')
    #1 /Applications/MAMP/htdocs/qingniu2/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /Applications/MAMP/htdocs/qingniu2/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /Applications/MAMP/htdocs/qingniu2/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /Applications/MAMP/htdocs/qingniu2/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /Applications/MAMP/htdocs/qingniu2/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /Applications/MAMP/htdocs/qingniu2/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('re\\rgx\\new_cat_...', true, NULL)
    #7 /Applications/MAMP/htdocs/qingniu2/module/base.module.php(92): re\rgx\OBJ('new_cat_table')
    #8 /Applications/MAMP/htdocs/qingniu2/module/base.module.php(28): com\default_www\base_module->cat_tree()
    #9 /Applications/MAMP/htdocs/qingniu2/rgx/class/app.class.php(70): com\default_www\base_module->__construct()
    #10 /Applications/MAMP/htdocs/qingniu2/rgx/rgx.php(157): re\rgx\app::init()
    #11 /Applications/MAMP/htdocs/qingniu2/index.php(21): include('/Applications/M...')
    #12 {main})
 # line:00031 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->_connect()
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(re\rgx\new_cat_table,1,)
 # line:00092 file : APP:module/base.module.php re\rgx\OBJ(new_cat_table)
 # line:00028 file : APP:module/base.module.php com\default_www\base_module->cat_tree()
 # line:00070 file : RGX:class/app.class.php com\default_www\base_module->__construct()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?>