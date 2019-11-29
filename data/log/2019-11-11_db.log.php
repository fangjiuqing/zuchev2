<?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev1/admin/
 * @url  /zuchev1/admin/index.php/attachment/relation.html
 * @date 2019-11-11 11:40:50 
 * @desc exception 'PDOException' with message 'SQLSTATE[HY000]: General error: 1366 Incorrect integer value: '' for column 'attch_rlt_id' at row 1' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:124
Stack trace:
#0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(124): PDO->exec('replace  into `...')
#1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(276): re\rgx\mysql_db->exec('replace  into `...')
#2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(1001): re\rgx\mysql_db->update('replace  into `...', false)
#3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(820): re\rgx\table->replace()
#4 /data/htdocs/emera_tech/zuchev1/admin/module/attachment.module.php(27): re\rgx\table->save()
#5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_admin\attachment_module->relation_action()
#6 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
#7 /data/htdocs/emera_tech/zuchev1/admin/index.php(21): include('/data/htdocs/em...')
#8 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[HY000]: General error: 1366 Incorrect integer value: '' for column 'attch_rlt_id' at row 1' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:124
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(124): PDO->exec('replace  into `...')
    #1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(276): re\rgx\mysql_db->exec('replace  into `...')
    #2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(1001): re\rgx\mysql_db->update('replace  into `...', false)
    #3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(820): re\rgx\table->replace()
    #4 /data/htdocs/emera_tech/zuchev1/admin/module/attachment.module.php(27): re\rgx\table->save()
    #5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_admin\attachment_module->relation_action()
    #6 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
    #7 /data/htdocs/emera_tech/zuchev1/admin/index.php(21): include('/data/htdocs/em...')
    #8 {main},1,)
 # line:00138 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[HY000]: General error: 1366 Incorrect integer value: '' for column 'attch_rlt_id' at row 1' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:124
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(124): PDO->exec('replace  into `...')
    #1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(276): re\rgx\mysql_db->exec('replace  into `...')
    #2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(1001): re\rgx\mysql_db->update('replace  into `...', false)
    #3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(820): re\rgx\table->replace()
    #4 /data/htdocs/emera_tech/zuchev1/admin/module/attachment.module.php(27): re\rgx\table->save()
    #5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_admin\attachment_module->relation_action()
    #6 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
    #7 /data/htdocs/emera_tech/zuchev1/admin/index.php(21): include('/data/htdocs/em...')
    #8 {main})
 # line:00276 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->exec(replace  into `pre_attachment_relation`( `pre_attachment_relation`.`attch_adate`, `pre_attachment_relation`.`attch_rlt_id`, `pre_attachment_relation`.`attch_rlt_type`, `pre_attachment_relation`.`attch_id`)  
     values( '1573443360', '', '', '545') )
 # line:01001 file : RGX:class/table.class.php re\rgx\mysql_db->update(replace  into `pre_attachment_relation`( `pre_attachment_relation`.`attch_adate`, `pre_attachment_relation`.`attch_rlt_id`, `pre_attachment_relation`.`attch_rlt_type`, `pre_attachment_relation`.`attch_id`)  
     values( '1573443360', '', '', '545') ,)
 # line:00820 file : RGX:class/table.class.php re\rgx\table->replace()
 # line:00027 file : APP:module/attachment.module.php re\rgx\table->save()
 # line:00077 file : RGX:class/app.class.php com\default_admin\attachment_module->relation_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev1/admin/
 * @url  /zuchev1/admin/index.php/attachment/relation.html
 * @date 2019-11-11 11:40:50 
 * @desc 查询失败 「 1366#Incorrect integer value: '' for column 'attch_rlt_id' at row 1 」</li><li>查询语句 「 replace  into `pre_attachment_relation`( `pre_attachment_relation`.`attch_adate`, `pre_attachment_relation`.`attch_rlt_id`, `pre_attachment_relation`.`attch_rlt_type`, `pre_attachment_relation`.`attch_id`)  
 values( '1573443360', '', '', '545')  」
 * @extra Nil

 # line:00139 file : RGX:extra/db/mysql.db.php ()
 # line:00276 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->exec(replace  into `pre_attachment_relation`( `pre_attachment_relation`.`attch_adate`, `pre_attachment_relation`.`attch_rlt_id`, `pre_attachment_relation`.`attch_rlt_type`, `pre_attachment_relation`.`attch_id`)  
     values( '1573443360', '', '', '545') )
 # line:01001 file : RGX:class/table.class.php re\rgx\mysql_db->update(replace  into `pre_attachment_relation`( `pre_attachment_relation`.`attch_adate`, `pre_attachment_relation`.`attch_rlt_id`, `pre_attachment_relation`.`attch_rlt_type`, `pre_attachment_relation`.`attch_id`)  
     values( '1573443360', '', '', '545') ,)
 # line:00820 file : RGX:class/table.class.php re\rgx\table->replace()
 # line:00027 file : APP:module/attachment.module.php re\rgx\table->save()
 # line:00077 file : RGX:class/app.class.php com\default_admin\attachment_module->relation_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev1/admin/
 * @url  /zuchev1/admin/index.php/attachment/relation.html
 * @date 2019-11-11 11:42:21 
 * @desc exception 'PDOException' with message 'SQLSTATE[HY000]: General error: 1366 Incorrect integer value: '' for column 'attch_rlt_id' at row 1' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:124
