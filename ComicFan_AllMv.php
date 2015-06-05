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
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="mv page">
    <meta name="author" content="trecy">
    <title>漫FM-Comic 全部MV</title>
    <!-- Bootstrap css-->
    <link href="css/site.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/comicfm.ico">

</head>
<body>
<?php
include_once("php/navbar.php");
?>

<div class="container" id="allmv">
    <div id="content_header" class="row" style="margin-top: 1.6rem;">
        <div class="ourlogo">
            <img src="images/logo.png" alt="our logo">
        </div>
        <!-- Large button group -->
        <div>
            <div class="btn-group" id="switch_item" role="group">
                <a class="btn btn-default" href="ComicFan_mv.php">推荐MV</a>
                <a class="btn btn-primary" href="#">全部MV</a>
            </div>
        </div>

    </div>

    <div id="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                全部MV
            </div>
            <div class="content_panel">
                <div class="row" id="content_panel">
                    <div class="classify-block">
                        <div class="classify-block-item">
                            <span id="location-item-leader">MV地区</span>
                            <button type="button" class="btn btn-primary btn-sm">全部</button>
                            <span class="location-item"><a>中国</a></span>
                            <span class="location-item"><a>日本</a></span>
                            <span class="location-item"><a>美国</a></span>
                            <span class="location-item"><a>其他</a></span>
                        </div>

                        <div class="classify-block-item">
                            <span id="location-item-leader">MV分类</span>
                            <button type="button" class="btn btn-primary btn-sm">全部</button>
                            <span class="location-item"><a>OP</a></span>
                            <span class="location-item"><a>ED</a></span>
                            <span class="location-item"><a>其他</a></span>
                        </div>
                    </div>
                    <div>
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                            data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="#">排序方式</a>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a href="#">最新发布 </a></li>
                                        <li><a href="#">收藏最多</a></li>
                                        <li><a href="#">推荐最多 </a></li>
                                        <li><a href="#">播放最多 </a></li>
                                    </ul>
                                </div>
                                <!-- /.navbar-collapse -->
                            </div>
                            <!-- /.container-fluid -->
                        </nav>
                    </div>
                    <div id="item-container">
                        <div class="row">
                            <div class="col-xs-6 col-md-3">
                                <div class="item">
                                    <a href="#" class="thumbnail">
                                        <img alt="..." src="images/1.jpg">
                                    </a>

                                    <div class="item-intro">
                                        <h5 class="item-title"><strong>火影忍者 OP</strong></h5>

                                        <p class="item-source">来源：火影忍者</p>

                                        <p class="item-time"><span class="glyphicon glyphicon-time"></span> 2012-2-3</p>
                                    </div>
                                </div>
                            </div>
                            <!--end ITEM-->
                            <div class="col-xs-6 col-md-3">
                                <div class="item">
                                    <a href="#" class="thumbnail">
                                        <img alt="..." src="images/4.jpg">
                                    </a>

                                    <div class="item-intro">
                                        <h5 class="item-title"><strong>火影忍者 OP</strong></h5>

                                        <p class="item-source">来源：火影忍者</p>

                                        <p class="item-time"><span class="glyphicon glyphicon-time"></span> 2012-2-3</p>
                                    </div>
                                </div>
                            </div>
                            <!--end ITEM-->
                            <div class="col-xs-6 col-md-3">
                                <div class="item">
                                    <a href="#" class="thumbnail">
                                        <img alt="..." src="images/2.jpg">
                                    </a>

                                    <div class="item-intro">
                                        <h5 class="item-title"><strong>火影忍者 OP</strong></h5>

                                        <p class="item-source">来源：火影忍者</p>

                                        <p class="item-time"><span class="glyphicon glyphicon-time"></span> 2012-2-3</p>
                                    </div>
                                </div>
                            </div>
                            <!--end ITEM-->
                            <div class="col-xs-6 col-md-3">
                                <div class="item">
                                    <a href="#" class="thumbnail">
                                        <img alt="..." src="images/3.jpg">
                                    </a>

                                    <div class="item-intro">
                                        <h5 class="item-title"><strong>火影忍者 OP</strong></h5>

                                        <p class="item-source">来源：火影忍者</p>

                                        <p class="item-time"><span class="glyphicon glyphicon-time"></span> 2012-2-3</p>
                                    </div>
                                </div>
                            </div>
                            <!--end ITEM-->
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-md-3">
                                <div class="item">
                                    <a href="#" class="thumbnail">
                                        <img alt="..." src="images/1.jpg">
                                    </a>

                                    <div class="item-intro">
                                        <h5 class="item-title"><strong>火影忍者 OP</strong></h5>

                                        <p class="item-source">来源：火影忍者</p>

                                        <p class="item-time"><span class="glyphicon glyphicon-time"></span> 2012-2-3</p>
                                    </div>
                                </div>
                            </div>
                            <!--end ITEM-->
                            <div class="col-xs-6 col-md-3">
                                <div class="item">
                                    <a href="#" class="thumbnail">
                                        <img alt="..." src="images/4.jpg">
                                    </a>

                                    <div class="item-intro">
                                        <h5 class="item-title"><strong>火影忍者 OP</strong></h5>

                                        <p class="item-source">来源：火影忍者</p>

                                        <p class="item-time"><span class="glyphicon glyphicon-time"></span> 2012-2-3</p>
                                    </div>
                                </div>
                            </div>
                            <!--end ITEM-->
                            <div class="col-xs-6 col-md-3">
                                <div class="item">
                                    <a href="#" class="thumbnail">
                                        <img alt="..." src="images/2.jpg">
                                    </a>

                                    <div class="item-intro">
                                        <h5 class="item-title"><strong>火影忍者 OP</strong></h5>

                                        <p class="item-source">来源：火影忍者</p>

                                        <p class="item-time"><span class="glyphicon glyphicon-time"></span> 2012-2-3</p>
                                    </div>
                                </div>
                            </div>
                            <!--end ITEM-->
                            <div class="col-xs-6 col-md-3">
                                <div class="item">
                                    <a href="#" class="thumbnail">
                                        <img alt="..." src="images/3.jpg">
                                    </a>

                                    <div class="item-intro">
                                        <h5 class="item-title"><strong>火影忍者 OP</strong></h5>

                                        <p class="item-source">来源：火影忍者</p>

                                        <p class="item-time"><span class="glyphicon glyphicon-time"></span> 2012-2-3</p>
                                    </div>
                                </div>
                            </div>
                            <!--end ITEM-->
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-md-3">
                                <div class="item">
                                    <a href="#" class="thumbnail">
                                        <img alt="..." src="images/1.jpg">
                                    </a>

                                    <div class="item-intro">
                                        <h5 class="item-title"><strong>火影忍者 OP</strong></h5>

                                        <p class="item-source">来源：火影忍者</p>

                                        <p class="item-time"><span class="glyphicon glyphicon-time"></span> 2012-2-3</p>
                                    </div>
                                </div>
                            </div>
                            <!--end ITEM-->
                            <div class="col-xs-6 col-md-3">
                                <div class="item">
                                    <a href="#" class="thumbnail">
                                        <img alt="..." src="images/4.jpg">
                                    </a>

                                    <div class="item-intro">
                                        <h5 class="item-title"><strong>火影忍者 OP</strong></h5>

                                        <p class="item-source">来源：火影忍者</p>

                                        <p class="item-time"><span class="glyphicon glyphicon-time"></span> 2012-2-3</p>
                                    </div>
                                </div>
                            </div>
                            <!--end ITEM-->
                            <div class="col-xs-6 col-md-3">
                                <div class="item">
                                    <a href="#" class="thumbnail">
                                        <img alt="..." src="images/2.jpg">
                                    </a>

                                    <div class="item-intro">
                                        <h5 class="item-title"><strong>火影忍者 OP</strong></h5>

                                        <p class="item-source">来源：火影忍者</p>

                                        <p class="item-time"><span class="glyphicon glyphicon-time"></span> 2012-2-3</p>
                                    </div>
                                </div>
                            </div>
                            <!--end ITEM-->
                            <div class="col-xs-6 col-md-3">
                                <div class="item">
                                    <a href="#" class="thumbnail">
                                        <img alt="..." src="images/3.jpg">
                                    </a>

                                    <div class="item-intro">
                                        <h5 class="item-title"><strong>火影忍者 OP</strong></h5>

                                        <p class="item-source">来源：火影忍者</p>

                                        <p class="item-time"><span class="glyphicon glyphicon-time"></span> 2012-2-3</p>
                                    </div>
                                </div>
                            </div>
                            <!--end ITEM-->
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-md-3">
                                <div class="item">
                                    <a href="#" class="thumbnail">
                                        <img alt="..." src="images/1.jpg">
                                    </a>

                                    <div class="item-intro">
                                        <h5 class="item-title"><strong>火影忍者 OP</strong></h5>

                                        <p class="item-source">来源：火影忍者</p>

                                        <p class="item-time"><span class="glyphicon glyphicon-time"></span> 2012-2-3</p>
                                    </div>
                                </div>
                            </div>
                            <!--end ITEM-->
                            <div class="col-xs-6 col-md-3">
                                <div class="item">
                                    <a href="#" class="thumbnail">
                                        <img alt="..." src="images/4.jpg">
                                    </a>

                                    <div class="item-intro">
                                        <h5 class="item-title"><strong>火影忍者 OP</strong></h5>

                                        <p class="item-source">来源：火影忍者</p>

                                        <p class="item-time"><span class="glyphicon glyphicon-time"></span> 2012-2-3</p>
                                    </div>
                                </div>
                            </div>
                            <!--end ITEM-->
                            <div class="col-xs-6 col-md-3">
                                <div class="item">
                                    <a href="#" class="thumbnail">
                                        <img alt="..." src="images/2.jpg">
                                    </a>

                                    <div class="item-intro">
                                        <h5 class="item-title"><strong>火影忍者 OP</strong></h5>

                                        <p class="item-source">来源：火影忍者</p>

                                        <p class="item-time"><span class="glyphicon glyphicon-time"></span> 2012-2-3</p>
                                    </div>
                                </div>
                            </div>
                            <!--end ITEM-->
                            <div class="col-xs-6 col-md-3">
                                <div class="item">
                                    <a href="#" class="thumbnail">
                                        <img alt="..." src="images/3.jpg">
                                    </a>

                                    <div class="item-intro">
                                        <h5 class="item-title"><strong>火影忍者 OP</strong></h5>

                                        <p class="item-source">来源：火影忍者</p>

                                        <p class="item-time"><span class="glyphicon glyphicon-time"></span> 2012-2-3</p>
                                    </div>
                                </div>
                            </div>
                            <!--end ITEM-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="float:right">
        <nav class="page">
            <ul class="pagination">
                <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">2 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">3 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">4 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">... <span class="sr-only">(current)</span></a></li>
                <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
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

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>