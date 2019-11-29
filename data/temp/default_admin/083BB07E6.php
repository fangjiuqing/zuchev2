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
    <link href="http://localhost/zuchev2/admin/template/default/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="http://localhost/zuchev2/admin/static/font-awesome/css/font-awesome.css?v=4.7.0" rel="stylesheet">
    <link href="http://localhost/zuchev2/admin/template/default/css/animate.min.css" rel="stylesheet">
    <link href="http://localhost/zuchev2/admin/template/default/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    <link href="http://localhost/zuchev2/admin/template/default/css/bids.css?v=1.0.0" rel="stylesheet">
    <script type="text/javascript">
        var upload_image_url = '<?php echo(RGX\router::url('@upload-image')); ?>',
            DATA_URL    = 'http://localhost/zuchev2/admin/data/',
            STATIC_URL  = 'http://localhost/zuchev2/admin/static/',
            UPLOAD_URL  = 'http://localhost/zuchev2/data/attachment/',
            _route      = <?php echo(json_encode($route, JSON_UNESCAPED_UNICODE));?>,
            _url        = '<?php echo($_MODULE);?>-<?php echo($_ACTION);?>',
            _filter     = <?php echo(json_encode($filter['values'], JSON_UNESCAPED_UNICODE));?>,
            filter      = <?php echo(json_encode($filter, JSON_UNESCAPED_UNICODE));?>;
    </script>
<link href="http://localhost/zuchev2/admin/template/default/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
<link href="http://localhost/zuchev2/admin/template/default/css/album.css" rel="stylesheet">
<link href="http://localhost/zuchev2/admin/template/default/css/plugins/select2/select2.min.css" rel="stylesheet">
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <form action="<?php echo(RGX\router::url('@%s-save' , $_MODULE)); ?>" method="post" id="sform" class="form-horizontal">
            <input type="hidden" name="data[order_id]" value="<?php echo(intval($data['order_id']));?>" />
            <div class="row">
    <div class="col-sm-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>
                    <i class="fa fa-cog"></i>
                    基本信息
                </h5>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">订单编号</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="order_no" name="data[order_no]" value="<?php echo($data['order_no'] ?: '');?>" maxlength="255"  placeholder="订单编号" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">租车人</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="order_user_fullname" name="data[order_user_fullname]" value="<?php echo($data['order_user_fullname'] ?: '');?>" maxlength="255" placeholder="订单名称" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">租车人电话</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="order_user_mobile" name="data[order_user_mobile]" value="<?php echo($data['order_user_mobile'] ?: '');?>" maxlength="255" placeholder="租车人电话" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">用户学号</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="order_user_sname" name="data[order_user_sno]" value="<?php echo($data['order_user_sno'] ?: '');?>" maxlength="255" placeholder="用户学号" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">用户学校</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="order_user_sname" name="data[order_user_sname]" value="<?php echo($data['order_user_sname'] ?: '');?>" maxlength="255" placeholder="用户学校" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">推荐人</label>
                            <div class="col-sm-9">
                                <select name="data[order_agent_id]" class="form-control select-agent">
                                    <option value="0">--请选择--</option> <?php unset($k, $v); $k_index = 0; foreach ((array)$agents as $k => $v): $k_index ++;?> <option value="<?php echo($v['agent_id']);?>" <?php if ($data['order_agent_id'] == $v['agent_id']):?> selected="selected" <?php endif;?>><?php echo($v['agent_fullname']);?></option> <?php endforeach;?> </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">订单名称</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="order_title" name="data[order_title]" value="<?php echo($data['order_title'] ?: '');?>" maxlength="255" placeholder="订单名称" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">订单金额</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="order_amount" name="data[order_amount]" value="<?php echo($data['order_amount'] ?: '');?>" maxlength="255" placeholder="订单名称" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">取车日期</label>
                            <div class="col-sm-9">
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="text" class="form-control datepicker" name="data[order_start_time]" id="order_start_time" value="<?php if ($data['order_start_time']):?><?php echo($data['order_start_time']);?><?php endif;?>" placeholder="取车日期" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">还车日期</label>
                            <div class="col-sm-9">
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="text" class="form-control datepicker" name="data[order_end_time]" id="order_end_time" value="<?php if ($data['order_end_time']):?><?php echo($data['order_end_time']);?><?php endif;?>" placeholder="取车日期" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">租车天数</label>
                            <div class="col-sm-9">
                                <div class="input-group date">
                                    <input type="text" class="form-control" name="data[order_duration_days]" id="order_duration_days" value="<?php if ($data['order_duration_days']):?><?php echo($data['order_duration_days']);?><?php endif;?>" placeholder="租车天数" readonly="readonly" />
                                    <span class="input-group-addon">天</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">订单状态</label>
                            <div class="col-sm-9">
                                <select name="data[order_status]" class="form-control select-customer">
                                    <option value="0">--请选择--</option> <?php unset($k, $v); $k_index = 0; foreach ((array)$order_status as $k => $v): $k_index ++;?> <option value="<?php echo($k);?>" <?php if ($data['order_status'] == $k):?> selected="selected" <?php endif;?>><?php echo($v);?></option> <?php endforeach;?> </select>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <div class="col-sm-12 text-right">
                    <button class="btn btn-primary" type="submit">保存内容</button>
                </div>
            </div>
        </form>
    </div>

    <script src="http://localhost/zuchev2/admin/static/js/jquery.min.js"></script>
