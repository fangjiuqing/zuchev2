<?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/admin/
 * @url  /zuchev2/admin/index.php/login.html
 * @date 2019-11-14 14:42:08 
 * @desc exception 'PDOException' with message 'SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES)' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:74
Stack trace:
#0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=loca...', 'root', 'fang123wei')
#1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
#2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /data/htdocs/emera_tech/zuchev2/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
#7 /data/htdocs/emera_tech/zuchev2/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
#8 /data/htdocs/emera_tech/zuchev2/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
#9 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
#10 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
#11 /data/htdocs/emera_tech/zuchev2/admin/index.php(21): include('/data/htdocs/em...')
#12 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES)' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=loca...', 'root', 'fang123wei')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /data/htdocs/emera_tech/zuchev2/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /data/htdocs/emera_tech/zuchev2/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /data/htdocs/emera_tech/zuchev2/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /data/htdocs/emera_tech/zuchev2/admin/index.php(21): include('/data/htdocs/em...')
    #12 {main},1,)
 # line:00078 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES)' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=loca...', 'root', 'fang123wei')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /data/htdocs/emera_tech/zuchev2/core/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('admin_table', true, NULL)
    #7 /data/htdocs/emera_tech/zuchev2/admin/module/login.module.php(83): re\rgx\OBJ('admin_table')
    #8 /data/htdocs/emera_tech/zuchev2/admin/module/login.module.php(27): com\default_admin\login_module->submit(Array)
    #9 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_admin\login_module->index_action()
    #10 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #11 /data/htdocs/emera_tech/zuchev2/admin/index.php(21): include('/data/htdocs/em...')
    #12 {main})
 # line:00031 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->_connect()
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
 * @ip   ::1
 * @app  http://localhost/zuchev2/admin/
 * @url  /zuchev2/admin/index.php/upload/image.html
 * @date 2019-11-14 16:07:44 
 * @desc exception 'PDOException' with message 'SQLSTATE[42S02]: Base table or view not found: 1146 Table 'rentcar.pre_attachment' doesn't exist' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:124
