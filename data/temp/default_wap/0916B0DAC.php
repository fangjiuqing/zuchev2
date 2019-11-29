<?php namespace com\default_wap;use re\rgx as RGX;!defined('IN_RGX') && exit('Access Denied'); //unset($this);?><!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="renderer" content="webkit" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <title><?php echo($page_title ? : '首页');?>-福建中京人力有限公司</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="http://localhost/fjzj/template/default/style/slick.css">
    <link rel="stylesheet" href="http://localhost/fjzj/template/default/style/style.css" />
    <script src="http://localhost/fjzj/template/default/js/jquery.min.js"></script>
    <script src="http://localhost/fjzj/template/default/js/slick.min.js"></script>
    <script src="http://localhost/fjzj/template/default/js/lib.js"></script>
<!--
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0, user-scalable=0" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title><?php echo($page_title ? : '首页');?>-福建中京人力有限公司</title>
    <link rel="stylesheet" href="http://localhost/fjzj/template/default/style/frozen.css" type="text/css" />
    <link rel="stylesheet" href="http://localhost/fjzj/template/default/style/css.css" type="text/css" />
    <link type="text/css" href="http://localhost/fjzj/template/default/style/font-awesome.min.css" rel="stylesheet">

    <script type="text/javascript" src="http://localhost/fjzj/template/default/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="http://localhost/fjzj/template/default/js/xiala.js"></script>

    <link rel="stylesheet" type="text/css" href="http://localhost/fjzj/template/default/style/weui/jquery-weui.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost/fjzj/template/default/style/weui/lib/weui.min.css" />

    <script src="https://unpkg.com/vue@2.5.22/dist/vue.min.js"></script>
    <script type="text/javascript" src="http://localhost/fjzj/template/default/js/jquery-weui.js"></script>

 -->
