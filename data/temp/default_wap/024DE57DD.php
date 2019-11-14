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
    <link rel="stylesheet" href="http://192.168.0.104/zuchev2/static/style/weui.min.css" />
    <link rel="stylesheet" href="http://192.168.0.104/zuchev2/static/style/jquery-weui.min.css" />
    <link rel="stylesheet" href="http://192.168.0.104/zuchev2/static/style/iconfont.css" />
    <link rel="stylesheet" href="http://192.168.0.104/zuchev2/static/style/common.css" />

    <link href="http://192.168.0.104/zuchev2/wap/template/default/css/style.css" rel="stylesheet" type="text/css"/>

    <style type="text/css">
        .weui-cell {
            padding:6px 15px;
        }
    </style>







<style>
  .weui-navbar__item{
      padding: 8px 0;
      font-size: 14px;
      border-top:3px solid #fff;
  }

  .weui-navbar__item.weui-bar__item--on {
     border-top:3px solid #ff7e00;
     background-color: #fff;
  }

  .weui-navbar+.weui-tab__bd {
     padding-top: 40px;
 }

 .weui-navbar {
    background:none;
 }

 .text-gray{
    color: #999;
    font-size: 13px;
    line-height: 1.2;
    overflow: hidden;
    text-overflow: ellipsis;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
 }
 .text-light {
    color: #ff7e00;
    font-weight: bold;
 }
 .text-car-title {
    color: #29b7b7;
 }
</style>
</head>

<body ontouchstart>
<div class="weui-flex">
  <div class="weui-flex__item">
        <div class="placeholder"> <?php if ($_MODULE != 'index'):?> <span class="fl icon iconfont" onclick="javascript:;history.go(-1);">&#xe6f3;</span> <?php endif;?><span class="logo"><?php if ($title):?><?php echo($title);?><?php else:?>在线租车<?php endif;?></span> <?php if ($right_link):?> <span class="fr"><?php echo($right_link);?></span> <?php endif;?></div>
    </div>
</div>



<!-- 容器 -->
<div class="weui-tab">
    <div class="weui-navbar"> <?php unset($k, $v); $k_index = 0; foreach ((array)$order_type as $k => $v): $k_index ++;?> <a class="weui-navbar__item <?php if ($k == 1):?>weui-bar__item--on<?php endif;?>" data-oid="<?php echo($k);?>" href="#tab<?php echo($k);?>"> <?php echo($v);?> </a> <?php endforeach;?> </div>

    <div class="weui-tab__bd"> <?php unset($k, $v); $k_index = 0; foreach ((array)$order_type as $k => $v): $k_index ++;?> <div id="tab<?php echo($k);?>" class="weui-tab__bd-item <?php if ($k == 1):?>weui-tab__bd-item--active<?php endif;?>">
            <div class="weui-panel weui-panel_access">
                <div class="weui-panel__bd">
                    <a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
                      <div class="weui-media-box__bd">
                        <p class="weui-media-box__desc">暂无记录</p>
                      </div>
                    </a>

                </div>
            </div>
        </div> <?php endforeach;?> </div>
</div>
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
<script src="http://192.168.0.104/zuchev2/static/js/libs/layer/mobile/layer.js"></script>
<script src="https://cdn.bootcss.com/jquery-weui/1.2.1/js/jquery-weui.min.js"></script>
<script src="http://192.168.0.104/zuchev2/static/js/jquery.tools.js"></script>

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

<script>
var post_data = $.getParamsStorage('choice-car');
console.log(post_data);


var orders = $.parseJSON('<?php echo($orders);?>');

var order_car_url = "<?php echo(RGX\router::url('order-view-id-~')); ?>";
$.each (orders , function (ctype , item) {
    var ctype_wrap = $('#tab' + ctype + '>.weui-panel>.weui-panel__bd');

    ctype_wrap.empty();

    var ctype_content = '';
    $.each(item , function (k , v) {
        ctype_content += '<a href="'+order_car_url+v.order_id+'" class="weui-media-box weui-media-box_appmsg">';
        ctype_content +=     '<div class="weui-media-box__hd">';
        ctype_content +=        '<img class="weui-media-box__thumb" src="'+upload_url + v.car_cover+'">';
        ctype_content +=     '</div>';
        ctype_content +=     '<div class="weui-media-box__bd">';
        ctype_content +=         '<p class="weui-media-box__desc">编号：'+v.order_no+'</p>';
        ctype_content +=         '<h4 class="weui-media-box__title text-car-title">' + v.car_name + '</h4>';
        ctype_content +=         '<p class="weui-media-box__desc">'+v.car_tag+'</p>';
        ctype_content +=     '</div>';
        ctype_content +=     '<span class="weui-cell__ft">';
        ctype_content +=         '<p class="text-gray">取:'+v.order_start_time +'</p>';
        ctype_content +=         '<p class="text-gray">还:'+ v.order_end_time +'</p>';
        ctype_content +=         '<p>';
        ctype_content +=             '<span class="text-gray">￥</span><span class="text-light">'+v.order_amount+'</span>';
        ctype_content +=         '</p>';
        ctype_content +=     '</span>';
        ctype_content += '</a>';
    });
    ctype_wrap.html(ctype_content);
});
console.log(orders);

</script>
</body>
</html>