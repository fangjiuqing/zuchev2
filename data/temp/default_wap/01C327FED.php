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





</head>

<body ontouchstart>
<div class="weui-flex">
  <div class="weui-flex__item">
        <div class="placeholder"> <?php if ($_MODULE != 'index'):?> <span class="fl icon iconfont" onclick="javascript:;history.go(-1);">&#xe6f3;</span> <?php endif;?><span class="logo"><?php if ($title):?><?php echo($title);?><?php else:?>在线租车<?php endif;?></span> <?php if ($right_link):?> <span class="fr"><?php echo($right_link);?></span> <?php endif;?></div>
    </div>
</div>



<div class="wraper">

    <div class="weui-cells weui-cells_form">
        <form action="<?php echo(RGX\router::url('order-submit')); ?>" method="post" id="sform" enctype="multipart/form-data">
            <input type="hidden" name="data[order_car_id]" value="<?php echo($car_info['car_id']);?>" />
            <input type="hidden" name="data[order_agent_id]" id="agent_id" />
            <div class="weui-form-preview">
                <div class="weui-form-preview__hd">
                    <label class="weui-form-preview__label">订单金额</label>
                    <em class="weui-form-preview__value">¥<span id="order_amount"></span></em>
                </div>

                <div class="weui-form-preview__bd">
                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">已选车辆</label>
                        <span class="weui-form-preview__value"><?php echo($car_info['car_name']);?></span>
                    </div>

                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">车型备注</label>
                        <span class="weui-form-preview__value"><?php echo($car_info['car_tag']);?></span>
                    </div>

                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">日均价</label>
                        <span class="weui-form-preview__value">￥<?php echo($car_info['car_rent_price']);?>/天</span>
                    </div>

                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">取车时间</label>
                        <span class="weui-form-preview__value" id="start_time"></span>
                        <input type="hidden" name="data[order_start_time]" id="order_start_time" />
                    </div>

                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">还车时间</label>
                        <span class="weui-form-preview__value" id="end_time"></span>
                        <input type="hidden" name="data[order_end_time]" id="order_end_time" />
                    </div>

                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">租车时长</label>
                        <span class="weui-form-preview__value" id="rent_duration"></span>
                        <input type="hidden" name="data[order_duration_days]" id="order_duration_days" />
                    </div>

                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">用户姓名</label>
                        <span class="weui-form-preview__value" id="fullname"></span>
                        <input type="hidden" name="data[order_user_fullname]" id="order_user_fullname" />
                    </div>

                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">学号编码</label>
                        <span class="weui-form-preview__value" id="sno"></span>
                        <input type="hidden" name="data[order_user_sno]" id="order_user_sno" />
                    </div>

                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">所在学校</label>
                        <span class="weui-form-preview__value" id="sname"></span>
                        <input type="hidden" name="data[order_user_sname]" id="order_user_sname" />
                    </div>

                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">联系手机</label>
                        <span class="weui-form-preview__value" id="mobile"></span>
                        <input type="hidden" name="data[order_user_mobile]" id="order_user_mobile" />
                    </div>



                  </div>
                  <div class="weui-form-preview__ft">
                    <a class="weui-form-preview__btn weui-form-preview__btn_default" href="<?php echo(RGX\router::url('index')); ?>">返回修改</a>

                  </div>
            </div>
        </form>
    </div>
    <a href="javascript:;" class="weui-btn weui-btn_primary form-submit">提交订单</a>
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

<script type="text/javascript">
    var per_day_price = "<?php echo($car_info['car_rent_price']);?>";

    var post_data = $.getParamsStorage('choice-car');
    var st,et = 0;
    if ( post_data.fullname != undefined ) {
        $('#fullname').text(post_data.fullname);
        $('#order_user_fullname').val(post_data.fullname);
    }

    if ( post_data.sno != undefined ) {
        $('#sno').text(post_data.sno);
        $('#order_user_sno').val(post_data.sno);
    }

    if ( post_data.sname != undefined ) {
        $('#sname').text(post_data.sname);
        $('#order_user_sname').val(post_data.sname);
    }

    if ( post_data.agent_id != undefined ) {
        $('#agent_id').val(post_data.agent_id);
    }

    if ( post_data.mobile != undefined ) {
        $('#mobile').text(post_data.mobile);
        $('#order_user_mobile').val(post_data.mobile);
    }
    if ( post_data.start_time != undefined ) {
        st = post_data.start_time;
        $('#start_time').text(st);
        $('#order_start_time').val(st);
    }
    if ( post_data.end_time != undefined ) {
        et = post_data.end_time
        $('#end_time').text(et);
        $('#order_end_time').val(et);
    }

    if ( st && et ) {
        var duration = $.diffDays(st,et);
        $('#rent_duration').text(duration + '天');
        $('#order_duration_days').val(duration);

        $('#order_amount').text(per_day_price * duration)
    }

</script>
</body>
</html>