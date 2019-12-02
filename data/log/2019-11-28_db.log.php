<?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/my/view?id=4.html
 * @date 2019-11-28 00:13:12 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT  1' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
#3 /data/htdocs/emera_tech/zuchev2/wap/module/my.module.php(91): re\rgx\table->get()
#4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\my_module->view_action()
#5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
#6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT  1' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /data/htdocs/emera_tech/zuchev2/wap/module/my.module.php(91): re\rgx\table->get()
    #4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\my_module->view_action()
    #5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT  1' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /data/htdocs/emera_tech/zuchev2/wap/module/my.module.php(91): re\rgx\table->get()
    #4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\my_module->view_action()
    #5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
    #7 {main})
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND ( `pre_order`.`order_id` = 4 ) AND (order_user_id = ) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND ( `pre_order`.`order_id` = 4 ) AND (order_user_id = ) LIMIT  1 
    ,,)
 # line:00091 file : APP:module/my.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\my_module->view_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/my/view?id=4.html
 * @date 2019-11-28 00:13:12 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT  1' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_order` 
 
WHERE 1 = 1 
 AND ( `pre_order`.`order_id` = 4 ) AND (order_user_id = ) LIMIT  1 
 」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND ( `pre_order`.`order_id` = 4 ) AND (order_user_id = ) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND ( `pre_order`.`order_id` = 4 ) AND (order_user_id = ) LIMIT  1 
    ,,)
 # line:00091 file : APP:module/my.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\my_module->view_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/my/view?id=4.html
 * @date 2019-11-28 00:14:33 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT  1' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
#3 /data/htdocs/emera_tech/zuchev2/wap/module/my.module.php(91): re\rgx\table->get()
#4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\my_module->view_action()
#5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
#6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT  1' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /data/htdocs/emera_tech/zuchev2/wap/module/my.module.php(91): re\rgx\table->get()
    #4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\my_module->view_action()
    #5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT  1' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /data/htdocs/emera_tech/zuchev2/wap/module/my.module.php(91): re\rgx\table->get()
    #4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\my_module->view_action()
    #5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
    #7 {main})
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND ( `pre_order`.`order_id` = 4 ) AND (order_user_id = ) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND ( `pre_order`.`order_id` = 4 ) AND (order_user_id = ) LIMIT  1 
    ,,)
 # line:00091 file : APP:module/my.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\my_module->view_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/my/view?id=4.html
 * @date 2019-11-28 00:14:33 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT  1' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_order` 
 
WHERE 1 = 1 
 AND ( `pre_order`.`order_id` = 4 ) AND (order_user_id = ) LIMIT  1 
 」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND ( `pre_order`.`order_id` = 4 ) AND (order_user_id = ) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND ( `pre_order`.`order_id` = 4 ) AND (order_user_id = ) LIMIT  1 
    ,,)
 # line:00091 file : APP:module/my.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\my_module->view_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-28 00:17:31 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
#3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(30): re\rgx\table->get_all()
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
    #3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(30): re\rgx\table->get_all()
    #4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
    #5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(30): re\rgx\table->get_all()
    #4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
    #5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
    #7 {main})
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) ,,,{closure})
 # line:00030 file : APP:module/order.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\order_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-28 00:17:31 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_order` 
 
WHERE 1 = 1 
 AND (order_user_mobile = )  」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) ,,,{closure})
 # line:00030 file : APP:module/order.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\order_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-28 00:17:57 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
#3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(30): re\rgx\table->get_all()
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
    #3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(30): re\rgx\table->get_all()
    #4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
    #5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(30): re\rgx\table->get_all()
    #4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
    #5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
    #7 {main})
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) ,,,{closure})
 # line:00030 file : APP:module/order.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\order_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-28 00:17:57 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_order` 
 
WHERE 1 = 1 
 AND (order_user_mobile = )  」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) ,,,{closure})
 # line:00030 file : APP:module/order.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\order_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-28 13:56:36 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