Stack trace:
#0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(124): PDO->exec('replace  into `...')
#1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(276): re\rgx\mysql_db->exec('replace  into `...')
#2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(1001): re\rgx\mysql_db->update('replace  into `...', false)
#3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(820): re\rgx\table->replace()
#4 /data/htdocs/emera_tech/zuchev1/admin/module/attachment.module.php(27): re\rgx\table->save()
#5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_admin\attachment_module->relation_action()
#6 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
#7 /data/htdocs/emera_tech/zuchev1/admin/index.php(21): include('/data/htdocs/em...')
#8 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[HY000]: General error: 1366 Incorrect integer value: '' for column 'attch_rlt_id' at row 1' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:124
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(124): PDO->exec('replace  into `...')
    #1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(276): re\rgx\mysql_db->exec('replace  into `...')
    #2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(1001): re\rgx\mysql_db->update('replace  into `...', false)
    #3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(820): re\rgx\table->replace()
    #4 /data/htdocs/emera_tech/zuchev1/admin/module/attachment.module.php(27): re\rgx\table->save()
    #5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_admin\attachment_module->relation_action()
    #6 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
    #7 /data/htdocs/emera_tech/zuchev1/admin/index.php(21): include('/data/htdocs/em...')
    #8 {main},1,)
 # line:00138 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[HY000]: General error: 1366 Incorrect integer value: '' for column 'attch_rlt_id' at row 1' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:124
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(124): PDO->exec('replace  into `...')
    #1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(276): re\rgx\mysql_db->exec('replace  into `...')
    #2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(1001): re\rgx\mysql_db->update('replace  into `...', false)
    #3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(820): re\rgx\table->replace()
    #4 /data/htdocs/emera_tech/zuchev1/admin/module/attachment.module.php(27): re\rgx\table->save()
    #5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_admin\attachment_module->relation_action()
    #6 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
    #7 /data/htdocs/emera_tech/zuchev1/admin/index.php(21): include('/data/htdocs/em...')
    #8 {main})
 # line:00276 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->exec(replace  into `pre_attachment_relation`( `pre_attachment_relation`.`attch_adate`, `pre_attachment_relation`.`attch_rlt_id`, `pre_attachment_relation`.`attch_rlt_type`, `pre_attachment_relation`.`attch_id`)  
     values( '1573443360', '', '', '545') )
 # line:01001 file : RGX:class/table.class.php re\rgx\mysql_db->update(replace  into `pre_attachment_relation`( `pre_attachment_relation`.`attch_adate`, `pre_attachment_relation`.`attch_rlt_id`, `pre_attachment_relation`.`attch_rlt_type`, `pre_attachment_relation`.`attch_id`)  
     values( '1573443360', '', '', '545') ,)
 # line:00820 file : RGX:class/table.class.php re\rgx\table->replace()
 # line:00027 file : APP:module/attachment.module.php re\rgx\table->save()
 # line:00077 file : RGX:class/app.class.php com\default_admin\attachment_module->relation_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev1/admin/
 * @url  /zuchev1/admin/index.php/attachment/relation.html
 * @date 2019-11-11 11:42:21 
 * @desc 查询失败 「 1366#Incorrect integer value: '' for column 'attch_rlt_id' at row 1 」</li><li>查询语句 「 replace  into `pre_attachment_relation`( `pre_attachment_relation`.`attch_adate`, `pre_attachment_relation`.`attch_rlt_id`, `pre_attachment_relation`.`attch_rlt_type`, `pre_attachment_relation`.`attch_id`)  
 values( '1573443360', '', '', '545')  」
 * @extra Nil

 # line:00139 file : RGX:extra/db/mysql.db.php ()
 # line:00276 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->exec(replace  into `pre_attachment_relation`( `pre_attachment_relation`.`attch_adate`, `pre_attachment_relation`.`attch_rlt_id`, `pre_attachment_relation`.`attch_rlt_type`, `pre_attachment_relation`.`attch_id`)  
     values( '1573443360', '', '', '545') )
 # line:01001 file : RGX:class/table.class.php re\rgx\mysql_db->update(replace  into `pre_attachment_relation`( `pre_attachment_relation`.`attch_adate`, `pre_attachment_relation`.`attch_rlt_id`, `pre_attachment_relation`.`attch_rlt_type`, `pre_attachment_relation`.`attch_id`)  
     values( '1573443360', '', '', '545') ,)
 # line:00820 file : RGX:class/table.class.php re\rgx\table->replace()
 # line:00027 file : APP:module/attachment.module.php re\rgx\table->save()
 # line:00077 file : RGX:class/app.class.php com\default_admin\attachment_module->relation_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev1/admin/
 * @url  /zuchev1/admin/index.php/car/add?id=1.html
 * @date 2019-11-11 11:42:27 
 * @desc exception 'PDOException' with message 'SQLSTATE[42S22]: Column not found: 1054 Unknown column 'attch_sort' in 'order clause'' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(107): PDO->query('select `pre_att...')
