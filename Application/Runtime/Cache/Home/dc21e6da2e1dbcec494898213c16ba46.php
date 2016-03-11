<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>搜索</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link  type="text/css" href="/yaodian/Public/css/bootstrap.min.css" rel="stylesheet">
<link  type="text/css" href="/yaodian/Public/css/home.css" rel="stylesheet">
<script src="/yaodian/Public/js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="/yaodian/Public/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/yaodian/Public/js/carousel.js" type="text/javascript"></script>
<script src="/yaodian/Public/js/admin/jquery.form.js" type="text/javascript"></script>

    <link href="/yaodian/Public/css/search.css" rel="stylesheet">

</head>
<body>
<div class="container" id="searchBar">
    <div class="input-group">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            </span>
        <input type="text" class="form-control" id="searchMedicine" placeholder="搜索药品、症状、品牌">
            <span class="input-group-btn">
                <button class="btn btn-danger" type="button" onclick="location.href='<?php echo U('Search/getResult');?>'">搜索</button>
            </span>
    </div>
</div>
<div class="container" id="searchHistory">
    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
    搜索历史
</div>
</body>
</html>