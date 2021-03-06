<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>药品详情</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link  type="text/css" href="/yaodian/Public/css/bootstrap.min.css" rel="stylesheet">
<link  type="text/css" href="/yaodian/Public/css/home.css" rel="stylesheet">
<script src="/yaodian/Public/js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="/yaodian/Public/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/yaodian/Public/js/carousel.js" type="text/javascript"></script>
    <link href="/yaodian/Public/css/detail.css" rel="stylesheet">

</head>
<body>
<div class="container" id="scrollBar">
    <div id="scrollMedicine" class="carousel slide" data-interval="3000">
        <ol class="carousel-indicators">
            <li data-target="#scrollMedicine" data-slide-to="0" class="active"></li>
            <li data-target="#scrollMedicine" data-slide-to="1"></li>
            <li data-target="#scrollMedicine" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" id="carouselInner">
            <div class="item active">
                <img src="/yaodian/Public/images/medicine/s_1.jpg">
            </div>
            <div class="item">
                <img src="/yaodian/Public/images/medicine/s_2.jpg">
            </div>
            <div class="item">
                <img src="/yaodian/Public/images/medicine/s_3.jpg">
            </div>
        </div>
        <a class="left carousel-control" href="#scrollMedicine" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#scrollMedicine" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
<div class="container" id="introBar">
    <div class="col-xs-9">
        <p id="p1">[999]复方感冒灵颗粒</p>
        <p id="p2">14gx15袋</p>
    </div>
    <div class="col-xs-3">
        <p id="p3">¥25.00</p>
    </div>
</div>
<div class="container" id="funcIntroBar">
    <p id="p4">
        功能主治:辛凉解表,清热解毒.用于风热感冒之发热,...<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></p>
</div>
<nav class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
        <div class="col-xs-4" id="add1">
            <p>
                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span><br/>添加收藏
            </p>
        </div>
        <div class="col-xs-3" id="add2">
            <p>
                <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span><br/>咨询
            </p>
        </div>
        <div class="col-xs-5" id="addButton">
            <p>
                <button type="button" class="btn btn-danger">+ 加入到咨询</button>
            </p>
        </div>
    </div>
</nav>
</body>
</html>