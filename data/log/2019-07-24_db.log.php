<?php
/*
 * @ip   ::1
 * @app  http://localhost/fjzj/
 * @url  /fjzj/
 * @date 2019-07-24 00:01:12 
 * @desc PDOException: PDO::__construct(): php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known in /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php:74
Stack trace:
#0 /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=bdm6...', 'bdm64396441', 'Jxzjrl2019#')
#1 /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
#2 /data/htdocs/emera_tech/fjzj/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /data/htdocs/emera_tech/fjzj/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /data/htdocs/emera_tech/fjzj/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('re\\rgx\\focus_ta...', true, NULL)
#7 /data/htdocs/emera_tech/fjzj/module/index.module.php(13): re\rgx\OBJ('focus_table')
#8 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(77): com\default_wap\index_module->index_action()
#9 /data/htdocs/emera_tech/fjzj/rgx/rgx.php(156): re\rgx\app::init()
#10 /data/htdocs/emera_tech/fjzj/index.php(21): include('/data/htdocs/em...')
#11 {main}

Next PDOException: SQLSTATE[HY000] [2002] php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known in /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php:74
Stack trace:
#0 /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=bdm6...', 'bdm64396441', 'Jxzjrl2019#')
#1 /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
#2 /data/htdocs/emera_tech/fjzj/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /data/htdocs/emera_tech/fjzj/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /data/htdocs/emera_tech/fjzj/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('re\\rgx\\focus_ta...', true, NULL)
#7 /data/htdocs/emera_tech/fjzj/module/index.module.php(13): re\rgx\OBJ('focus_table')
#8 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(77): com\default_wap\index_module->index_action()
#9 /data/htdocs/emera_tech/fjzj/rgx/rgx.php(156): re\rgx\app::init()
#10 /data/htdocs/emera_tech/fjzj/index.php(21): include('/data/htdocs/em...')
#11 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(PDOException: PDO::__construct(): php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known in /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=bdm6...', 'bdm64396441', 'Jxzjrl2019#')
    #1 /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /data/htdocs/emera_tech/fjzj/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /data/htdocs/emera_tech/fjzj/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /data/htdocs/emera_tech/fjzj/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('re\\rgx\\focus_ta...', true, NULL)
    #7 /data/htdocs/emera_tech/fjzj/module/index.module.php(13): re\rgx\OBJ('focus_table')
    #8 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(77): com\default_wap\index_module->index_action()
    #9 /data/htdocs/emera_tech/fjzj/rgx/rgx.php(156): re\rgx\app::init()
    #10 /data/htdocs/emera_tech/fjzj/index.php(21): include('/data/htdocs/em...')
    #11 {main}
    
    Next PDOException: SQLSTATE[HY000] [2002] php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known in /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=bdm6...', 'bdm64396441', 'Jxzjrl2019#')
    #1 /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /data/htdocs/emera_tech/fjzj/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /data/htdocs/emera_tech/fjzj/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /data/htdocs/emera_tech/fjzj/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('re\\rgx\\focus_ta...', true, NULL)
    #7 /data/htdocs/emera_tech/fjzj/module/index.module.php(13): re\rgx\OBJ('focus_table')
    #8 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(77): com\default_wap\index_module->index_action()
    #9 /data/htdocs/emera_tech/fjzj/rgx/rgx.php(156): re\rgx\app::init()
    #10 /data/htdocs/emera_tech/fjzj/index.php(21): include('/data/htdocs/em...')
    #11 {main},1,)
 # line:00078 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,PDOException: PDO::__construct(): php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known in /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=bdm6...', 'bdm64396441', 'Jxzjrl2019#')
    #1 /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /data/htdocs/emera_tech/fjzj/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /data/htdocs/emera_tech/fjzj/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /data/htdocs/emera_tech/fjzj/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('re\\rgx\\focus_ta...', true, NULL)
    #7 /data/htdocs/emera_tech/fjzj/module/index.module.php(13): re\rgx\OBJ('focus_table')
    #8 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(77): com\default_wap\index_module->index_action()
    #9 /data/htdocs/emera_tech/fjzj/rgx/rgx.php(156): re\rgx\app::init()
    #10 /data/htdocs/emera_tech/fjzj/index.php(21): include('/data/htdocs/em...')
    #11 {main}
    
    Next PDOException: SQLSTATE[HY000] [2002] php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known in /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=bdm6...', 'bdm64396441', 'Jxzjrl2019#')
    #1 /data/htdocs/emera_tech/fjzj/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /data/htdocs/emera_tech/fjzj/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /data/htdocs/emera_tech/fjzj/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /data/htdocs/emera_tech/fjzj/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('re\\rgx\\focus_ta...', true, NULL)
    #7 /data/htdocs/emera_tech/fjzj/module/index.module.php(13): re\rgx\OBJ('focus_table')
    #8 /data/htdocs/emera_tech/fjzj/rgx/class/app.class.php(77): com\default_wap\index_module->index_action()
    #9 /data/htdocs/emera_tech/fjzj/rgx/rgx.php(156): re\rgx\app::init()
    #10 /data/htdocs/emera_tech/fjzj/index.php(21): include('/data/htdocs/em...')
    #11 {main})
 # line:00031 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->_connect()
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(re\rgx\focus_table,1,)
 # line:00013 file : APP:module/index.module.php re\rgx\OBJ(focus_table)
 # line:00077 file : RGX:class/app.class.php com\default_wap\index_module->index_action()
 # line:00156 file : RGX:rgx.php re\rgx\app::init()

*/
?>