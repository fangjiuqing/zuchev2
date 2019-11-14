<?php
/*
 * @ip   ::1
 * @app  http://localhost:8888/framework/
 * @url  /framework/index.php/login.html
 * @date 2019-01-19 22:29:37 
 * @desc PDOException: PDO::__construct(): Server sent charset (255) unknown to the client. Please, report to the developers in /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php:74
Stack trace:
#0 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=127....', 'root', '')
#1 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
#2 /Applications/MAMP/htdocs/framework/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /Applications/MAMP/htdocs/framework/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /Applications/MAMP/htdocs/framework/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('re\\rgx\\admin_ta...', true, NULL)
#7 /Applications/MAMP/htdocs/framework/module/login.module.php(76): re\rgx\OBJ('admin_table')
#8 /Applications/MAMP/htdocs/framework/module/login.module.php(20): com\default_www\login_module->submit(Array)
#9 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(77): com\default_www\login_module->index_action()
#10 /Applications/MAMP/htdocs/framework/rgx/rgx.php(157): re\rgx\app::init()
#11 /Applications/MAMP/htdocs/framework/index.php(21): include('/Applications/M...')
#12 {main}

Next PDOException: SQLSTATE[HY000] [2054] Server sent charset unknown to the client. Please, report to the developers in /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php:74
Stack trace:
#0 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=127....', 'root', '')
#1 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
#2 /Applications/MAMP/htdocs/framework/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /Applications/MAMP/htdocs/framework/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /Applications/MAMP/htdocs/framework/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('re\\rgx\\admin_ta...', true, NULL)
#7 /Applications/MAMP/htdocs/framework/module/login.module.php(76): re\rgx\OBJ('admin_table')
#8 /Applications/MAMP/htdocs/framework/module/login.module.php(20): com\default_www\login_module->submit(Array)
#9 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(77): com\default_www\login_module->index_action()
#10 /Applications/MAMP/htdocs/framework/rgx/rgx.php(157): re\rgx\app::init()
#11 /Applications/MAMP/htdocs/framework/index.php(21): include('/Applications/M...')
#12 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(PDOException: PDO::__construct(): Server sent charset (255) unknown to the client. Please, report to the developers in /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=127....', 'root', '')
    #1 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /Applications/MAMP/htdocs/framework/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /Applications/MAMP/htdocs/framework/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /Applications/MAMP/htdocs/framework/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('re\\rgx\\admin_ta...', true, NULL)
    #7 /Applications/MAMP/htdocs/framework/module/login.module.php(76): re\rgx\OBJ('admin_table')
    #8 /Applications/MAMP/htdocs/framework/module/login.module.php(20): com\default_www\login_module->submit(Array)
    #9 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(77): com\default_www\login_module->index_action()
    #10 /Applications/MAMP/htdocs/framework/rgx/rgx.php(157): re\rgx\app::init()
    #11 /Applications/MAMP/htdocs/framework/index.php(21): include('/Applications/M...')
    #12 {main}
    
    Next PDOException: SQLSTATE[HY000] [2054] Server sent charset unknown to the client. Please, report to the developers in /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=127....', 'root', '')
    #1 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /Applications/MAMP/htdocs/framework/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /Applications/MAMP/htdocs/framework/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /Applications/MAMP/htdocs/framework/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('re\\rgx\\admin_ta...', true, NULL)
    #7 /Applications/MAMP/htdocs/framework/module/login.module.php(76): re\rgx\OBJ('admin_table')
    #8 /Applications/MAMP/htdocs/framework/module/login.module.php(20): com\default_www\login_module->submit(Array)
    #9 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(77): com\default_www\login_module->index_action()
    #10 /Applications/MAMP/htdocs/framework/rgx/rgx.php(157): re\rgx\app::init()
    #11 /Applications/MAMP/htdocs/framework/index.php(21): include('/Applications/M...')
    #12 {main},1,)
 # line:00078 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,PDOException: PDO::__construct(): Server sent charset (255) unknown to the client. Please, report to the developers in /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=127....', 'root', '')
    #1 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /Applications/MAMP/htdocs/framework/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /Applications/MAMP/htdocs/framework/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /Applications/MAMP/htdocs/framework/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('re\\rgx\\admin_ta...', true, NULL)
    #7 /Applications/MAMP/htdocs/framework/module/login.module.php(76): re\rgx\OBJ('admin_table')
    #8 /Applications/MAMP/htdocs/framework/module/login.module.php(20): com\default_www\login_module->submit(Array)
    #9 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(77): com\default_www\login_module->index_action()
    #10 /Applications/MAMP/htdocs/framework/rgx/rgx.php(157): re\rgx\app::init()
    #11 /Applications/MAMP/htdocs/framework/index.php(21): include('/Applications/M...')
    #12 {main}
    
    Next PDOException: SQLSTATE[HY000] [2054] Server sent charset unknown to the client. Please, report to the developers in /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=127....', 'root', '')
    #1 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /Applications/MAMP/htdocs/framework/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /Applications/MAMP/htdocs/framework/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /Applications/MAMP/htdocs/framework/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('re\\rgx\\admin_ta...', true, NULL)
    #7 /Applications/MAMP/htdocs/framework/module/login.module.php(76): re\rgx\OBJ('admin_table')
    #8 /Applications/MAMP/htdocs/framework/module/login.module.php(20): com\default_www\login_module->submit(Array)
    #9 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(77): com\default_www\login_module->index_action()
    #10 /Applications/MAMP/htdocs/framework/rgx/rgx.php(157): re\rgx\app::init()
    #11 /Applications/MAMP/htdocs/framework/index.php(21): include('/Applications/M...')
    #12 {main})
 # line:00031 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->_connect()
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(re\rgx\admin_table,1,)
 # line:00076 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00020 file : APP:module/login.module.php com\default_www\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_www\login_module->index_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost:8888/framework/
 * @url  /framework/index.php/login.html
 * @date 2019-01-19 22:29:49 
 * @desc PDOException: PDO::__construct(): Server sent charset (255) unknown to the client. Please, report to the developers in /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php:74
Stack trace:
#0 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=127....', 'root', '')
#1 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
#2 /Applications/MAMP/htdocs/framework/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /Applications/MAMP/htdocs/framework/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /Applications/MAMP/htdocs/framework/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('re\\rgx\\admin_ta...', true, NULL)
#7 /Applications/MAMP/htdocs/framework/module/login.module.php(76): re\rgx\OBJ('admin_table')
#8 /Applications/MAMP/htdocs/framework/module/login.module.php(20): com\default_www\login_module->submit(Array)
#9 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(77): com\default_www\login_module->index_action()
#10 /Applications/MAMP/htdocs/framework/rgx/rgx.php(157): re\rgx\app::init()
#11 /Applications/MAMP/htdocs/framework/index.php(21): include('/Applications/M...')
#12 {main}

Next PDOException: SQLSTATE[HY000] [2054] Server sent charset unknown to the client. Please, report to the developers in /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php:74
Stack trace:
#0 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=127....', 'root', '')
#1 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
#2 /Applications/MAMP/htdocs/framework/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /Applications/MAMP/htdocs/framework/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /Applications/MAMP/htdocs/framework/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('re\\rgx\\admin_ta...', true, NULL)
#7 /Applications/MAMP/htdocs/framework/module/login.module.php(76): re\rgx\OBJ('admin_table')
#8 /Applications/MAMP/htdocs/framework/module/login.module.php(20): com\default_www\login_module->submit(Array)
#9 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(77): com\default_www\login_module->index_action()
#10 /Applications/MAMP/htdocs/framework/rgx/rgx.php(157): re\rgx\app::init()
#11 /Applications/MAMP/htdocs/framework/index.php(21): include('/Applications/M...')
#12 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(PDOException: PDO::__construct(): Server sent charset (255) unknown to the client. Please, report to the developers in /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=127....', 'root', '')
    #1 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /Applications/MAMP/htdocs/framework/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /Applications/MAMP/htdocs/framework/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /Applications/MAMP/htdocs/framework/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('re\\rgx\\admin_ta...', true, NULL)
    #7 /Applications/MAMP/htdocs/framework/module/login.module.php(76): re\rgx\OBJ('admin_table')
    #8 /Applications/MAMP/htdocs/framework/module/login.module.php(20): com\default_www\login_module->submit(Array)
    #9 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(77): com\default_www\login_module->index_action()
    #10 /Applications/MAMP/htdocs/framework/rgx/rgx.php(157): re\rgx\app::init()
    #11 /Applications/MAMP/htdocs/framework/index.php(21): include('/Applications/M...')
    #12 {main}
    
    Next PDOException: SQLSTATE[HY000] [2054] Server sent charset unknown to the client. Please, report to the developers in /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=127....', 'root', '')
    #1 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /Applications/MAMP/htdocs/framework/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /Applications/MAMP/htdocs/framework/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /Applications/MAMP/htdocs/framework/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('re\\rgx\\admin_ta...', true, NULL)
    #7 /Applications/MAMP/htdocs/framework/module/login.module.php(76): re\rgx\OBJ('admin_table')
    #8 /Applications/MAMP/htdocs/framework/module/login.module.php(20): com\default_www\login_module->submit(Array)
    #9 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(77): com\default_www\login_module->index_action()
    #10 /Applications/MAMP/htdocs/framework/rgx/rgx.php(157): re\rgx\app::init()
    #11 /Applications/MAMP/htdocs/framework/index.php(21): include('/Applications/M...')
    #12 {main},1,)
 # line:00078 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,PDOException: PDO::__construct(): Server sent charset (255) unknown to the client. Please, report to the developers in /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=127....', 'root', '')
    #1 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /Applications/MAMP/htdocs/framework/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /Applications/MAMP/htdocs/framework/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /Applications/MAMP/htdocs/framework/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('re\\rgx\\admin_ta...', true, NULL)
    #7 /Applications/MAMP/htdocs/framework/module/login.module.php(76): re\rgx\OBJ('admin_table')
    #8 /Applications/MAMP/htdocs/framework/module/login.module.php(20): com\default_www\login_module->submit(Array)
    #9 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(77): com\default_www\login_module->index_action()
    #10 /Applications/MAMP/htdocs/framework/rgx/rgx.php(157): re\rgx\app::init()
    #11 /Applications/MAMP/htdocs/framework/index.php(21): include('/Applications/M...')
    #12 {main}
    
    Next PDOException: SQLSTATE[HY000] [2054] Server sent charset unknown to the client. Please, report to the developers in /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=127....', 'root', '')
    #1 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /Applications/MAMP/htdocs/framework/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /Applications/MAMP/htdocs/framework/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /Applications/MAMP/htdocs/framework/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('re\\rgx\\admin_ta...', true, NULL)
    #7 /Applications/MAMP/htdocs/framework/module/login.module.php(76): re\rgx\OBJ('admin_table')
    #8 /Applications/MAMP/htdocs/framework/module/login.module.php(20): com\default_www\login_module->submit(Array)
    #9 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(77): com\default_www\login_module->index_action()
    #10 /Applications/MAMP/htdocs/framework/rgx/rgx.php(157): re\rgx\app::init()
    #11 /Applications/MAMP/htdocs/framework/index.php(21): include('/Applications/M...')
    #12 {main})
 # line:00031 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->_connect()
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(re\rgx\admin_table,1,)
 # line:00076 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00020 file : APP:module/login.module.php com\default_www\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_www\login_module->index_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost:8888/framework/
 * @url  /framework/index.php/login.html
 * @date 2019-01-19 22:31:22 
 * @desc PDOException: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'nkfox.ips_admin' doesn't exist in /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /Applications/MAMP/htdocs/framework/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
#3 /Applications/MAMP/htdocs/framework/module/login.module.php(78): re\rgx\table->get()
#4 /Applications/MAMP/htdocs/framework/module/login.module.php(20): com\default_www\login_module->submit(Array)
#5 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(77): com\default_www\login_module->index_action()
#6 /Applications/MAMP/htdocs/framework/rgx/rgx.php(157): re\rgx\app::init()
#7 /Applications/MAMP/htdocs/framework/index.php(21): include('/Applications/M...')
#8 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(PDOException: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'nkfox.ips_admin' doesn't exist in /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /Applications/MAMP/htdocs/framework/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /Applications/MAMP/htdocs/framework/module/login.module.php(78): re\rgx\table->get()
    #4 /Applications/MAMP/htdocs/framework/module/login.module.php(20): com\default_www\login_module->submit(Array)
    #5 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(77): com\default_www\login_module->index_action()
    #6 /Applications/MAMP/htdocs/framework/rgx/rgx.php(157): re\rgx\app::init()
    #7 /Applications/MAMP/htdocs/framework/index.php(21): include('/Applications/M...')
    #8 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,PDOException: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'nkfox.ips_admin' doesn't exist in /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /Applications/MAMP/htdocs/framework/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /Applications/MAMP/htdocs/framework/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /Applications/MAMP/htdocs/framework/module/login.module.php(78): re\rgx\table->get()
    #4 /Applications/MAMP/htdocs/framework/module/login.module.php(20): com\default_www\login_module->submit(Array)
    #5 /Applications/MAMP/htdocs/framework/rgx/class/app.class.php(77): com\default_www\login_module->index_action()
    #6 /Applications/MAMP/htdocs/framework/rgx/rgx.php(157): re\rgx\app::init()
    #7 /Applications/MAMP/htdocs/framework/index.php(21): include('/Applications/M...')
    #8 {main})
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `ips_admin` 
     
    WHERE 1 = 1 
     AND ((admin_account = '21221212') OR (admin_email = '21221212')) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `ips_admin` 
     
    WHERE 1 = 1 
     AND ((admin_account = '21221212') OR (admin_email = '21221212')) LIMIT  1 
    ,,)
 # line:00078 file : APP:module/login.module.php re\rgx\table->get()
 # line:00020 file : APP:module/login.module.php com\default_www\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_www\login_module->index_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost:8888/framework/
 * @url  /framework/index.php/login.html
 * @date 2019-01-19 22:31:22 
 * @desc 查询失败 「 1146#Table 'nkfox.ips_admin' doesn't exist 」</li><li>查询语句 「 select  *  
FROM `ips_admin` 
 
WHERE 1 = 1 
 AND ((admin_account = '21221212') OR (admin_email = '21221212')) LIMIT  1 
 」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `ips_admin` 
     
    WHERE 1 = 1 
     AND ((admin_account = '21221212') OR (admin_email = '21221212')) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `ips_admin` 
     
    WHERE 1 = 1 
     AND ((admin_account = '21221212') OR (admin_email = '21221212')) LIMIT  1 
    ,,)
 # line:00078 file : APP:module/login.module.php re\rgx\table->get()
 # line:00020 file : APP:module/login.module.php com\default_www\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_www\login_module->index_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?>