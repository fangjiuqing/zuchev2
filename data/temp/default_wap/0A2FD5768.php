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







<style type="text/css">
    .disabled {
        background-color: #cfcfcf;
    }
</style>
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
            <input type="hidden" name="data[order_agent_id]" id="agent_id" value="<?php echo($agent_id);?>" />
            <input type="hidden" name="data[order_duration_days]" id="order_duration_days" value="0" />
            <!-- <div class="weui-cells__title">租车预定</div> -->
            <!-- <div class="weui-form-preview__hd">
                <label class="weui-form-preview__label">用户信息</label>
                <em class="weui-form-preview__value">&nbsp;</em>
            </div> -->
            <div class="weui-cell" >
                <div class="weui-cell__hd">
                    <label class="weui-label">联系姓名</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input" type="text" name="data[order_user_fullname]" id="fullname" placeholder="请输入联系人" value="<?php echo($user['user_name']);?>">
                </div>
            </div>

            <div class="weui-cell" >
                <div class="weui-cell__hd">
                    <label class="weui-label">驾驶证号</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input" type="text" name="data[order_user_license]" id="license" placeholder="驾驶证号" value="<?php echo($user['user_license']);?>">
                </div>
            </div>

            <div class="weui-cell" >
                <div class="weui-cell__hd">
                    <label class="weui-label">学生学号</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input" type="text" name="data[order_user_sno]" id="sno" placeholder="请输入学生学号" value="<?php echo($user['user_sno']);?>">
                </div>
            </div>

            <div class="weui-cell" >
                <div class="weui-cell__hd">
                    <label class="weui-label">所在学校</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input" type="text" name=data[order_user_sname] id="sname" placeholder="请输入所在学校" value="<?php echo($user['user_sname']);?>">
                </div>
            </div>

            <div class="weui-cell">
                <div class="weui-cell__hd">
                    <label for="" class="weui-label">取车时间</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input datetime-picker cal-price" name="data[order_start_time]" id="start_time" type="date" placeholder="取车时间" />
                </div>
            </div>

            <div class="weui-cell">
                <div class="weui-cell__hd">
                    <label for="" class="weui-label">还车时间</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input datetime-picker cal-price" name=data[order_end_time] id="end_time" type="date" placeholder="还车时间" />
                </div>
            </div>

            <div class="weui-cell" id="mobilewarning" >
                <div class="weui-cell__hd">
                    <label class="weui-label">手机号码</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input" type="tel" name="data[order_user_mobile]" id="mobile" placeholder="请输入手机号" value="<?php echo($user['user_mobile']);?>">
                </div>
                <div class="weui-cell__ft">
                    <a class="weui-vcode-btn generate-sms-code">验证码</a>
                </div>
            </div>

            <div class="weui-cell" >
                <div class="weui-cell__hd">
                    <label class="weui-label">验证码</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input" type="text" name="verifycode" id="verifycode" placeholder="请输入验证码">
                </div>
            </div>

        </form>
    </div>

    <div class="weui-cells weui-cells_form">
        <div class="weui-form-preview">
            <!-- <div class="weui-form-preview__hd">
                <label class="weui-form-preview__label">车辆信息</label>
                <em class="weui-form-preview__value">&nbsp;</em>
            </div> -->

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
                    <label class="weui-form-preview__label">订单金额</label>
                    <span class="weui-form-preview__value">
                        <em id="cal-form"></em>
                        ￥<em id="order_amount">0</em>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="weui-form-preview__ft">
        <a class="weui-form-preview__btn weui-form-preview__btn_default" href="<?php echo(RGX\router::url('index')); ?>">返回修改</a>
    </div>
    <a href="javascript:;" class="weui-btn weui-btn_primary order-submit" data-before="check_form">提交订单</a>
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
    var per_day_price = "<?php echo($car_info['car_rent_price']);?>";

    $('.cal-price').on('blur' , function() {
        st = $('#start_time').val();
        et = $('#end_time').val();
        if ( st && et ) {
            var duration = $.diffDays(st,et);
            $('#cal-form').text(per_day_price + '元 x ' + duration + '天 = ');
            $('#order_amount').text(per_day_price * duration);

            $("#order_duration_days").val(duration);
        }
    });

    $('.generate-sms-code').on('click' , function() {
        var mobile = $('#mobile').val();
        if(!(/^1[3456789]\d{9}$/.test(mobile))){
            layer.open({
                content: '手机号格式错误'
                ,btn: '我知道了'
            });
        }else{
            $(this).css('color' , '#000').text('8712');
        }
    });

    /** 订单提交 */
    $('.order-submit').on('click' , function() {
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
                    layer.open({
                        content: '下单成功，请等待系统审核'
                        ,btn: '我知道了'
                        ,yes: function(index) {
                            if ( data.url != undefined ) {
                                location.href = data.url
                            }
                        }
                    });
                }else{
                    layer.open({
                        content: data.msg
                        ,btn: '我知道了'
                    });
                }
            },
            error: function(xhr, textStatus, errorThrown) {
                $.toast('请稍后重试', 'forbidden');
            }
        })
    });

</script>
</body>
</html>