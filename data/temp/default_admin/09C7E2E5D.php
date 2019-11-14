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
<!-- <link href="http://localhost/zuchev1/admin/template/default/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
<link href="http://localhost/zuchev1/admin/template/default/css/album.css" rel="stylesheet">
<link href="http://localhost/zuchev1/admin/template/default/css/plugins/select2/select2.min.css" rel="stylesheet"> -->
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <form action="<?php echo(RGX\router::url('@%s-save' , $_MODULE)); ?>" method="post" id="sform" class="form-horizontal">
            <input type="hidden" name="data[user_id]" value="<?php echo(intval($data['user_id']));?>" />
            <style type="text/css">
    .album-cover {
        width: 300px;
        height: auto;;
    }
</style>
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
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">用户姓名</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="user_name" name="data[user_name]" value="<?php echo($data['user_name'] ?: '');?>" maxlength="255" placeholder="用户姓名" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">用户手机</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="user_mobile" name="data[user_mobile]" value="<?php echo($data['user_mobile'] ?: '');?>" maxlength="255" placeholder="用户手机" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">用户学号</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="user_sno" name="data[user_sno]" value="<?php echo($data['user_sno'] ?: '');?>" maxlength="255" placeholder="用户学号" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">用户学校</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="user_sname" name="data[user_sname]" value="<?php echo($data['user_sname'] ?: '');?>" maxlength="255" placeholder="用户学校" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">登录密码</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="user_password" name="data[user_password]" maxlength="255" placeholder="登录密码，编辑用户是可为空" />
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



    <!-- <script src="http://localhost/zuchev1/admin/template/default/js/plugins/select2/select2.min.js"></script>
    <script src="http://localhost/zuchev1/admin/static/kindeditor/kindeditor-min.js"></script>
    <script src="http://localhost/zuchev1/admin/static/kindeditor/lang/zh_CN.js"></script> -->
    <!-- <script src="http://localhost/zuchev1/admin/static/js/md5.min.js"></script>
    <script src="http://localhost/zuchev1/admin/static/js/spark-md5.min.js"></script>
    <script src="http://localhost/zuchev1/admin/static/js/images.js"></script> -->
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
                    multiple    : false,
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
        });
    </script>
</body>
</html>