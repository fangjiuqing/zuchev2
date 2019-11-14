<?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev1/wap/
 * @url  /zuchev1/wap/index.php/register/submit.html
 * @date 2019-11-10 14:42:45 
 * @desc exception 'PDOException' with message 'SQLSTATE[22007]: Invalid datetime format: 1292 Incorrect datetime value: '' for column 'user_register_date' at row 1' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:124
Stack trace:
#0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(124): PDO->exec('insert  into `p...')
#1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(300): re\rgx\mysql_db->exec('insert  into `p...')
#2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(959): re\rgx\mysql_db->insert('insert  into `p...', false)
#3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(820): re\rgx\table->insert()
#4 /data/htdocs/emera_tech/zuchev1/wap/module/register.module.php(42): re\rgx\table->save()
#5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_wap\register_module->submit_action()
#6 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
#7 /data/htdocs/emera_tech/zuchev1/wap/index.php(21): include('/data/htdocs/em...')
#8 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[22007]: Invalid datetime format: 1292 Incorrect datetime value: '' for column 'user_register_date' at row 1' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:124
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(124): PDO->exec('insert  into `p...')
    #1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(300): re\rgx\mysql_db->exec('insert  into `p...')
    #2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(959): re\rgx\mysql_db->insert('insert  into `p...', false)
    #3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(820): re\rgx\table->insert()
    #4 /data/htdocs/emera_tech/zuchev1/wap/module/register.module.php(42): re\rgx\table->save()
    #5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_wap\register_module->submit_action()
    #6 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
    #7 /data/htdocs/emera_tech/zuchev1/wap/index.php(21): include('/data/htdocs/em...')
    #8 {main},1,)
 # line:00138 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[22007]: Invalid datetime format: 1292 Incorrect datetime value: '' for column 'user_register_date' at row 1' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:124
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(124): PDO->exec('insert  into `p...')
    #1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(300): re\rgx\mysql_db->exec('insert  into `p...')
    #2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(959): re\rgx\mysql_db->insert('insert  into `p...', false)
    #3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(820): re\rgx\table->insert()
    #4 /data/htdocs/emera_tech/zuchev1/wap/module/register.module.php(42): re\rgx\table->save()
    #5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_wap\register_module->submit_action()
    #6 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
    #7 /data/htdocs/emera_tech/zuchev1/wap/index.php(21): include('/data/htdocs/em...')
    #8 {main})
 # line:00300 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->exec(insert  into `pre_user`( `pre_user`.`user_id`, `pre_user`.`user_sno`, `pre_user`.`user_name`, `pre_user`.`user_mobile`, `pre_user`.`user_password`, `pre_user`.`user_salt`, `pre_user`.`user_register_date`, `pre_user`.`user_recomment_id`)  
     values( '0', 'ht120', '', '13611787623', '6bbb76d294b327dca996dfa3046bc8e1ac725e34', '581530', '', '0') )
 # line:00959 file : RGX:class/table.class.php re\rgx\mysql_db->insert(insert  into `pre_user`( `pre_user`.`user_id`, `pre_user`.`user_sno`, `pre_user`.`user_name`, `pre_user`.`user_mobile`, `pre_user`.`user_password`, `pre_user`.`user_salt`, `pre_user`.`user_register_date`, `pre_user`.`user_recomment_id`)  
     values( '0', 'ht120', '', '13611787623', '6bbb76d294b327dca996dfa3046bc8e1ac725e34', '581530', '', '0') ,)
 # line:00820 file : RGX:class/table.class.php re\rgx\table->insert()
 # line:00042 file : APP:module/register.module.php re\rgx\table->save()
 # line:00077 file : RGX:class/app.class.php com\default_wap\register_module->submit_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev1/wap/
 * @url  /zuchev1/wap/index.php/register/submit.html
 * @date 2019-11-10 14:42:45 
 * @desc 查询失败 「 1292#Incorrect datetime value: '' for column 'user_register_date' at row 1 」</li><li>查询语句 「 insert  into `pre_user`( `pre_user`.`user_id`, `pre_user`.`user_sno`, `pre_user`.`user_name`, `pre_user`.`user_mobile`, `pre_user`.`user_password`, `pre_user`.`user_salt`, `pre_user`.`user_register_date`, `pre_user`.`user_recomment_id`)  
 values( '0', 'ht120', '', '13611787623', '6bbb76d294b327dca996dfa3046bc8e1ac725e34', '581530', '', '0')  」
 * @extra Nil

 # line:00139 file : RGX:extra/db/mysql.db.php ()
 # line:00300 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->exec(insert  into `pre_user`( `pre_user`.`user_id`, `pre_user`.`user_sno`, `pre_user`.`user_name`, `pre_user`.`user_mobile`, `pre_user`.`user_password`, `pre_user`.`user_salt`, `pre_user`.`user_register_date`, `pre_user`.`user_recomment_id`)  
     values( '0', 'ht120', '', '13611787623', '6bbb76d294b327dca996dfa3046bc8e1ac725e34', '581530', '', '0') )
 # line:00959 file : RGX:class/table.class.php re\rgx\mysql_db->insert(insert  into `pre_user`( `pre_user`.`user_id`, `pre_user`.`user_sno`, `pre_user`.`user_name`, `pre_user`.`user_mobile`, `pre_user`.`user_password`, `pre_user`.`user_salt`, `pre_user`.`user_register_date`, `pre_user`.`user_recomment_id`)  
     values( '0', 'ht120', '', '13611787623', '6bbb76d294b327dca996dfa3046bc8e1ac725e34', '581530', '', '0') ,)
 # line:00820 file : RGX:class/table.class.php re\rgx\table->insert()
 # line:00042 file : APP:module/register.module.php re\rgx\table->save()
 # line:00077 file : RGX:class/app.class.php com\default_wap\register_module->submit_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev1/wap/
 * @url  /zuchev1/wap/index.php/order/submit.html
 * @date 2019-11-10 18:17:53 
 * @desc exception 'PDOException' with message 'SQLSTATE[22001]: String data, right truncated: 1406 Data too long for column 'order_no' at row 1' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:124
