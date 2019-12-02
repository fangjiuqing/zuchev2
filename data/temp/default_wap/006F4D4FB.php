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
    </script>

<!-- head 中 -->
<link rel="stylesheet" href="http://localhost/zuchev1/wap/template/default/style/weui.min.css" />
<link rel="stylesheet" href="http://localhost/zuchev1/wap/template/default/style/jquery-weui.min.css" />
<link rel="stylesheet" href="http://localhost/zuchev1/wap/template/default/style/iconfont.css" />
<link rel="stylesheet" href="http://localhost/zuchev1/wap/template/default/style/common.css" />





</head>

<body ontouchstart>
<div class="weui-flex">
  <div class="weui-flex__item">
        <div class="placeholder">
            <span class="fl icon iconfont" onclick="javascript:;history.go(-1);">&#xe6f3;</span>
            <span class="logo"><?php if ($title):?><?php echo($title);?><?php else:?>在线租车<?php endif;?></span> <?php if ($right_link):?> <span class="fr"><?php echo($right_link);?></span> <?php endif;?></div>
    </div>
</div>



<div class="wraper">

    <div class="weui-cells weui-cells_form">
        <form action="" method="" id="sform" enctype="multipart/form-data">
            <input type="hidden" name="data[order_car_id]" value="<?php echo($order_info['car_id']);?>" />
            <div class="weui-form-preview">
                <div class="weui-form-preview__hd">
                    <label class="weui-form-preview__label">订单金额</label>
                    <em class="weui-form-preview__value">¥<?php echo($order_info['order_amount']);?></em>
                </div>

                <div class="weui-form-preview__bd">
                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">订单编号</label>
                        <span class="weui-form-preview__value"><?php echo($order_info['order_no']);?></span>
                    </div>

                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">下单时间</label>
                        <span class="weui-form-preview__value"><?php echo($order_info['order_create_date']);?></span>
                    </div>

                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">已选车辆</label>
                        <span class="weui-form-preview__value"><?php echo($order_info['car_name']);?></span>
                    </div>

                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">车型备注</label>
                        <span class="weui-form-preview__value">(<?php echo($order_info['car_type_text']);?>)<?php echo($order_info['car_tag']);?></span>
                    </div>

                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">日均价</label>
                        <span class="weui-form-preview__value">￥<?php echo($order_info['car_rent_price']);?>/天</span>
                    </div>

                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">取车时间</label>
                        <span class="weui-form-preview__value"><?php echo($order_info['order_start_time']);?></span>
                    </div>

                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">还车时间</label>
                        <span class="weui-form-preview__value"> <?php echo($order_info['order_end_time']);?> </span>
                    </div>

                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">租车时长</label>
                        <span class="weui-form-preview__value"> <?php echo($order_info['order_duration_days']);?>天
                        </span>
                    </div>

                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">用户姓名</label>
                        <span class="weui-form-preview__value"> <?php echo($order_info['order_user_fullname']);?> </span>
                    </div>

                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">联系手机</label>
                        <span class="weui-form-preview__value"> <?php echo($order_info['order_user_mobile']);?> </span>
                    </div>

                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">订单状态</label>
                        <span class="weui-form-preview__value <?php echo($order_info['order_status_color']);?>"> <?php echo($order_info['order_status_text']);?> </span>
                    </div>


                  </div>
                  <div class="weui-form-preview__ft">
                    <a class="weui-form-preview__btn weui-form-preview__btn_default" href="<?php echo(RGX\router::url('order')); ?>">返回列表</a>
                  </div>
            </div>
        </form>
    </div>
</div>


    <div class="footer">

        <div class="weui-footer">
          <p class="weui-footer__links">
            <a href="<?php echo(RGX\router::url('index')); ?>" class="weui-footer__link">首页</a>
            <a href="javascript:void(0);" class="weui-footer__link">关于我们</a>
            <a href="javascript:void(0);" class="weui-footer__link">隐私条款</a>
          </p>
          <p class="weui-footer__text">Copyright © 2008-2019 iRENT</p>
        </div>
    </div>

    <!-- body 最后 -->
    <script src="https://cdn.bootcss.com/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/jquery-weui/1.2.1/js/jquery-weui.min.js"></script>
    <script src="http://localhost/zuchev1/wap/template/default/js/jquery.tools.js"></script>

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

</script>
</body>
</html>