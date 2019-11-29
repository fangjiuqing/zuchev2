<?php
/*
 * @ip   ::1
 * @app  http://localhost/fjzj/
 * @url  /fjzj/index.php/index/internation
 * @date 2019-09-28 13:45:40 
 * @desc exception 'PDOException' with message 'SQLSTATE[42S22]: Column not found: 1054 Unknown column 'hits.picture' in 'field list'' in /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php(107): PDO->query('select `hits`.`...')
#1 /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select `hits`.`...')
#2 /data/htdocs/emera_tech/fjzj/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select `hits`.`...', NULL, false, false)
#3 /data/htdocs/emera_tech/fjzj/module/index.module.php(39): re\rgx\table->get_all()
#4 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(77): com\default_wap\index_module->internation_action()
#5 /data/htdocs/emera_tech/fjzj/rgx/rgx.php(156): re\rgx\app::init()
#6 /data/htdocs/emera_tech/fjzj/index.php(21): include('/data/htdocs/em...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42S22]: Column not found: 1054 Unknown column 'hits.picture' in 'field list'' in /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php(107): PDO->query('select `hits`.`...')
    #1 /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select `hits`.`...')
    #2 /data/htdocs/emera_tech/fjzj/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select `hits`.`...', NULL, false, false)
    #3 /data/htdocs/emera_tech/fjzj/module/index.module.php(39): re\rgx\table->get_all()
    #4 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(77): com\default_wap\index_module->internation_action()
    #5 /data/htdocs/emera_tech/fjzj/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/emera_tech/fjzj/index.php(21): include('/data/htdocs/em...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42S22]: Column not found: 1054 Unknown column 'hits.picture' in 'field list'' in /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php(107): PDO->query('select `hits`.`...')
    #1 /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php(238): re\rgx\mysql_db->query('select `hits`.`...')
    #2 /data/htdocs/emera_tech/fjzj/rgx/class/table.class.php(397): re\rgx\mysql_db->get_all('select `hits`.`...', NULL, false, false)
    #3 /data/htdocs/emera_tech/fjzj/module/index.module.php(39): re\rgx\table->get_all()
    #4 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(77): com\default_wap\index_module->internation_action()
    #5 /data/htdocs/emera_tech/fjzj/rgx/rgx.php(156): re\rgx\app::init()
    #6 /data/htdocs/emera_tech/fjzj/index.php(21): include('/data/htdocs/em...')
    #7 {main})
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select `hits`.`class` , `hits`.`picture` 
    FROM `hits` 
     
    WHERE 1 = 1 
     AND (`language` = '中文版') ORDER BY `id` asc 
    LIMIT  3 
    )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select `hits`.`class` , `hits`.`picture` 
    FROM `hits` 
     
    WHERE 1 = 1 
     AND (`language` = '中文版') ORDER BY `id` asc 
    LIMIT  3 
    ,,,)
 # line:00039 file : APP:module/index.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\index_module->internation_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/fjzj/
 * @url  /fjzj/index.php/index/internation
 * @date 2019-09-28 13:45:40 
 * @desc 查询失败 「 1054#Unknown column 'hits.picture' in 'field list' 」</li><li>查询语句 「 select `hits`.`class` , `hits`.`picture` 
FROM `hits` 
 
WHERE 1 = 1 
 AND (`language` = '中文版') ORDER BY `id` asc 
LIMIT  3 
 」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00238 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select `hits`.`class` , `hits`.`picture` 
    FROM `hits` 
     
    WHERE 1 = 1 
     AND (`language` = '中文版') ORDER BY `id` asc 
    LIMIT  3 
    )
 # line:00397 file : RGX:class/table.class.php re\rgx\mysql_db->get_all(select `hits`.`class` , `hits`.`picture` 
    FROM `hits` 
     
    WHERE 1 = 1 
     AND (`language` = '中文版') ORDER BY `id` asc 
    LIMIT  3 
    ,,,)
 # line:00039 file : APP:module/index.module.php re\rgx\table->get_all()
 # line:00077 file : RGX:class/app.class.php com\default_wap\index_module->internation_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   ::1
 * @app  http://localhost/fjzj/
 * @url  /fjzj/index.php/index/internation
 * @date 2019-09-28 15:40:47 
 * @desc exception 'PDOException' with message 'SQLSTATE[HY000] [2006] MySQL server has gone away' in /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php:74
Stack trace:
#0 /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=bdm6...', 'bdm64396441', 'Jxzjrl2019#')
#1 /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
#2 /data/htdocs/emera_tech/fjzj/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /data/htdocs/emera_tech/fjzj/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /data/htdocs/emera_tech/fjzj/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('focus_table', true, NULL)
#7 /data/htdocs/emera_tech/fjzj/module/index.module.php(21): re\rgx\OBJ('focus_table')
#8 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(77): com\default_wap\index_module->internation_action()
#9 /data/htdocs/emera_tech/fjzj/rgx/rgx.php(156): re\rgx\app::init()
#10 /data/htdocs/emera_tech/fjzj/index.php(21): include('/data/htdocs/em...')
#11 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[HY000] [2006] MySQL server has gone away' in /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=bdm6...', 'bdm64396441', 'Jxzjrl2019#')
    #1 /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /data/htdocs/emera_tech/fjzj/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /data/htdocs/emera_tech/fjzj/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /data/htdocs/emera_tech/fjzj/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('focus_table', true, NULL)
    #7 /data/htdocs/emera_tech/fjzj/module/index.module.php(21): re\rgx\OBJ('focus_table')
    #8 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(77): com\default_wap\index_module->internation_action()
    #9 /data/htdocs/emera_tech/fjzj/rgx/rgx.php(156): re\rgx\app::init()
    #10 /data/htdocs/emera_tech/fjzj/index.php(21): include('/data/htdocs/em...')
    #11 {main},1,)
 # line:00078 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[HY000] [2006] MySQL server has gone away' in /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=bdm6...', 'bdm64396441', 'Jxzjrl2019#')
    #1 /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /data/htdocs/emera_tech/fjzj/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /data/htdocs/emera_tech/fjzj/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /data/htdocs/emera_tech/fjzj/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('focus_table', true, NULL)
    #7 /data/htdocs/emera_tech/fjzj/module/index.module.php(21): re\rgx\OBJ('focus_table')
    #8 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(77): com\default_wap\index_module->internation_action()
    #9 /data/htdocs/emera_tech/fjzj/rgx/rgx.php(156): re\rgx\app::init()
    #10 /data/htdocs/emera_tech/fjzj/index.php(21): include('/data/htdocs/em...')
    #11 {main})
 # line:00031 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->_connect()
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(focus_table,1,)
 # line:00021 file : APP:module/index.module.php re\rgx\OBJ(focus_table)
 # line:00077 file : RGX:class/app.class.php com\default_wap\index_module->internation_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?>