Stack trace:
#0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(124): PDO->exec('insert  into `p...')
#1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(300): re\rgx\mysql_db->exec('insert  into `p...')
#2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(959): re\rgx\mysql_db->insert('insert  into `p...', false)
#3 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(820): re\rgx\table->insert()
#4 /data/htdocs/emera_tech/zuchev2/core/include/helper/upload.helper.php(94): re\rgx\table->save()
#5 /data/htdocs/emera_tech/zuchev2/admin/module/upload.module.php(23): re\rgx\upload_helper::addrecord('2019-11-14/pre_...', 45273, 'lavida.jpeg', '', 'jpg')
#6 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_admin\upload_module->image_action()
#7 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
#8 /data/htdocs/emera_tech/zuchev2/admin/index.php(21): include('/data/htdocs/em...')
#9 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42S02]: Base table or view not found: 1146 Table 'rentcar.pre_attachment' doesn't exist' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:124
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(124): PDO->exec('insert  into `p...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(300): re\rgx\mysql_db->exec('insert  into `p...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(959): re\rgx\mysql_db->insert('insert  into `p...', false)
    #3 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(820): re\rgx\table->insert()
    #4 /data/htdocs/emera_tech/zuchev2/core/include/helper/upload.helper.php(94): re\rgx\table->save()
    #5 /data/htdocs/emera_tech/zuchev2/admin/module/upload.module.php(23): re\rgx\upload_helper::addrecord('2019-11-14/pre_...', 45273, 'lavida.jpeg', '', 'jpg')
    #6 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_admin\upload_module->image_action()
    #7 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #8 /data/htdocs/emera_tech/zuchev2/admin/index.php(21): include('/data/htdocs/em...')
    #9 {main},1,)
 # line:00138 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42S02]: Base table or view not found: 1146 Table 'rentcar.pre_attachment' doesn't exist' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:124
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(124): PDO->exec('insert  into `p...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(300): re\rgx\mysql_db->exec('insert  into `p...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(959): re\rgx\mysql_db->insert('insert  into `p...', false)
    #3 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(820): re\rgx\table->insert()
    #4 /data/htdocs/emera_tech/zuchev2/core/include/helper/upload.helper.php(94): re\rgx\table->save()
    #5 /data/htdocs/emera_tech/zuchev2/admin/module/upload.module.php(23): re\rgx\upload_helper::addrecord('2019-11-14/pre_...', 45273, 'lavida.jpeg', '', 'jpg')
    #6 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_admin\upload_module->image_action()
    #7 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #8 /data/htdocs/emera_tech/zuchev2/admin/index.php(21): include('/data/htdocs/em...')
    #9 {main})
 # line:00300 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->exec(insert  into `pre_attachment`( `pre_attachment`.`attch_id`, `pre_attachment`.`attch_type`, `pre_attachment`.`attch_path`, `pre_attachment`.`attch_ext`, `pre_attachment`.`attch_name`, `pre_attachment`.`attch_adate`, `pre_attachment`.`attch_size`, `pre_attachment`.`attch_sort`)  
     values( '0', '', '2019-11-14/pre_up9a9jabkmar.jpg', 'jpg', 'lavida.jpeg', '1573718864', '45273', '0') )
 # line:00959 file : RGX:class/table.class.php re\rgx\mysql_db->insert(insert  into `pre_attachment`( `pre_attachment`.`attch_id`, `pre_attachment`.`attch_type`, `pre_attachment`.`attch_path`, `pre_attachment`.`attch_ext`, `pre_attachment`.`attch_name`, `pre_attachment`.`attch_adate`, `pre_attachment`.`attch_size`, `pre_attachment`.`attch_sort`)  
     values( '0', '', '2019-11-14/pre_up9a9jabkmar.jpg', 'jpg', 'lavida.jpeg', '1573718864', '45273', '0') ,)
 # line:00820 file : RGX:class/table.class.php re\rgx\table->insert()
 # line:00094 file : INC:helper/upload.helper.php re\rgx\table->save()
 # line:00023 file : APP:module/upload.module.php re\rgx\upload_helper::addrecord(2019-11-14/pre_up9a9jabkmar.jpg,45273,lavida.jpeg,,jpg)
 # line:00077 file : RGX:class/app.class.php com\default_admin\upload_module->image_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/admin/
 * @url  /zuchev2/admin/index.php/upload/image.html
 * @date 2019-11-14 16:07:44 
 * @desc 查询失败 「 1146#Table 'rentcar.pre_attachment' doesn't exist 」</li><li>查询语句 「 insert  into `pre_attachment`( `pre_attachment`.`attch_id`, `pre_attachment`.`attch_type`, `pre_attachment`.`attch_path`, `pre_attachment`.`attch_ext`, `pre_attachment`.`attch_name`, `pre_attachment`.`attch_adate`, `pre_attachment`.`attch_size`, `pre_attachment`.`attch_sort`)  
 values( '0', '', '2019-11-14/pre_up9a9jabkmar.jpg', 'jpg', 'lavida.jpeg', '1573718864', '45273', '0')  」
 * @extra Nil

 # line:00139 file : RGX:extra/db/mysql.db.php ()
 # line:00300 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->exec(insert  into `pre_attachment`( `pre_attachment`.`attch_id`, `pre_attachment`.`attch_type`, `pre_attachment`.`attch_path`, `pre_attachment`.`attch_ext`, `pre_attachment`.`attch_name`, `pre_attachment`.`attch_adate`, `pre_attachment`.`attch_size`, `pre_attachment`.`attch_sort`)  
     values( '0', '', '2019-11-14/pre_up9a9jabkmar.jpg', 'jpg', 'lavida.jpeg', '1573718864', '45273', '0') )
 # line:00959 file : RGX:class/table.class.php re\rgx\mysql_db->insert(insert  into `pre_attachment`( `pre_attachment`.`attch_id`, `pre_attachment`.`attch_type`, `pre_attachment`.`attch_path`, `pre_attachment`.`attch_ext`, `pre_attachment`.`attch_name`, `pre_attachment`.`attch_adate`, `pre_attachment`.`attch_size`, `pre_attachment`.`attch_sort`)  
     values( '0', '', '2019-11-14/pre_up9a9jabkmar.jpg', 'jpg', 'lavida.jpeg', '1573718864', '45273', '0') ,)
 # line:00820 file : RGX:class/table.class.php re\rgx\table->insert()
 # line:00094 file : INC:helper/upload.helper.php re\rgx\table->save()
 # line:00023 file : APP:module/upload.module.php re\rgx\upload_helper::addrecord(2019-11-14/pre_up9a9jabkmar.jpg,45273,lavida.jpeg,,jpg)
 # line:00077 file : RGX:class/app.class.php com\default_admin\upload_module->image_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/admin/
 * @url  /zuchev2/admin/index.php/upload/image.html
 * @date 2019-11-14 16:08:00 
 * @desc exception 'PDOException' with message 'SQLSTATE[42S02]: Base table or view not found: 1146 Table 'rentcar.pre_attachment' doesn't exist' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:124
