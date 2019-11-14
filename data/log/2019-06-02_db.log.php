<?php
/*
 * @ip   127.0.0.1
 * @app  http://fjzj.d/
 * @url  /index.php/index/index
 * @date 2019-06-02 16:07:18 
 * @desc exception 'PDOException' with message 'SQLSTATE[42S22]: Column not found: 1054 Unknown column '首页第一张' in 'where clause'' in /data/htdocs/fjzj/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /data/htdocs/fjzj/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /data/htdocs/fjzj/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /data/htdocs/fjzj/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, false)
#3 /data/htdocs/fjzj/module/index.module.php(17): re\rgx\table->get_all()
#4 /data/htdocs/fjzj/rgx/class/app.class.php(77): com\default_wap\index_module->index_action()
#5 /data/htdocs/fjzj/rgx/rgx.php(156): re\rgx\app::init()
#6 /data/htdocs/fjzj/index.php(21): include('/data/htdocs/fj...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42S22]: Column not found: 1054 Unknown column '首页第一张' in 'where clause'' in /data/htdocs/fjzj/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/fjzj/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/fjzj/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/fjzj/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, false)
    #3 /data/htdocs/fjzj/module/index.module.php(17): re\rgx\table->get_all()
    #4 /data/htdocs/fjzj/rgx/class/app.class.php(77): com\default_wap\index_module->index_action()
    #5 /data/htdocs/fjzj/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/fjzj/index.php(21): include('/data/htdocs/fj...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42S22]: Column not found: 1054 Unknown column '首页第一张' in 'where clause'' in /data/htdocs/fjzj/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/fjzj/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/fjzj/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/fjzj/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, false)
    #3 /data/htdocs/fjzj/module/index.module.php(17): re\rgx\table->get_all()
    #4 /data/htdocs/fjzj/rgx/class/app.class.php(77): com\default_wap\index_module->index_action()
    #5 /data/htdocs/fjzj/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/fjzj/index.php(21): include('/data/htdocs/fj...')
    #7 {main})
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `focus` 
     
    WHERE 1 = 1 
     AND (`language` = '中文版') AND ( `focus`.`device` = 'M端' ) AND (class in (首页第一张,首页第二张,首页第三张)) ORDER BY `id` desc 
    LIMIT  3 
    )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `focus` 
     
    WHERE 1 = 1 
     AND (`language` = '中文版') AND ( `focus`.`device` = 'M端' ) AND (class in (首页第一张,首页第二张,首页第三张)) ORDER BY `id` desc 
    LIMIT  3 
    ,,,)
 # line:00017 file : APP:module/index.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\index_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   127.0.0.1
 * @app  http://fjzj.d/
 * @url  /index.php/index/index
 * @date 2019-06-02 16:07:18 
 * @desc 查询失败 「 1054#Unknown column '首页第一张' in 'where clause' 」</li><li>查询语句 「 select  *  
FROM `focus` 
 
WHERE 1 = 1 
 AND (`language` = '中文版') AND ( `focus`.`device` = 'M端' ) AND (class in (首页第一张,首页第二张,首页第三张)) ORDER BY `id` desc 
LIMIT  3 
 」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `focus` 
     
    WHERE 1 = 1 
     AND (`language` = '中文版') AND ( `focus`.`device` = 'M端' ) AND (class in (首页第一张,首页第二张,首页第三张)) ORDER BY `id` desc 
    LIMIT  3 
    )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `focus` 
     
    WHERE 1 = 1 
     AND (`language` = '中文版') AND ( `focus`.`device` = 'M端' ) AND (class in (首页第一张,首页第二张,首页第三张)) ORDER BY `id` desc 
    LIMIT  3 
    ,,,)
 # line:00017 file : APP:module/index.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\index_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   127.0.0.1
 * @app  http://fjzj.d/
 * @url  /index.php/index/index
 * @date 2019-06-02 16:46:18 
 * @desc exception 'PDOException' with message 'SQLSTATE[42S22]: Column not found: 1054 Unknown column 'ifnew' in 'where clause'' in /data/htdocs/fjzj/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /data/htdocs/fjzj/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /data/htdocs/fjzj/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /data/htdocs/fjzj/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, false)
#3 /data/htdocs/fjzj/module/index.module.php(58): re\rgx\table->get_all()
#4 /data/htdocs/fjzj/rgx/class/app.class.php(77): com\default_wap\index_module->index_action()
#5 /data/htdocs/fjzj/rgx/rgx.php(156): re\rgx\app::init()
#6 /data/htdocs/fjzj/index.php(21): include('/data/htdocs/fj...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42S22]: Column not found: 1054 Unknown column 'ifnew' in 'where clause'' in /data/htdocs/fjzj/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/fjzj/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/fjzj/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/fjzj/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, false)
    #3 /data/htdocs/fjzj/module/index.module.php(58): re\rgx\table->get_all()
    #4 /data/htdocs/fjzj/rgx/class/app.class.php(77): com\default_wap\index_module->index_action()
    #5 /data/htdocs/fjzj/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/fjzj/index.php(21): include('/data/htdocs/fj...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42S22]: Column not found: 1054 Unknown column 'ifnew' in 'where clause'' in /data/htdocs/fjzj/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/fjzj/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/fjzj/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/fjzj/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select  *  \nFRO...', NULL, false, false)
    #3 /data/htdocs/fjzj/module/index.module.php(58): re\rgx\table->get_all()
    #4 /data/htdocs/fjzj/rgx/class/app.class.php(77): com\default_wap\index_module->index_action()
    #5 /data/htdocs/fjzj/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/fjzj/index.php(21): include('/data/htdocs/fj...')
    #7 {main})
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `duty` 
     
    WHERE 1 = 1 
     AND (`language` = '中文版') AND (`ifnew` = '首页') ORDER BY `duty`.`sort` desc , `id` desc 
    LIMIT  2 
    )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `duty` 
     
    WHERE 1 = 1 
     AND (`language` = '中文版') AND (`ifnew` = '首页') ORDER BY `duty`.`sort` desc , `id` desc 
    LIMIT  2 
    ,,,)
 # line:00058 file : APP:module/index.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\index_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   127.0.0.1
 * @app  http://fjzj.d/
 * @url  /index.php/index/index
 * @date 2019-06-02 16:46:18 
 * @desc 查询失败 「 1054#Unknown column 'ifnew' in 'where clause' 」</li><li>查询语句 「 select  *  
FROM `duty` 
 
WHERE 1 = 1 
 AND (`language` = '中文版') AND (`ifnew` = '首页') ORDER BY `duty`.`sort` desc , `id` desc 
LIMIT  2 
 」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `duty` 
     
    WHERE 1 = 1 
     AND (`language` = '中文版') AND (`ifnew` = '首页') ORDER BY `duty`.`sort` desc , `id` desc 
    LIMIT  2 
    )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select  *  
    FROM `duty` 
     
    WHERE 1 = 1 
     AND (`language` = '中文版') AND (`ifnew` = '首页') ORDER BY `duty`.`sort` desc , `id` desc 
    LIMIT  2 
    ,,,)
 # line:00058 file : APP:module/index.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\index_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?>