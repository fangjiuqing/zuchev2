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
<style type="text/css">
    .home-col {
        line-height: 24px;
    }
</style>
</head>
<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row"> <?php unset($k, $v); $k_index = 0; foreach ((array)$data['misc'] as $k => $v): $k_index ++;?> <div class="col-md-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <span class="label <?php if (($k % 2) == 0):?> label-info <?php else:?> label-success <?php endif;?>pull-right"> <?php if ($v['url']):?> <a href="<?php echo($v['url']);?>" style="color: #fff"> <?php endif;?><i class="<?php echo($v['icon']);?>"></i> <?php if ($v['url']):?> </a> <?php endif;?></span>
                            <h5><?php echo($v['title']);?></h5>
                        </div>
                        <div class="ibox-content">
                            <h1 class="text-info"><?php echo($v['total']);?></h1> <?php unset($sk, $sv); $sk_index = 0; foreach ((array)$v['sub'] as $sk => $sv): $sk_index ++;?> <div class="home-col">
                                <small> <?php echo($sk);?> : <span class="text-danger" style="min-width: 50px; display: inline-block;"><?php echo($sv);?></span>
                                </small> <?php if ($v[$sk]):?> (
                                <span> <?php unset($ssk, $ssv); $ssk_index = 0; foreach ((array)$v[$sk] as $ssk => $ssv): $ssk_index ++;?> <?php echo($ssk);?> : <?php echo($ssv);?> &nbsp; <?php endforeach;?> </span>
                                ) <?php endif;?><?php if ($v['same']):?> <span class="text-success stat-percent font-bold"><?php echo(RGX\misc::pencent($sv , $v['total']));?></span> <?php endif;?></div> <?php endforeach;?> </div>
                    </div>
                </div> <?php endforeach;?> </div>

            <div class="row">
                <!-- <div class="col-lg-8">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>半年收入利润率</h5>
                            <div class="ibox-tools">
                                <span class="label label-primary">2015.02 更新</span>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div>
                                <span class="pull-right text-right">
                                    <small>在过去的一个月销售的平均值：<strong>山东</strong></small>
                                        <br/>
                                    所有销售： 162,862
                                </span>

                                <small>市场部</small>
                            </div>

                            <div class="m-t-sm">

                                <div class="row">
                                    <div class="col-md-8">
                                        <div>
                                            <canvas id="lineChart" height="114"></canvas>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="stat-list m-t-lg">
                                            <li>
                                                <h2 class="no-margins">2,346</h2>
                                                <small>总订单</small>
                                                <div class="progress progress-mini">
                                                    <div class="progress-bar" style="width: 48%;"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <h2 class="no-margins ">4,422</h2>
                                                <small>最近一个月订单</small>
                                                <div class="progress progress-mini">
                                                    <div class="progress-bar" style="width: 60%;"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <div class="m-t-md">
                                <small class="pull-right">
                                <i class="fa fa-clock-o"> </i>
                                2015.02.30更新
                            </small>
                                <small>
                                <strong>说明：</strong> 本期销售额比上期增长了23%。
                            </small>
                            </div>

                        </div>
                    </div>
                </div> -->
                <div class="col-lg-12 hide">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>管理操作统计</h5>
                            <div class="ibox-tools">
                                <span class="label label-primary">2015.02 更新</span>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-xs-4">
                                    <small class="stats-label">访问页面 / 浏览量</small>
                                    <h4>236 321.80</h4>
                                </div>

                                <div class="col-xs-4">
                                    <small class="stats-label">% 新访客</small>
                                    <h4>46.11%</h4>
                                </div>
                                <div class="col-xs-4">
                                    <small class="stats-label">最后一周</small>
                                    <h4>432.021</h4>
                                </div>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-xs-4">
                                    <small class="stats-label">访问页面 / 浏览量</small>
                                    <h4>643 321.10</h4>
                                </div>

                                <div class="col-xs-4">
                                    <small class="stats-label">% 新访客</small>
                                    <h4>92.43%</h4>
                                </div>
                                <div class="col-xs-4">
                                    <small class="stats-label">最后一周</small>
                                    <h4>564.554</h4>
                                </div>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-xs-4">
                                    <small class="stats-label">访问页面 / 浏览量</small>
                                    <h4>436 547.20</h4>
                                </div>

                                <div class="col-xs-4">
                                    <small class="stats-label">% 新访客</small>
                                    <h4>150.23%</h4>
                                </div>
                                <div class="col-xs-4">
                                    <small class="stats-label">最后一周</small>
                                    <h4>124.990</h4>
                                </div>
                            </div>
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


    <!-- <script src="http://localhost/zuchev1/admin/template/default/js/plugins/flot/jquery.flot.js"></script>
    <script src="http://localhost/zuchev1/admin/template/default/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="http://localhost/zuchev1/admin/template/default/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="http://localhost/zuchev1/admin/template/default/js/plugins/chartJs/Chart.min.js"></script>
    <script src="http://localhost/zuchev1/admin/template/default/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="http://localhost/zuchev1/admin/template/default/js/plugins/flot/jquery.flot.pie.js"></script> -->
</body>

</html>
