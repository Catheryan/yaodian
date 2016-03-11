<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <title>后台管理系统</title>
    <base href="/zjfdy/index.php/Home" />
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="/zjfdy/Public/Min/?f=/zjfdy/Public/stylesheets/admin/base.css|/zjfdy/Public/stylesheets/admin/layout.css|/zjfdy/Public/javascripts/admin/asyncbox/skins/default.css" />

    <!-- js -->
    <script type="text/javascript" src="/zjfdy/Public/Min/?f=/zjfdy/Public/javascripts/admin/jquery-1.7.2.min.js|/zjfdy/Public/javascripts/admin/jquery.lazyload.js|/zjfdy/Public/javascripts/admin/functions.js|/zjfdy/Public/javascripts/admin/base.js|/zjfdy/Public/javascripts/admin/jquery.form.js|/zjfdy/Public/javascripts/admin/asyncbox/asyncbox.js|/zjfdy/Public/javascripts/admin/jquery.watermark.js|/zjfdy/Public/javascripts/admin/datepicker/datetimepicker_css.js">
</script>

<script type="text/javascript">
    $(window).resize(autoSize);
    $(function(){
        autoSize();
        $(".loginOut").click(function(){
            var url=$(this).attr("href");
            popup.confirm('你确定要退出吗？','你确定要退出吗',function(action){
                if(action == 'ok'){ window.location=url; }
            });
            return false;
        });

        var time=self.setInterval(function(){$("#today").html(date("Y-m-d H:i:s"));},1000);
    });
</script>

    <!--<link href="/zjfdy/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="/zjfdy/Public/javascripts/admin/jquery-1.7.2.min.js"></script>
    <script src="/zjfdy/Public/bootstrap/js/bootstrap.min.js"></script>-->
</head>

<body>
    <div class="wrap">
        <!-- header -->
        <div id="Top">
    <div class="logo">
        <a href="<?php echo U('Public/index');?>"><img src="/zjfdy/Public/images/admin/logo.png" />
        </a>
    </div>

     <div class="help">
        <a href="#">使用帮助</a><span><a href="#">关于</a></span>
    </div>

    <!-- menu -->
    <div class="menu">
    <ul>
        <?php if(is_array($main_menu)): $i = 0; $__LIST__ = $main_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu_item): $mod = ($i % 2 );++$i; if($i == 1): ?><li class="fisrt <?php echo activedLink($key, null, 'fisrt_current');?>">
                    <span><a href="<?php echo U($menu_item['target']);?>"><?php echo ($menu_item['name']); ?></a></span>
                </li>
                <?php elseif($i == count($main_menu)): ?>
                <li class="end <?php echo activedLink($key, null, 'end_current');?>">
                    <span><a href="<?php echo U($menu_item['target']);?>"><?php echo ($menu_item['name']); ?></a></span>
                </li>
                <?php else: ?>
                <li class="<?php echo activedLink($key, null, 'current');?>">
                    <span><a href="<?php echo U($menu_item['target']);?>"><?php echo ($menu_item['name']); ?></a></span>
                </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>

</div>

<!-- tab -->
<div id="Tags">
    <div class="userPhoto"><img src="https://secure.gravatar.com/avatar/bbd865d76f0eac057d0263c929c22355.png" /> </div>
    <div class="navArea">
        <div class="userInfo">
            <div>
                <a href="<?php echo U('Public/logout');?>" class="loginOut"><span>&nbsp;</span>退出系统</a>
            </div>
            欢迎您，<?php echo ($_SESSION['current_account']['email']); ?>
        </div>
        <div class="nav">
            <font id="today"><?php echo date("Y-m-d H:i:s");?></font>
            您的位置：<?php echo ($breadcrumbs); ?>
        </div>
    </div>
</div>