#1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select `pre_att...')
#2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select `pre_att...', NULL, false, false)
#3 /data/htdocs/emera_tech/zuchev1/core/include/helper/attachment.helper.php(15): re\rgx\table->get_all()
#4 /data/htdocs/emera_tech/zuchev1/admin/module/car.module.php(94): re\rgx\attachment_helper::get_relation('car', 1)
#5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_admin\car_module->add_action()
#6 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
#7 /data/htdocs/emera_tech/zuchev1/admin/index.php(21): include('/data/htdocs/em...')
#8 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42S22]: Column not found: 1054 Unknown column 'attch_sort' in 'order clause'' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(107): PDO->query('select `pre_att...')
    #1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select `pre_att...')
    #2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select `pre_att...', NULL, false, false)
    #3 /data/htdocs/emera_tech/zuchev1/core/include/helper/attachment.helper.php(15): re\rgx\table->get_all()
    #4 /data/htdocs/emera_tech/zuchev1/admin/module/car.module.php(94): re\rgx\attachment_helper::get_relation('car', 1)
    #5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_admin\car_module->add_action()
    #6 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
    #7 /data/htdocs/emera_tech/zuchev1/admin/index.php(21): include('/data/htdocs/em...')
    #8 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42S22]: Column not found: 1054 Unknown column 'attch_sort' in 'order clause'' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(107): PDO->query('select `pre_att...')
    #1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select `pre_att...')
    #2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select `pre_att...', NULL, false, false)
    #3 /data/htdocs/emera_tech/zuchev1/core/include/helper/attachment.helper.php(15): re\rgx\table->get_all()
    #4 /data/htdocs/emera_tech/zuchev1/admin/module/car.module.php(94): re\rgx\attachment_helper::get_relation('car', 1)
    #5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_admin\car_module->add_action()
    #6 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
    #7 /data/htdocs/emera_tech/zuchev1/admin/index.php(21): include('/data/htdocs/em...')
    #8 {main})
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select `pre_attachment_relation`.* , `pre_attachment`.* 
    FROM `pre_attachment_relation` 
    left JOIN `pre_attachment`  ON ( pre_attachment_relation.attch_id = pre_attachment.attch_id ) 
    WHERE 1 = 1 
     AND ( `pre_attachment_relation`.`attch_rlt_type` = 'car' AND `pre_attachment_relation`.`attch_rlt_id` = '1' ) ORDER BY `attch_sort` asc 
    )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select `pre_attachment_relation`.* , `pre_attachment`.* 
    FROM `pre_attachment_relation` 
    left JOIN `pre_attachment`  ON ( pre_attachment_relation.attch_id = pre_attachment.attch_id ) 
    WHERE 1 = 1 
     AND ( `pre_attachment_relation`.`attch_rlt_type` = 'car' AND `pre_attachment_relation`.`attch_rlt_id` = '1' ) ORDER BY `attch_sort` asc 
    ,,,)
 # line:00015 file : INC:helper/attachment.helper.php re\rgx\table->get_all()
 # line:00094 file : APP:module/car.module.php re\rgx\attachment_helper::get_relation(car,1)
 # line:00077 file : RGX:class/app.class.php com\default_admin\car_module->add_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev1/admin/
 * @url  /zuchev1/admin/index.php/car/add?id=1.html
 * @date 2019-11-11 11:42:27 
 * @desc 查询失败 「 1054#Unknown column 'attch_sort' in 'order clause' 」</li><li>查询语句 「 select `pre_attachment_relation`.* , `pre_attachment`.* 
