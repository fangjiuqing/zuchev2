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
            UPLOAD_URL  = 'http://localhost/zuchev1/admin/data/attachment/',
            _route      = <?php echo(json_encode($route, JSON_UNESCAPED_UNICODE));?>,
            _url        = '<?php echo($_MODULE);?>-<?php echo($_ACTION);?>',
            _filter     = <?php echo(json_encode($filter['values'], JSON_UNESCAPED_UNICODE));?>,
            filter      = <?php echo(json_encode($filter, JSON_UNESCAPED_UNICODE));?>;
    </script>
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
hhh

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


    <script src="http://localhost/zuchev1/admin/template/default/js/bids/tender.js"></script>
</body>
</html>