#3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(30): re\rgx\table->get_all()
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
    #3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(30): re\rgx\table->get_all()
    #4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
    #5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/emera_tech/zuchev2/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/emera_tech/zuchev2/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /data/htdocs/emera_tech/zuchev2/wap/module/order.module.php(30): re\rgx\table->get_all()
    #4 /data/htdocs/emera_tech/zuchev2/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
    #5 /data/htdocs/emera_tech/zuchev2/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/emera_tech/zuchev2/wap/index.php(21): include('/data/htdocs/em...')
    #7 {main})
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) ,,,{closure})
 # line:00030 file : APP:module/order.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\order_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-28 13:56:36 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_order` 
 
WHERE 1 = 1 
 AND (order_user_mobile = )  」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) ,,,{closure})
 # line:00030 file : APP:module/order.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\order_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   183.209.152.245
 * @app  http://47.108.136.102/
 * @url  /index.php/my/order.html
 * @date 2019-11-28 23:41:43 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /home/wwwroot/51zuche/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
#3 /home/wwwroot/51zuche/wap/module/my.module.php(29): re\rgx\table->get_all()
#4 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_wap\my_module->order_action()
#5 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
#6 /home/wwwroot/51zuche/wap/index.php(21): include('/home/wwwroot/5...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /home/wwwroot/51zuche/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /home/wwwroot/51zuche/wap/module/my.module.php(29): re\rgx\table->get_all()
    #4 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_wap\my_module->order_action()
    #5 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /home/wwwroot/51zuche/wap/index.php(21): include('/home/wwwroot/5...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /home/wwwroot/51zuche/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /home/wwwroot/51zuche/wap/module/my.module.php(29): re\rgx\table->get_all()
    #4 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_wap\my_module->order_action()
    #5 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /home/wwwroot/51zuche/wap/index.php(21): include('/home/wwwroot/5...')
    #7 {main})
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) ,,,{closure})
 # line:00029 file : APP:module/my.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\my_module->order_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   183.209.152.245
 * @app  http://47.108.136.102/
 * @url  /index.php/my/order.html
 * @date 2019-11-28 23:41:43 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_order` 
 
WHERE 1 = 1 
 AND (order_user_mobile = )  」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) ,,,{closure})
 # line:00029 file : APP:module/my.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\my_module->order_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   183.209.152.245
 * @app  http://47.108.136.102/
 * @url  /index.php/my/order.html
 * @date 2019-11-28 23:44:20 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /home/wwwroot/51zuche/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
#3 /home/wwwroot/51zuche/wap/module/my.module.php(29): re\rgx\table->get_all()
#4 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_wap\my_module->order_action()
#5 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
#6 /home/wwwroot/51zuche/wap/index.php(21): include('/home/wwwroot/5...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /home/wwwroot/51zuche/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /home/wwwroot/51zuche/wap/module/my.module.php(29): re\rgx\table->get_all()
    #4 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_wap\my_module->order_action()
    #5 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /home/wwwroot/51zuche/wap/index.php(21): include('/home/wwwroot/5...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /home/wwwroot/51zuche/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /home/wwwroot/51zuche/wap/module/my.module.php(29): re\rgx\table->get_all()
    #4 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_wap\my_module->order_action()
    #5 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /home/wwwroot/51zuche/wap/index.php(21): include('/home/wwwroot/5...')
    #7 {main})
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) ,,,{closure})
 # line:00029 file : APP:module/my.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\my_module->order_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   183.209.152.245
 * @app  http://47.108.136.102/
 * @url  /index.php/my/order.html
 * @date 2019-11-28 23:44:20 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_order` 
 
WHERE 1 = 1 
 AND (order_user_mobile = )  」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) ,,,{closure})
 # line:00029 file : APP:module/my.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\my_module->order_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   183.209.152.245
 * @app  http://47.108.136.102/
 * @url  /index.php/my/order.html
 * @date 2019-11-28 23:44:28 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /home/wwwroot/51zuche/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