Stack trace:
#0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(124): PDO->exec('insert  into `p...')
#1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(300): re\rgx\mysql_db->exec('insert  into `p...')
#2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(959): re\rgx\mysql_db->insert('insert  into `p...', false)
#3 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(820): re\rgx\table->insert()
#4 /data/htdocs/emera_tech/zuchev2/core/include/helper/upload.helper.php(94): re\rgx\table->save()
#5 /data/htdocs/emera_tech/zuchev2/admin/module/upload.module.php(23): re\rgx\upload_helper::addrecord('2019-11-14/pre_...', 755095, 'bmw.jpg', '', 'jpg')
#6 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_admin\upload_module->image_action()
#7 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
#8 /data/htdocs/emera_tech/zuchev2/admin/index.php(21): include('/data/htdocs/em...')
#9 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42S02]: Base table or view not found: 1146 Table 'rentcar.pre_attachment' doesn't exist' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:124
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(124): PDO->exec('insert  into `p...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(300): re\rgx\mysql_db->exec('insert  into `p...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(959): re\rgx\mysql_db->insert('insert  into `p...', false)
    #3 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(820): re\rgx\table->insert()
    #4 /data/htdocs/emera_tech/zuchev2/core/include/helper/upload.helper.php(94): re\rgx\table->save()
    #5 /data/htdocs/emera_tech/zuchev2/admin/module/upload.module.php(23): re\rgx\upload_helper::addrecord('2019-11-14/pre_...', 755095, 'bmw.jpg', '', 'jpg')
    #6 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_admin\upload_module->image_action()
    #7 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #8 /data/htdocs/emera_tech/zuchev2/admin/index.php(21): include('/data/htdocs/em...')
    #9 {main},1,)
 # line:00138 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42S02]: Base table or view not found: 1146 Table 'rentcar.pre_attachment' doesn't exist' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:124
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(124): PDO->exec('insert  into `p...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(300): re\rgx\mysql_db->exec('insert  into `p...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(959): re\rgx\mysql_db->insert('insert  into `p...', false)
    #3 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(820): re\rgx\table->insert()
    #4 /data/htdocs/emera_tech/zuchev2/core/include/helper/upload.helper.php(94): re\rgx\table->save()
    #5 /data/htdocs/emera_tech/zuchev2/admin/module/upload.module.php(23): re\rgx\upload_helper::addrecord('2019-11-14/pre_...', 755095, 'bmw.jpg', '', 'jpg')
    #6 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_admin\upload_module->image_action()
    #7 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #8 /data/htdocs/emera_tech/zuchev2/admin/index.php(21): include('/data/htdocs/em...')
    #9 {main})
 # line:00300 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->exec(insert  into `pre_attachment`( `pre_attachment`.`attch_id`, `pre_attachment`.`attch_type`, `pre_attachment`.`attch_path`, `pre_attachment`.`attch_ext`, `pre_attachment`.`attch_name`, `pre_attachment`.`attch_adate`, `pre_attachment`.`attch_size`, `pre_attachment`.`attch_sort`)  
     values( '0', '', '2019-11-14/pre_3blbbfhmgknq.jpg', 'jpg', 'bmw.jpg', '1573718880', '755095', '0') )
 # line:00959 file : RGX:class/table.class.php re\rgx\mysql_db->insert(insert  into `pre_attachment`( `pre_attachment`.`attch_id`, `pre_attachment`.`attch_type`, `pre_attachment`.`attch_path`, `pre_attachment`.`attch_ext`, `pre_attachment`.`attch_name`, `pre_attachment`.`attch_adate`, `pre_attachment`.`attch_size`, `pre_attachment`.`attch_sort`)  
     values( '0', '', '2019-11-14/pre_3blbbfhmgknq.jpg', 'jpg', 'bmw.jpg', '1573718880', '755095', '0') ,)
 # line:00820 file : RGX:class/table.class.php re\rgx\table->insert()
 # line:00094 file : INC:helper/upload.helper.php re\rgx\table->save()
 # line:00023 file : APP:module/upload.module.php re\rgx\upload_helper::addrecord(2019-11-14/pre_3blbbfhmgknq.jpg,755095,bmw.jpg,,jpg)
 # line:00077 file : RGX:class/app.class.php com\default_admin\upload_module->image_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/admin/
 * @url  /zuchev2/admin/index.php/upload/image.html
 * @date 2019-11-14 16:08:00 
 * @desc 查询失败 「 1146#Table 'rentcar.pre_attachment' doesn't exist 」</li><li>查询语句 「 insert  into `pre_attachment`( `pre_attachment`.`attch_id`, `pre_attachment`.`attch_type`, `pre_attachment`.`attch_path`, `pre_attachment`.`attch_ext`, `pre_attachment`.`attch_name`, `pre_attachment`.`attch_adate`, `pre_attachment`.`attch_size`, `pre_attachment`.`attch_sort`)  
 values( '0', '', '2019-11-14/pre_3blbbfhmgknq.jpg', 'jpg', 'bmw.jpg', '1573718880', '755095', '0')  」
 * @extra Nil

 # line:00139 file : RGX:extra/db/mysql.db.php ()
 # line:00300 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->exec(insert  into `pre_attachment`( `pre_attachment`.`attch_id`, `pre_attachment`.`attch_type`, `pre_attachment`.`attch_path`, `pre_attachment`.`attch_ext`, `pre_attachment`.`attch_name`, `pre_attachment`.`attch_adate`, `pre_attachment`.`attch_size`, `pre_attachment`.`attch_sort`)  
     values( '0', '', '2019-11-14/pre_3blbbfhmgknq.jpg', 'jpg', 'bmw.jpg', '1573718880', '755095', '0') )
 # line:00959 file : RGX:class/table.class.php re\rgx\mysql_db->insert(insert  into `pre_attachment`( `pre_attachment`.`attch_id`, `pre_attachment`.`attch_type`, `pre_attachment`.`attch_path`, `pre_attachment`.`attch_ext`, `pre_attachment`.`attch_name`, `pre_attachment`.`attch_adate`, `pre_attachment`.`attch_size`, `pre_attachment`.`attch_sort`)  
     values( '0', '', '2019-11-14/pre_3blbbfhmgknq.jpg', 'jpg', 'bmw.jpg', '1573718880', '755095', '0') ,)
 # line:00820 file : RGX:class/table.class.php re\rgx\table->insert()
 # line:00094 file : INC:helper/upload.helper.php re\rgx\table->save()
 # line:00023 file : APP:module/upload.module.php re\rgx\upload_helper::addrecord(2019-11-14/pre_3blbbfhmgknq.jpg,755095,bmw.jpg,,jpg)
 # line:00077 file : RGX:class/app.class.php com\default_admin\upload_module->image_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/admin/
 * @url  /zuchev2/admin/index.php/upload/image.html
 * @date 2019-11-14 16:08:27 
 * @desc exception 'PDOException' with message 'SQLSTATE[42S02]: Base table or view not found: 1146 Table 'rentcar.pre_attachment' doesn't exist' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:124