<div class="clear"></div>


        <!-- main -->
        <div >
            <!-- left -->
            <div id="Left">
    <div id="control" class=""></div>
    <div class="subMenuList">
        <div class="itemTitle">
            常用操作
        </div>
        <ul>
            <?php if(is_array($sub_menu)): $i = 0; $__LIST__ = $sub_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu_item): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U($key);?>"><?php echo ($menu_item); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>


            <!-- right -->
            <div id="Right">
                <link href="/zjfdy/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="/zjfdy/Public/javascripts/admin/jquery-1.7.2.min.js"></script>
<script src="/zjfdy/Public/bootstrap/js/bootstrap.min.js"></script>
<style>
    ul.timeline {
        list-style-type: none;
        background: url("../Public/images/Bg/version_line.png") repeat-y scroll 120px 0 transparent;
        margin: 20px 0;
        padding: 0;
    }

    ul.timeline li {
    : position : relative;
        margin-bottom: 20px;
    }

    ul.timeline li .time {
        position: absolute;
        width: 90px;
        text-align: right;
        left: 0;
        top: px;

        color: #999;
    }

    ul.timeline li .version {
        position: relative;
        width: 290px;
        text-align: right;
        left: -200px;
        top: 5px;
        font-size: 25px;
        line-height: 50px;
        color: #3594cb;
        overflow: hidden;
    }

    ul.timeline li .number {
        position: absolute;
        background: url("../Public/images/Bg/version_dot.png") no-repeat scroll 0 0 transparent;
        width: 56px;
        height: 56px;
        left: 97px;
        line-height: 56px;
        text-align: center;
        color: #fff;
        font-size: 40px;
    }

    ul.timeline li.alt .number {
        background: url("../Public/images/Bg/version_dot.png") no-repeat scroll 0 0 transparent;
    }

    ul.timeline li .content {
        margin-left: 180px;

    }

    ul.timeline li .content div {
        background-color: #3594cb;
        padding: 5px;
        color: #fff;
        font-size: 20px;
        line-height: 20px;
    }

    ul.timeline li.alt .content pre {
        background-color: #43B1F1;
    }
</style>
<button type="button" class="btn btn-primary btn-lg">
    添加会议
</button>
<ul class="timeline">
    <?php if(is_array($xiMeetings)): $i = 0; $__LIST__ = $xiMeetings;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xiMeeting): $mod = ($i % 2 );++$i;?><li>
        <div class="time"><?php echo ($xiMeeting['participanttime']); ?></div>
        <!--<div class="version"><?php echo ($xiMeeting['title']); ?></div>-->
        <div class="number"></div>
        <div class="content">
            <div class="row-fluid">
                        <div class="span12">
                            <h2>
                                会议主题：<?php echo ($xiMeeting['title']); ?>
                            </h2>
                            <h4>
                                参会人员：<?php echo ($xiMeeting['participants']); ?>
                            </h4>
                            <p>
                                <strong>
                                会议内容：<?php echo ($xiMeeting['content']); ?>
                                </strong>
                            </p>
                        </div>
                </div>
        </div>
    </li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
<script>
    $(function () {

        var nextDataNumber = 5;

        var ulNode = $('ul.timeline');

        function initLiNodes() {
            var liNodes = ulNode.find('li'), count = liNodes.length, i, liNode, leftCount = nextDataNumber * 1-5;
            for (i = 0; i < count; i++) {
                liNode = $(liNodes.get(i));
                if (i % 2 !== 0) {
                    liNode.addClass('alt');
                } else {
                    liNode.removeClass('alt');
                }
                liNode.find('.number').text(leftCount + count - i);
            }
        }


        $('#fetchNextData').click(function () {
            var $this = $(this);
            $this.addClass('disabled').text('......');

            $.get('./version_data_' + nextDataNumber + '.txt', function (data) {
                ulNode.append(data);
                $this.removeClass('disabled').text('后二十条数据');
                nextDataNumber--;

                if (nextDataNumber === 0) {
                    $this.hide();
                }

                initLiNodes();
            });

        });

        initLiNodes();

    });
</script>

            </div>
        </div>
        <div class="clear"></div>

    </div>
</body>
</html>