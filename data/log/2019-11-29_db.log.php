<?php
/*
 * @ip   222.211.254.217
 * @app  http://h5.zqzc8888.com/admin/
 * @url  /admin/index.php/login.html
 * @date 2019-11-29 10:47:22 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
Stack trace:
#0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
#1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
#2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
#7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
#8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
#9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
#10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
#11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
#12 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
    #2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
    #12 {main},1,)
 # line:00183 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
    #2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
    #12 {main})
 # line:00032 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->select_db(rentcar)
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00083 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00027 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   222.211.254.217
 * @app  http://h5.zqzc8888.com/admin/
 * @url  /admin/index.php/login.html
 * @date 2019-11-29 10:47:22 
 * @desc SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'
 * @extra Nil

 # line:00184 file : RGX:extra/db/mysql.db.php ()
 # line:00032 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->select_db(rentcar)
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00083 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00027 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   222.211.254.217
 * @app  http://h5.zqzc8888.com/admin/
 * @url  /admin/index.php/login.html
 * @date 2019-11-29 10:47:31 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
Stack trace:
#0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
#1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
#2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
#7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
#8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
#9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
#10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
#11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
#12 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
    #2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
    #12 {main},1,)
 # line:00183 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
    #2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
    #12 {main})
 # line:00032 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->select_db(rentcar)
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00083 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00027 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   222.211.254.217
 * @app  http://h5.zqzc8888.com/admin/
 * @url  /admin/index.php/login.html
 * @date 2019-11-29 10:47:31 
 * @desc SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'
 * @extra Nil

 # line:00184 file : RGX:extra/db/mysql.db.php ()
 # line:00032 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->select_db(rentcar)
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00083 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00027 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   222.211.254.217
 * @app  http://h5.zqzc8888.com/admin/
 * @url  /admin/index.php/login.html
 * @date 2019-11-29 10:47:52 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
Stack trace:
#0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
#1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
#2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
#7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
#8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
#9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
#10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
#11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
#12 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
    #2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
    #12 {main},1,)
 # line:00183 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
    #2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
    #12 {main})
 # line:00032 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->select_db(rentcar)
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00083 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00027 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   222.211.254.217
 * @app  http://h5.zqzc8888.com/admin/
 * @url  /admin/index.php/login.html
 * @date 2019-11-29 10:47:52 
 * @desc SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'
 * @extra Nil

 # line:00184 file : RGX:extra/db/mysql.db.php ()
 # line:00032 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->select_db(rentcar)
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00083 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00027 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   222.211.254.217
 * @app  http://h5.zqzc8888.com/admin/
 * @url  /admin/index.php/login.html
 * @date 2019-11-29 10:47:58 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
Stack trace:
#0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
#1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
#2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
#7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
#8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
#9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
#10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
#11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
#12 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
    #2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
    #12 {main},1,)
 # line:00183 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
    #2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
    #12 {main})
 # line:00032 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->select_db(rentcar)
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00083 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00027 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   222.211.254.217
 * @app  http://h5.zqzc8888.com/admin/
 * @url  /admin/index.php/login.html
 * @date 2019-11-29 10:47:58 
 * @desc SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'
 * @extra Nil

 # line:00184 file : RGX:extra/db/mysql.db.php ()
 # line:00032 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->select_db(rentcar)
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00083 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00027 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   222.211.254.217
 * @app  http://h5.zqzc8888.com/admin/
 * @url  /admin/index.php/login.html
 * @date 2019-11-29 10:48:00 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
Stack trace:
#0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
#1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
#2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
#7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
#8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
#9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
#10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
#11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
#12 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
    #2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
    #12 {main},1,)
 # line:00183 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
    #2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
    #12 {main})
 # line:00032 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->select_db(rentcar)
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00083 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00027 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   222.211.254.217
 * @app  http://h5.zqzc8888.com/admin/
 * @url  /admin/index.php/login.html
 * @date 2019-11-29 10:48:00 
 * @desc SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'
 * @extra Nil

 # line:00184 file : RGX:extra/db/mysql.db.php ()
 # line:00032 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->select_db(rentcar)
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00083 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00027 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   222.190.105.98
 * @app  http://h5.zqzc8888.com/admin/
 * @url  /admin/index.php/login.html
 * @date 2019-11-29 10:48:01 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
Stack trace:
#0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
#1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
#2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
#7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
#8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
#9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
#10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
#11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
#12 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
    #2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
    #12 {main},1,)
 # line:00183 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
    #2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
    #12 {main})
 # line:00032 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->select_db(rentcar)
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00083 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00027 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   222.190.105.98
 * @app  http://h5.zqzc8888.com/admin/
 * @url  /admin/index.php/login.html
 * @date 2019-11-29 10:48:01 
 * @desc SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'
 * @extra Nil

 # line:00184 file : RGX:extra/db/mysql.db.php ()
 # line:00032 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->select_db(rentcar)
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00083 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00027 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   222.211.254.217
 * @app  http://h5.zqzc8888.com/admin/
 * @url  /admin/index.php/login.html
 * @date 2019-11-29 10:48:10 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
Stack trace:
#0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
#1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
#2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
#7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
#8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
#9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
#10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
#11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
#12 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
    #2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
    #12 {main},1,)
 # line:00183 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
    #2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
    #12 {main})
 # line:00032 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->select_db(rentcar)
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00083 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00027 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   222.211.254.217
 * @app  http://h5.zqzc8888.com/admin/
 * @url  /admin/index.php/login.html
 * @date 2019-11-29 10:48:10 
 * @desc SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'
 * @extra Nil

 # line:00184 file : RGX:extra/db/mysql.db.php ()
 # line:00032 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->select_db(rentcar)
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00083 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00027 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   222.211.254.217
 * @app  http://h5.zqzc8888.com/admin/
 * @url  /admin/index.php/login.html
 * @date 2019-11-29 10:48:11 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
Stack trace:
#0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
#1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
#2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
#7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
#8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
#9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
#10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
#11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
#12 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
    #2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
    #12 {main},1,)
 # line:00183 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
    #2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
    #12 {main})
 # line:00032 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->select_db(rentcar)
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00083 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00027 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   222.211.254.217
 * @app  http://h5.zqzc8888.com/admin/
 * @url  /admin/index.php/login.html
 * @date 2019-11-29 10:48:11 
 * @desc SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'
 * @extra Nil

 # line:00184 file : RGX:extra/db/mysql.db.php ()
 # line:00032 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->select_db(rentcar)
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00083 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00027 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   222.211.254.217
 * @app  http://h5.zqzc8888.com/admin/
 * @url  /admin/index.php/login.html
 * @date 2019-11-29 10:49:31 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
Stack trace:
#0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
#1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
#2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
#7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
#8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
#9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
#10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
#11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
#12 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
    #2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
    #12 {main},1,)
 # line:00183 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
    #2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
    #12 {main})
 # line:00032 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->select_db(rentcar)
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00083 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00027 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   222.211.254.217
 * @app  http://h5.zqzc8888.com/admin/
 * @url  /admin/index.php/login.html
 * @date 2019-11-29 10:49:31 
 * @desc SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'
 * @extra Nil

 # line:00184 file : RGX:extra/db/mysql.db.php ()
 # line:00032 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->select_db(rentcar)
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00083 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00027 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   222.211.254.217
 * @app  http://h5.zqzc8888.com/admin/
 * @url  /admin/index.php/login.html
 * @date 2019-11-29 10:50:17 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
Stack trace:
#0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
#1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
#2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
#7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
#8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
#9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
#10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
#11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
#12 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
    #2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
    #12 {main},1,)
 # line:00183 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
    #2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
    #12 {main})
 # line:00032 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->select_db(rentcar)
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00083 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00027 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   222.211.254.217
 * @app  http://h5.zqzc8888.com/admin/
 * @url  /admin/index.php/login.html
 * @date 2019-11-29 10:50:17 
 * @desc SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'
 * @extra Nil

 # line:00184 file : RGX:extra/db/mysql.db.php ()
 # line:00032 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->select_db(rentcar)
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00083 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00027 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   222.211.254.217
 * @app  http://h5.zqzc8888.com/admin/
 * @url  /admin/index.php/login.html
 * @date 2019-11-29 10:50:18 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
Stack trace:
#0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
#1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
#2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
#7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
#8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
#9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
#10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
#11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
#12 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
    #2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
    #12 {main},1,)
 # line:00183 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
    #2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
    #12 {main})
 # line:00032 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->select_db(rentcar)
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00083 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00027 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   222.211.254.217
 * @app  http://h5.zqzc8888.com/admin/
 * @url  /admin/index.php/login.html
 * @date 2019-11-29 10:50:18 
 * @desc SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'
 * @extra Nil

 # line:00184 file : RGX:extra/db/mysql.db.php ()
 # line:00032 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->select_db(rentcar)
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00083 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00027 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   222.211.254.217
 * @app  http://h5.zqzc8888.com/admin/
 * @url  /admin/index.php/login.html
 * @date 2019-11-29 11:09:16 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
Stack trace:
#0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
#1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
#2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
#7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
#8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
#9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
#10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
#11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
#12 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
    #2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
    #12 {main},1,)
 # line:00183 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
    #2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
    #12 {main})
 # line:00032 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->select_db(rentcar)
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00083 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00027 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   222.211.254.217
 * @app  http://h5.zqzc8888.com/admin/
 * @url  /admin/index.php/login.html
 * @date 2019-11-29 11:09:16 
 * @desc SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'
 * @extra Nil

 # line:00184 file : RGX:extra/db/mysql.db.php ()
 # line:00032 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->select_db(rentcar)
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00083 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00027 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   180.111.182.164
 * @app  http://h5.zqzc8888.com/admin/
 * @url  /admin/index.php/login.html
 * @date 2019-11-29 14:22:13 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
Stack trace:
#0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
#1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
#2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
#7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
#8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
#9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
#10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
#11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
#12 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
    #2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
    #12 {main},1,)
 # line:00183 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
    #2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
    #12 {main})
 # line:00032 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->select_db(rentcar)
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00083 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00027 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   180.111.182.164
 * @app  http://h5.zqzc8888.com/admin/
 * @url  /admin/index.php/login.html
 * @date 2019-11-29 14:22:13 
 * @desc SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'
 * @extra Nil

 # line:00184 file : RGX:extra/db/mysql.db.php ()
 # line:00032 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->select_db(rentcar)
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00083 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00027 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   180.111.182.164
 * @app  http://h5.zqzc8888.com/admin/
 * @url  /admin/index.php/login.html
 * @date 2019-11-29 14:22:22 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
Stack trace:
#0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
#1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
#2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
#7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
#8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
#9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
#10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
#11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
#12 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
    #2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
    #12 {main},1,)
 # line:00183 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:180
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(180): PDO->exec('use rentcar')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(32): re\rgx\mysql_db->select_db('rentcar')
    #2 /home/wwwroot/51zuche/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /home/wwwroot/51zuche/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /home/wwwroot/51zuche/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /home/wwwroot/51zuche/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /home/wwwroot/51zuche/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /home/wwwroot/51zuche/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /home/wwwroot/51zuche/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /home/wwwroot/51zuche/admin/index.php(21): include('/home/wwwroot/5...')
    #12 {main})
 # line:00032 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->select_db(rentcar)
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00083 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00027 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   180.111.182.164
 * @app  http://h5.zqzc8888.com/admin/
 * @url  /admin/index.php/login.html
 * @date 2019-11-29 14:22:22 
 * @desc SQLSTATE[42000]: Syntax error or access violation: 1049 Unknown database 'rentcar'
 * @extra Nil

 # line:00184 file : RGX:extra/db/mysql.db.php ()
 # line:00032 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->select_db(rentcar)
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(admin_table,1,)
 # line:00083 file : APP:module/login.module.php re\rgx\OBJ(admin_table)
 # line:00027 file : APP:module/login.module.php com\default_admin\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_admin\login_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?>