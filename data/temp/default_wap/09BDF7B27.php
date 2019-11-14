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
</head>

<body class="">
    <div class="ovh-hid">
        <div class="S-Menu">
            <div class="top">
                <img src="http://localhost/fjzj/template/default/images/logo2.png" alt="">
            </div>
            <ul class="ul-nav">
                <li>
                    <a href="<?php echo(RGX\router::url('about-index-~')); ?>"><span>关于我们</span>About Us</a>
                </li>
                <li>
                    <a href="<?php echo(RGX\router::url('service-index-~')); ?>"><span>公司业务</span>Service</a>
                </li>
                <li>
                    <a href="<?php echo(RGX\router::url('news-index-~')); ?>"><span>新闻中心</span>News</a>
                </li>
                <li>
                    <a href="<?php echo(RGX\router::url('culture-index-~')); ?>"><span>企业文化</span>Culture</a>
                </li>
                <li>
                    <a href="<?php echo(RGX\router::url('duty-index-~')); ?>"><span>社会责任</span>Duty</a>
                </li>
                <li>
                    <a href="<?php echo(RGX\router::url('join-index-~')); ?>"><span>招聘信息</span>Join us</a>
                </li>
                <li>
                    <a href="<?php echo(RGX\router::url('contact-view-~')); ?>"><span>联系我们</span>Contact Us</a>
                </li>
            </ul>
            <div class="m-so" style="display: none">
                <form action="<?php echo(RGX\router::url('news-index-~')); ?>" method="post">
                    <div class="wp">
                        <input type="submit" class="sub">
                        <input type="text" name="keyword" class="inp" value="<?php echo($keyword);?>"placeholder="搜索您想要的内容">
                    </div>
                </form>
            </div>
            <div class="tel">
                咨询电话：<?php echo($info['phone']);?> </div>
        </div>

        <div class="oDiv-slide">
            <div class="mask-z"></div>
            <div class="header">
                <div class="wp">
                    <span class="menu">
                        <img src="http://localhost/fjzj/template/default/images/j-p2.png" alt="">
                    </span>
                    <div class="logo">
                        <a href="<?php echo(RGX\router::url('index-index-~')); ?>">
                            <img src="http://localhost/fjzj/template/default/images/logo.png" alt="">
                        </a>
                    </div>
                    <div class="en">
                        <a href="<?php echo(RGX\router::url('en/index-index-~')); ?>">
                            <img src="http://localhost/fjzj/template/default/images/j-p1.png" alt="">
                            <span>En</span>
                        </a>
                    </div>
                </div>
            </div>
<style type="text/css">
    .service-flag {
        margin-top: 20px;
    }
    .service-flag img {
        width: 50%;
        display: none;
    }
    .on .service-flag img {
        display: block;
    }
</style>
<!-- 紫薯 -->
<div class="row-a1">
    <div class="banner"> <?php unset($k, $v); $k_index = 0; foreach ((array)$banner as $k => $v): $k_index ++;?> <div class="item">
            <a href="">
                <img src="<?php if ($v['picture']):?>http://www.jxzjrl.com/<?php echo($v['picture']);?><?php else:?>http://localhost/fjzj/template/default/images/banner-list.jpg<?php endif;?>" alt="">
            </a>
        </div> <?php endforeach;?> </div>
</div>

<div class="row-a2">
    <div class="wp">
        <div class="g-title1">
            <div class="title">Service</div>
            <h3>公司业务</h3>
            <p><a href="">出国留学</a>、<a href="">国外就业</a>、<a href="">办理移民</a>、<a href="">签证业务</a></p>
        </div>
        <div class="piano-accordion fix"> <?php unset($k, $v); $k_index = 0; foreach ((array)$service as $k => $v): $k_index ++;?> <div class="company-service piano <?php if ($k == 0):?> on <?php endif;?>" style="background-image:url(<?php if ($v['picture']):?>http://www.jxzjrl.com/<?php echo($v['picture']);?><?php else:?>http://localhost/fjzj/template/default/images/piano3.jpg<?php endif;?>" data-id="<?php echo($v['id']);?>">
                <p><?php echo($v['class']);?></p>
                <p class="service-flag">
                    <img src="http://www.jxzjrl.com/<?php echo($v['picturem']);?>" style="margin-left:25%">
                </p>
            </div> <?php endforeach;?> </div>
    </div>
</div>

