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
<link rel="stylesheet" href="https://case.isoftware.xyz/carrent/static/style/weui.min.css" />
<link rel="stylesheet" href="https://case.isoftware.xyz/carrent/static/style/jquery-weui.min.css" />
<link rel="stylesheet" href="https://case.isoftware.xyz/carrent/static/style/iconfont.css" />
<link rel="stylesheet" href="https://case.isoftware.xyz/carrent/static/style/common.css" />





<style>
      .swiper-container {
        width: 100%;
      }

      .swiper-container img {
        display: block;
        width: 100%;
      }
    </style>
</head>

<body ontouchstart>
<div class="weui-flex">
  <div class="weui-flex__item">
        <div class="placeholder"> <?php if ($_MODULE != 'index'):?> <span class="fl icon iconfont" onclick="javascript:;history.go(-1);">&#xe6f3;</span> <?php endif;?><span class="logo"><?php if ($title):?><?php echo($title);?><?php else:?>在线租车<?php endif;?></span> <?php if ($right_link):?> <span class="fr"><?php echo($right_link);?></span> <?php endif;?></div>
    </div>
</div>


<!-- swiper star--> <?php if (!empty($banner)):?> <div class="swiper-container mt20" data-space-between='10' data-pagination='.swiper-pagination' data-autoplay="1000">
        <div class="swiper-wrapper"> <?php unset($k, $v); $k_index = 0; foreach ((array)$banner as $k => $v): $k_index ++;?> <div class="swiper-slide">
                <img src="<?php echo($v['img']);?>" alt="">
            </div> <?php endforeach;?> </div>
    </div> <?php endif;?><!-- swiper end-->

<div class="wraper">
    <div class="weui-cells weui-cells_form">
        <form id="sform" method="post" action="" enctype="multipart/form-data">
            <input type="hidden" name="agent_id" id="agent_id" value="<?php echo($agent_id);?>"/>
            <div class="weui-cells__title">租车预定</div>
            <div class="weui-cell" >
                <div class="weui-cell__hd">
                    <label class="weui-label">联系姓名</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input" type="text" name="fullname" id="fullname" placeholder="请输入联系人" value="<?php echo($user['user_name']);?>">
                </div>
            </div>

            <div class="weui-cell" >
                <div class="weui-cell__hd">
                    <label class="weui-label">学生学号</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input" type="text" name="sno" id="sno" placeholder="请输入学生学号" value="<?php echo($user['user_sno']);?>">
                </div>
            </div>

            <div class="weui-cell" >
                <div class="weui-cell__hd">
                    <label class="weui-label">所在学校</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input" type="text" name="sname" id="sname" placeholder="请输入所在学校" value="<?php echo($user['user_sname']);?>">
                </div>
            </div>

            <div class="weui-cell" id="mobilewarning" >
                <div class="weui-cell__hd">
                    <label class="weui-label">手机号码</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input" type="tel" name="mobile" id="mobile" placeholder="请输入手机号" value="<?php echo($user['user_mobile']);?>">
                </div>
                <div class="weui-cell__ft" style="display: none;" id="mobileerror">
                    <i class="weui-icon-warn"></i>
                </div>
            </div>

            <div class="weui-cell">
                <div class="weui-cell__hd">
                    <label for="" class="weui-label">取车时间</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input datetime-picker" name="start_time" id="start_time" type="text" data-toggle='date' placeholder="请选择开始日期" />
                </div>
            </div>

            <div class="weui-cell">
                <div class="weui-cell__hd">
                    <label for="" class="weui-label">还车时间</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input datetime-picker" name="end_time" id="end_time" type="text" data-toggle='date' placeholder="请选择结束日期" />
                </div>
            </div>
        </form>
    </div>
    <a href="javascript:;" class="weui-btn weui-btn_primary immediately-choice">立即选车</a>
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
    <script src="https://case.isoftware.xyz/carrent/static/js/jquery.tools.js"></script>

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

<script type="text/javascript" src="https://case.isoftware.xyz/carrent/static/js/libs/swiper.js"></script>
<script>
var post_data = $.getParamsStorage('choice-car');
if ( post_data != undefined ) {

    if ( post_data.fullname != undefined ) {
        if ( $('#fullname').val() == '' ) {
            $('#fullname').val(post_data.fullname);
        }
    }
    if ( post_data.sno != undefined ) {
        if ( $('#sno').val() == '' ) {
            $('#sno').val(post_data.sno);
        }
    }
    if ( post_data.sname != undefined ) {
        if ( $('#sname').val() == '' ) {
            $('#sname').val(post_data.sname);
        }
    }
    if ( post_data.mobile != undefined ) {
        if ( $('#mobile').val() == '' ) {
            $('#mobile').val(post_data.mobile);
        }
    }
    if ( post_data.start_time != undefined ) {
        $('#start_time').val(post_data.start_time);
    }
    if ( post_data.end_time != undefined ) {
        $('#end_time').val(post_data.end_time);
    }
}

$(".datetime-picker").calendar();

$(".swiper-container").swiper({
    loop: true,
    autoplay: 3000
});

/**
 * 立即选车
 * @param  {[type]} ){} [description]
 * @return {[type]}       [description]
 */
$('.immediately-choice').on('click' , function(){
    var fullname = $('#fullname').val();

    var mobile = $('#mobile').val();
    var pattern = /^1[34578]\d{9}$/;
    if ( !pattern.test(mobile) ) {
        $.alert("请正确填写手机号！");
        $('#mobilewarning').addClass('weui-cell_warn');
        $('#mobileerror').css('display' , 'block');
        return false;
    }

    var start_time = $('#start_time').val();
    var end_time = $('#end_time').val();
    var sno = $('#sno').val();
    var sname = $('#sname').val();
    var agent_id = $('#agent_id').val();

    var post = new Object();
    post.mobile = mobile;

    if ( fullname ) {
        post.fullname = fullname;
    }
    if ( sno ) {
        post.sno = sno;
    }
    if ( sname ) {
        post.sname = sname;
    }
    if ( agent_id ) {
        post.agent_id = agent_id;
    }
    if ( start_time ) {
        post.start_time = start_time;
    }
    if ( end_time ) {
        post.end_time = end_time;
    }

    console.log(post);

    $.setParamsStorage('choice-car' , post);

    location.href = "<?php echo(RGX\router::url('car-index')); ?>";
});
</script>
</body>
</html>