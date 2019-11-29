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
        <form action="<?php echo(RGX\router::url('register-submit')); ?>" method="post" id="sform" enctype="multipart/form-data">
            <input type="hidden" name="redirect" value="<?php echo($redirect);?>">
            <div class="weui-cell" id="mobilewarning" >
                <div class="weui-cell__hd">
                    <label class="weui-label"><span class="icon iconfont">&#xe716;</span>姓名</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input" name="data[user_name]" type="text" placeholder="请输入姓名" required>
                </div>
            </div>

             <div class="weui-cell" >
                <div class="weui-cell__hd">
                    <label class="weui-label"><span class="icon iconfont">&#xe72e;</span>手机号</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input" name="data[user_mobile]" type="tel" id="mobile" placeholder="请输入手机号" required>
                </div>
            </div>

            <div class="weui-cell" >
                <div class="weui-cell__hd">
                    <label class="weui-label"><span class="icon iconfont">&#xe6f5;</span>学生号</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input" name="data[user_sno]" type="text" placeholder="请输入学生号" required>
                </div>
            </div>

            <div class="weui-cell" >
                <div class="weui-cell__hd">
                    <label class="weui-label"><span class="icon iconfont">&#xe729;</span>学校名</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input" name="data[user_sname]" type="text" placeholder="请输入学校名" required>
                </div>
            </div>

            <div class="weui-cell">
                <div class="weui-cell__hd">
                    <label for="" class="weui-label"><span class="icon iconfont">&#xe72d;</span>密&nbsp;&nbsp;码</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input" name="data[user_password]" type="password" placeholder="请输入密码" required autocomplete />
                </div>
            </div>

            <div class="weui-cell">
                <div class="weui-cell__hd">
                    <label for="" class="weui-label"><span class="icon iconfont">&#xe6ff;</span>推荐人</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input" name="data[user_recommend]" type="text" placeholder="选填" />
                </div>
            </div>

            <div class="weui-cell">
                <div class="weui-cell__hd">
                    <label for="" class="weui-label"><span class="icon iconfont">&#xe6fa;</span>验证码</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input" name="verify_code" type="number" placeholder="请输入验证码" required />
                </div>
                <div class="weui-cell__ft">
                  <img class="weui-vcode-img" src="<?php echo(RGX\router::url('misc-verify-~')); ?>">
                </div>
            </div>
        </form>
    </div>
    <a href="javascript:;" class="weui-btn weui-btn_primary form-submit">立即注册</a>
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

</body>
</html>