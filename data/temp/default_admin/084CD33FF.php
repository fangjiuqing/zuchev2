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
    <link href="http://localhost/zuchev1/admin/template/default/css/login.min.css" rel="stylesheet">
    <style type="text/css" media="screen">
        .gohome {
            display: none;
        }
        .signinpanel {
            position: absolute;
            width: 320px;
            right: 200px;
            top: 50px;
        }
        .signinpanel #login-form {
            padding: 30px 40px;
        }
        #login-form input.form-control {
            background: rgba(255,255,255, 0.7);
            border-radius: 2px;
            height: 32px;
            line-height: 32px;
            font-size: 13px;
            margin-top: 20px;
        }
        #login-form h4 {
            font-size: 17px;
            font-weight: 100;
            text-align: center;
        }
        #login-form .btn-success {
            background-color: #0F5DB8;
            border-color: #0F5DB8;
        }
        .form-control:focus, .single-line:focus {
            border-color: #0F5DB8 !important;
        }
        #login_title {
            font-size: 28px;
            font-weight: 300;
            text-align: center;
        }
    </style>
    <script>
        if (window.top !== window.self) {
            window.top.location = window.location;
        }
    </script>
</head>

<body class="signin">
    <div class="signinpanel">
        <h4 class="no-margins" id="login_title"><?php echo($base['name']);?></h4>
        <br>
        <br>
        <form method="post" id="login-form" action="<?php echo(RGX\router::url('login')); ?>" autocomplete="off">
            <input type="text"     id="admin_account" name="adm[admin_account]" class="form-control uname"   placeholder="用户名"/>
            <input type="password" id="admin_passwd" name="adm[admin_passwd]" class="form-control pword m-b" placeholder="密码" />
            <button type="button" class="btn btn-success btn-block" id="login-btn">登录</button>
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


    <!-- <script src="http://static.geetest.com/static/tools/gt.js"></script> -->
    <script>
        if (top.location.href != location.href) {
            top.location.href = location.href;
        }

        var cur_dialog = null,
            verfiy_success = true,
            handlerEmbed = function (captchaObj) {

                captchaObj.appendTo("#embed-captcha");

                captchaObj.onReady(function () {
                    $('#loading-text').hide();
                });

                captchaObj.onSuccess(function () {
                    var validate = captchaObj.getValidate();
                    $('#geetest_challenge').val(validate.geetest_challenge);
                    $('#geetest_validate').val(validate.geetest_validate);
                    $('#geetest_seccode').val(validate.geetest_seccode);

                    window.verfiy_success = false;
                    window.cur_dialog.close();
                    RGX.exec_post('#login-form');
                });
            },
            show_capcha = function () {
                $.ajax({
                    url: "<?php echo(RGX\router::url('@misc-geetest-pf-1-time~')); ?>" + (new Date()).getTime(),
                    type: "get",
                    dataType: "json",
                    success: function (data) {
                        window.cur_dialog = $.dialog({
                            fixed: false,
                            drag: false,
                            cache: false,
                            min: false,
                            max: false,
                            title: '完成下方验证, 以继续下一步',
                            lock: false,
                            fixed: true,
                            padding: 0,
                            width: '420px',
                            height: '300px',
                            content: '<div class="verify-code"><div id="loading-text">加载中 ...</div><div id="embed-captcha"></div></div>',
                            skin: 'discuz'
                        });
                        initGeetest({
                            gt: data.gt,
                            challenge: data.challenge,
                            product: "embed",
                            offline: !data.success
                        }, handlerEmbed);
                    }
                });
            };

        $(function() {

            $('#login-btn').on('click', function() {
                if ($('#adm_name').val() == '') {
                    RGX.tips('请输入账号', '#adm_name');
                }
                else if ($('#adm_passwd').val() == '') {
                    RGX.tips('请输入密码', '#adm_passwd');
                }
                else if (!verfiy_success) {
                    show_capcha();
                }
                else {
                    RGX.exec_post('#login-form');
                }
            });
        });
    </script>
</body>
</html>