Stack trace:
#0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(124): PDO->exec('insert  into `p...')
#1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(300): re\rgx\mysql_db->exec('insert  into `p...')
#2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(959): re\rgx\mysql_db->insert('insert  into `p...', false)
#3 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(820): re\rgx\table->insert()
#4 /data/htdocs/emera_tech/zuchev2/core/include/helper/upload.helper.php(94): re\rgx\table->save()
#5 /data/htdocs/emera_tech/zuchev2/admin/module/upload.module.php(23): re\rgx\upload_helper::addrecord('2019-11-14/pre_...', 755095, 'bmw.jpg', '', 'jpg')
#6 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_admin\upload_module->image_action()
#7 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
#8 /data/htdocs/emera_tech/zuchev2/admin/index.php(21): include('/data/htdocs/em...')
#9 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42S02]: Base table or view not found: 1146 Table 'rentcar.pre_attachment' doesn't exist' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:124
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(124): PDO->exec('insert  into `p...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(300): re\rgx\mysql_db->exec('insert  into `p...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(959): re\rgx\mysql_db->insert('insert  into `p...', false)
    #3 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(820): re\rgx\table->insert()
    #4 /data/htdocs/emera_tech/zuchev2/core/include/helper/upload.helper.php(94): re\rgx\table->save()
    #5 /data/htdocs/emera_tech/zuchev2/admin/module/upload.module.php(23): re\rgx\upload_helper::addrecord('2019-11-14/pre_...', 755095, 'bmw.jpg', '', 'jpg')
    #6 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_admin\upload_module->image_action()
    #7 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #8 /data/htdocs/emera_tech/zuchev2/admin/index.php(21): include('/data/htdocs/em...')
    #9 {main},1,)
 # line:00138 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42S02]: Base table or view not found: 1146 Table 'rentcar.pre_attachment' doesn't exist' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:124
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(124): PDO->exec('insert  into `p...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(300): re\rgx\mysql_db->exec('insert  into `p...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(959): re\rgx\mysql_db->insert('insert  into `p...', false)
    #3 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(820): re\rgx\table->insert()
    #4 /data/htdocs/emera_tech/zuchev2/core/include/helper/upload.helper.php(94): re\rgx\table->save()
    #5 /data/htdocs/emera_tech/zuchev2/admin/module/upload.module.php(23): re\rgx\upload_helper::addrecord('2019-11-14/pre_...', 755095, 'bmw.jpg', '', 'jpg')
    #6 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_admin\upload_module->image_action()
    #7 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #8 /data/htdocs/emera_tech/zuchev2/admin/index.php(21): include('/data/htdocs/em...')
    #9 {main})
 # line:00300 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->exec(insert  into `pre_attachment`( `pre_attachment`.`attch_id`, `pre_attachment`.`attch_type`, `pre_attachment`.`attch_path`, `pre_attachment`.`attch_ext`, `pre_attachment`.`attch_name`, `pre_attachment`.`attch_adate`, `pre_attachment`.`attch_size`, `pre_attachment`.`attch_sort`)  
     values( '0', '', '2019-11-14/pre_t2qu6vqrpvnr.jpg', 'jpg', 'bmw.jpg', '1573718907', '755095', '0') )
 # line:00959 file : RGX:class/table.class.php re\rgx\mysql_db->insert(insert  into `pre_attachment`( `pre_attachment`.`attch_id`, `pre_attachment`.`attch_type`, `pre_attachment`.`attch_path`, `pre_attachment`.`attch_ext`, `pre_attachment`.`attch_name`, `pre_attachment`.`attch_adate`, `pre_attachment`.`attch_size`, `pre_attachment`.`attch_sort`)  
     values( '0', '', '2019-11-14/pre_t2qu6vqrpvnr.jpg', 'jpg', 'bmw.jpg', '1573718907', '755095', '0') ,)
 # line:00820 file : RGX:class/table.class.php re\rgx\table->insert()
 # line:00094 file : INC:helper/upload.helper.php re\rgx\table->save()
 # line:00023 file : APP:module/upload.module.php re\rgx\upload_helper::addrecord(2019-11-14/pre_t2qu6vqrpvnr.jpg,755095,bmw.jpg,,jpg)
 # line:00077 file : RGX:class/app.class.php com\default_admin\upload_module->image_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/admin/
 * @url  /zuchev2/admin/index.php/upload/image.html
 * @date 2019-11-14 16:08:27 
 * @desc 查询失败 「 1146#Table 'rentcar.pre_attachment' doesn't exist 」</li><li>查询语句 「 insert  into `pre_attachment`( `pre_attachment`.`attch_id`, `pre_attachment`.`attch_type`, `pre_attachment`.`attch_path`, `pre_attachment`.`attch_ext`, `pre_attachment`.`attch_name`, `pre_attachment`.`attch_adate`, `pre_attachment`.`attch_size`, `pre_attachment`.`attch_sort`)  
 values( '0', '', '2019-11-14/pre_t2qu6vqrpvnr.jpg', 'jpg', 'bmw.jpg', '1573718907', '755095', '0')  」
 * @extra Nil

 # line:00139 file : RGX:extra/db/mysql.db.php ()
 # line:00300 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->exec(insert  into `pre_attachment`( `pre_attachment`.`attch_id`, `pre_attachment`.`attch_type`, `pre_attachment`.`attch_path`, `pre_attachment`.`attch_ext`, `pre_attachment`.`attch_name`, `pre_attachment`.`attch_adate`, `pre_attachment`.`attch_size`, `pre_attachment`.`attch_sort`)  
     values( '0', '', '2019-11-14/pre_t2qu6vqrpvnr.jpg', 'jpg', 'bmw.jpg', '1573718907', '755095', '0') )
 # line:00959 file : RGX:class/table.class.php re\rgx\mysql_db->insert(insert  into `pre_attachment`( `pre_attachment`.`attch_id`, `pre_attachment`.`attch_type`, `pre_attachment`.`attch_path`, `pre_attachment`.`attch_ext`, `pre_attachment`.`attch_name`, `pre_attachment`.`attch_adate`, `pre_attachment`.`attch_size`, `pre_attachment`.`attch_sort`)  
     values( '0', '', '2019-11-14/pre_t2qu6vqrpvnr.jpg', 'jpg', 'bmw.jpg', '1573718907', '755095', '0') ,)
 # line:00820 file : RGX:class/table.class.php re\rgx\table->insert()
 # line:00094 file : INC:helper/upload.helper.php re\rgx\table->save()
 # line:00023 file : APP:module/upload.module.php re\rgx\upload_helper::addrecord(2019-11-14/pre_t2qu6vqrpvnr.jpg,755095,bmw.jpg,,jpg)
 # line:00077 file : RGX:class/app.class.php com\default_admin\upload_module->image_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/admin/
 * @url  /zuchev2/admin/index.php/upload/image.html
 * @date 2019-11-14 16:08:52 
 * @desc exception 'PDOException' with message 'SQLSTATE[42S02]: Base table or view not found: 1146 Table 'rentcar.pre_attachment' doesn't exist' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:124