FROM `pre_attachment_relation` 
left JOIN `pre_attachment`  ON ( pre_attachment_relation.attch_id = pre_attachment.attch_id ) 
WHERE 1 = 1 
 AND ( `pre_attachment_relation`.`attch_rlt_type` = 'car' AND `pre_attachment_relation`.`attch_rlt_id` = '1' ) ORDER BY `attch_sort` asc 
 」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select `pre_attachment_relation`.* , `pre_attachment`.* 
    FROM `pre_attachment_relation` 
    left JOIN `pre_attachment`  ON ( pre_attachment_relation.attch_id = pre_attachment.attch_id ) 
    WHERE 1 = 1 
     AND ( `pre_attachment_relation`.`attch_rlt_type` = 'car' AND `pre_attachment_relation`.`attch_rlt_id` = '1' ) ORDER BY `attch_sort` asc 
    )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select `pre_attachment_relation`.* , `pre_attachment`.* 
    FROM `pre_attachment_relation` 
    left JOIN `pre_attachment`  ON ( pre_attachment_relation.attch_id = pre_attachment.attch_id ) 
    WHERE 1 = 1 
     AND ( `pre_attachment_relation`.`attch_rlt_type` = 'car' AND `pre_attachment_relation`.`attch_rlt_id` = '1' ) ORDER BY `attch_sort` asc 
    ,,,)
 # line:00015 file : INC:helper/attachment.helper.php re\rgx\table->get_all()
 # line:00094 file : APP:module/car.module.php re\rgx\attachment_helper::get_relation(car,1)
 # line:00077 file : RGX:class/app.class.php com\default_admin\car_module->add_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev1/admin/
 * @url  /zuchev1/admin/index.php/attachment/relation.html
 * @date 2019-11-11 11:44:34 
 * @desc exception 'PDOException' with message 'SQLSTATE[HY000]: General error: 1366 Incorrect integer value: '' for column 'attch_rlt_id' at row 1' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:124