Stack trace:
#0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(124): PDO->exec('insert  into `p...')
#1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(300): re\rgx\mysql_db->exec('insert  into `p...')
#2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(959): re\rgx\mysql_db->insert('insert  into `p...', false)
#3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(820): re\rgx\table->insert()
#4 /data/htdocs/emera_tech/zuchev1/wap/module/order.module.php(59): re\rgx\table->save()
#5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_wap\order_module->submit_action()
#6 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
#7 /data/htdocs/emera_tech/zuchev1/wap/index.php(21): include('/data/htdocs/em...')
#8 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[22001]: String data, right truncated: 1406 Data too long for column 'order_no' at row 1' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:124
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(124): PDO->exec('insert  into `p...')
    #1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(300): re\rgx\mysql_db->exec('insert  into `p...')
    #2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(959): re\rgx\mysql_db->insert('insert  into `p...', false)
    #3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(820): re\rgx\table->insert()
    #4 /data/htdocs/emera_tech/zuchev1/wap/module/order.module.php(59): re\rgx\table->save()
    #5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_wap\order_module->submit_action()
    #6 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
    #7 /data/htdocs/emera_tech/zuchev1/wap/index.php(21): include('/data/htdocs/em...')
    #8 {main},1,)
 # line:00138 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[22001]: String data, right truncated: 1406 Data too long for column 'order_no' at row 1' in /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php:124
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(124): PDO->exec('insert  into `p...')
    #1 /data/htdocs/emera_tech/zuchev1/core/rgx/extra/db/mysql.db.php(300): re\rgx\mysql_db->exec('insert  into `p...')
    #2 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(959): re\rgx\mysql_db->insert('insert  into `p...', false)
    #3 /data/htdocs/emera_tech/zuchev1/core/rgx/class/table.class.php(820): re\rgx\table->insert()
    #4 /data/htdocs/emera_tech/zuchev1/wap/module/order.module.php(59): re\rgx\table->save()
    #5 /data/htdocs/emera_tech/zuchev1/core/rgx/class/app.class.php(77): com\default_wap\order_module->submit_action()
    #6 /data/htdocs/emera_tech/zuchev1/core/rgx/rgx.php(156): re\rgx\app::init()
    #7 /data/htdocs/emera_tech/zuchev1/wap/index.php(21): include('/data/htdocs/em...')
    #8 {main})
 # line:00300 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->exec(insert  into `pre_order`( `pre_order`.`order_id`, `pre_order`.`order_no`, `pre_order`.`order_title`, `pre_order`.`order_car_id`, `pre_order`.`order_amount`, `pre_order`.`order_paid_amount`, `pre_order`.`order_create_date`, `pre_order`.`order_status`, `pre_order`.`order_user_fullname`, `pre_order`.`order_user_mobile`, `pre_order`.`order_user_id`)  
     values( '0', '201911101817536568', '荣威550混动（沪牌）', '3', '2800', '0', '20191110181753', '1', '张女士', '13611593656', '0') )
 # line:00959 file : RGX:class/table.class.php re\rgx\mysql_db->insert(insert  into `pre_order`( `pre_order`.`order_id`, `pre_order`.`order_no`, `pre_order`.`order_title`, `pre_order`.`order_car_id`, `pre_order`.`order_amount`, `pre_order`.`order_paid_amount`, `pre_order`.`order_create_date`, `pre_order`.`order_status`, `pre_order`.`order_user_fullname`, `pre_order`.`order_user_mobile`, `pre_order`.`order_user_id`)  
     values( '0', '201911101817536568', '荣威550混动（沪牌）', '3', '2800', '0', '20191110181753', '1', '张女士', '13611593656', '0') ,)
 # line:00820 file : RGX:class/table.class.php re\rgx\table->insert()
 # line:00059 file : APP:module/order.module.php re\rgx\table->save()
 # line:00077 file : RGX:class/app.class.php com\default_wap\order_module->submit_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev1/wap/
 * @url  /zuchev1/wap/index.php/order/submit.html
 * @date 2019-11-10 18:17:53 
 * @desc 查询失败 「 1406#Data too long for column 'order_no' at row 1 」</li><li>查询语句 「 insert  into `pre_order`( `pre_order`.`order_id`, `pre_order`.`order_no`, `pre_order`.`order_title`, `pre_order`.`order_car_id`, `pre_order`.`order_amount`, `pre_order`.`order_paid_amount`, `pre_order`.`order_create_date`, `pre_order`.`order_status`, `pre_order`.`order_user_fullname`, `pre_order`.`order_user_mobile`, `pre_order`.`order_user_id`)  
 values( '0', '201911101817536568', '荣威550混动（沪牌）', '3', '2800', '0', '20191110181753', '1', '张女士', '13611593656', '0')  」
 * @extra Nil

 # line:00139 file : RGX:extra/db/mysql.db.php ()
 # line:00300 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->exec(insert  into `pre_order`( `pre_order`.`order_id`, `pre_order`.`order_no`, `pre_order`.`order_title`, `pre_order`.`order_car_id`, `pre_order`.`order_amount`, `pre_order`.`order_paid_amount`, `pre_order`.`order_create_date`, `pre_order`.`order_status`, `pre_order`.`order_user_fullname`, `pre_order`.`order_user_mobile`, `pre_order`.`order_user_id`)  
     values( '0', '201911101817536568', '荣威550混动（沪牌）', '3', '2800', '0', '20191110181753', '1', '张女士', '13611593656', '0') )
 # line:00959 file : RGX:class/table.class.php re\rgx\mysql_db->insert(insert  into `pre_order`( `pre_order`.`order_id`, `pre_order`.`order_no`, `pre_order`.`order_title`, `pre_order`.`order_car_id`, `pre_order`.`order_amount`, `pre_order`.`order_paid_amount`, `pre_order`.`order_create_date`, `pre_order`.`order_status`, `pre_order`.`order_user_fullname`, `pre_order`.`order_user_mobile`, `pre_order`.`order_user_id`)  
     values( '0', '201911101817536568', '荣威550混动（沪牌）', '3', '2800', '0', '20191110181753', '1', '张女士', '13611593656', '0') ,)
 # line:00820 file : RGX:class/table.class.php re\rgx\table->insert()
 # line:00059 file : APP:module/order.module.php re\rgx\table->save()
 # line:00077 file : RGX:class/app.class.php com\default_wap\order_module->submit_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?>