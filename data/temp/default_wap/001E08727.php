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
    <link rel="stylesheet" href="http://127.0.01/zuchev2/static/style/weui.min.css" />
    <link rel="stylesheet" href="http://127.0.01/zuchev2/static/style/jquery-weui.min.css" />
    <link rel="stylesheet" href="http://127.0.01/zuchev2/static/style/iconfont.css" />
    <link rel="stylesheet" href="http://127.0.01/zuchev2/static/style/common.css" />

    <link href="http://localhost/zuchev2/wap/template/default/css/style.css" rel="stylesheet" type="text/css"/>

    <style type="text/css">
        .weui-cell {
            padding:6px 15px;
        }
    </style>







<style type="text/css">
    .weui-label {line-height: 40px;}
</style>
</head>

<body ontouchstart>
<div class="weui-flex">
  <div class="weui-flex__item">
        <div class="placeholder"> <?php if ($_MODULE != 'index'):?> <span class="fl icon iconfont" onclick="javascript:;history.go(-1);">&#xe6f3;</span> <?php endif;?><span class="logo"><?php if ($title):?><?php echo($title);?><?php else:?>在线租车<?php endif;?></span>

            <span class="fr">
                <a href="<?php echo(RGX\router::url('my-order-~')); ?>" class="jq22-navBar-item">
                    <i class="icon iconfont">&#xe716;</i>
                </a>
            </span> <?php if ($right_link):?> <span class="fr"><?php echo($right_link);?></span> <?php endif;?></div>
    </div>
</div>



<div class="wraper">
    <div class="weui-cells weui-cells_form">
        <form action="<?php echo(RGX\router::url('login-submit')); ?>" method="post" id="sform" enctype="multipart/form-data">
            <input type="hidden" name="redirect" value="<?php echo($redirect);?>">
            <div class="weui-cell" id="mobilewarning" >
                <div class="weui-cell__hd">
                    <label class="weui-label"><span class="icon iconfont">&#xe72e;</span>手机号</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input" type="tel" name="data[user_mobile]" id="mobile" placeholder="请输入手机号">
                </div>
            </div>

            <div class="weui-cell">
                <div class="weui-cell__hd">
                    <label for="" class="weui-label"><span class="icon iconfont">&#xe72d;</span>密&nbsp;&nbsp;码</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input" name="data[user_password]" type="password" autocomplete />
                </div>
            </div>

            <div class="weui-cell">
                <div class="weui-cell__hd">
                    <label for="" class="weui-label"><span class="icon iconfont">&#xe6fa;</span>验证码</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input" type="number" name="verify_code" placeholder="请输入验证码" />
                </div>
                <div class="weui-cell__ft" style="font-size: 16px;">
                    <a href="javascript:;" id="obtain" data-flag=1>发送</a>
                </div>
            </div>
        </form>
    </div>
    <a href="javascript:;" class="weui-btn weui-btn_primary form-submit">立即登录</a>
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
                        <img src="http://localhost/zuchev2/wap/template/default/images/icon-wx.png" alt="">
                    </div>
                    <div class="jq22-coll-share-text">微信好友</div>
                </a>
                <a href="javascript:;" class="jq22-coll-share-item">
                    <div class="jq22-coll-share-img">
                        <img src="http://localhost/zuchev2/wap/template/default/images/icon-pyq.png" alt="">
                    </div>
                    <div class="jq22-coll-share-text">朋友圈</div>
                </a>
                <a href="javascript:;" class="jq22-coll-share-item">
                    <div class="jq22-coll-share-img">
                        <img src="http://localhost/zuchev2/wap/template/default/images/icon-qq.png" alt="">
                    </div>
                    <div class="jq22-coll-share-text">QQ</div>
                </a>
                <a href="javascript:;" class="jq22-coll-share-item">
                    <div class="jq22-coll-share-img">
                        <img src="http://localhost/zuchev2/wap/template/default/images/icon-kj.png" alt="">
                    </div>
                    <div class="jq22-coll-share-text">QQ空间</div>
                </a>
                <a href="javascript:;" class="jq22-coll-share-item">
                    <div class="jq22-coll-share-img">
                        <img src="http://localhost/zuchev2/wap/template/default/images/icon-txw.png" alt="">
                    </div>
                    <div class="jq22-coll-share-text">腾讯微博</div>
                </a>
                <a href="javascript:;" class="jq22-coll-share-item">
                    <div class="jq22-coll-share-img">
                        <img src="http://localhost/zuchev2/wap/template/default/images/icon-wb.png" alt="">
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
<script type="text/javascript" src="http://localhost/zuchev2/wap/template/default/js/scrollTab.js"></script>
<script type="text/javascript" src="http://localhost/zuchev2/wap/template/default/js/slider.js"></script>
<script type="text/javascript" src="http://localhost/zuchev2/wap/template/default/js/layer.js"></script>
<script src="http://127.0.01/zuchev2/static/js/libs/layer/mobile/layer.js"></script>
<script src="https://cdn.bootcss.com/jquery-weui/1.2.1/js/jquery-weui.min.js"></script>
<script src="http://127.0.01/zuchev2/static/js/jquery.tools.js"></script>

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
                    layer.open({
                        content: '登录成功'
                        ,btn: '我知道了'
                      });
                }else{
                    layer.open({
                        content: data.msg
                        ,btn: '我知道了'
                      });
                }

                if ( data.url != undefined ) {
                    location.href = data.url
                }
            },
            error: function(xhr, textStatus, errorThrown) {
                layer.open({
                content: '请稍后重试'
                ,btn: '我知道了'
              });
            }
        })
    });
</script>

<script type="text/javascript">
    $('#obtain').on('click' , function() {
        var mobile = $('#mobile').val();
        var pattern = /^1[345789]\d{9}$/;
        if ( !pattern.test(mobile) ) {
            layer.open({
                content: '手机号输入错误'
                ,btn: '我知道了'
              });
            return;
        }


        var flag = $(this).attr('data-flag');
        if ( flag == 1 ) {
            var url = "<?php echo(RGX\router::url('misc-sms-mobile-~')); ?>" + mobile;
            $.getJSON(url , function(d) {
                if ( d.code == 200 ) {
                  layer.open({
                      content: d.msg
                      ,btn: '我知道了'
                  });

                    var time = 60;

                    if( time == 60 ){
                       var time1 = setInterval(function(){
                           if(time == 0){
                               $("#obtain").html("重新发送");
                               $("#obtain").attr("data-flag" , "1");
                               time = 60;
                               clearInterval(time1);
                           }else{
                               $("#obtain").attr("data-flag" , "0");
                               $("#obtain").html("重新发送("+time+")");
                               time--;
                           }
                           }, 1000);
                   }
               }else{
                   layer.open({
                        content: '发送失败，请稍后重试'
                        ,btn: '我知道了'
                    });
               }
            });
            console.log('send api');
        }
        console.log(mobile);
    });
</script>
</body>
</html>