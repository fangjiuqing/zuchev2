<?php namespace com\default_admin;use re\rgx as RGX;!defined('IN_RGX') && exit('Access Denied'); //unset($this);?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title><?php echo((is_array($_title) ? join('_', $_title) : $_title));?></title>
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <link rel="shortcut icon" href="favicon.ico">
    <link href="http://localhost/zuchev1/admin/template/default/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="http://localhost/zuchev1/admin/static/font-awesome/css/font-awesome.css?v=4.7.0" rel="stylesheet">
    <link href="http://localhost/zuchev1/admin/template/default/css/animate.min.css" rel="stylesheet">
    <link href="http://localhost/zuchev1/admin/template/default/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    <link href="http://localhost/zuchev1/admin/template/default/css/bids.css?v=1.0.0" rel="stylesheet">
    <script type="text/javascript">
        var upload_image_url = '<?php echo(RGX\router::url('@upload-image')); ?>',
            DATA_URL    = 'http://localhost/zuchev1/admin/data/',
            STATIC_URL  = 'http://localhost/zuchev1/admin/static/',
            UPLOAD_URL  = 'http://localhost/zuchev1/data/attachment/',
            _route      = <?php echo(json_encode($route, JSON_UNESCAPED_UNICODE));?>,
            _url        = '<?php echo($_MODULE);?>-<?php echo($_ACTION);?>',
            _filter     = <?php echo(json_encode($filter['values'], JSON_UNESCAPED_UNICODE));?>,
            filter      = <?php echo(json_encode($filter, JSON_UNESCAPED_UNICODE));?>;
    </script>
</head>
<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
    <h5><i class="fa fa-support"></i> <?php echo($_pos['cur']);?></h5> <?php if ($_MODULE != 'tender'):?> <?php if ($_ACTION == 'index' || $_ACTION == 'list' || true):?> <?php if ($add_url):?> <a href="<?php echo($add_url);?>" class="btn btn-xs btn-success pull-right" id="add_rule_btn">
	        <i class="fa fa-plus"></i> 新增 
	    </a> <?php else:?> <a href="<?php echo(RGX\router::url('%s-add', $_MODULE)); ?>" class="btn btn-xs btn-success pull-right" id="add_rule_btn">
	        <i class="fa fa-plus"></i> 新增 
	    </a> <?php endif;?><?php endif;?><?php endif;?></div>
                    <div class="ibox-content"> <?php if (!empty($filter['configs'])):?>
<div id="filter" class="row"><?php unset($k, $v); $k_index = 0; foreach ((array)$filter['configs'] as $k => $v): $k_index ++;?><?php if ($v['type'] == 'select'):?><div class="filter_row filter_<?php echo($v['input'] ? 'select_input' : 'select');?>">
    <div class="input-group"> <?php if ($v['input']):?> <div class="input-group-btn">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php if ($filter['values'][$v['code']]):?><span id="<?php echo($v['code']);?>_label" class="search_type" data-key="<?php echo($v['code']);?>" data-val="<?php echo($filter['values'][$v['code']]);?>"><?php echo($v['options'][$filter['values'][$v['code']]]);?></span><?php else:?><span id="<?php echo($v['code']);?>_label" class="search_type" data-key="<?php echo($v['code']);?>" data-val="<?php echo($v['default']['value']);?>"><?php echo($v['default']['label']);?></span><?php endif;?>&nbsp;
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu"><?php unset($key, $opt); $key_index = 0; foreach ((array)$v['options'] as $key => $opt): $key_index ++;?><li><a href="javascript:;" class="dpm_opt" data-target="#<?php echo($v['code']);?>_label" data-val="<?php echo($key);?>"><?php echo($opt);?></a></li><?php endforeach;?></ul>
        </div>
        <input type="text" class="form-control search_key" id="<?php echo($v['input']['code']);?>_value" data-key="<?php echo($v['input']['code']);?>" value="<?php echo($filter['values'][$v['input']['code']]);?>" placeholder="<?php echo($v['input']['placeholder']);?>"> <?php else:?> <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php if ($filter['values'][$v['code']]):?><span id="<?php echo($v['code']);?>_label" class="search_type" data-key="<?php echo($v['code']);?>" data-val="<?php echo($filter['values'][$v['code']]);?>"><?php echo($v['options'][$filter['values'][$v['code']]]);?></span><?php else:?><span id="<?php echo($v['code']);?>_label" class="search_type" data-key="<?php echo($v['code']);?>" data-val="<?php echo($v['default']['value']);?>"><?php echo($v['default']['label']);?></span><?php endif;?>&nbsp;
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu"><?php unset($key, $opt); $key_index = 0; foreach ((array)$v['options'] as $key => $opt): $key_index ++;?><li><a href="javascript:;" class="dpm_opt" data-target="#<?php echo($v['code']);?>_label" data-val="<?php echo($key);?>"><?php echo($opt);?></a></li><?php endforeach;?></ul> <?php endif;?></div>
</div>
<?php elseif ($v['type'] == 'checkbox'):?><div class="filter_row filter_checkbox">
    <a href="javascript:;" class="btn btn-xs btn-default filter-opt <?php if (empty($filter['values'][$v['code']])):?> active<?php endif;?>" data-key="<?php echo($v['code']);?>" data-val=""><?php echo($v['label']);?></a><?php unset($key, $val); $key_index = 0; foreach ((array)$v['options'] as $key => $val): $key_index ++;?><a href="javascript:;" class="btn btn-xs btn-default filter-opt <?php if (in_array($key, $filter['values'][$v['code']])):?> active<?php endif;?>" data-key="<?php echo($v['code']);?>" data-val="<?php echo($key);?>"><?php echo($val);?></a><?php endforeach;?></div>
