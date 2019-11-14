<?php
namespace com\default_admin;
use re\rgx as RGX;
/**
 * 订单模块
 */
class order_module extends admin_module {
    /**
     * [企业信息列表]
     * @method index_action
     * @return [type]       [description]
     */
    public function index_action () {
        $this->set_pos('cur' , '订单列表');
        $tab    =    RGX\OBJ('order_table');
        $order_type = RGX\common_helper::$order_status;
        $type = $this->get('type') ?: '';
        $type = $type ? explode(',', $type) : [];
        $filter = [
            'values'       => [
                'skey'          => RGX\filter::text(urldecode($this->get('skey'))) ?: '',
                'stype'         => $this->get('stype') ?: 'name',
                'type'          => $type
            ],
            'configs'       => [
                [
                    'code'      => 'stype',
                    'type'      => 'select',
                    'default'   => [
                        'value'     => 'name',
                        'label'     => '订单编号',
                    ],
                    'options'   => [
                        'no'      => '订单编号',
                        'name'     => '订单标题',
                    ],
                    'input'     => [
                        'code'          => 'skey',
                        'placeholder'   => '请输入关键字'
                    ]
                ],
                [
                    'type'      => 'checkbox',
                    'code'      => 'type',
                    'options'   => $order_type,
                    'label'     => '全部类型'
                ],
            ]
        ];

        if (!empty($filter['values']['skey'])) {
            // 按编号检索
            if ($filter['values']['stype'] == 'no') {
                $tab->where("order_no = '{$filter['values']['skey']}'");
            }
            if ($filter['values']['stype'] == 'title') {
                $tab->where("order_title like '%{$filter['values']['skey']}%'");
            }
        }

        if (!empty($type)) {
            $where = [];
            foreach ($type as $type_id) {
                $where[] = "order_status = '{$type_id}'";
            }
            if (!empty($where)) {
                $tab->where(join(' or ',$where));
            }
        }
        # all orders
        $tab->map(function($row) {
            $row['order_start_time'] = date('Y/m/d' , strtotime($row['order_start_time']));
            $row['order_end_time'] = date('Y/m/d' , strtotime($row['order_end_time']));

            return $row;
        });

        $pager = new RGX\page_helper($tab, $this->get('pn'), 24);
        $this->assign('list' , $tab->order('order_create_date desc')->get_all());
        $this->assign('pobj', $pager->to_array());
        $this->assign('filter', $filter);
        $this->assign('order_type' , $order_type);

        $this->display('order/list.tpl');
    }

    /**
     * @method add_action
     */
    public function add_action () {
        $cur   =    '新增订单';
        $id    =    intval($this->get('id'));
        $data  =    [];


        if ( $id ) {
            $data    =    RGX\OBJ('order_table')->get(['order_id' => $id]);
            if ( !empty($data) ) {
                $cur =    '编辑【' . $data['order_no'] . '】';
            }
        }

        $this->assign('data' , $data);
        $this->assign('order_status' , RGX\common_helper::$order_status);
        $this->assign('agents' , RGX\OBJ('agent_table')->get_all());
        $this->set_pos('cur' , $cur);
        $this->display('order/add.tpl');
    }

    /**
     * [保存]
     * @method save_action
     * @return [type]      [description]
     */
    public function save_action () {
        $data           =    $this->get('data' , 'p');
        $ret['code']    =    1;
        if ( !empty($data) ) {
            $order_id    =    intval($data['order_id']) ? : 0;
            $tab    =    RGX\OBJ('order_table');
            $tab->load($data);
            $ret           =    $tab->save();
            if ( !$order_id ) {
                $order_id = (int)$ret['row_id'];
            }
            $ret['code'] =0;
            $ret['url']    =    RGX\router::url('order-index');
        }
        $this->ajaxout($ret);
    }

     /**
     * [删除]
     * @method del_action
     * @return [type]     [description]
     */
    public function del_action () {
        $id    =    intval($this->get('id'));
        $ret   =    ['code' => 1];
        if ( $id ) {
            $tab    =    RGX\OBJ('order_table');
            $ret    =    $tab->delete(['order_id' => $id]);
            $this->ajaxout($ret);
        }
        $this->ajaxout($ret);
    }

} //Class End