Stack trace:
#0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(124): PDO->exec('insert  into `p...')
#1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(300): re\rgx\mysql_db->exec('insert  into `p...')
#2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(959): re\rgx\mysql_db->insert('insert  into `p...', false)
#3 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(820): re\rgx\table->insert()
#4 /data/htdocs/emera_tech/zuchev2/core/include/helper/upload.helper.php(94): re\rgx\table->save()
#5 /data/htdocs/emera_tech/zuchev2/admin/module/upload.module.php(23): re\rgx\upload_helper::addrecord('2019-11-14/pre_...', 45273, 'lavida.jpeg', '', 'jpg')
#6 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_admin\upload_module->image_action()
#7 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
#8 /data/htdocs/emera_tech/zuchev2/admin/index.php(21): include('/data/htdocs/em...')
#9 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42S02]: Base table or view not found: 1146 Table 'rentcar.pre_attachment' doesn't exist' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:124
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(124): PDO->exec('insert  into `p...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(300): re\rgx\mysql_db->exec('insert  into `p...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(959): re\rgx\mysql_db->insert('insert  into `p...', false)
    #3 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(820): re\rgx\table->insert()
    #4 /data/htdocs/emera_tech/zuchev2/core/include/helper/upload.helper.php(94): re\rgx\table->save()
    #5 /data/htdocs/emera_tech/zuchev2/admin/module/upload.module.php(23): re\rgx\upload_helper::addrecord('2019-11-14/pre_...', 45273, 'lavida.jpeg', '', 'jpg')
    #6 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_admin\upload_module->image_action()
    #7 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #8 /data/htdocs/emera_tech/zuchev2/admin/index.php(21): include('/data/htdocs/em...')
    #9 {main},1,)
 # line:00138 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42S02]: Base table or view not found: 1146 Table 'rentcar.pre_attachment' doesn't exist' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:124
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(124): PDO->exec('insert  into `p...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(300): re\rgx\mysql_db->exec('insert  into `p...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(959): re\rgx\mysql_db->insert('insert  into `p...', false)
    #3 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(820): re\rgx\table->insert()
    #4 /data/htdocs/emera_tech/zuchev2/core/include/helper/upload.helper.php(94): re\rgx\table->save()
    #5 /data/htdocs/emera_tech/zuchev2/admin/module/upload.module.php(23): re\rgx\upload_helper::addrecord('2019-11-14/pre_...', 45273, 'lavida.jpeg', '', 'jpg')
    #6 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_admin\upload_module->image_action()
    #7 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #8 /data/htdocs/emera_tech/zuchev2/admin/index.php(21): include('/data/htdocs/em...')
    #9 {main})
 # line:00300 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->exec(insert  into `pre_attachment`( `pre_attachment`.`attch_id`, `pre_attachment`.`attch_type`, `pre_attachment`.`attch_path`, `pre_attachment`.`attch_ext`, `pre_attachment`.`attch_name`, `pre_attachment`.`attch_adate`, `pre_attachment`.`attch_size`, `pre_attachment`.`attch_sort`)  
     values( '0', '', '2019-11-14/pre_qnd7m7smsuux.jpg', 'jpg', 'lavida.jpeg', '1573718932', '45273', '0') )
 # line:00959 file : RGX:class/table.class.php re\rgx\mysql_db->insert(insert  into `pre_attachment`( `pre_attachment`.`attch_id`, `pre_attachment`.`attch_type`, `pre_attachment`.`attch_path`, `pre_attachment`.`attch_ext`, `pre_attachment`.`attch_name`, `pre_attachment`.`attch_adate`, `pre_attachment`.`attch_size`, `pre_attachment`.`attch_sort`)  
     values( '0', '', '2019-11-14/pre_qnd7m7smsuux.jpg', 'jpg', 'lavida.jpeg', '1573718932', '45273', '0') ,)
 # line:00820 file : RGX:class/table.class.php re\rgx\table->insert()
 # line:00094 file : INC:helper/upload.helper.php re\rgx\table->save()
 # line:00023 file : APP:module/upload.module.php re\rgx\upload_helper::addrecord(2019-11-14/pre_qnd7m7smsuux.jpg,45273,lavida.jpeg,,jpg)
 # line:00077 file : RGX:class/app.class.php com\default_admin\upload_module->image_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/admin/
 * @url  /zuchev2/admin/index.php/upload/image.html
 * @date 2019-11-14 16:08:52 
 * @desc 查询失败 「 1146#Table 'rentcar.pre_attachment' doesn't exist 」</li><li>查询语句 「 insert  into `pre_attachment`( `pre_attachment`.`attch_id`, `pre_attachment`.`attch_type`, `pre_attachment`.`attch_path`, `pre_attachment`.`attch_ext`, `pre_attachment`.`attch_name`, `pre_attachment`.`attch_adate`, `pre_attachment`.`attch_size`, `pre_attachment`.`attch_sort`)  
 values( '0', '', '2019-11-14/pre_qnd7m7smsuux.jpg', 'jpg', 'lavida.jpeg', '1573718932', '45273', '0')  」
 * @extra Nil

 # line:00139 file : RGX:extra/db/mysql.db.php ()
 # line:00300 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->exec(insert  into `pre_attachment`( `pre_attachment`.`attch_id`, `pre_attachment`.`attch_type`, `pre_attachment`.`attch_path`, `pre_attachment`.`attch_ext`, `pre_attachment`.`attch_name`, `pre_attachment`.`attch_adate`, `pre_attachment`.`attch_size`, `pre_attachment`.`attch_sort`)  
     values( '0', '', '2019-11-14/pre_qnd7m7smsuux.jpg', 'jpg', 'lavida.jpeg', '1573718932', '45273', '0') )
 # line:00959 file : RGX:class/table.class.php re\rgx\mysql_db->insert(insert  into `pre_attachment`( `pre_attachment`.`attch_id`, `pre_attachment`.`attch_type`, `pre_attachment`.`attch_path`, `pre_attachment`.`attch_ext`, `pre_attachment`.`attch_name`, `pre_attachment`.`attch_adate`, `pre_attachment`.`attch_size`, `pre_attachment`.`attch_sort`)  
     values( '0', '', '2019-11-14/pre_qnd7m7smsuux.jpg', 'jpg', 'lavida.jpeg', '1573718932', '45273', '0') ,)
 # line:00820 file : RGX:class/table.class.php re\rgx\table->insert()
 # line:00094 file : INC:helper/upload.helper.php re\rgx\table->save()
 # line:00023 file : APP:module/upload.module.php re\rgx\upload_helper::addrecord(2019-11-14/pre_qnd7m7smsuux.jpg,45273,lavida.jpeg,,jpg)
 # line:00077 file : RGX:class/app.class.php com\default_admin\upload_module->image_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-14 22:40:17 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
