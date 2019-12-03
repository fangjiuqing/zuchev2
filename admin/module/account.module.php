<?php
namespace com\default_admin;
use re\rgx as RGX;

class account_module extends admin_module {
    /**
     * 筛选
     *
     * @var unknown_type
     */
    private $_filter_c = array(
        'nick'          => array('昵称或账号', 'admin_account or admin_nickname'),
        'sdate'         => array('创建日期-开始', 'admin_create_date'),
        'edate'         => array('创建日期-结束', 'admin_create_date'),
        'groups'        => array('权限组别', 'admin_group_id'),
        'lsdate'        => array('最后登录日期-开始', 'admin_lastlogin_date'),
        'ledate'        => array('最后登录日期-结束', 'admin_lastlogin_date')
    );

    /**
     * [index_action description]
     * @method index_action
     * @return [type]       [description]
     */
    public function index_action () {
        $this->list_action();
    }

    /**
     * [list_action description]
     * @method list_action
     * @return [type]      [description]
     */
    public function list_action () {
        $this->set_pos('cur' , '账户管理');
        $tab = RGX\OBJ('admin_table');

        $pager = new RGX\page_helper($tab, $this->get('pn'), 24);
        $this->assign('list' , $tab->get_all());
        $this->assign('pobj', $pager->to_array());
        $this->assign('filter', $filter);
        $this->display('account/list.tpl');
    }

    /**
     * [account_action description]
     * @method account_action
     * @return [type]         [description]
     */
    public function add_action() {
        $id  = intval($this->get('id'));
        if ( $id ) {
            $tab    =    RGX\OBJ('admin_table');
            $data   =    $tab->get(['admin_id' => $id ]);
        }
        else {
            $data['admin_lastlogin_date']=   REQUEST_TIME;
        }

        $this->assign('data',$data);
        $this->display('account/add.tpl');
    }

    /**
     * [账号修改]
     * @method update_action
     * @return [type]        [description]
     */
    public function save_action() {
        $data         = $this->get('data', 'p');
        $admin_id     = intval($data['admin_id']);

        # 新增时密码必填
        if ( !$admin_id && empty($data['admin_passwd']) ) {
            $this->ajax_failure('密码必须输入！');
        }

        // 修改信息时：填写了密码字段（需要更新密码时处理）
        if ( !empty($data['admin_passwd']) ) {
            if ( $data['admin_passwd'] != $data['cfm_password']) $this->ajax_failure('两次输入不一致！');

            $data['admin_salt']     =    $data['admin_salt'] ? : RGX\misc::randstr(6);
            $data['admin_passwd']   =    md5(md5($data['admin_passwd']) . $data['admin_salt']);
        }else{
            unset($data['admin_passwd'] , $data['cfm_password']);
        }

        $obj = RGX\OBJ('admin_table');

        if ($obj->load($data)) {
            $rslt    =    $obj->save();
            if ( $rslt['code'] === 0 ) {
                $rslt['url']    =    RGX\router::url('account-list');
                $this->ajaxout($rslt);
            }else{
                $this->ajax_failure($obj->get_error());
            }
        }else{
            $this->ajax_failure($obj->get_error());
        }

    }

    /**
     * [删除]
     * @method del_action
     * @return [type]     [description]
     */
    public function del_action () {
        $id = intval($this->get('id'));
        if ( $id ) {
            $ret    =    RGX\OBJ('admin_table')->where('admin_id = ' . $id)->delete();
            if ( $ret ) $this->ajax_success('删除成功');
        }
        $this->ajax_failure('删除失败!');
    }

    public function passwd_action () {
        $this->redirect('account-add-id-' . $this->admin['admin_id']);
    }


}// Class End