<div class="row-a3">
    <div class="wp">
        <div class="g-title1">
            <div class="title">Our News</div>
            <h3>新闻中心</h3>
            <p><a href="">公司新闻</a>、<a href="">媒体聚焦</a></p>
        </div>
        <div class="news-row">
            <div class="news-slick"> <?php unset($k, $v); $k_index = 0; foreach ((array)$news_hits as $k => $v): $k_index ++;?> <div class="item"> <?php echo($v['mcode']);?> </div> <?php endforeach;?> </div>
            <div class="news-list">
                <h3><a href="<?php echo(RGX\router::url('news-view-id-%d~' , $first['Id'])); ?>"><?php echo($first['title']);?></a></h3>
                <div class="desc"> <?php echo(RGX\misc::cutstr($first['lite'], 14, '......'));?></div>
                <ul class="list"> <?php unset($k, $v); $k_index = 0; foreach ((array)$news as $k => $v): $k_index ++;?> <li><a href="<?php echo(RGX\router::url('news-view-id-%d~' , $v['Id'])); ?>"><?php echo($k+1);?>、<?php echo(RGX\misc::cutstr($v['title'], 13, '...'));?></a></li> <?php endforeach;?> </ul>
            </div>
        </div>
        <a href="<?php echo(RGX\router::url('news-index-~')); ?>" class="chackmore fix">查看更多 ><i></i></a>
    </div>
</div>
<!-- 紫薯end -->

<!-- 坚果 -->
<div class="row-a4">
    <ul class="ul-num1"> <?php unset($k, $v); $k_index = 0; foreach ((array)$survey as $k => $v): $k_index ++;?> <li>
            <div class="nums">
                <span class="num" data-from="0" data-to="<?php if ($v['lite']):?><?php echo(intval($v['lite']));?><?php else:?>1<?php endif;?>" data-speed="2000" data-refresh-interval="50">1</span> <em>+</em>
            </div>
            <p><?php echo($v['title']);?></p>
        </li> <?php endforeach;?> </ul>
</div>

<div class="row-a5">
    <div class="g-title1">
        <div class="title">Business Area</div>
        <h3>业务范围</h3>
        <p>总部在福建，业务不断拓展中</p>
    </div>
    <img src="http://localhost/fjzj/template/default/images/j-i2.jpg" alt="">
</div>

<div class="row-a6">
    <div class="wp">
        <div class="g-title1">
            <div class="title">Join Us</div>
            <h3>招聘信息</h3>
            <a href="#">公司岗位、</a>
            <a href="#" class="on">外派劳务、</a>
            <a href="#">外派护士、</a>
            <a href="#">外派船员、</a>
            <a href="#">工程劳务</a>
        </div>
        <div class="info">
            <div class="pic">
                <a href="#">
                    <img src="<?php if ($joining[0]['picture']):?>http://www.jxzjrl.com/<?php echo($joining[0]['picture']);?><?php else:?>http://localhost/fjzj/template/default/images/j-i3.jpg<?php endif;?>" alt="">
                </a>
            </div>
            <div class="txt">
                <ul> <?php unset($k, $v); $k_index = 0; foreach ((array)$joining as $k => $v): $k_index ++;?> <li><a href="<?php echo(RGX\router::url('join-view-id-%d-~' , $v['Id'])); ?>"><?php echo(RGX\misc::cutstr($v['title'], 14, '..'));?></a></li> <?php endforeach;?> </ul>
            </div>
        </div>
    </div>
</div>

<div class="row-a7 row-a6">
    <div class="wp">
        <div class="g-title1">
            <div class="title">Duty</div>
            <h3>社会责任</h3>
            <a href="">责任履行、</a>
            <a href="">责任承诺、</a>
            <a href="">责任方针</a>
        </div>
        <div class="info"> <?php unset($k, $v); $k_index = 0; foreach ((array)$duty as $k => $v): $k_index ++;?> <div class="pic">
                <img src="<?php if ($v['picture']):?>http://www.jxzjrl.com/<?php echo($v['picture']);?><?php else:?>http://localhost/fjzj/template/default/images/j-p8.jpg<?php endif;?>" alt="">
            </div>
            <div class="txt">
                <p> <?php echo(RGX\misc::cutstr($v['lite'], 80, '...'));?> </p>
            </div> <?php endforeach;?> </div>
    </div>
</div>

<div class="row-a8">
    <div class="g-title1">
        <div class="title">Culture</div>
        <h3>企业文化</h3>
        <a href="">愿景、</a>
        <a href="">核心价值观、</a>
        <a href="">公司风采</a>
    </div>
    <div class="banner-z1">
        <div class="wrap"> <?php unset($k, $v); $k_index = 0; foreach ((array)$culture as $k => $v): $k_index ++;?> <div class="item">
                <a href="<?php echo(RGX\router::url('culture-view-id-%d-~' , $v['id'])); ?>">
                    <div class="pic">
                        <img src="<?php if ($v['picture']):?>http://www.jxzjrl.com/<?php echo($v['picture']);?><?php else:?>http://localhost/fjzj/template/default/images/j-p7.jpg<?php endif;?>" alt="">
                    </div>
                    <div class="txt">
                        <div class="desc"> <?php echo($v['class']);?> </div>
                        <div class="info" style="display: none">
                            <p>
                                <span><?php echo($v['class']);?></span>
                                <p><?php echo(RGX\misc::cutstr($v['lite'], 10, '..'));?></p>
                            </p>
                        </div>
                    </div>
                </a>
            </div> <?php endforeach;?> </div>
    </div>
</div>
<!-- 坚果end -->
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