<?php elseif ($v['type'] == 'radio'):?><div class="filter_row filter_checkbox">
    <a href="javascript:;" class="btn btn-xs btn-default filter-opt <?php if (empty($filter['values'][$v['code']])):?> active<?php endif;?>" data-key="<?php echo($v['code']);?>" data-val=""><?php echo($v['label']);?></a><?php unset($key, $val); $key_index = 0; foreach ((array)$v['options'] as $key => $val): $key_index ++;?><a href="javascript:;" class="btn btn-xs btn-default filter-radio filter-opt <?php if ($filter['values'][$v['code']] == $key):?> active<?php endif;?>" data-key="<?php echo($v['code']);?>" data-val="<?php echo($key);?>"><?php echo($val);?></a><?php endforeach;?></div>
<?php endif;?><?php endforeach;?><div class="clearfix"></div>
    <div class="filter_row text-right">
        <a href="javascript:;" class="btn btn-success btn-xs" id="filter_search_btn">
            <i class="fa fa-search"></i>  搜索
        </a>
    </div>
</div>
<?php endif;?><div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="checkall" <?php if (empty($list)):?> disabled="disabled" <?php endif;?>/></th>
                                        <th>车牌号码</th>
                                        <th>车辆名称</th>
                                        <th>车型备注</th>
                                        <th>车辆类型</th>
                                        <th>日租金</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody> <?php if (empty($list)):?> <tr>
                                        <table>
                                            <tr><td>暂无数据</td></tr>
                                        </table>
                                    </tr> <?php endif;?><?php unset($k, $v); $k_index = 0; foreach ((array)$list as $k => $v): $k_index ++;?> <tr id="item-<?php echo($v['car_id']);?>">
                                        <td>
                                            <input type="checkbox" class="i-checks" value="<?php echo($v['car_id']);?>" />
                                        </td>
                                        <td>
                                            <a title="编辑<?php echo($v['car_name']);?>" href="<?php echo(RGX\router::url('car-add-id-%d' , $v['car_id'])); ?>"><?php echo($v['car_no']);?></a>
                                        </td>
                                        <td> <?php echo($v['car_name']);?> </td>
                                        <td><?php echo($v['car_tag']);?></td>
                                        <td><?php echo($car_type[$v['car_type']]);?></td>
                                        <td class="text-warning">￥<?php echo($v['car_rent_price']);?></td>
                                        <td>
                                            <a href="<?php echo(RGX\router::url('car-del-id-%d' , $v['car_id'])); ?>" data-confirm="操作不可撤销，确认吗？" data-target="#item-<?php echo($v['car_id']);?>" class="btn btn-xs btn-danger btn-delete">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </td>
                                    </tr> <?php endforeach;?> </tbody>
                            </table>
                        </div> <?php if ($pobj['total'] && $pobj['max'] > 1):?><ul class="pagination pagination-sm"><?php if ($pobj['prev']):?><li>
        <a class="pagination-atag" href="<?php echo(RGX\router::url($pobj['url'] . "-pn-%d", $pobj['prev'])); ?>" aria-label="Previous" data-pn="<?php echo($pobj['prev']);?>">
            <span aria-hidden="true">&laquo;</span>
        </a>
    </li><?php else:?><li class="disabled">
        <a class="pagination-atag" href="javascript:;" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
        </a>
    </li><?php endif;?><li class="<?php echo($pobj['pn'] == 1 ? 'active' : '');?>">
        <a class="pagination-atag" href="<?php echo(RGX\router::url($pobj['url'] . "-pn-1")); ?>" data-pn="1">1</a>
    </li><?php unset($k, $v); $k_index = 0; foreach ((array)$pobj['link'] as $k => $v): $k_index ++;?><?php if ($v > 1 && $v < $pobj['max']):?><li class="<?php echo($pobj['pn'] == $v ? 'active' : '');?>">
        <a class="pagination-atag" href="<?php if (is_numeric($v)):?><?php echo(RGX\router::url($pobj['url'] . '-'.$pobj['var'].'-%d' , $v)); ?><?php else:?>javascript:void(0);<?php endif;?>" data-pn="<?php echo($v);?>"><?php echo($v);?></a>
    </li><?php endif;?><?php endforeach;?><?php if ($pobj['max'] > 1):?><li class="<?php echo($pobj['pn'] == $pobj['max'] ? 'active' : '');?>">
        <a class="pagination-atag" href="<?php echo(RGX\router::url($pobj['url'] . "-pn-%d", $pobj['max'])); ?>" data-pn="<?php echo($pobj['max']);?>"><?php echo($pobj['max']);?></a>
    </li><?php endif;?><?php if ($pobj['next']):?><li>
        <a class="pagination-atag" href="<?php echo(RGX\router::url($pobj['url'] . "-pn-%d", $pobj['next'])); ?>" aria-label="Next" data-pn="<?php echo($pobj['next']);?>">
            <span aria-hidden="true">&raquo;</span>
        </a>
    </li><?php else:?><li class="disabled">
        <a class="pagination-atag" href="javascript:;" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
        </a>
    </li><?php endif;?><li class="paging_jump">
        <div class="input-group">
            <input type="text" class="form-control paging_pn" value="<?php echo($pobj['pn']);?>"  placeholder="页码" maxlength="5" style="text-align: center" />
            <span class="input-group-btn">
                <button style="height: 28px; padding: 2px 5px;margin-top: 0;" class="btn btn-xs btn-info pagination-atag" type="button" data-url="<?php echo(RGX\router::url($pobj['url'] . "-pn-~")); ?>" >
                    GO
                </button>
            </span>
        </div>
    </li>
