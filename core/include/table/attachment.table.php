<?php
/*
  +-------------------------------------------------------
  + attachment 表模型
  + ------------------------------------------------------
  + @update 2019-11-11 18:18:51
  + @desc 若修改了表结构, 请使用下面的命令更新模型文件
  + @cmd /bin/php core/rgx/build.php -t -d=/data/htdocs/emera_tech/zuchev1/wap -f=1
  +-------------------------------------------------------
*/
namespace re\rgx;

class attachment_table extends table {

    /*
      +--------------------------
      + 编码
      +--------------------------
    */
    protected $_charset = 'utf8';

    /*
      +--------------------------
      + 字段
      +--------------------------
    */
    protected $_fields = [
        'attch_id' => [
            'name'               => 'attch_id',
            'type'               => 'int',
            'field_type'         => 'int',
            'min'                => 0,
            'max'                => 4294967295,
            'label'              => '附件ID',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'attch_type' => [
            'name'               => 'attch_type',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 30,
            'label'              => '附件所属类型',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'attch_path' => [
            'name'               => 'attch_path',
            'type'               => 'char',
            'field_type'         => 'char',
            'min'                => 0,
            'max'                => 64,
            'label'              => '附件路径',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'attch_ext' => [
            'name'               => 'attch_ext',
            'type'               => 'char',
            'field_type'         => 'char',
            'min'                => 0,
            'max'                => 16,
            'label'              => '附件后缀',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'attch_name' => [
            'name'               => 'attch_name',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 120,
            'label'              => '附件原始名称',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'attch_adate' => [
            'name'               => 'attch_adate',
            'type'               => 'int',
            'field_type'         => 'int',
            'min'                => 0,
            'max'                => 4294967295,
            'label'              => '添加时间',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'attch_size' => [
            'name'               => 'attch_size',
            'type'               => 'float',
            'field_type'         => 'decimal',
            'min'                => 10,
            'max'                => 2,
            'label'              => '附件大小',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'attch_sort' => [
            'name'               => 'attch_sort',
            'type'               => 'int',
            'field_type'         => 'smallint',
            'min'                => -32768,
            'max'                => 32767,
            'label'              => 'attch_sort',
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
        'key' => 'attch_id',
        'inc' => true
    ];

    /*
      +--------------------------
      + 字段默认值
      +--------------------------
    */
    public $defaults = [
        'attch_id'    => 0,
        'attch_type'  => '',
        'attch_path'  => '',
        'attch_ext'   => '',
        'attch_name'  => '',
        'attch_adate' => 0,
        'attch_size'  => 0.00,
        'attch_sort'  => 0,
    ];

    /*
      +--------------------------
      + 字段过滤规则
      +--------------------------
    */
    public $filter = [
        'attch_id'    => ['re\rgx\filter', 'int'],
        'attch_type'  => ['re\rgx\filter', 'char'],
        'attch_path'  => ['re\rgx\filter', 'char'],
        'attch_ext'   => ['re\rgx\filter', 'char'],
        'attch_name'  => ['re\rgx\filter', 'char'],
        'attch_adate' => ['re\rgx\filter', 'int'],
        'attch_size'  => ['re\rgx\filter', 'float'],
        'attch_sort'  => ['re\rgx\filter', 'int'],
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