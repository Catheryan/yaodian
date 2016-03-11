<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我的</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link  type="text/css" href="/yaodian/Public/css/bootstrap.min.css" rel="stylesheet">
<link  type="text/css" href="/yaodian/Public/css/home.css" rel="stylesheet">
<script src="/yaodian/Public/js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="/yaodian/Public/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/yaodian/Public/js/carousel.js" type="text/javascript"></script>
<script src="/yaodian/Public/js/admin/jquery.form.js" type="text/javascript"></script>

    <link href="/yaodian/Public/css/information.css" rel="stylesheet">
</head>
<body>
<div class="container" id="firstBar">
    <div class="col-xs-4">
        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
    </div>
    <div class="col-xs-4">
        <button type="button" class="btn btn-warning" id="loginButton" onclick="location.href='<?php echo U('Admin/Index');?>'">登陆</button>
    </div>
    <div class="col-xs-4">
        <button type="button" class="btn btn-danger" id="registerButton" onclick="location.href='<?php echo U('Register/Index');?>'">注册
        </button>
    </div>
</div>
<div class="container" id="secondBar">
    <div class="row" id="secondBarRow">
        <div class="col-xs-4">
            <p>
                <img src="/yaodian/Public/images/medicine/全部订单.png" id="img1"><br/>全部咨询
            </p>
        </div>
        <div class="col-xs-4">
            <p>
                <img src="/yaodian/Public/images/information/浏览历史.png" id="img2"><br/>浏览历史
            </p>
        </div>
        <div class="col-xs-4">
            <p>
                <img src="/yaodian/Public/images/information/我的客服.png" id="img3"><br/>我的客服
            </p>
        </div>
    </div>
</div>
</body>
</html>