<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>搜索结果</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link  type="text/css" href="/yaodian/Public/css/bootstrap.min.css" rel="stylesheet">
<link  type="text/css" href="/yaodian/Public/css/home.css" rel="stylesheet">
<script src="/yaodian/Public/js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="/yaodian/Public/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/yaodian/Public/js/carousel.js" type="text/javascript"></script>
<script src="/yaodian/Public/js/admin/jquery.form.js" type="text/javascript"></script>

    <link href="/yaodian/Public/css/searchResult.css" rel="stylesheet">
</head>
<body>
<div class="container" id="searchBar">
    <div class="input-group">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            </span>
        <input type="text" class="form-control" id="searchMedicine" placeholder="搜索药品、症状、品牌">
            <span class="input-group-btn">
                <button class="btn btn-danger" type="button">搜索</button>
            </span>
    </div>
</div>
<div class="container" id="topBar">
    <div class="row">
        <div class="col-xs-4">
            <button type="button" class="btn btn-danger" id="defaultButton">默认</button>
        </div>
        <div class="col-xs-4">
            <button type="button" class="btn btn-danger" id="salesVolumeButton">销量
                <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>
            </button>
        </div>
        <div class="col-xs-4">
            <button type="button" class="btn btn-danger" id="priceButton">价格
                <span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span>
                <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>
            </button>
        </div>
    </div>
</div>
<div class="container" id="medinceDetail">
    <a href="<?php echo U('Detail/Index');?>">
        <div class="row" id="titleRow">
            <p>[999]复方感冒灵颗粒</p>
        </div>
        <div class="row" id="detailRow">
            <div class="col-xs-4">
                <img src="/yaodian/Public/images/search/感冒灵颗粒.jpg">
            </div>
            <div class="col-xs-8">
                <h4>14gx15袋</h4>
                <p id="p1">辛凉解表,清热解毒.用于风热感冒之发热,微...</p>
                <p id="p2">¥25.00</p>
            </div>
        </div>
    </a>
</div>
</body>
</html>