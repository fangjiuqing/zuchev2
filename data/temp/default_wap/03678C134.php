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
    body {
        background: url(http://localhost/fjzj/template/default/images/bg2.png) top center no-repeat; background-size:100%;
        padding: 0px;
        position: relative;
    }
    .logo-header {
        padding: 15px;
        margin-top: 20%;
    }
    .logo {
        float: left;
        width: 42px;
        margin-right: 10px;
    }
    .logo img {
        /*width: 50%;*/
    }

    .company-name {
        color: #000;
        font-size: 22px;
        font-weight: bold;
        margin-top: 18px;
    }

    .company-en-name {
        color:#767d82;
        font-size: 12px;
    }
    .company-en-name span {
        /*margin-right: 2px;
        letter-spacing:1px;*/
    }

    .slogen {
        margin-top: 20%;
        text-align: center;
    }
    .slogen .t1 {
        color:#000;
        font-size: 20px;
    }
    .slogen .t2 {
        color:#767d82;
    }
    .icons {
        text-align: center;
        margin:56% auto 0 auto;
        width: 60%;
    }

    .icons a {
        cursor: pointer;
        padding:10px 5px;
        background-color:#fff;
        border: 1px #d7d7d7 solid;
        border-radius: 10px;
        display: inline-block;
        width: 140px;
        margin-bottom: 15px;
    }

    .icon-china {
        background: url(http://localhost/fjzj/template/default/images/china.png) no-repeat 15% 55%;
        background-size: 24px;
    }
    .icon-internation {
        background: url(http://localhost/fjzj/template/default/images/internation.png) no-repeat 15% 55%;
        background-size: 24px;
    }
    .icon img {

    }
</style>
</head>

<body class="">
    <div class="logo-header">
        <h3 class="logo">
            <img src="http://localhost/fjzj/template/default/images/logo_boot.png">
        </h3>
        <p class="company-name">江西中京人力资源有限公司</p>
        <p class="company-en-name">
            <span>JIANGXI</span>
            <span>ZHONGJING</span>
            <span>HUMAN</span>
            <span>RESOURCE</span>
            <span>CO.,LTD</span>
        </p>
    </div>

    <div class="slogen">
        <p class="t1">您身边的劳务服务专家</p>
        <p class="t2"> ———— 就业 <span class="dot">.</span> 留学 ———— </p>
    </div>
    <div class="icons">
        <!-- 紫薯 -->
        <a href="<?php echo(RGX\router::url('index-china-~')); ?>" class="icon icon-china">
            国内部
        </a>

        <a href="<?php echo(RGX\router::url('index-internation-~')); ?>" class="icon icon-internation">
            国际部
        </a>

        <!-- <a href="#" class="icon icon-guoji">
            <img src="http://localhost/fjzj/template/default/images/guoji.png" />
        </a> -->
    </div>
</body>
</html>