#3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(29): re\rgx\table->get_all()
#4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
#5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
#6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(29): re\rgx\table->get_all()
    #4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
    #5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(29): re\rgx\table->get_all()
    #4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
    #5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
    #7 {main})
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_id = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_id = ) ,,,{closure})
 # line:00029 file : APP:module/order.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\order_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-14 22:40:17 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_order` 
 
WHERE 1 = 1 
 AND (order_user_id = )  」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_id = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_id = ) ,,,{closure})
 # line:00029 file : APP:module/order.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\order_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-14 22:46:23 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
#3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(29): re\rgx\table->get_all()
#4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
#5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
#6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(29): re\rgx\table->get_all()
    #4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
    #5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(29): re\rgx\table->get_all()
    #4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
    #5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
    #7 {main})
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_id = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_id = ) ,,,{closure})
 # line:00029 file : APP:module/order.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\order_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-14 22:46:23 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_order` 
 
WHERE 1 = 1 
 AND (order_user_id = )  」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_id = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_id = ) ,,,{closure})
 # line:00029 file : APP:module/order.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\order_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-14 22:46:51 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
#3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(29): re\rgx\table->get_all()
#4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
#5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
#6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(29): re\rgx\table->get_all()
    #4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
    #5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(29): re\rgx\table->get_all()
    #4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
    #5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
    #7 {main})
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_id = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_id = ) ,,,{closure})
 # line:00029 file : APP:module/order.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\order_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-14 22:46:51 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_order` 
 
