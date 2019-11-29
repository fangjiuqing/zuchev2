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
    <link rel="stylesheet" href="http://localhost/zuchev2/static/style/weui.min.css" />
    <link rel="stylesheet" href="http://localhost/zuchev2/static/style/jquery-weui.min.css" />
    <link rel="stylesheet" href="http://localhost/zuchev2/static/style/iconfont.css" />
    <link rel="stylesheet" href="http://localhost/zuchev2/static/style/common.css" />

    <link href="http://localhost/zuchev2/wap/template/default/css/style.css" rel="stylesheet" type="text/css"/>







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

    <footer class="jq22-footer jq22-footer-fixed">
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
<script src="http://localhost/zuchev2/static/js/libs/layer/mobile/layer.js"></script>
<script src="https://cdn.bootcss.com/jquery-weui/1.2.1/js/jquery-weui.min.js"></script>
<script src="http://localhost/zuchev2/static/js/jquery.tools.js"></script>

<script type="text/javascript">
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