Stack trace:
#0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(124): PDO->exec('replace  into `...')
#1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(276): re\rgx\mysql_db->exec('replace  into `...')
#2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(1001): re\rgx\mysql_db->update('replace  into `...', false)
#3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(820): re\rgx\table->replace()
#4 /data/htdocs/emera_tech/zuchev1/admin/module/attachment.module.php(27): re\rgx\table->save()
#5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_admin\attachment_module->relation_action()
#6 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
#7 /data/htdocs/emera_tech/zuchev1/admin/index.php(21): include('/data/htdocs/em...')
#8 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[HY000]: General error: 1366 Incorrect integer value: '' for column 'attch_rlt_id' at row 1' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:124
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(124): PDO->exec('replace  into `...')
    #1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(276): re\rgx\mysql_db->exec('replace  into `...')
    #2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(1001): re\rgx\mysql_db->update('replace  into `...', false)
    #3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(820): re\rgx\table->replace()
    #4 /data/htdocs/emera_tech/zuchev1/admin/module/attachment.module.php(27): re\rgx\table->save()
    #5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_admin\attachment_module->relation_action()
    #6 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
    #7 /data/htdocs/emera_tech/zuchev1/admin/index.php(21): include('/data/htdocs/em...')
    #8 {main},1,)
 # line:00138 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[HY000]: General error: 1366 Incorrect integer value: '' for column 'attch_rlt_id' at row 1' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:124
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(124): PDO->exec('replace  into `...')
    #1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(276): re\rgx\mysql_db->exec('replace  into `...')
    #2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(1001): re\rgx\mysql_db->update('replace  into `...', false)
    #3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(820): re\rgx\table->replace()
    #4 /data/htdocs/emera_tech/zuchev1/admin/module/attachment.module.php(27): re\rgx\table->save()
    #5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_admin\attachment_module->relation_action()
    #6 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
    #7 /data/htdocs/emera_tech/zuchev1/admin/index.php(21): include('/data/htdocs/em...')
    #8 {main})
 # line:00276 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->exec(replace  into `pre_attachment_relation`( `pre_attachment_relation`.`attch_adate`, `pre_attachment_relation`.`attch_rlt_id`, `pre_attachment_relation`.`attch_rlt_type`, `pre_attachment_relation`.`attch_id`)  
     values( '1573443360', '', '', '2') )
 # line:01001 file : RGX:class/table.class.php re\rgx\mysql_db->update(replace  into `pre_attachment_relation`( `pre_attachment_relation`.`attch_adate`, `pre_attachment_relation`.`attch_rlt_id`, `pre_attachment_relation`.`attch_rlt_type`, `pre_attachment_relation`.`attch_id`)  
     values( '1573443360', '', '', '2') ,)
 # line:00820 file : RGX:class/table.class.php re\rgx\table->replace()
 # line:00027 file : APP:module/attachment.module.php re\rgx\table->save()
 # line:00077 file : RGX:class/app.class.php com\default_admin\attachment_module->relation_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev1/admin/
 * @url  /zuchev1/admin/index.php/attachment/relation.html
 * @date 2019-11-11 11:44:34 
 * @desc 查询失败 「 1366#Incorrect integer value: '' for column 'attch_rlt_id' at row 1 」</li><li>查询语句 「 replace  into `pre_attachment_relation`( `pre_attachment_relation`.`attch_adate`, `pre_attachment_relation`.`attch_rlt_id`, `pre_attachment_relation`.`attch_rlt_type`, `pre_attachment_relation`.`attch_id`)  
 values( '1573443360', '', '', '2')  」
 * @extra Nil

 # line:00139 file : RGX:extra/db/mysql.db.php ()
 # line:00276 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->exec(replace  into `pre_attachment_relation`( `pre_attachment_relation`.`attch_adate`, `pre_attachment_relation`.`attch_rlt_id`, `pre_attachment_relation`.`attch_rlt_type`, `pre_attachment_relation`.`attch_id`)  
     values( '1573443360', '', '', '2') )
 # line:01001 file : RGX:class/table.class.php re\rgx\mysql_db->update(replace  into `pre_attachment_relation`( `pre_attachment_relation`.`attch_adate`, `pre_attachment_relation`.`attch_rlt_id`, `pre_attachment_relation`.`attch_rlt_type`, `pre_attachment_relation`.`attch_id`)  
     values( '1573443360', '', '', '2') ,)
 # line:00820 file : RGX:class/table.class.php re\rgx\table->replace()
 # line:00027 file : APP:module/attachment.module.php re\rgx\table->save()
 # line:00077 file : RGX:class/app.class.php com\default_admin\attachment_module->relation_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev1/admin/
 * @url  /zuchev1/admin/index.php/attachment/relation.html
 * @date 2019-11-11 11:45:48 
 * @desc exception 'PDOException' with message 'SQLSTATE[HY000]: General error: 1366 Incorrect integer value: 'car' for column 'attch_rlt_type' at row 1' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:124
