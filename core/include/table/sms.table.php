<?php
/*
  +-------------------------------------------------------
  + sms 表模型
  + ------------------------------------------------------
  + @update 2019-11-28 13:34:24
  + @desc 若修改了表结构, 请使用下面的命令更新模型文件
  + @cmd /bin/php core/rgx/build.php -t -d=/data/htdocs/emera_tech/zuchev2/wap -f=1
  +-------------------------------------------------------
*/
namespace re\rgx;

class sms_table extends table {

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
        'sms_id' => [
            'name'               => 'sms_id',
            'type'               => 'int',
            'field_type'         => 'int',
            'min'                => 0,
            'max'                => 4294967295,
            'label'              => 'sms_id',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'sms_user_id' => [
            'name'               => 'sms_user_id',
            'type'               => 'int',
            'field_type'         => 'int',
            'min'                => -2147483648,
            'max'                => 2147483647,
            'label'              => 'sms_user_id',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'sms_mobile' => [
            'name'               => 'sms_mobile',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 20,
            'label'              => 'sms_mobile',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'sms_type' => [
            'name'               => 'sms_type',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 20,
            'label'              => 'sms_type',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'sms_adate' => [
            'name'               => 'sms_adate',
            'type'               => 'int',
            'field_type'         => 'int',
            'min'                => -2147483648,
            'max'                => 2147483647,
            'label'              => 'sms_adate',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'sms_text' => [
            'name'               => 'sms_text',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 20,
            'label'              => 'sms_text',
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
        'key' => 'sms_id',
        'inc' => true
    ];

    /*
      +--------------------------
      + 字段默认值
      +--------------------------
    */
    public $defaults = [
        'sms_id'      => 0,
        'sms_user_id' => 0,
        'sms_mobile'  => '',
        'sms_type'    => '',
        'sms_adate'   => 0,
        'sms_text'    => '',
    ];

    /*
      +--------------------------
      + 字段过滤规则
      +--------------------------
    */
    public $filter = [
        'sms_id'      => ['re\rgx\filter', 'int'],
        'sms_user_id' => ['re\rgx\filter', 'int'],
        'sms_mobile'  => ['re\rgx\filter', 'char'],
        'sms_type'    => ['re\rgx\filter', 'char'],
        'sms_adate'   => ['re\rgx\filter', 'int'],
        'sms_text'    => ['re\rgx\filter', 'char'],
    ];

    /*
      +--------------------------
      + 唯一性检测
      +--------------------------
    */
    public $unique_check = [
        
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