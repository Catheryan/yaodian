<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登陆</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link  type="text/css" href="/yaodian/Public/css/bootstrap.min.css" rel="stylesheet">
<link  type="text/css" href="/yaodian/Public/css/home.css" rel="stylesheet">
<script src="/yaodian/Public/js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="/yaodian/Public/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/yaodian/Public/js/carousel.js" type="text/javascript"></script>
<script src="/yaodian/Public/js/admin/jquery.form.js" type="text/javascript"></script>

    <link href="/yaodian/Public/css/login.css" rel="stylesheet">
</head>
<body>
<div class="container" id="navBar">
    <ul class="nav nav-tabs">
        <li role="presentation" class="active" id="login1"><a href="#">验证码登录</a></li>
        <li role="presentation" id="login2"><a href="#">密码登录</a></li>
    </ul>
</div>
<form>
<div class="container" id="putinBar">
    <input type="text" class="form-control" id="account" name="admin[email]" placeholder="请输入手机号码">
    <div class="col-xs-8" id="input2Bar">
        <input type="password" class="form-control" id="pwd" name="admin[password]" placeholder="请输入验证码">
    </div>
    <div class="col-xs-4" id="putin3Bar" >
        <button type="button" class="btn btn-warning" id="sendCode">发送验证码</button>
    </div>
</div>
</form>
<div class="container">
    <button type="button" id="submit" class="btn btn-danger btn-lg">登陆</button>
</div>
<script type="text/javascript" src="/yaodian/Public/js/admin/functions.js"></script>
<script type="text/javascript">
    $(function(){
        // 登录
        $("#submit").click(function(){
            if($("#account").val() == ''
                    || $("#pwd").val() == ''){
                alert("请填写完整的表单后进行登录！");
                return false;
            }
            commonAjaxSubmit("<?php echo U('Login/admin');?>");
        });
    });
</script>
</body>
</html>