</ul><?php endif;?><div class="clearfix"></div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://localhost/zuchev1/admin/static/js/jquery.min.js"></script>
<script src="http://localhost/zuchev1/admin/template/default/js/bootstrap.min.js?v=3.3.6"></script>
<script src="http://localhost/zuchev1/admin/template/default/js/content.min.js?v=1.0.0"></script>
<script src="http://localhost/zuchev1/admin/static/dialog/lhgdialog.min.js?skin=discuz&amp;2"></script>
<script src="http://localhost/zuchev1/admin/static/js/RGX.lib.min.js"></script>
<script src="http://localhost/zuchev1/admin/static/js/rgx.js"></script>
<script src="http://localhost/zuchev1/admin/template/default/js/common.js"></script>
<script src="http://localhost/zuchev1/admin/template/default/js/plugins/datapicker/bootstrap-datepicker.js"></script>
<script src="http://localhost/zuchev1/admin/static/js/upload.js"></script>
<script>
    $(function () {
        $('button.pagination-atag').on('click', function () {
            if ($('.paging_pn').val().match(/^\d+$/)) {
                location.href = $(this).attr('data-url') + $('.paging_pn').val();
            }
        });
    });
</script>


    <script src="http://localhost/zuchev1/admin/template/default/js/filter.js"></script>
    <script type="text/javascript">
        $('.order-operate a').on('click' , function() {
            var car_id = $(this).attr('data-oid');
            var car_status = $(this).attr('data-status');
            var url = "<?php echo(RGX\router::url('order-change-status-#SAT#-id-~')); ?>" + car_id;
            url = url.replace('#SAT#' , car_status);
            console.log(url);
        });
    </script>
</body>

</html>
