<!DOCTYPE html>
<?php
    session_start();
    $_SESSION["value"] = 2;
?>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="漫FM,动漫音乐MV,音乐,动漫,动漫MV,在线动漫MV,音乐MV,动漫视频,音乐视频,动漫音乐"/>
    <meta name="description" content="专为动漫迷打造的音乐盛会，仅供学习使用。"/>
    <meta name="description" content="mv page">
    <meta name="author" content="trecy">
    <title>漫FM-Comic 推荐MV</title>
    <!-- Bootstrap css-->
    <link rel="stylesheet" href="css/site.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/comicfm.ico">

</head>
<body>
<?php
include_once("php/navbar.php");
?>

<div class="container" id="tuijianmv">
    <div id="content_header" class="row" style="margin-top: 1.6rem;">
        <div class="ourlogo" id="logo">
            <img src="images/logo.png" alt="our logo">
        </div>
        <!-- Large button group -->
        <div>
            <div class="btn-group" id="switch_item" role="group">
                <a class="btn btn-primary">推荐MV</a>
                <a class="btn btn-default" href="ComicFan_AllMv.php">全部MV</a>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                MV推荐 -- 发现最好的
            </div>
            <div class="content_panel">
                <div class="row" id="content_panel">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/1.jpg" alt="...">

                            <div class="caption">
                                <h3>Naruto New Op</h3>

                                <h3>
                                    <small>排名</small>
                                </h3>
                                <p>
                                    <a href="#" class="btn btn-primary" role="button">播放</a>
                                    <a href="#" class="btn btn-default" role="button">推荐</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/2.jpg" alt="...">

                            <div class="caption">
                                <h3>Naruto New</h3>

                                <h3>
                                    <small>排名</small>
                                </h3>
                                <p>
                                    <a href="#" class="btn btn-primary" role="button">播放</a>
                                    <a href="#" class="btn btn-default" role="button">推荐</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/3.jpg" alt="...">

                            <div class="caption">
                                <h3>Naruto New Op</h3>

                                <h3>
                                    <small>排名</small>
                                </h3>
                                <p>
                                    <a href="#" class="btn btn-primary" role="button">播放</a>
                                    <a href="#" class="btn btn-default" role="button">推荐</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="content_panel">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/4.jpg" alt="...">

                            <div class="caption">
                                <h3>Naruto New Op</h3>

                                <h3>
                                    <small>排名</small>
                                </h3>
                                <p>
                                    <a href="#" class="btn btn-primary" role="button">播放</a>
                                    <a href="#" class="btn btn-default" role="button">推荐</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/5.jpg" alt="...">

                            <div class="caption">
                                <h3>Naruto New</h3>

                                <h3>
                                    <small>排名</small>
                                </h3>
                                <p>
                                    <a href="#" class="btn btn-primary" role="button">播放</a>
                                    <a href="#" class="btn btn-default" role="button">推荐</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/6.jpg" alt="...">

                            <div class="caption">
                                <h3>Naruto New Op</h3>

                                <h3>
                                    <small>排名</small>
                                </h3>
                                <p>
                                    <a href="#" class="btn btn-primary" role="button">播放</a>
                                    <a href="#" class="btn btn-default" role="button">推荐</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="content_panel">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/7.jpg" alt="...">

                            <div class="caption">
                                <h3>Naruto New Op</h3>

                                <h3>
                                    <small>排名</small>
                                </h3>
                                <p>
                                    <a href="#" class="btn btn-primary" role="button">播放</a>
                                    <a href="#" class="btn btn-default" role="button">推荐</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/8.jpg" alt="...">

                            <div class="caption">
                                <h3>Naruto New</h3>

                                <h3>
                                    <small>排名</small>
                                </h3>
                                <p>
                                    <a href="#" class="btn btn-primary" role="button">播放</a>
                                    <a href="#" class="btn btn-default" role="button">推荐</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/9.jpg" alt="...">

                            <div class="caption">
                                <h3>Naruto New Op</h3>

                                <h3>
                                    <small>排名</small>
                                </h3>
                                <p>
                                    <a href="#" class="btn btn-primary" role="button">播放</a>
                                    <a href="#" class="btn btn-default" role="button">推荐</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="content_panel">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/10.jpg" alt="...">

                            <div class="caption">
                                <h3>Naruto New Op</h3>

                                <h3>
                                    <small>排名</small>
                                </h3>
                                <p>
                                    <a href="#" class="btn btn-primary" role="button">播放</a>
                                    <a href="#" class="btn btn-default" role="button">推荐</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/11.jpg" alt="...">

                            <div class="caption">
                                <h3>Naruto New</h3>

                                <h3>
                                    <small>排名</small>
                                </h3>
                                <p>
                                    <a href="#" class="btn btn-primary" role="button">播放</a>
                                    <a href="#" class="btn btn-default" role="button">推荐</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/12.jpg" alt="...">

                            <div class="caption">
                                <h3>Naruto New Op</h3>

                                <h3>
                                    <small>排名</small>
                                </h3>
                                <p>
                                    <a href="#" class="btn btn-primary" role="button">播放</a>
                                    <a href="#" class="btn btn-default" role="button">推荐</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <center>
        <nav class="page">
            <ul class="pagination">
                <li class="disabled">
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="active">
                    <a href="#">1
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li>
                    <a href="#">2
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li>
                    <a href="#">3
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li>
                    <a href="#">4
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li>
                    <a href="#">...
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </center>
</div>

<?php
include_once("php/footer.php");
?>

<script>
    $("#navtab a").click(function (e) {
        $(this).tab("show");
    })
</script>

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>