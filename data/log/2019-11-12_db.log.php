<?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev1/admin/
 * @url  /zuchev1/admin/index.php/login.html
 * @date 2019-11-12 09:53:22 
 * @desc exception 'PDOException' with message 'SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES)' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:74
Stack trace:
#0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=loca...', 'root', 'fang123wei')
#1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
#2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /data/htdocs/emera_tech/zuchev1/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
#7 /data/htdocs/emera_tech/zuchev1/admin/module/login.module.php(88): re\rgx\OBJ('admin_table')
#8 /data/htdocs/emera_tech/zuchev1/admin/module/login.module.php(33): com\default_admin\login_module->submit(Array)
#9 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
#10 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
#11 /data/htdocs/emera_tech/zuchev1/admin/index.php(21): include('/data/htdocs/em...')
#12 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES)' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=loca...', 'root', 'fang123wei')
    #1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /data/htdocs/emera_tech/zuchev1/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /data/htdocs/emera_tech/zuchev1/admin/module/login.module.php(88): re\rgx\OBJ('admin_table')
    #8 /data/htdocs/emera_tech/zuchev1/admin/module/login.module.php(33): com\default_admin\login_module->submit(Array)
    #9 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /data/htdocs/emera_tech/zuchev1/admin/index.php(21): include('/data/htdocs/em...')
    #12 {main},1,)
 # line:00078 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES)' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=loca...', 'root', 'fang123wei')
    #1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /data/htdocs/emera_tech/zuchev1/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /data/htdocs/emera_tech/zuchev1/admin/module/login.module.php(88): re\rgx\OBJ('admin_table')
    #8 /data/htdocs/emera_tech/zuchev1/admin/module/login.module.php(33): com\default_admin\login_module->submit(Array)
    #9 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /data/htdocs/emera_tech/zuchev1/admin/index.php(21): include('/data/htdocs/em...')
    #12 {main})
 # line:00031 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->_connect()
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00088 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00033 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev1/wap/
 * @url  /zuchev1/wap/index.php/login/submit.html
 * @date 2019-11-12 13:15:44 
 * @desc exception 'PDOException' with message 'SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES)' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:74
Stack trace:
#0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=loca...', 'root', 'fang123wei')
#1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
#2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /data/htdocs/emera_tech/zuchev1/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('user_table', true, NULL)
#7 /data/htdocs/emera_tech/zuchev1/wap/module/login.module.php(40): re\rgx\OBJ('user_table')
#8 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_wap\login_module->submit_action()
#9 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
#10 /data/htdocs/emera_tech/zuchev1/wap/index.php(21): include('/data/htdocs/em...')
#11 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES)' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=loca...', 'root', 'fang123wei')
    #1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /data/htdocs/emera_tech/zuchev1/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('user_table', true, NULL)
    #7 /data/htdocs/emera_tech/zuchev1/wap/module/login.module.php(40): re\rgx\OBJ('user_table')
    #8 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_wap\login_module->submit_action()
    #9 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
    #10 /data/htdocs/emera_tech/zuchev1/wap/index.php(21): include('/data/htdocs/em...')
    #11 {main},1,)
 # line:00078 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES)' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=loca...', 'root', 'fang123wei')
    #1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /data/htdocs/emera_tech/zuchev1/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('user_table', true, NULL)
    #7 /data/htdocs/emera_tech/zuchev1/wap/module/login.module.php(40): re\rgx\OBJ('user_table')
    #8 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_wap\login_module->submit_action()
    #9 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
    #10 /data/htdocs/emera_tech/zuchev1/wap/index.php(21): include('/data/htdocs/em...')
    #11 {main})
 # line:00031 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->_connect()
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(user_table,1,)
 # line:00040 file : APP:module/login.module.php re\rgx\OBJ(user_table)
 # line:00077 file : RGX:class/app.class.php com\default_wap\login_module->submit_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev1/wap/
 * @url  /zuchev1/wap/index.php/order.html
 * @date 2019-11-12 22:07:25 
 * @desc exception 'PDOException' with message 'SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES)' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:74
Stack trace:
#0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=loca...', 'root', 'fang123wei')
#1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
#2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /data/htdocs/emera_tech/zuchev1/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('order_table', true, NULL)
#7 /data/htdocs/emera_tech/zuchev1/wap/module/order.module.php(17): re\rgx\OBJ('order_table')
#8 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
#9 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
#10 /data/htdocs/emera_tech/zuchev1/wap/index.php(21): include('/data/htdocs/em...')
#11 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES)' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=loca...', 'root', 'fang123wei')
    #1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /data/htdocs/emera_tech/zuchev1/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('order_table', true, NULL)
    #7 /data/htdocs/emera_tech/zuchev1/wap/module/order.module.php(17): re\rgx\OBJ('order_table')
    #8 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
    #9 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
    #10 /data/htdocs/emera_tech/zuchev1/wap/index.php(21): include('/data/htdocs/em...')
    #11 {main},1,)
 # line:00078 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES)' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=loca...', 'root', 'fang123wei')
    #1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /data/htdocs/emera_tech/zuchev1/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('order_table', true, NULL)
    #7 /data/htdocs/emera_tech/zuchev1/wap/module/order.module.php(17): re\rgx\OBJ('order_table')
    #8 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
    #9 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
    #10 /data/htdocs/emera_tech/zuchev1/wap/index.php(21): include('/data/htdocs/em...')
    #11 {main})
 # line:00031 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->_connect()
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(order_table,1,)
 # line:00017 file : APP:module/order.module.php re\rgx\OBJ(order_table)
 # line:00077 file : RGX:class/app.class.php com\default_wap\order_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev1/admin/
 * @url  /zuchev1/admin/index.php/order/index.html
 * @date 2019-11-12 22:19:40 
 * @desc exception 'PDOException' with message 'SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES)' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:74
Stack trace:
#0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=loca...', 'root', 'fang123wei')
#1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
#2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /data/htdocs/emera_tech/zuchev1/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('order_table', true, NULL)
#7 /data/htdocs/emera_tech/zuchev1/admin/module/order.module.php(15): re\rgx\OBJ('order_table')
#8 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_admin\order_module->index_action()
#9 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
#10 /data/htdocs/emera_tech/zuchev1/admin/index.php(21): include('/data/htdocs/em...')
#11 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES)' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=loca...', 'root', 'fang123wei')
    #1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /data/htdocs/emera_tech/zuchev1/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('order_table', true, NULL)
    #7 /data/htdocs/emera_tech/zuchev1/admin/module/order.module.php(15): re\rgx\OBJ('order_table')
    #8 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_admin\order_module->index_action()
    #9 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
    #10 /data/htdocs/emera_tech/zuchev1/admin/index.php(21): include('/data/htdocs/em...')
    #11 {main},1,)
 # line:00078 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES)' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=loca...', 'root', 'fang123wei')
    #1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /data/htdocs/emera_tech/zuchev1/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('order_table', true, NULL)
    #7 /data/htdocs/emera_tech/zuchev1/admin/module/order.module.php(15): re\rgx\OBJ('order_table')
    #8 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_admin\order_module->index_action()
    #9 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
    #10 /data/htdocs/emera_tech/zuchev1/admin/index.php(21): include('/data/htdocs/em...')
    #11 {main})
 # line:00031 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->_connect()
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(order_table,1,)
 # line:00015 file : APP:module/order.module.php re\rgx\OBJ(order_table)
 # line:00077 file : RGX:class/app.class.php com\default_admin\order_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?>