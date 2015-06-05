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
    <title>漫FM-Comic 漫单</title>
    <link rel="stylesheet" href="css/site.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/comicfm.ico">
</head>
<body>

<?php
include_once("php/navbar.php");
?>


<!--caurousel-->
<div class="container" style="margin-top: 21px;" id="mlist">
    <div id="slidershow" class="carousel slide" data-ride="carousel" data-wrap="true" data-interval="3000">
        <!-- 设置图片轮播的顺序 -->
        <ol class="carousel-indicators">
            <li class="active" data-target="#slidershow" data-slide-to="0">1</li>
            <li data-target="#slidershow" data-slide-to="1">2</li>
            <li data-target="#slidershow" data-slide-to="2">3</li>
        </ol>
        <!-- 设置轮播图片 -->
        <div class="carousel-inner">
            <div class="item active">
                <a href="##"><img src="images/carousel1.jpg" alt="carousel1"></a>

                <div class="carousel-caption">
                    <h3>图片标题1</h3>

                    <p>描述内容1...</p>
                </div>
            </div>
            <div class="item">
                <a href="##"><img src="images/carousel2.jpg" alt="carousel2"></a>

                <div class="carousel-caption">
                    <h3>图片标题2</h3>

                    <p>描述内容2...</p>
                </div>
            </div>
            <div class="item">
                <a href="##"><img src="images/carousel3.jpg" alt="carousel3"></a>

                <div class="carousel-caption">
                    <h3>图片标题3</h3>

                    <p>描述内容3...</p>
                </div>
            </div>
        </div>
        <!-- 设置轮播图片控制器 -->
        <a class="left carousel-control" href="#slidershow" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#slidershow" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>

<br>
<br>
<!--漫单-->
<div class="container">


    <div class="row">
        <div class="col-xs-5 col-sm-8 col-md-9">
            <h2>推荐漫单</h2>

<?php

$con=mysql_connect("localhost","root","123456");
if(!$con)
{
	die("Connect fail:".mysql_error());
}
mysql_select_db("db_comicfm",$con);//所使用的数据库

$all_mlist=mysql_query("select * from comic_list where clist_id in (select clist_id from recommend_clist group by clist_id order by count(clist_id) desc)");//漫单表
while($row=mysql_fetch_array($all_mlist))
{
	
	echo '<div class="panel">
               <ul class="media-list">
                    <li class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="images/Origin.jpg">
                        </a>

                        <div class="media-body">
                            <br> ';
                        echo '<a href="#"><h4 class="media-heading">'.$row['list_title'].'</h4></a>';//漫单名

                        echo ' <p><a href="#">'.'漫友:'.$row['user_id'].'</a></p>';//漫单创建者

                        echo"<p>".$row['list_description']."</p>";
                        echo' <a href="#" class="btn btn-primary" role="button">收藏</a> ';
						echo' <a href="#" class="btn btn-primary" role="button">播放</a> ';
                        echo ' </div>
                    </li>
                </ul>
            </div>';
}
  mysql_close($con);
?>
</div>

        <!--左边col-->

        <div class="col-xs-5  col-sm-4 col-md-3">
            <h2>热门漫单</h2>

            <ul id="myTab" class="nav nav-tabs">
                <li class="active"><a href="#play" data-toggle="tab">播放</a></li>
                <li><a href="#comment" data-toggle="tab">评论</a></li>
                <li><a href="#follow" data-toggle="tab">收藏</a></li>
            </ul>


            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="play">
                    <div class="panel">
                        <p><a href="#">时光</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="comment">
                    <div class="thumbnail">
                        <p><a href="#">动漫动不动</a></p>

                        <p><a href="#">慢慢漫</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>
                    </div>
                </div>

                <div class="tab-pane fade" id="follow">
                    <div class="panel">
                        <p><a href="#">下雨了</a></p>

                        <p><a href="#">你猜</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>
                    </div>
                </div>

            </div>


            <h2>漫单达人</h2>

            <ul id="Tab" class="nav nav-tabs">
                <li class="active"><a href="#play2" data-toggle="tab">播放</a></li>
                <li><a href="#comment2" data-toggle="tab">评论</a></li>
                <li><a href="#follow2" data-toggle="tab">收藏</a></li>
            </ul>


            <div id="TabContent" class="tab-content">
                <div class="tab-pane fade in active" id="play2">
                    <div class="panel">
                        <p><a href="#">tize</a></p>

                        <p><a href="#">gui</a></p>

                        <p><a href="#">??</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="comment2">
                    <div class="panel">
                        <p><a href="#">tatu</a></p>

                        <p><a href="#">面目</a></p>

                        <p><a href="#">9x</a></p>

                        <p><a href="#">是谁</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>
                    </div>
                </div>

                <div class="tab-pane fade" id="follow2">
                    <div class="panel">
                        <p><a href="#">是我</a></p>

                        <p><a href="#">第一</a></p>

                        <p><a href="#">太阳</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>

                        <p><a href="#">什么什么</a></p>
                    </div>
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