WHERE 1 = 1 
 AND (order_user_id = )  」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_id = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_id = ) ,,,{closure})
 # line:00029 file : APP:module/order.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\order_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-14 22:47:41 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
#3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(29): re\rgx\table->get_all()
#4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
#5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
#6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(29): re\rgx\table->get_all()
    #4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
    #5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(29): re\rgx\table->get_all()
    #4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
    #5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
    #7 {main})
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_id = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_id = ) ,,,{closure})
 # line:00029 file : APP:module/order.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\order_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-14 22:47:41 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_order` 
 
WHERE 1 = 1 
 AND (order_user_id = )  」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_id = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_id = ) ,,,{closure})
 # line:00029 file : APP:module/order.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\order_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-14 22:48:09 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
#3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(29): re\rgx\table->get_all()
#4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
#5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
#6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(29): re\rgx\table->get_all()
    #4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
    #5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(29): re\rgx\table->get_all()
    #4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
    #5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
    #7 {main})
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_id = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_id = ) ,,,{closure})
 # line:00029 file : APP:module/order.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\order_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-14 22:48:09 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_order` 
 
WHERE 1 = 1 
 AND (order_user_id = )  」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_id = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_id = ) ,,,{closure})
 # line:00029 file : APP:module/order.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\order_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-14 22:48:17 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
#3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(29): re\rgx\table->get_all()
#4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
#5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
#6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(29): re\rgx\table->get_all()
    #4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
    #5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(29): re\rgx\table->get_all()
    #4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
    #5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
    #7 {main})
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_id = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_id = ) ,,,{closure})
 # line:00029 file : APP:module/order.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\order_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-14 22:48:17 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_order` 
 
WHERE 1 = 1 
 AND (order_user_id = )  」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_id = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_id = ) ,,,{closure})
 # line:00029 file : APP:module/order.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\order_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-14 23:38:40 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
#3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(29): re\rgx\table->get_all()
#4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
#5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
#6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(29): re\rgx\table->get_all()
    #4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
    #5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(29): re\rgx\table->get_all()
    #4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
    #5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
    #7 {main})
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_id = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_id = ) ,,,{closure})
 # line:00029 file : APP:module/order.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\order_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-14 23:38:40 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_order` 
 
WHERE 1 = 1 
 AND (order_user_id = )  」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_id = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_id = ) ,,,{closure})
 # line:00029 file : APP:module/order.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\order_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?>