<style type="text/css">
    /*body {
        width: 100%;
        height: 100%;
        background-image: url(http://localhost/fjzj/template/default/images/view_bg.png);
        background-size: cover;
    }*/
    .view-topbar {
        background-image: url(http://localhost/fjzj/template/default/images/view_top_bg_y.png);
        background-repeat: repeat-x;
        padding: 20px 14px;
        /*position: fixed;
        top: 0px;*/
        width: 100%;
        text-align: center;
        z-index: 9999;
    }

    .view-topbar h5{
        font-size: 18px;
        color: #646464;
        display: inline-block;
    }

    .view-wrap {
        background-color: #fafafa;
        min-height: 100%;
        height: 100%;

        overflow: scroll;
        /*margin-top: 70px;*/
    }
    .view-content {
        padding: 15px 28px;
        min-height: 660px;
        background-image: url(http://localhost/fjzj/template/default/images/view_bg.png);
        background-size: cover;
    }
    .view-content img {
        width: 100%;
    }
    .top-bg {
        background-image: url(http://localhost/fjzj/template/default/images/top_bg.png);
        background-repeat: no-repeat;
        background-size: 100% auto;
        height: 60px;
    }
    .bottom-bg {
        background-image: url(http://localhost/fjzj/template/default/images/bottom_bg.png);
        background-repeat: no-repeat;
        background-size: 100% auto;
        height: 60px;
    }

    .back {
        cursor: pointer;
        position: absolute;
        left: 10px;
        width: 30px;
        height: 30px;
        padding-top: 4px;
    }

    .back img {
        width: 12px;
    }
</style>
</head>

<body>
    <div class="comtent-list view-wrap">
        <div class="view-topbar">
            <div class="title">
                <span class="back" onclick="window.history.go(-1)">
                    <img src="http://localhost/fjzj/template/default/images/back_arraw.png">
                </span>

                <h5> <?php echo(RGX\misc::cutstr($data['title'], 16, '...'));?> </h5>
            </div>
        </div>

        <div class="view-content">
            <div class="top-bg1"></div> <?php echo($data['content']);?> <div class="bottom-bg1"></div>
        </div>
    </div>
    <style type="text/css">

.wechat{position: absolute; width: 150px; background:rgba(255,255,255,.9); border-radius: 5px; bottom: 75px; right: 19px; /*margin: 0 0 0 -86px;*/ line-height: 0; padding: 10px; box-sizing: border-box; display: none;}
.wechat img{width: 100%;}
.wechat:after{position: absolute; content: ""; width: 0; height: 0; border-top: 8px solid rgba(255,255,255,.9); border-right: 8px solid transparent; border-bottom: 8px solid transparent; border-left: 8px solid transparent; z-index: 2; left: 50%; margin: 0 0 0 30px; bottom: -16px;}
.introduce{position: absolute; width: 250px; background:rgba(255,255,255,.9); border-radius: 5px; bottom: 77px; left: 14%; /*margin-right: -90px;*/ line-height: 0; padding: 10px; box-sizing: border-box; display: none;}
.introduce:after{position: absolute; content: ""; width: 0; height: 0; border-top: 8px solid rgba(255,255,255,.9); border-right: 8px solid transparent; border-bottom: 8px solid transparent; border-left: 8px solid transparent; z-index: 2; left: 37%; margin: 0 0 0 -8px; bottom: -16px;}
.introduce p{overflow: hidden;}
.introduce p .label{float:left; height: 24px; line-height: 24px; font-size: 14px; width: 44px; color: #8f7768;}
.introduce p .text{display: block; /*margin: 0 0 0 67px;*/ line-height: 24px; color: #343434;}
.introduce p .text.add{line-height: 20px; /*margin: 2px 0 0 67px;*/}
</style>

    <div class="footer">
        <div class="wp">
            <ul class="fd-nav">
                <li class="li1">
                    <a href="<?php echo(RGX\router::url('index-internation')); ?>">
                        <span>首页</span>
                    </a>
                </li>
                <li class="li2 items">
                    <a id="intr" data-focus="0" href="javascript:;" class="items">
                        <span>介绍</span>
                    </a>
                </li>
                <li class="li3"> <?php if ($info['mobile']):?> <a href="tel:<?php echo($info['mobile']);?>"> <?php elseif ($info['phone']):?> <a href="tel:<?php echo($info['phone']);?>"> <?php endif;?><span>联络</span>
                    </a>
                </li>
                <li class="li4 items">
                    <a id="wechat" data-focus="0" href="javascript:;" class="items">
                        <span>微信</span>
                    </a>
                </li>
            </ul>
        </div>
        <div id="intr-desc" class="introduce" style="display: none;"> <?php if ($info['phone']):?> <p><span class="label">电话：</span><span class="text"><?php echo($info['phone']);?></span></p> <?php endif;?><?php if ($info['mobile']):?> <p><span class="label">手机：</span><span class="text add"><?php echo($info['mobile']);?></span></p> <?php endif;?><?php if ($info['hotline']):?> <p><span class="label">热线：</span><span class="text add"><?php echo($info['hotline']);?></span></p> <?php endif;?><?php if ($info['address']):?> <p><span class="label">地址：</span><span class="text add"><?php echo($info['address']);?></span></p> <?php endif;?></div>

        <div id="wechat-desc" class="wechat">
            <img src="http://www.jxzjrl.com/<?php echo($info['wechat']);?>" alt="" />
        </div>

    </div>

</div>
    </div>

    <script src="http://localhost/fjzj/template/default/js/jquery.countTo.js"></script>
    <script src="http://localhost/fjzj/template/default/js/jquery.inview.js"></script>
    <script>
        $('.banner').slick({
            dots: true,
            arrows: false,
            autoplay: true,
            slidesToShow: 1,
            autoplaySpeed: 5000,
            pauseOnHover: false
        });


        $('.news-slick').slick({
            dots: false,
            arrows: true,
            autoplay: true,
            slidesToShow: 1,
            autoplaySpeed: 5000,
            pauseOnHover: false
        });


        $('.num').on('inview', function(event, isInView) {
            if (isInView) {
                $('.num').countTo();
            }
        });

        $('.banner-z1 .item').on('click', function() {
            console.log(1);
            // $(this).find('.txt').toggleClass('on');
            // $(this).siblings('.item').find('.txt').removeClass('on');
        });

        //页脚四按钮介绍与二维码切换
        $("#intr").bind("touchstart",function(){
            var focus = $(this).attr("data-focus");
            $("#wechat").attr("data-focus","0");
            $("#wechat-desc").hide();
            if(focus == '0'){
                $("#intr-desc").fadeIn(200);
                $(this).attr("data-focus","1");
            }else{
                $("#intr-desc").fadeOut(200);
                $(this).attr("data-focus","0");
            }
            return false;
        });
        $("#wechat").bind("touchstart",function(){
            $("#intr").attr("data-focus","0");
            $("#intr-desc").hide();
            var focus = $(this).attr("data-focus");
            if(focus == '0'){
                $("#wechat-desc").fadeIn(200);
                $(this).attr("data-focus","1");
            }else{
                $("#wechat-desc").fadeOut(200);
                $(this).attr("data-focus","0");
            }
            return false;
        });
        $(document).bind("touchstart",function(){
            $("#intr,#wechat").attr("data-focus","0");
            $("#intr-desc,#wechat-desc").hide();
        });

        /**
         * 公司业务点击
         * @param  {[type]} ) {                   } [description]
         * @return {[type]}   [description]
         */
        $('.company-service').on('click' , function () {
            var sid = $(this).attr('data-id');
            if ( sid ) {
                var url = "<?php echo(RGX\router::url('service-view-id-~')); ?>" + sid
                setTimeout(function(){
                    location.href = url
                },1000)
            }
        });
    </script>
</body>

</html>