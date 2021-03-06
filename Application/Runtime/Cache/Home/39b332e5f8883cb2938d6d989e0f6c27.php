<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link  type="text/css" href="/yaodian/Public/css/bootstrap.min.css" rel="stylesheet">
<link  type="text/css" href="/yaodian/Public/css/home.css" rel="stylesheet">
<script src="/yaodian/Public/js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="/yaodian/Public/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/yaodian/Public/js/carousel.js" type="text/javascript"></script>
<script src="/yaodian/Public/js/admin/jquery.form.js" type="text/javascript"></script>

    <link href="/yaodian/Public/css/home.css" rel="stylesheet">
</head>
<body>
<div class="container" id="searchBar">
    <div class="input-group">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            </span>
        <a href="<?php echo U('Search/Index');?>"><input type="text" class="form-control" id="searchMedicine"
                                               placeholder="搜索药品、症状、品牌"></a>
    </div>
</div>
<div class="container" id="scrollBar">
    <div class="carousel slide" id="scrollAd" data-interval="3000">
        <ol class="carousel-indicators">
            <li data-target="#scrollAd" data-slide-to="0" class="active"></li>
            <li data-target="#scrollAd" data-slide-to="1"></li>
            <li data-target="#scrollAd" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" id="carouselInner">
            <div class="item active">
                <img src="/yaodian/Public/images/home/0.png">
            </div>
            <div class="item">
                <img src="/yaodian/Public/images/home/1.png">
            </div>
            <div class="item">
                <img src="/yaodian/Public/images/home/2.png">
            </div>
        </div>
        <a class="left carousel-control" href="#scrollAd" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#scrollAd" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
<div class="container" id="tabBar">
    <div class="row" id="tabRow">
        <div class="col-xs-4">
            <a href="<?php echo U('Categories/Index');?>"><p>
                <img src="/yaodian/Public/images/home/分类.png"><br/>分 类
            </p></a>
        </div>
        <div class="col-xs-4">
            <p>
                <img src="/yaodian/Public/images/home/购物车.png"><br/>咨 询
            </p>
        </div>
        <div class="col-xs-4">
            <a href="<?php echo U('Information/Index');?>"><p>
                <img src="/yaodian/Public/images/home/我的.png"><br/>我 的
            </p></a>
        </div>
    </div>
</div>
<div class="container" id="adBar">
    <div class="row">
        <div class="col-xs-6">
            <div class="row">
                <img id="img1" src="/yaodian/Public/images/home/家庭常备.png">
            </div>
            <div class="row">
                <img id="img2" src="/yaodian/Public/images/home/急需购药.png">
            </div>
        </div>
        <div class="row" id="special">
            <div class="col-xs-6">
                <img id="img3" src="/yaodian/Public/images/home/优惠购药.png">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <table class="table table-bordered" id="tableBar">
        <tr>
            <td>
                <a href="<?php echo U('Search/getResult');?>"><p>
                    <img src="/yaodian/Public/images/home/感冒用药.png"><br/>感冒用药
                </p></a>
            </td>
            <td>
                <p>
                    <img src="/yaodian/Public/images/home/清热解毒.png"><br/>清热解毒
                </p>
            </td>
            <td>
                <p>
                    <img src="/yaodian/Public/images/home/皮肤用药.png"><br/>皮肤用药
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <img src="/yaodian/Public/images/home/妇科用药.png"><br/>妇科用药
                </p>
            </td>
            <td>
                <p>
                    <img src="/yaodian/Public/images/home/男科用药.png"><br/>男科用药
                </p>
            </td>
            <td>
                <p>
                    <img src="/yaodian/Public/images/home/儿童用药.png"><br/>儿童用药
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <img src="/yaodian/Public/images/home/性福生活.png"><br/>性福生活
                </p>
            </td>
            <td>
                <p>
                    <img src="/yaodian/Public/images/home/肠胃用药.png"><br/>肠胃用药
                </p>
            </td>
            <td>
                <p>
                    <img src="/yaodian/Public/images/home/滋补补益.png"><br/>滋补补益
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <img src="/yaodian/Public/images/home/家庭常备logo.png"><br/>家庭常备
                </p>
            </td>
            <td>
                <p>
                    <img src="/yaodian/Public/images/home/风湿骨伤.png"><br/>风湿骨伤
                </p>
            </td>
            <td>
                <p>
                    <img src="/yaodian/Public/images/home/营养保健.png"><br/>营养保健
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <img src="/yaodian/Public/images/home/糖尿病.png"><br/>糖尿病
                </p>
            </td>
            <td>
                <p>
                    <img src="/yaodian/Public/images/home/高血压.png"><br/>高血压
                </p>
            </td>
            <td>
                <p>
                    <img src="/yaodian/Public/images/home/高血脂.png"><br/>高血脂
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <img src="/yaodian/Public/images/home/五官用药.png"><br/>五官用药
                </p>
            </td>
            <td>
                <p>
                    <img src="/yaodian/Public/images/home/智能器械.png"><br/>智能器械
                </p>
            </td>
            <td>
                <p>
                    <img src="/yaodian/Public/images/home/婴幼用品.png"><br/>婴幼用品
                </p>
            </td>
        </tr>
    </table>
</div>
</body>
</html>