<script src="http://localhost/zuchev2/admin/template/default/js/bootstrap.min.js?v=3.3.6"></script>
<script src="http://localhost/zuchev2/admin/template/default/js/content.min.js?v=1.0.0"></script>
<script src="http://localhost/zuchev2/admin/static/dialog/lhgdialog.min.js?skin=discuz&amp;2"></script>
<script src="http://localhost/zuchev2/admin/static/js/RGX.lib.min.js"></script>
<script src="http://localhost/zuchev2/admin/static/js/rgx.js"></script>
<script src="http://localhost/zuchev2/admin/template/default/js/common.js"></script>
<script src="http://localhost/zuchev2/admin/template/default/js/plugins/datapicker/bootstrap-datepicker.js"></script>
<script src="http://localhost/zuchev2/admin/static/js/upload.js"></script>
<script>
    $(function () {
        $('button.pagination-atag').on('click', function () {
            if ($('.paging_pn').val().match(/^\d+$/)) {
                location.href = $(this).attr('data-url') + $('.paging_pn').val();
            }
        });
    });
</script>


    <script src="http://localhost/zuchev2/admin/template/default/js/plugins/select2/select2.min.js"></script>
    <script src="http://localhost/zuchev2/admin/static/kindeditor/kindeditor-min.js"></script>
    <script src="http://localhost/zuchev2/admin/static/kindeditor/lang/zh_CN.js"></script>
    <script src="http://localhost/zuchev2/admin/static/js/md5.min.js"></script>
    <script src="http://localhost/zuchev2/admin/static/js/spark-md5.min.js"></script>
    <script src="http://localhost/zuchev2/admin/static/js/images.js"></script>
    <script>
        var
        images = new Object(),

        /**
        * 图片插件初始化
        */
        init_album = function (ele_id, images) {
            RGXAlbum.init({
                upload  : {
                    url         : '<?php echo(RGX\router::url('upload-image')); ?>',
                    del_url     : '',
                    allows      : ['image/png', 'image/gif', 'image/jpeg'],
                    max         : 20480,
                    multiple    : true,
                    auto        : true,
                    extra       : {
                        channel_id: 2,
                    },
                    failure     : function(file, msg) {
                        RGX.msg(file.name + ' ' + msg);
                    }
                },

                album: {
                    wrapper_id  : ele_id || '#album_wrapper',
                    click       : function(d) {},
                    thumb       : '300x300',
                    has_cut     : false,
                    // 删除文件
                    delete_file : function (d) {
                        if ($('#cert_cover').val() == d) {
                            $('#cert_cover').val('');
                        }
                    },
                    // 设置封面
                    set_cover   : function (d) {
                        $('.rgx-album-images li.active').removeClass('active');
                        $('img[data-source="' + d + '"]').parent().addClass('active');
                        $('#cert_cover').val(d);
                    },
                    images      : (function() {
                        var ret = [],
                            files = images || []; //($('#imgarr').val() || "").split('#');
                        for (var i = 0, url; url = files[i]; i++) {
                            ret.push({
                                url     : url,
                                key     : url,
                                desc    : ''
                            });
                        }
                        return ret;
                    })()
                }
            });
        };

        $(function() {
            RGX.post('#sform');
            $('.select-agent').select2();
        });
    </script>
</body>
</html>