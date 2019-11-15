<?php
/*
  +-------------------------------------------------------
  + user 表模型
  + ------------------------------------------------------
  + @update 2019-11-15 15:28:55
  + @desc 若修改了表结构, 请使用下面的命令更新模型文件
  + @cmd /bin/php core/rgx/build.php -t -d=/data/htdocs/emera_tech/zuchev2/wap -f=1
  +-------------------------------------------------------
*/
namespace re\rgx;

class user_table extends table {

    /*
      +--------------------------
      + 编码
      +--------------------------
    */
    protected $_charset = 'utf8mb4';

    /*
      +--------------------------
      + 字段
      +--------------------------
    */
    protected $_fields = [
        'user_id' => [
            'name'               => 'user_id',
            'type'               => 'int',
            'field_type'         => 'int',
            'min'                => 0,
            'max'                => 4294967295,
            'label'              => 'user_id',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'user_sno' => [
            'name'               => 'user_sno',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 50,
            'label'              => '学号',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'user_sname' => [
            'name'               => 'user_sname',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 255,
            'label'              => '学校名称',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'user_name' => [
            'name'               => 'user_name',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 100,
            'label'              => 'user_name',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'user_mobile' => [
            'name'               => 'user_mobile',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 20,
            'label'              => 'user_mobile',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'user_password' => [
            'name'               => 'user_password',
            'type'               => 'char',
            'field_type'         => 'char',
            'min'                => 0,
            'max'                => 40,
            'label'              => 'user_password',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'user_salt' => [
            'name'               => 'user_salt',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 10,
            'label'              => 'user_salt',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'user_register_date' => [
            'name'               => 'user_register_date',
            'type'               => 'date',
            'field_type'         => 'date',
            'min'                => 0,
            'max'                => 0,
            'label'              => 'user_register_date',
            'validate'           => ['re\rgx\filter', 'is_mysql_date'],
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'user_agent_id' => [
            'name'               => 'user_agent_id',
            'type'               => 'int',
            'field_type'         => 'int',
            'min'                => 0,
            'max'                => 4294967295,
            'label'              => '推荐人ID',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
    ];

    /*
      +--------------------------
      + 主键
      +--------------------------
    */
    protected $_primary_key = [
        'key' => 'user_id',
        'inc' => true
    ];

    /*
      +--------------------------
      + 字段默认值
      +--------------------------
    */
    public $defaults = [
        'user_id'             => 0,
        'user_sno'            => '',
        'user_sname'          => '',
        'user_name'           => '',
        'user_mobile'         => '',
        'user_password'       => '',
        'user_salt'           => '',
        'user_register_date'  => '',
        'user_agent_id'       => 0,
    ];

    /*
      +--------------------------
      + 字段过滤规则
      +--------------------------
    */
    public $filter = [
        'user_id'             => ['re\rgx\filter', 'int'],
        'user_sno'            => ['re\rgx\filter', 'char'],
        'user_sname'          => ['re\rgx\filter', 'char'],
        'user_name'           => ['re\rgx\filter', 'char'],
        'user_mobile'         => ['re\rgx\filter', 'char'],
        'user_password'       => ['re\rgx\filter', 'char'],
        'user_salt'           => ['re\rgx\filter', 'char'],
        'user_agent_id'       => ['re\rgx\filter', 'int'],
    ];

    /*
      +--------------------------
      + 唯一性检测
      +--------------------------
    */
    public $unique_check = [
        ['user_mobile'],
        ['user_sno']
    ];

    /*
      +--------------------------
      + 自定义字段验证规则
      + @example 
           [
               // 字段名称
               'name'  => 'user_name',
               // 验证类型, 0 使用filter::$rule的规则进行验证
               //         1 使用正则表达式验证
               //         2 使用自定义方法验证
               'type'  => 0,
               // 若type为 0 则 rule 表示规则名称
               //         1 则 rule 为正则表达式 (/^\w+$/)
               //         2 则 rule 为自定义方法或函数 (['re\rgx\filter', 'char']] 或 'is_numeric')
               'rule'  => 'require',
               // 验证失败返回的文案
               // 若要使用语言变量, 则用#开头. (例如: #user name)
               'error' => '您输入的用户名格式有误'
           ]
      +--------------------------
    */
    public $validate = [];

}