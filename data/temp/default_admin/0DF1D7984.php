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
<link href="http://localhost/zuchev1/admin/template/default/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
<link href="http://localhost/zuchev1/admin/template/default/css/album.css" rel="stylesheet">
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <form action="<?php echo(RGX\router::url('@%s-save' , $_MODULE)); ?>" method="post" id="sform" class="form-horizontal">
            <input type="hidden" name="data[admin_id]" value="<?php echo(intval($data['admin_id']));?>">
            <input type="hidden" name="data[admin_salt]" value="<?php echo($data['admin_salt']);?>">
            <input type="hidden" name="data[admin_create_date]" value="<?php if ($data['admin_create_date']):?> <?php echo($data['admin_create_date']);?><?php else:?><?php echo(REQUEST_TIME);?><?php endif;?>">
            <input type="hidden" name="data[admin_lastlogin_date]" value="<?php if ($data['admin_lastlogin_date']):?> <?php echo($data['admin_lastlogin_date']);?><?php else:?><?php echo(REQUEST_TIME);?><?php endif;?>">

            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>
                        <i class="fa fa-cog"></i>
                        基本信息
                    </h5>
                </div>
                <div class="ibox-content">
                    <div class="row row-dashed">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">登录帐号</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="admin_account" name="data[admin_account]" value="<?php echo($data['admin_account'] ?: '');?>" maxlength="255" <?php if ($data['admin_account']):?> readonly="readonly" <?php endif;?>/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">用户昵称 <?php echo($login['group_id']);?></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="admin_nickname" name="data[admin_nickname]" value="<?php echo($data['admin_nickname'] ?: '');?>" maxlength="255" />
                                </div>
                            </div> <?php if ($login['admin_group_id'] == '1'):?> <div class="form-group">
                                <label class="col-sm-4 control-label">管理组别</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="data[admin_group_id]">
                                    <option value="0">--请选择--</option> <?php unset($k, $v); $k_index = 0; foreach ((array)$admin_group as $k => $v): $k_index ++;?> <option value="<?php echo($v['group_id']);?>" <?php if ($data['admin_group_id'] == $v['group_id']):?> selected="selected" <?php endif;?>><?php echo($v['group_name']);?></option> <?php endforeach;?> </select>
                                </div>
                            </div> <?php endif;?><div class="form-group">
                                <label class="col-sm-4 control-label">登录密码</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="admin_passwd" name="data[admin_passwd]" placeholder="编辑时留空则不作修改" maxlength="255" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label">再次输入</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="cfm_password" name="data[cfm_password]" placeholder="两次输入必须一致" maxlength="255" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label">电子邮箱</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="admin_email" name="data[admin_email]" value="<?php echo($data['admin_email'] ?: '');?>" maxlength="255" />
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-4 hide">
                            <div class="form-group">
                                <img class="add-cover" src="http://localhost/zuchev1/data/attachment/<?php echo($data['admin_avater'] ?: 'avatar/default.png');?>" alt="点击上传" title="点击上传" style="width: auto; height: 180px" />
                                <input type="hidden" name="data[admin_avater]" value="<?php echo($data['admin_avater']);?>">
                            </div>
                        </div>

                    </div>

                    <button class="btn btn-success pull-right" type="submit">保存内容</button>
                    <div class="clearfix"></div>
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


    <script src="http://localhost/zuchev1/admin/static/kindeditor/kindeditor-min.js"></script>
    <script src="http://localhost/zuchev1/admin/static/kindeditor/lang/zh_CN.js"></script>
    <script src="http://localhost/zuchev1/admin/static/js/md5.min.js"></script>
    <script src="http://localhost/zuchev1/admin/static/js/spark-md5.min.js"></script>
    <script src="http://localhost/zuchev1/admin/static/js/images.js"></script>
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

            var editor = KindEditor.create('textarea[id="solution_content"]', {
                     'themeType' : 'simple',
    'items'             : [
        'source', 'bold', 'justifyleft', 'justifycenter', 'blockquote',
        'formatblock',
        'insertorderedlist', 'insertunorderedlist', 'table', 'pagebreak',
        'quickformat', 'fullscreen'
    ],
    'resizeType'        : 1,
    'allowFileUpload'   : false,
    'allowImageUpload'  : false,
    'allowFileManager'  : false,
    'allowFlashUpload'  : false,
    'allowMediaUpload'  : false,
    'allowFileManager'  : false,
    'pasteType'         : 2,
    'htmlTags'          : {

        div : [
                'align', 'style'
        ],
        table: [
                'border', 'cellspacing', 'cellpadding', 'width', 'height', 'align', 'bordercolor'
        ],
        'td,th': [
                'align', 'valign', 'width', 'height', 'colspan', 'rowspan', 'bgcolor'
        ],
        img : ['src', 'data-src', 'width', 'height', 'border', 'alt', 'title', 'align', 'style'],
        p   : ['align', 'style'],
        'ol,ul,li,blockquote,h1,h2,h3,h4,h5,h6' : [
            'align'
        ],
        hr : ['class', '.page-break-after'],
        'br,tbody,tr,strong,b,sub,sup,em,i,u,strike,s,del' : []
    }
            });

        });
    </script>
</body>

</html>
