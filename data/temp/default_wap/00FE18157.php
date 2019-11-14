<?php namespace com\default_wap;use re\rgx as RGX;!defined('IN_RGX') && exit('Access Denied'); //unset($this);?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo($page_title ? : '首页');?>-在线租车</title>
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" name="viewport"/>
    <meta content="yes" name="apple-mobile-web-app-capable"/>
    <meta content="black" name="apple-mobile-web-app-status-bar-style"/>
    <meta content="telephone=no" name="format-detection"/>
    <script type="text/javascript">
        var login_url = "<?php echo(RGX\router::url('login-submit-~')); ?>";
        var check_login = "<?php echo(RGX\router::url('login-check-~')); ?>";
        var upload_url = "<?php echo(UPLOAD_URL);?>";
    </script>
    <!-- head 中 -->
    <link rel="stylesheet" href="https://case.isoftware.xyz/carrent/static/style/weui.min.css" />
    <link rel="stylesheet" href="https://case.isoftware.xyz/carrent/static/style/jquery-weui.min.css" />
    <link rel="stylesheet" href="https://case.isoftware.xyz/carrent/static/style/iconfont.css" />
    <link rel="stylesheet" href="https://case.isoftware.xyz/carrent/static/style/common.css" />

    <link href="http://192.168.0.104/zuchev2/wap/template/default/css/style.css" rel="stylesheet" type="text/css"/>

    <style type="text/css">
        .weui-cell {
            padding:6px 15px;
        }
    </style>







</head>
<body>
<section class="jq22-flexView">
    <header class="jq22-navBar jq22-navBar-fixed b-line">
        <a href="javascript:;" class="jq22-navBar-item">
            <i class="icon icon-return"></i>
        </a>
        <div class="jq22-center">
            <span class="jq22-center-title"><?php echo($title);?></span>
        </div>
        <a href="javascript:;" class="jq22-navBar-item" data-ydui-actionsheet="{target:'#actionSheet',closeElement:'#cancel'}">
            <i class="icon icon-more"></i>
        </a>
    </header>
    <section class="jq22-scrollView">
        <div class="jq22-search-box b-line">
            <i class="icon icon-search"></i>
            <input type="text" placeholder="搜索你感兴趣的超级话题">
        </div>

        <div class="m-scrolltab" data-ydui-scrolltab>
            <div class="scrolltab-nav"> <?php unset($k, $v); $k_index = 0; foreach ((array)$car_type as $k => $v): $k_index ++;?> <a href="javascript:;" class="scrolltab-item">
                    <div class="scrolltab-title"><?php echo($v);?></div>
                </a> <?php endforeach;?> </div>
            <div class="scrolltab-content"> <?php unset($k, $v); $k_index = 0; foreach ((array)$cars as $k => $v): $k_index ++;?> <div class="scrolltab-content-item">
                    <div class="jq22-sit-list"> <?php if (!empty($v)):?> <?php unset($ck, $cv); $ck_index = 0; foreach ((array)$v as $ck => $cv): $ck_index ++;?> <a href="javascript:;" class="jq22-flex b-line">
                            <div class="jq22-comm-user">
                                <img src="https://case.isoftware.xyz/carrent/data/attachment/<?php echo(RGX\image::get_thumb_name($cv['car_cover'] , '400xauto'));?>" alt="">
                            </div>
                            <div class="jq22-flex-box">
                                <h2><?php echo($cv['car_name']);?></h2>
                                <p>日均价￥<?php echo($cv['car_rent_price']);?></p>
                                <p>车型：<?php echo($cv['car_tag']);?></p>
                            </div>
                            <div class="jq22-follow choice-car" data-cid="<?php echo($cv['car_id']);?>" data-cname="<?php echo($cv['car_name']);?>" data-ctag="<?php echo($cv['car_tag']);?>" data-cprice="<?php echo($cv['car_rent_price']);?>">
                                <span><i>+</i></span>
                                <!-- <a href="<?php echo(RGX\router::url('order-preview-cid-%d' , $cv['car_id'])); ?>"> -->

                                <!-- </a> -->
                            </div>
                        </a> <?php endforeach;?> <?php else:?> <a href="javascript:;" class="jq22-flex b-line">
                            <div class="jq22-flex-box">
                                <h2>暂无数据</h2>
                            </div>
                        </a> <?php endif;?></div>
                </div> <?php endforeach;?> </div>
        </div>
        <div style="height:55px;"></div>
    </section>

    <footer class="jq22-footer jq22-footer-fixed" style="display: none">
        <a href="javascript:;" class="jq22-tabBar-item">
                    <span class="jq22-tabBar-item-icon">
                        <i class="icon icon-home"></i>
                    </span>
            <span class="jq22-tabBar-item-text">看帖</span>
        </a>
        <a href="javascript:;" class="jq22-tabBar-item">
                    <span class="jq22-tabBar-item-icon">
                        <i class="icon icon-loan"></i>
                    </span>
            <span class="jq22-tabBar-item-text">关注</span>
        </a>
        <a href="javascript:;" class="jq22-tabBar-item jq22-tabBar-item-active">
                    <span class="jq22-tabBar-item-icon">
                        <i class="icon icon-credit"></i>
                    </span>
            <span class="jq22-tabBar-item-text">排行</span>
        </a>
        <a href="javascript:;" class="jq22-tabBar-item ">
                    <span class="jq22-tabBar-item-icon">
                        <i class="icon icon-me"></i>
                    </span>
            <span class="jq22-tabBar-item-text">我的</span>
        </a>
    </footer>


