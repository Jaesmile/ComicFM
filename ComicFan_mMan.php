<!DOCTYPE html>
<?php
    session_start();
    $_SESSION["value"] = 3;
?>
<html lang="en-zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="漫FM,动漫音乐MV,音乐,动漫,动漫MV,在线动漫MV,音乐MV,动漫视频,音乐视频,动漫音乐"/>
    <meta name="description" content="专为动漫迷打造的音乐盛会，仅供学习使用。"/>
    <meta name="author" content="cat">
    <title>漫FM-Comic 漫单达人秀</title>
    <link rel="stylesheet" href="css/site.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/comicfm.ico">
</head>
<body>
<?php
include_once("php/navbar.php");
?>

<div class="container" id="mman">
    <div class="col-xs-7 col-sm-7  col-md-9" style="margin-top: 30px;">
        <br>
        <h2>漫单达人</h2>
        <ul id="myTab" class="nav nav-tabs">
            <li class="active"><a href="#tuijian" data-toggle="tab">推荐达人</a></li>
            <li><a href="#chuangjian" data-toggle="tab">创建达人</a></li>
            <li><a href="#pinglun" data-toggle="tab">评论达人</a></li>
            <li><a href="#shoucang" data-toggle="tab">收藏达人</a></li>
            <li><a href="#bofang" data-toggle="tab">播放达人</a></li>
        </ul>

        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="tuijian">
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="thumbnail"><img src="images/absolution.jpg" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="thumbnail"><img src="images/muse.jpg" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="thumbnail"><img src="images/Origin.jpg" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="thumbnail"><img src="images/The%20Resistance.jpg" alt=""/></a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="thumbnail"><img src="images/absolution.jpg" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="thumbnail"><img src="images/muse.jpg" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="thumbnail"><img src="images/Origin.jpg" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="thumbnail"><img src="images/The%20Resistance.jpg" alt=""/></a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="thumbnail"><img src="images/absolution.jpg" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="thumbnail"><img src="images/muse.jpg" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="thumbnail"><img src="images/Origin.jpg" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="thumbnail"><img src="images/The%20Resistance.jpg" alt=""/></a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="thumbnail"><img src="images/absolution.jpg" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="thumbnail"><img src="images/muse.jpg" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="thumbnail"><img src="images/Origin.jpg" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="thumbnail"><img src="images/The%20Resistance.jpg" alt=""/></a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="thumbnail"><img src="images/absolution.jpg" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="thumbnail"><img src="images/muse.jpg" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="thumbnail"><img src="images/Origin.jpg" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="thumbnail"><img src="images/The%20Resistance.jpg" alt=""/></a>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="chuangjian">
                <p>创建</p>
            </div>
            <div class="tab-pane fade" id="pinglun">
                <p>评论</p>
            </div>
            <div class="tab-pane fade" id="shoucang">
                <p>收藏</p>
            </div>
            <div class="tab-pane fade" id="bofang">
                <p>播放</p>
            </div>
        </div>
    </div>

    <div class="col-xs-5 col-sm-5 col-md-3" style="margin-top: 73px;">

        <h2>今日达人Top</h2>
        <br>

        <div class="panel">
            <div class="media ">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object media-middle" src="images/people.jpg" alt="...">
                    </a>
                </div>
                <div class="media-body">
                    <br>
                    <a href="#"><h4 class="media-heading">NO.1 叫我达人</h4></a>
                    <a href="#" class="btn btn-primary" role="button">关注</a>
                </div>
                <div class="media-bottom">
                    <br>

                    <p>今日漫单播放次数：3045次</p>

                    <p>最火漫单：<a href="#">是不是不是不是</a></p>
                </div>
            </div>

            <hr style="border:1px dashed #000000;width:210px;height:1px"/>

            <div class="media ">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="images/people.jpg" alt="...">
                    </a>
                </div>
                <div class="media-body">
                    <br>
                    <a href="#"><h4 class="media-heading">NO.2 shared</h4></a>
                    <a href="#" class="btn btn-primary" role="button">关注</a>
                </div>
                <div class="media-bottom">
                    <br>

                    <p>今日漫单播放次数：2015次</p>

                    <p>最火漫单：<a href="#">今天</a></p>
                </div>
            </div>

            <hr style="border:1px dashed #000000;width:210px;height:1px"/>

            <div class="media ">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="images/people.jpg" alt="...">
                    </a>
                </div>
                <div class="media-body">
                    <br>
                    <a href="#"><h4 class="media-heading">NO.3 wow</h4></a>
                    <a href="#" class="btn btn-primary" role="button">关注</a>
                </div>
                <div class="media-bottom">
                    <br>

                    <p>今日漫单播放次数：2001次</p>

                    <p>最火漫单：<a href="#">This is the last dinner!</a></p>
                </div>
            </div>

            <hr style="border:1px dashed #000000;width:210px;height:1px"/>

            <div class="media ">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="images/people.jpg" alt="...">
                    </a>
                </div>
                <div class="media-body">
                    <br>
                    <a href="#"><h4 class="media-heading">NO.4 太阳</h4></a>
                    <a href="#" class="btn btn-primary" role="button">关注</a>
                </div>
                <div class="media-bottom">
                    <br>

                    <p>今日漫单播放次数：1701次</p>

                    <p>最火漫单：<a href="#">This is the last dinner!NO</a></p>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
include_once("php/footer.php");
?>

    <script>
        $("#navtab a").click(function (e) {
            $(this).tab("show");
        })
    </script>

    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>