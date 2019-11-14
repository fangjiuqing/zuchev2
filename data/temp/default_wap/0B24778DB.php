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
<div class="comtent-list">
    <div class="banner-list"> <?php unset($k, $v); $k_index = 0; foreach ((array)$banner as $k => $v): $k_index ++;?> <img src="<?php if ($v['picture']):?>http://www.jxzjrl.com/<?php echo($v['picture']);?><?php else:?>http://localhost/fjzj/template/default/images/banner-list.jpg<?php endif;?>" alt=""> <?php endforeach;?> </div>
    <div class="list-title">
        <div class="title"> <?php echo($en_title ? $en_title : 'List');?> </div>
        <h3><?php echo($zh_title ? $zh_title : '列表');?></h3>
    </div>
    <div class="wp"> <?php if (!empty($category)):?> <div class="list-category">
            <ul> <?php unset($k, $v); $k_index = 0; foreach ((array)$category as $k => $v): $k_index ++;?> <li><a href="<?php echo($v['url']);?>"><?php echo($v['cate']);?></a></li> <?php endforeach;?> </ul>
            <div class="clearfix"></div>
        </div> <?php endif;?><ul class="ul-list-zs"> <?php if ($list):?> <?php unset($k, $v); $k_index = 0; foreach ((array)$list as $k => $v): $k_index ++;?> <li>
                <a href="<?php echo($v['url']);?>">
                    <div class="pic-container">
                        <img src="<?php if ($v['picture']):?>http://www.jxzjrl.com/<?php echo($v['picture']);?><?php else:?>http://localhost/fjzj/template/default/images/list_01.jpg<?php endif;?>" alt="<?php echo($v['title']);?>">
                    </div>
                    <div class="txt">
                        <h3><?php echo($v['title']);?></h3> <?php if ($mtype == 'news'):?> <div class="time">
                            <!-- <a href="<?php echo(RGX\router::url('news-index-cate-%s-~' , $v['class'])); ?>"> -->
                                所属类别：<?php echo($v['class']);?> <!-- </a> -->
                        </div> <?php else:?> <div class="time">发布时间：<?php echo($v['time']);?></div> <?php endif;?><div class="more">更多详情</div>
                    </div>
                </a>
            </li> <?php endforeach;?> <?php else:?> <li>
                <div class="txt">
                     <h3>暂无数据</h3>
                </div>
            </li> <?php endif;?></ul>
        <style type="text/css">
	.pagination li {
	    display: block;
	    float: left;
	    background: #fff;
	    border: none;
	    border-radius: 0;
	}
	.paging_jump {
	    width: 90px;
        margin-left: 16px;
	}
	.paging_jump .input-group {
	    width: 100%;
	}

	.paging_jump .input-group .form-control {
	    -webkit-box-shadow: none;
	    box-shadow: none;
	}
    .page-wrap {
        text-align: center;
        padding-top: 18px;
    }
</style>
<div class="page-wrap"><?php if ($pobj['total'] && $pobj['max'] > 1):?><ul class="pagination pagination-sm"><?php if ($pobj['prev']):?><li>
            <a class="pagination-atag" href="<?php echo(RGX\router::url($pobj['url'] . "-pn-%d", $pobj['prev'])); ?>" aria-label="Previous" data-pn="<?php echo($pobj['prev']);?>">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li><?php else:?><li class="disabled">
            <a class="pagination-atag" href="javascript:;" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li><?php endif;?><li class="<?php echo($pobj['pn'] == 1 ? 'active' : '');?>">
            <a class="pagination-atag" href="<?php echo(RGX\router::url($pobj['url'] . "-pn-1")); ?>" data-pn="1">1</a>
        </li><?php unset($k, $v); $k_index = 0; foreach ((array)$pobj['link'] as $k => $v): $k_index ++;?><?php if ($v > 1 && $v < $pobj['max']):?><li class="<?php echo($pobj['pn'] == $v ? 'active' : '');?>">
            <a class="pagination-atag" href="<?php if (is_numeric($v)):?><?php echo(RGX\router::url($pobj['url'] . '-'.$pobj['var'].'-%d' , $v)); ?><?php else:?>javascript:void(0);<?php endif;?>" data-pn="<?php echo($v);?>"><?php echo($v);?></a>
        </li><?php endif;?><?php endforeach;?><?php if ($pobj['max'] > 1):?><li class="<?php echo($pobj['pn'] == $pobj['max'] ? 'active' : '');?>">
            <a class="pagination-atag" href="<?php echo(RGX\router::url($pobj['url'] . "-pn-%d", $pobj['max'])); ?>" data-pn="<?php echo($pobj['max']);?>"><?php echo($pobj['max']);?></a>
        </li><?php endif;?><?php if ($pobj['next']):?><li>
            <a class="pagination-atag" href="<?php echo(RGX\router::url($pobj['url'] . "-pn-%d", $pobj['next'])); ?>" aria-label="Next" data-pn="<?php echo($pobj['next']);?>">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li><?php else:?><li class="disabled">
            <a class="pagination-atag" href="javascript:;" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li><?php endif;?><li class="clearfix"></li>
    </ul><?php else:?><ul class="pagination pagination-sm">
        <li class="active">
            <a class="pagination-atag" href="javascript:;" >
                1
            </a>
        </li>
    </ul><?php endif;?></div>

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