#3 /home/wwwroot/51zuche/wap/module/my.module.php(29): re\rgx\table->get_all()
#4 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_wap\my_module->order_action()
#5 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
#6 /home/wwwroot/51zuche/wap/index.php(21): include('/home/wwwroot/5...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /home/wwwroot/51zuche/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /home/wwwroot/51zuche/wap/module/my.module.php(29): re\rgx\table->get_all()
    #4 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_wap\my_module->order_action()
    #5 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /home/wwwroot/51zuche/wap/index.php(21): include('/home/wwwroot/5...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /home/wwwroot/51zuche/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /home/wwwroot/51zuche/wap/module/my.module.php(29): re\rgx\table->get_all()
    #4 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_wap\my_module->order_action()
    #5 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /home/wwwroot/51zuche/wap/index.php(21): include('/home/wwwroot/5...')
    #7 {main})
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) ,,,{closure})
 # line:00029 file : APP:module/my.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\my_module->order_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   183.209.152.245
 * @app  http://47.108.136.102/
 * @url  /index.php/my/order.html
 * @date 2019-11-28 23:44:28 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_order` 
 
WHERE 1 = 1 
 AND (order_user_mobile = )  」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) ,,,{closure})
 # line:00029 file : APP:module/my.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\my_module->order_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   183.209.152.245
 * @app  http://47.108.136.102/
 * @url  /index.php/my/order.html
 * @date 2019-11-28 23:44:37 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /home/wwwroot/51zuche/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
#3 /home/wwwroot/51zuche/wap/module/my.module.php(29): re\rgx\table->get_all()
#4 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_wap\my_module->order_action()
#5 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
#6 /home/wwwroot/51zuche/wap/index.php(21): include('/home/wwwroot/5...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /home/wwwroot/51zuche/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /home/wwwroot/51zuche/wap/module/my.module.php(29): re\rgx\table->get_all()
    #4 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_wap\my_module->order_action()
    #5 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /home/wwwroot/51zuche/wap/index.php(21): include('/home/wwwroot/5...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /home/wwwroot/51zuche/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /home/wwwroot/51zuche/wap/module/my.module.php(29): re\rgx\table->get_all()
    #4 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_wap\my_module->order_action()
    #5 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /home/wwwroot/51zuche/wap/index.php(21): include('/home/wwwroot/5...')
    #7 {main})
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) ,,,{closure})
 # line:00029 file : APP:module/my.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\my_module->order_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   183.209.152.245
 * @app  http://47.108.136.102/
 * @url  /index.php/my/order.html
 * @date 2019-11-28 23:44:37 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_order` 
 
WHERE 1 = 1 
 AND (order_user_mobile = )  」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) ,,,{closure})
 # line:00029 file : APP:module/my.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\my_module->order_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   183.209.152.245
 * @app  http://47.108.136.102/
 * @url  /index.php/my/order.html
 * @date 2019-11-28 23:44:44 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /home/wwwroot/51zuche/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
#3 /home/wwwroot/51zuche/wap/module/my.module.php(29): re\rgx\table->get_all()
#4 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_wap\my_module->order_action()
#5 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
#6 /home/wwwroot/51zuche/wap/index.php(21): include('/home/wwwroot/5...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /home/wwwroot/51zuche/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /home/wwwroot/51zuche/wap/module/my.module.php(29): re\rgx\table->get_all()
    #4 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_wap\my_module->order_action()
    #5 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /home/wwwroot/51zuche/wap/index.php(21): include('/home/wwwroot/5...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5' in /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /home/wwwroot/51zuche/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /home/wwwroot/51zuche/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /home/wwwroot/51zuche/wap/module/my.module.php(29): re\rgx\table->get_all()
    #4 /home/wwwroot/51zuche/core/rgx/class/app.class.php(77): com\default_wap\my_module->order_action()
    #5 /home/wwwroot/51zuche/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /home/wwwroot/51zuche/wap/index.php(21): include('/home/wwwroot/5...')
    #7 {main})
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) ,,,{closure})
 # line:00029 file : APP:module/my.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\my_module->order_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   183.209.152.245
 * @app  http://47.108.136.102/
 * @url  /index.php/my/order.html
 * @date 2019-11-28 23:44:44 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_order` 
 
WHERE 1 = 1 
 AND (order_user_mobile = )  」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `pre_order` 
     
    WHERE 1 = 1 
     AND (order_user_mobile = ) ,,,{closure})
 # line:00029 file : APP:module/my.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\my_module->order_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?>