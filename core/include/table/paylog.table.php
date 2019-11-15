<?php
/*
  +-------------------------------------------------------
  + paylog 表模型
  + ------------------------------------------------------
  + @update 2019-11-15 15:28:54
  + @desc 若修改了表结构, 请使用下面的命令更新模型文件
  + @cmd /bin/php core/rgx/build.php -t -d=/data/htdocs/emera_tech/zuchev2/wap -f=1
  +-------------------------------------------------------
*/
namespace re\rgx;

class paylog_table extends table {

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
        'log_id' => [
            'name'               => 'log_id',
            'type'               => 'int',
            'field_type'         => 'int',
            'min'                => 0,
            'max'                => 4294967295,
            'label'              => 'log_id',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'out_trade_no' => [
            'name'               => 'out_trade_no',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 100,
            'label'              => 'out_trade_no',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'method' => [
            'name'               => 'method',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 100,
            'label'              => 'method',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'total_amount' => [
            'name'               => 'total_amount',
            'type'               => 'float',
            'field_type'         => 'decimal',
            'min'                => 12,
            'max'                => 2,
            'label'              => 'total_amount',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'sign' => [
            'name'               => 'sign',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 100,
            'label'              => 'sign',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'auth_app_id' => [
            'name'               => 'auth_app_id',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 100,
            'label'              => 'auth_app_id',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'app_id' => [
            'name'               => 'app_id',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 100,
            'label'              => 'app_id',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'sign_type' => [
            'name'               => 'sign_type',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 100,
            'label'              => 'sign_type',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'seller_id' => [
            'name'               => 'seller_id',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 100,
            'label'              => 'seller_id',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'timestamp' => [
            'name'               => 'timestamp',
            'type'               => 'date',
            'field_type'         => 'date',
            'min'                => 0,
            'max'                => 0,
            'label'              => 'timestamp',
            'validate'           => ['re\rgx\filter', 'is_mysql_date'],
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'trade_no' => [
            'name'               => 'trade_no',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 120,
            'label'              => 'trade_no',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'fee_rate' => [
            'name'               => 'fee_rate',
            'type'               => 'float',
            'field_type'         => 'decimal',
            'min'                => 3,
            'max'                => 3,
            'label'              => 'fee_rate',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'fee_amount' => [
            'name'               => 'fee_amount',
            'type'               => 'float',
            'field_type'         => 'decimal',
            'min'                => 12,
            'max'                => 2,
            'label'              => 'fee_amount',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'acture_amount' => [
            'name'               => 'acture_amount',
            'type'               => 'float',
            'field_type'         => 'decimal',
            'min'                => 12,
            'max'                => 2,
            'label'              => 'acture_amount',
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
        'key' => 'log_id',
        'inc' => true
    ];

    /*
      +--------------------------
      + 字段默认值
      +--------------------------
    */
    public $defaults = [
        'log_id'          => 0,
        'out_trade_no'    => '',
        'method'          => '',
        'total_amount'    => 0,
        'sign'            => '',
        'auth_app_id'     => '',
        'app_id'          => '',
        'sign_type'       => '',
        'seller_id'       => '',
        'timestamp'       => '',
        'trade_no'        => '',
        'fee_rate'        => 0,
        'fee_amount'      => 0,
        'acture_amount'   => 0,
    ];

    /*
      +--------------------------
      + 字段过滤规则
      +--------------------------
    */
    public $filter = [
        'log_id'          => ['re\rgx\filter', 'int'],
        'out_trade_no'    => ['re\rgx\filter', 'char'],
        'method'          => ['re\rgx\filter', 'char'],
        'total_amount'    => ['re\rgx\filter', 'float'],
        'sign'            => ['re\rgx\filter', 'char'],
        'auth_app_id'     => ['re\rgx\filter', 'char'],
        'app_id'          => ['re\rgx\filter', 'char'],
        'sign_type'       => ['re\rgx\filter', 'char'],
        'seller_id'       => ['re\rgx\filter', 'char'],
        'trade_no'        => ['re\rgx\filter', 'char'],
        'fee_rate'        => ['re\rgx\filter', 'float'],
        'fee_amount'      => ['re\rgx\filter', 'float'],
        'acture_amount'   => ['re\rgx\filter', 'float'],
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