Stack trace:
#0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(124): PDO->exec('replace  into `...')
#1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(276): re\rgx\mysql_db->exec('replace  into `...')
#2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(1001): re\rgx\mysql_db->update('replace  into `...', false)
#3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(820): re\rgx\table->replace()
#4 /data/htdocs/emera_tech/zuchev1/admin/module/attachment.module.php(27): re\rgx\table->save()
#5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_admin\attachment_module->relation_action()
#6 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
#7 /data/htdocs/emera_tech/zuchev1/admin/index.php(21): include('/data/htdocs/em...')
#8 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[HY000]: General error: 1366 Incorrect integer value: 'car' for column 'attch_rlt_type' at row 1' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:124
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(124): PDO->exec('replace  into `...')
    #1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(276): re\rgx\mysql_db->exec('replace  into `...')
    #2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(1001): re\rgx\mysql_db->update('replace  into `...', false)
    #3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(820): re\rgx\table->replace()
    #4 /data/htdocs/emera_tech/zuchev1/admin/module/attachment.module.php(27): re\rgx\table->save()
    #5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_admin\attachment_module->relation_action()
    #6 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
    #7 /data/htdocs/emera_tech/zuchev1/admin/index.php(21): include('/data/htdocs/em...')
    #8 {main},1,)
 # line:00138 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[HY000]: General error: 1366 Incorrect integer value: 'car' for column 'attch_rlt_type' at row 1' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:124
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(124): PDO->exec('replace  into `...')
    #1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(276): re\rgx\mysql_db->exec('replace  into `...')
    #2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(1001): re\rgx\mysql_db->update('replace  into `...', false)
    #3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(820): re\rgx\table->replace()
    #4 /data/htdocs/emera_tech/zuchev1/admin/module/attachment.module.php(27): re\rgx\table->save()
    #5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_admin\attachment_module->relation_action()
    #6 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
    #7 /data/htdocs/emera_tech/zuchev1/admin/index.php(21): include('/data/htdocs/em...')
    #8 {main})
 # line:00276 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->exec(replace  into `pre_attachment_relation`( `pre_attachment_relation`.`attch_adate`, `pre_attachment_relation`.`attch_rlt_id`, `pre_attachment_relation`.`attch_rlt_type`, `pre_attachment_relation`.`attch_id`)  
     values( '1573443939', '1', 'car', '3') )
 # line:01001 file : RGX:class/table.class.php re\rgx\mysql_db->update(replace  into `pre_attachment_relation`( `pre_attachment_relation`.`attch_adate`, `pre_attachment_relation`.`attch_rlt_id`, `pre_attachment_relation`.`attch_rlt_type`, `pre_attachment_relation`.`attch_id`)  
     values( '1573443939', '1', 'car', '3') ,)
 # line:00820 file : RGX:class/table.class.php re\rgx\table->replace()
 # line:00027 file : APP:module/attachment.module.php re\rgx\table->save()
 # line:00077 file : RGX:class/app.class.php com\default_admin\attachment_module->relation_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev1/admin/
 * @url  /zuchev1/admin/index.php/attachment/relation.html
 * @date 2019-11-11 11:45:48 
 * @desc 查询失败 「 1366#Incorrect integer value: 'car' for column 'attch_rlt_type' at row 1 」</li><li>查询语句 「 replace  into `pre_attachment_relation`( `pre_attachment_relation`.`attch_adate`, `pre_attachment_relation`.`attch_rlt_id`, `pre_attachment_relation`.`attch_rlt_type`, `pre_attachment_relation`.`attch_id`)  
 values( '1573443939', '1', 'car', '3')  」
 * @extra Nil

 # line:00139 file : RGX:extra/db/mysql.db.php ()
 # line:00276 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->exec(replace  into `pre_attachment_relation`( `pre_attachment_relation`.`attch_adate`, `pre_attachment_relation`.`attch_rlt_id`, `pre_attachment_relation`.`attch_rlt_type`, `pre_attachment_relation`.`attch_id`)  
     values( '1573443939', '1', 'car', '3') )
 # line:01001 file : RGX:class/table.class.php re\rgx\mysql_db->update(replace  into `pre_attachment_relation`( `pre_attachment_relation`.`attch_adate`, `pre_attachment_relation`.`attch_rlt_id`, `pre_attachment_relation`.`attch_rlt_type`, `pre_attachment_relation`.`attch_id`)  
     values( '1573443939', '1', 'car', '3') ,)
 # line:00820 file : RGX:class/table.class.php re\rgx\table->replace()
 # line:00027 file : APP:module/attachment.module.php re\rgx\table->save()
 # line:00077 file : RGX:class/app.class.php com\default_admin\attachment_module->relation_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev1/admin/
 * @url  /zuchev1/admin/index.php/agent/save.html
 * @date 2019-11-11 14:36:32 
 * @desc exception 'PDOException' with message 'SQLSTATE[22007]: Invalid datetime format: 1292 Incorrect datetime value: '' for column 'agent_create_time' at row 1' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:124
