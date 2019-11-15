<?php
namespace com\default_api;
use \re\rgx as RGX;

class index_module extends base_module {

    /**
     * [__construct description]
     */
    public function __construct () {
        parent::__construct();
    }

    /**
     * 首页切换banner
     * @return [type] [description]
     */
    public function paylog_action () {
        $data = $this->get(null , 'G');

        if ( !empty($data) ) {
            $data['fee_rate']   = 0.006;
            $data['fee_amount'] = $data['total_amount'] * $data['fee_rate'];
            $data['acture_amount'] = $data['total_amount'] - $data['fee_amount'];
            $tab = RGX\OBJ('paylog_table');
            $tab->load($data);

            $ret = $tab->save();

            if ( $ret['row_id'] > 1 ) {
                $this->ajaxout([
                    'code' => 200,
                    'msg'  => 'ok',
                    'data' => $data
                ]);
            }
        }

        $this->ajaxout([
            'code' => 404,
            'msg'  => 'error'
        ]);
    }


} // Class End