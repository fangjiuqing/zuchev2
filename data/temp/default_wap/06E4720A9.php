<?php namespace com\default_wap;use re\rgx as RGX;!defined('IN_RGX') && exit('Access Denied'); //unset($this);?><!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="renderer" content="webkit" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <title><?php echo($page_title ? : '首页');?>-在线租车</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <script type="text/javascript">
        var login_url = "<?php echo(RGX\router::url('login-submit-~')); ?>";
        var check_login = "<?php echo(RGX\router::url('login-check-~')); ?>";
        var upload_url = "<?php echo(UPLOAD_URL);?>";
    </script>

<!-- head 中 -->
<link rel="stylesheet" href="https://case.isoftware.xyz/static/style/weui.min.css" />
<link rel="stylesheet" href="https://case.isoftware.xyz/static/style/jquery-weui.min.css" />
<link rel="stylesheet" href="https://case.isoftware.xyz/static/style/iconfont.css" />
<link rel="stylesheet" href="https://case.isoftware.xyz/static/style/common.css" />





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

    <div class="footer">

        <div class="weui-footer">
          <p class="weui-footer__links">
            <a href="<?php echo(RGX\router::url('index')); ?>" class="weui-footer__link">预定</a>
            <a href="javascript:void(0);" class="weui-footer__link">关于我们</a>
            <a href="javascript:void(0);" class="weui-footer__link">隐私条款</a>
          </p>
          <p class="weui-footer__text">Copyright © 2008-2019 iRENT</p>
        </div>
    </div>

    <!-- body 最后 -->
    <script src="https://cdn.bootcss.com/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/jquery-weui/1.2.1/js/jquery-weui.min.js"></script>
    <script src="https://case.isoftware.xyz/static/js/jquery.tools.js"></script>

    <script type="text/javascript">
        $(function(){
            /** 刷新验证码 */
            $('.weui-vcode-img').on('click' , function() {
                var url = "<?php echo(RGX\router::url('misc-verify-t-~')); ?>" + (new Date()).getMilliseconds();
                $(this).attr('src' , url);
            });

            /** 表单提交 */
            $('.form-submit').on('click' , function() {
                var form = $('#sform');
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