Stack trace:
#0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(124): PDO->exec('insert  into `p...')
#1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(300): re\rgx\mysql_db->exec('insert  into `p...')
#2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(959): re\rgx\mysql_db->insert('insert  into `p...', false)
#3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(820): re\rgx\table->insert()
#4 /data/htdocs/emera_tech/zuchev1/admin/module/agent.module.php(126): re\rgx\table->save()
#5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_admin\agent_module->save_action()
#6 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
#7 /data/htdocs/emera_tech/zuchev1/admin/index.php(21): include('/data/htdocs/em...')
#8 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[22007]: Invalid datetime format: 1292 Incorrect datetime value: '' for column 'agent_create_time' at row 1' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:124
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(124): PDO->exec('insert  into `p...')
    #1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(300): re\rgx\mysql_db->exec('insert  into `p...')
    #2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(959): re\rgx\mysql_db->insert('insert  into `p...', false)
    #3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(820): re\rgx\table->insert()
    #4 /data/htdocs/emera_tech/zuchev1/admin/module/agent.module.php(126): re\rgx\table->save()
    #5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_admin\agent_module->save_action()
    #6 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
    #7 /data/htdocs/emera_tech/zuchev1/admin/index.php(21): include('/data/htdocs/em...')
    #8 {main},1,)
 # line:00138 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[22007]: Invalid datetime format: 1292 Incorrect datetime value: '' for column 'agent_create_time' at row 1' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:124
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(124): PDO->exec('insert  into `p...')
    #1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(300): re\rgx\mysql_db->exec('insert  into `p...')
    #2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(959): re\rgx\mysql_db->insert('insert  into `p...', false)
    #3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(820): re\rgx\table->insert()
    #4 /data/htdocs/emera_tech/zuchev1/admin/module/agent.module.php(126): re\rgx\table->save()
    #5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_admin\agent_module->save_action()
    #6 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
    #7 /data/htdocs/emera_tech/zuchev1/admin/index.php(21): include('/data/htdocs/em...')
    #8 {main})
 # line:00300 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->exec(insert  into `pre_agent`( `pre_agent`.`agent_id`, `pre_agent`.`agent_fullname`, `pre_agent`.`agent_mobile`, `pre_agent`.`agent_code`, `pre_agent`.`agent_create_time`, `pre_agent`.`agent_level`)  
     values( '0', '张小宝', '13888888881', '', '', '2') )
 # line:00959 file : RGX:class/table.class.php re\rgx\mysql_db->insert(insert  into `pre_agent`( `pre_agent`.`agent_id`, `pre_agent`.`agent_fullname`, `pre_agent`.`agent_mobile`, `pre_agent`.`agent_code`, `pre_agent`.`agent_create_time`, `pre_agent`.`agent_level`)  
     values( '0', '张小宝', '13888888881', '', '', '2') ,)
 # line:00820 file : RGX:class/table.class.php re\rgx\table->insert()
 # line:00126 file : APP:module/agent.module.php re\rgx\table->save()
 # line:00077 file : RGX:class/app.class.php com\default_admin\agent_module->save_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev1/admin/
 * @url  /zuchev1/admin/index.php/agent/save.html
 * @date 2019-11-11 14:36:32 
 * @desc 查询失败 「 1292#Incorrect datetime value: '' for column 'agent_create_time' at row 1 」</li><li>查询语句 「 insert  into `pre_agent`( `pre_agent`.`agent_id`, `pre_agent`.`agent_fullname`, `pre_agent`.`agent_mobile`, `pre_agent`.`agent_code`, `pre_agent`.`agent_create_time`, `pre_agent`.`agent_level`)  
 values( '0', '张小宝', '13888888881', '', '', '2')  」
 * @extra Nil

 # line:00139 file : RGX:extra/db/mysql.db.php ()
 # line:00300 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->exec(insert  into `pre_agent`( `pre_agent`.`agent_id`, `pre_agent`.`agent_fullname`, `pre_agent`.`agent_mobile`, `pre_agent`.`agent_code`, `pre_agent`.`agent_create_time`, `pre_agent`.`agent_level`)  
     values( '0', '张小宝', '13888888881', '', '', '2') )
 # line:00959 file : RGX:class/table.class.php re\rgx\mysql_db->insert(insert  into `pre_agent`( `pre_agent`.`agent_id`, `pre_agent`.`agent_fullname`, `pre_agent`.`agent_mobile`, `pre_agent`.`agent_code`, `pre_agent`.`agent_create_time`, `pre_agent`.`agent_level`)  
     values( '0', '张小宝', '13888888881', '', '', '2') ,)
 # line:00820 file : RGX:class/table.class.php re\rgx\table->insert()
 # line:00126 file : APP:module/agent.module.php re\rgx\table->save()
 # line:00077 file : RGX:class/app.class.php com\default_admin\agent_module->save_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?>