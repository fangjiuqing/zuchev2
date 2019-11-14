<?php
/*
 * @ip   127.0.0.1
 * @app  http://localhost:8888/fjzhongjing/
 * @url  /fjzhongjing/
 * @date 2019-03-01 16:37:53 
 * @desc PDOException: SQLSTATE[HY000] [2002] Connection refused in /Applications/MAMP/htdocs/fjzhongjing/rgx/extra/db/mysql.db.php:74
Stack trace:
#0 /Applications/MAMP/htdocs/fjzhongjing/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=127....', 'root', 'root')
#1 /Applications/MAMP/htdocs/fjzhongjing/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
#2 /Applications/MAMP/htdocs/fjzhongjing/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /Applications/MAMP/htdocs/fjzhongjing/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /Applications/MAMP/htdocs/fjzhongjing/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /Applications/MAMP/htdocs/fjzhongjing/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /Applications/MAMP/htdocs/fjzhongjing/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('re\\rgx\\new_cat_...', true, NULL)
#7 /Applications/MAMP/htdocs/fjzhongjing/module/base.module.php(100): re\rgx\OBJ('new_cat_table')
#8 /Applications/MAMP/htdocs/fjzhongjing/module/base.module.php(29): com\default_www\base_module->cat_tree()
#9 /Applications/MAMP/htdocs/fjzhongjing/rgx/class/app.class.php(70): com\default_www\base_module->__construct()
#10 /Applications/MAMP/htdocs/fjzhongjing/rgx/rgx.php(157): re\rgx\app::init()
#11 /Applications/MAMP/htdocs/fjzhongjing/index.php(21): include('/Applications/M...')
#12 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(PDOException: SQLSTATE[HY000] [2002] Connection refused in /Applications/MAMP/htdocs/fjzhongjing/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /Applications/MAMP/htdocs/fjzhongjing/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=127....', 'root', 'root')
    #1 /Applications/MAMP/htdocs/fjzhongjing/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /Applications/MAMP/htdocs/fjzhongjing/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /Applications/MAMP/htdocs/fjzhongjing/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /Applications/MAMP/htdocs/fjzhongjing/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /Applications/MAMP/htdocs/fjzhongjing/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /Applications/MAMP/htdocs/fjzhongjing/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('re\\rgx\\new_cat_...', true, NULL)
    #7 /Applications/MAMP/htdocs/fjzhongjing/module/base.module.php(100): re\rgx\OBJ('new_cat_table')
    #8 /Applications/MAMP/htdocs/fjzhongjing/module/base.module.php(29): com\default_www\base_module->cat_tree()
    #9 /Applications/MAMP/htdocs/fjzhongjing/rgx/class/app.class.php(70): com\default_www\base_module->__construct()
    #10 /Applications/MAMP/htdocs/fjzhongjing/rgx/rgx.php(157): re\rgx\app::init()
    #11 /Applications/MAMP/htdocs/fjzhongjing/index.php(21): include('/Applications/M...')
    #12 {main},1,)
 # line:00078 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,PDOException: SQLSTATE[HY000] [2002] Connection refused in /Applications/MAMP/htdocs/fjzhongjing/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /Applications/MAMP/htdocs/fjzhongjing/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=127....', 'root', 'root')
    #1 /Applications/MAMP/htdocs/fjzhongjing/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /Applications/MAMP/htdocs/fjzhongjing/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /Applications/MAMP/htdocs/fjzhongjing/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /Applications/MAMP/htdocs/fjzhongjing/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /Applications/MAMP/htdocs/fjzhongjing/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /Applications/MAMP/htdocs/fjzhongjing/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('re\\rgx\\new_cat_...', true, NULL)
    #7 /Applications/MAMP/htdocs/fjzhongjing/module/base.module.php(100): re\rgx\OBJ('new_cat_table')
    #8 /Applications/MAMP/htdocs/fjzhongjing/module/base.module.php(29): com\default_www\base_module->cat_tree()
    #9 /Applications/MAMP/htdocs/fjzhongjing/rgx/class/app.class.php(70): com\default_www\base_module->__construct()
    #10 /Applications/MAMP/htdocs/fjzhongjing/rgx/rgx.php(157): re\rgx\app::init()
    #11 /Applications/MAMP/htdocs/fjzhongjing/index.php(21): include('/Applications/M...')
    #12 {main})
 # line:00031 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->_connect()
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(re\rgx\new_cat_table,1,)
 # line:00100 file : APP:module/base.module.php re\rgx\OBJ(new_cat_table)
 # line:00029 file : APP:module/base.module.php com\default_www\base_module->cat_tree()
 # line:00070 file : RGX:class/app.class.php com\default_www\base_module->__construct()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?>