</section>
<div class="m-actionsheet" id="actionSheet">
    <div class="jq22-show-box">
        <div class="jq22-show-box-title jq22-footer-flex">
            <div class="b-line jq22-coll-share-box">
                <a href="javascript:;" class="jq22-coll-share-item">
                    <div class="jq22-coll-share-img">
                        <img src="http://192.168.0.104/zuchev2/wap/template/default/images/icon-wx.png" alt="">
                    </div>
                    <div class="jq22-coll-share-text">微信好友</div>
                </a>
                <a href="javascript:;" class="jq22-coll-share-item">
                    <div class="jq22-coll-share-img">
                        <img src="http://192.168.0.104/zuchev2/wap/template/default/images/icon-pyq.png" alt="">
                    </div>
                    <div class="jq22-coll-share-text">朋友圈</div>
                </a>
                <a href="javascript:;" class="jq22-coll-share-item">
                    <div class="jq22-coll-share-img">
                        <img src="http://192.168.0.104/zuchev2/wap/template/default/images/icon-qq.png" alt="">
                    </div>
                    <div class="jq22-coll-share-text">QQ</div>
                </a>
                <a href="javascript:;" class="jq22-coll-share-item">
                    <div class="jq22-coll-share-img">
                        <img src="http://192.168.0.104/zuchev2/wap/template/default/images/icon-kj.png" alt="">
                    </div>
                    <div class="jq22-coll-share-text">QQ空间</div>
                </a>
                <a href="javascript:;" class="jq22-coll-share-item">
                    <div class="jq22-coll-share-img">
                        <img src="http://192.168.0.104/zuchev2/wap/template/default/images/icon-txw.png" alt="">
                    </div>
                    <div class="jq22-coll-share-text">腾讯微博</div>
                </a>
                <a href="javascript:;" class="jq22-coll-share-item">
                    <div class="jq22-coll-share-img">
                        <img src="http://192.168.0.104/zuchev2/wap/template/default/images/icon-wb.png" alt="">
                    </div>
                    <div class="jq22-coll-share-text">新浪微博</div>
                </a>
            </div>
            <div class="jq22-coll-cancel">
                <a href="javascript:;" id="cancel" class="">取消
                </a>
            </div>
        </div>
    </div>
</div>
<script src="https://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script type="text/javascript" src="http://192.168.0.104/zuchev2/wap/template/default/js/scrollTab.js"></script>
<script type="text/javascript" src="http://192.168.0.104/zuchev2/wap/template/default/js/slider.js"></script>
<script type="text/javascript" src="http://192.168.0.104/zuchev2/wap/template/default/js/layer.js"></script>
<script src="https://case.isoftware.xyz/carrent/static/js/libs/layer/mobile/layer.js"></script>
<script src="https://cdn.bootcss.com/jquery-weui/1.2.1/js/jquery-weui.min.js"></script>
<script src="https://case.isoftware.xyz/carrent/static/js/jquery.tools.js"></script>

<script type="text/javascript">
    /** 刷新验证码 */
    $('.weui-vcode-img').on('click' , function() {
        var url = "<?php echo(RGX\router::url('misc-verify-t-~')); ?>" + (new Date()).getMilliseconds();
        $(this).attr('src' , url);
    });

    /** 表单提交 */
    $('.form-submit').on('click' , function() {
        var form = $('#sform');

        console.log(form);
        if ( $(this).hasClass('disabled') ) {
            layer.open({
                content: '请检查表单项再提交哦'
                ,btn: '我知道了'
            });
            console.log(123);
            return false;
        }

        $.ajax({
            type: form.attr('method'),
            dataType: 'json',
            processData: false,
            data: form.serialize(),
            url: form.attr('action'),
            success: function(data, textStatus, xhr) {
                console.log(data)
                if ( data.code == 200 ) {
                    $.toast("操作成功", 2000);
                }else{
                    $.toast(data.msg, 'forbidden');
                }

                if ( data.url != undefined ) {
                    location.href = data.url
                }
            },
            error: function(xhr, textStatus, errorThrown) {
                $.toast('请稍后重试', 'forbidden');
            }
        })
    });
</script>

<script type="text/javascript">
    var agent = "<?php echo($agent);?>";


    $('.choice-car').on('click' , function() {
        var cid = $(this).attr('data-cid');
        var cname = $(this).attr('data-cname');
        var ctag = $(this).attr('data-ctag');
        var cprice = $(this).attr('data-cprice');

        layer.open({
            title: [
                '车型确认',
                'background-color:#fe9601;; color:#fff;'
            ],
            content: '已选车辆['+cname+'],日均租金￥' + cprice + '元'
            ,btn: ['去下单', '再看看']
            ,yes: function(index){
                var o_url = "<?php echo(RGX\router::url('order-confirm-cid-#CAR#-agent-~')); ?>" + agent;
                o_url = o_url.replace('#CAR#' , cid);
                location.href = o_url;
                layer.close(index);
            }
          });
    });
</script>
</body>
</html>

