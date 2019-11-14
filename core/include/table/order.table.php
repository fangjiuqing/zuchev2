<?php
/*
  +-------------------------------------------------------
  + order 表模型
  + ------------------------------------------------------
  + @update 2019-11-15 00:52:09
  + @desc 若修改了表结构, 请使用下面的命令更新模型文件
  + @cmd /bin/php core/rgx/build.php -t -d=/data/htdocs/emera_tech/zuchev2/wap -f=1
  +-------------------------------------------------------
*/
namespace re\rgx;

class order_table extends table {

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
        'order_id' => [
            'name'               => 'order_id',
            'type'               => 'int',
            'field_type'         => 'int',
            'min'                => 0,
            'max'                => 4294967295,
            'label'              => 'order_id',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'order_no' => [
            'name'               => 'order_no',
            'type'               => 'char',
            'field_type'         => 'char',
            'min'                => 0,
            'max'                => 18,
            'label'              => 'order_no',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'order_title' => [
            'name'               => 'order_title',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 200,
            'label'              => 'order_title',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'order_car_id' => [
            'name'               => 'order_car_id',
            'type'               => 'int',
            'field_type'         => 'int',
            'min'                => 0,
            'max'                => 4294967295,
            'label'              => '关联的车辆ID',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'order_car_info' => [
            'name'               => 'order_car_info',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 500,
            'label'              => 'order_car_info',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'order_amount' => [
            'name'               => 'order_amount',
            'type'               => 'float',
            'field_type'         => 'decimal',
            'min'                => 8,
            'max'                => 2,
            'label'              => '订单金额',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'order_paid_amount' => [
            'name'               => 'order_paid_amount',
            'type'               => 'float',
            'field_type'         => 'decimal',
            'min'                => 8,
            'max'                => 2,
            'label'              => '实际金额',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'order_create_date' => [
            'name'               => 'order_create_date',
            'type'               => 'date',
            'field_type'         => 'date',
            'min'                => 0,
            'max'                => 0,
            'label'              => 'order_create_date',
            'validate'           => ['re\rgx\filter', 'is_mysql_date'],
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'order_status' => [
            'name'               => 'order_status',
            'type'               => 'int',
            'field_type'         => 'tinyint',
            'min'                => 0,
            'max'                => 255,
            'label'              => 'order_status',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'order_user_fullname' => [
            'name'               => 'order_user_fullname',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 100,
            'label'              => 'order_user_fullname',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'order_user_mobile' => [
            'name'               => 'order_user_mobile',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 20,
            'label'              => 'order_user_mobile',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'order_user_id' => [
            'name'               => 'order_user_id',
            'type'               => 'int',
            'field_type'         => 'int',
            'min'                => 0,
            'max'                => 4294967295,
            'label'              => 'order_user_id',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'order_user_sno' => [
            'name'               => 'order_user_sno',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 50,
            'label'              => 'order_user_sno',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'order_user_sname' => [
            'name'               => 'order_user_sname',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 255,
            'label'              => 'order_user_sname',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'order_user_license' => [
            'name'               => 'order_user_license',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 200,
            'label'              => 'order_user_license',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'order_start_time' => [
            'name'               => 'order_start_time',
            'type'               => 'date',
            'field_type'         => 'date',
            'min'                => 0,
            'max'                => 0,
            'label'              => 'order_start_time',
            'validate'           => ['re\rgx\filter', 'is_mysql_date'],
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'order_end_time' => [
            'name'               => 'order_end_time',
            'type'               => 'date',
            'field_type'         => 'date',
            'min'                => 0,
            'max'                => 0,
            'label'              => 'order_end_time',
            'validate'           => ['re\rgx\filter', 'is_mysql_date'],
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'order_duration_days' => [
            'name'               => 'order_duration_days',
            'type'               => 'float',
            'field_type'         => 'float',
            'min'                => 4,
            'max'                => 1,
            'label'              => 'order_duration_days',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'order_agent_id' => [
            'name'               => 'order_agent_id',
            'type'               => 'int',
            'field_type'         => 'int',
            'min'                => 0,
            'max'                => 4294967295,
            'label'              => 'order_agent_id',
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
        'key' => 'order_id',
        'inc' => true
    ];

    /*
      +--------------------------
      + 字段默认值
      +--------------------------
    */
    public $defaults = [
        'order_id'            => 0,
        'order_no'            => '',
        'order_title'         => '',
        'order_car_id'        => 0,
        'order_car_info'      => '',
        'order_amount'        => 0,
        'order_paid_amount'   => 0,
        'order_create_date'   => '',
        'order_status'        => 0,
        'order_user_fullname' => '',
        'order_user_mobile'   => '',
        'order_user_id'       => 0,
        'order_user_sno'      => '',
        'order_user_sname'    => '',
        'order_user_license'  => '',
        'order_start_time'    => '',
        'order_end_time'      => '',
        'order_duration_days' => 0,
        'order_agent_id'      => 0,
    ];

    /*
      +--------------------------
      + 字段过滤规则
      +--------------------------
    */
    public $filter = [
        'order_id'            => ['re\rgx\filter', 'int'],
        'order_no'            => ['re\rgx\filter', 'char'],
        'order_title'         => ['re\rgx\filter', 'char'],
        'order_car_id'        => ['re\rgx\filter', 'int'],
        'order_car_info'      => ['re\rgx\filter', 'char'],
        'order_amount'        => ['re\rgx\filter', 'float'],
        'order_paid_amount'   => ['re\rgx\filter', 'float'],
        'order_status'        => ['re\rgx\filter', 'int'],
        'order_user_fullname' => ['re\rgx\filter', 'char'],
        'order_user_mobile'   => ['re\rgx\filter', 'char'],
        'order_user_id'       => ['re\rgx\filter', 'int'],
        'order_user_sno'      => ['re\rgx\filter', 'char'],
        'order_user_sname'    => ['re\rgx\filter', 'char'],
        'order_user_license'  => ['re\rgx\filter', 'char'],
        'order_duration_days' => ['re\rgx\filter', 'float'],
        'order_agent_id'      => ['re\rgx\filter', 'int'],
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