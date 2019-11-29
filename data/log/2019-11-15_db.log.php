<?php
/*
 * @ip   192.168.0.104
 * @app  http://192.168.0.104/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-15 00:08:11 
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
 * @ip   192.168.0.104
 * @app  http://192.168.0.104/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-15 00:08:11 
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
 * @ip   192.168.0.104
 * @app  http://192.168.0.104/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-15 00:12:50 
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
 * @ip   192.168.0.104
 * @app  http://192.168.0.104/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-15 00:12:50 
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
 * @ip   192.168.0.108
 * @app  http://192.168.0.104/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-15 00:14:07 
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
 * @ip   192.168.0.108
 * @app  http://192.168.0.104/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-15 00:14:07 
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
 * @ip   192.168.0.108
 * @app  http://192.168.0.104/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-15 00:14:13 
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
 * @ip   192.168.0.108
 * @app  http://192.168.0.104/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-15 00:14:13 
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
 * @ip   192.168.0.108
 * @app  http://192.168.0.104/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-15 00:14:17 
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
 * @ip   192.168.0.108
 * @app  http://192.168.0.104/zuchev2/wap/
 * @url  /zuchev2/wap/index.php/order.html
 * @date 2019-11-15 00:14:17 
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
 * @ip   112.0.53.79
 * @app  https://case.isoftware.xyz/carrent/wap/
 * @url  /carrent/wap/index.php/order.html
 * @date 2019-11-15 02:09:05 
 * @desc PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5 in /data/htdocs/preview/carrent/core/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /data/htdocs/preview/carrent/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /data/htdocs/preview/carrent/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /data/htdocs/preview/carrent/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
#3 /data/htdocs/preview/carrent/wap/module/order.module.php(30): re\rgx\table->get_all()
#4 /data/htdocs/preview/carrent/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
#5 /data/htdocs/preview/carrent/core/rgx/rgx.php(156): re\rgx\app::init()
#6 /data/htdocs/preview/carrent/wap/index.php(21): include('/data/htdocs/pr...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5 in /data/htdocs/preview/carrent/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/preview/carrent/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/preview/carrent/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/preview/carrent/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /data/htdocs/preview/carrent/wap/module/order.module.php(30): re\rgx\table->get_all()
    #4 /data/htdocs/preview/carrent/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
    #5 /data/htdocs/preview/carrent/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/preview/carrent/wap/index.php(21): include('/data/htdocs/pr...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 5 in /data/htdocs/preview/carrent/core/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/preview/carrent/core/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/preview/carrent/core/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/preview/carrent/core/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, Object(Closure))
    #3 /data/htdocs/preview/carrent/wap/module/order.module.php(30): re\rgx\table->get_all()
    #4 /data/htdocs/preview/carrent/core/rgx/class/app.class.php(77): com\default_wap\order_module->index_action()
    #5 /data/htdocs/preview/carrent/core/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/preview/carrent/wap/index.php(21): include('/data/htdocs/pr...')
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
 * @ip   112.0.53.79
 * @app  https://case.isoftware.xyz/carrent/wap/
 * @url  /carrent/wap/index.php/order.html
 * @date 2019-11-15 02:09:05 
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
?>