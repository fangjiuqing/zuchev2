<?php
/*
  +-------------------------------------------------------
  + car 表模型
  + ------------------------------------------------------
  + @update 2019-11-28 13:34:24
  + @desc 若修改了表结构, 请使用下面的命令更新模型文件
  + @cmd /bin/php core/rgx/build.php -t -d=/data/htdocs/emera_tech/zuchev2/wap -f=1
  +-------------------------------------------------------
*/
namespace re\rgx;

class car_table extends table {

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
        'car_id' => [
            'name'               => 'car_id',
            'type'               => 'int',
            'field_type'         => 'int',
            'min'                => 0,
            'max'                => 4294967295,
            'label'              => 'car_id',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'car_no' => [
            'name'               => 'car_no',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 30,
            'label'              => 'car_no',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'car_accessile_nums' => [
            'name'               => 'car_accessile_nums',
            'type'               => 'int',
            'field_type'         => 'smallint',
            'min'                => 0,
            'max'                => 65535,
            'label'              => '可用数量',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'car_name' => [
            'name'               => 'car_name',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 255,
            'label'              => 'car_name',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'car_tag' => [
            'name'               => 'car_tag',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 100,
            'label'              => 'car_tag',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'car_type' => [
            'name'               => 'car_type',
            'type'               => 'int',
            'field_type'         => 'tinyint',
            'min'                => -128,
            'max'                => 127,
            'label'              => 'car_type',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'car_rent_price' => [
            'name'               => 'car_rent_price',
            'type'               => 'float',
            'field_type'         => 'decimal',
            'min'                => 8,
            'max'                => 2,
            'label'              => 'car_rent_price',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'car_cover' => [
            'name'               => 'car_cover',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 255,
            'label'              => 'car_cover',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'car_desc' => [
            'name'               => 'car_desc',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 1024,
            'label'              => 'car_desc',
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
        'key' => 'car_id',
        'inc' => true
    ];

    /*
      +--------------------------
      + 字段默认值
      +--------------------------
    */
    public $defaults = [
        'car_id'              => 0,
        'car_no'              => '',
        'car_accessile_nums'  => 0,
        'car_name'            => '',
        'car_tag'             => '',
        'car_type'            => 0,
        'car_rent_price'      => 0,
        'car_cover'           => '',
        'car_desc'            => '',
    ];

    /*
      +--------------------------
      + 字段过滤规则
      +--------------------------
    */
    public $filter = [
        'car_id'              => ['re\rgx\filter', 'int'],
        'car_no'              => ['re\rgx\filter', 'char'],
        'car_accessile_nums'  => ['re\rgx\filter', 'int'],
        'car_name'            => ['re\rgx\filter', 'char'],
        'car_tag'             => ['re\rgx\filter', 'char'],
        'car_type'            => ['re\rgx\filter', 'int'],
        'car_rent_price'      => ['re\rgx\filter', 'float'],
        'car_cover'           => ['re\rgx\filter', 'char'],
        'car_desc'            => ['re\rgx\filter', 'char'],
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