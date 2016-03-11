<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link  type="text/css" href="/yaodian/Public/css/bootstrap.min.css" rel="stylesheet">
<link  type="text/css" href="/yaodian/Public/css/home.css" rel="stylesheet">
<script src="/yaodian/Public/js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="/yaodian/Public/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/yaodian/Public/js/carousel.js" type="text/javascript"></script>
<script src="/yaodian/Public/js/admin/jquery.form.js" type="text/javascript"></script>

    <link href="/yaodian/Public/css/register.css" rel="stylesheet">
</head>
<body>
<div class="container" id="putinBar">
    <input type="text" class="form-control" id="input1" placeholder="请输入手机号码">
    <input type="text" class="form-control" id="input2" placeholder="请设置登录密码">
    <div class="col-xs-8" ID="input3Bar">
        <input type="text" class="form-control" id="input3" placeholder="请输入验证码">
    </div>
    <div class="col-xs-4">
        <button type="button" class="btn btn-warning" id="sendCode">发送验证码</button>
    </div>
</div>
<div class="container">
    <p><a href="#">同意用户协议</a></p>
    <button type="button" class="btn btn-danger btn-lg">注册</button>
</div>
</body>
</html>