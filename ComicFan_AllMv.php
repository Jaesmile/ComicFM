<!DOCTYPE html>
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
    session_start();
?>
<!--NAVBAR-->
<header id="mynav" class="navbar navbar-default navbar-static-top bs-docs-nav navbar-fixed-top" role="banner">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse"
                    data-target=".bs-navbar-collapse">
                <span class="sr-only">缩放下拉列表</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand">Comic-FM</a>
        </div>
        <!--navbar header-->
        <nav class="navbar-collapse bs-navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
            <ul class="nav navbar-nav" id="navtab">
                <li>
                    <a href="index.php">首页<span class="sr-only">(current)</span></a>
                </li>

                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">MV
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="ComicFan_mv.php">推荐MV</a></li>
                        <li><a href="ComicFan_AllMv.php">全部MV</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        漫单
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="ComicFan_mList.php">推荐漫单</a></li>
                        <li><a href="ComicFan_mMan.php">漫单达人</a></li>
                        <li><a href="ComicFan_AllMList.php">全部漫单</a></li>
                    </ul>
                </li>

                <li role="presentation"><a href="ComicFan_news.php">资讯</a></li>


                <li role="presentation"><a href="#">
                    <span class="badge badge-info pull-right" style="background-color: #46b8da">1</span>通知</a>
                </li>

                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" autocomplete="on"
                               placeholder="名侦探柯南《Time after Time》">
                    </div>
                    <button type="button" class="btn btn-default">
                        <span aria-hidden="true"><img src="images/btn_search.png" alt="btn_search"
                                                      style="width: 25px;"/></span>
                    </button>
                </form>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li role="presentation"><a>
                    <button type="button" data-toggle="modal" data-target="#LoginDialog"
                            style="background-color: transparent; border: 0;">
                        登陆
                    </button>
                </a></li>
                <li role="presentation"><a>
                    <button type="button" data-toggle="modal" data-target="#RegisterDialog"
                            style="background-color: transparent; border: 0;">
                        注册
                    </button>
                </a></li>
                <li>
                    <a href="ComicFan_user.php" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        UserName
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">个人设置</a></li>
                        <li><a href="#" class="">退出</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>
<!--END NAVBAR-->

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

<!-- ModalLogin -->
<div class="modal fade" id="LoginDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <br><br><br><br><br><br><br><br><br><br>

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="LoginLabel">漫FM账号登录</h4>
            </div>
            <div class="modal-body" style="background: url(images/29.jpg)">
                <center>
                    <p><input type="text" name="username" placeholder="您的邮箱地址或用户名" style="height: 30px; width: 230px;"/>
                    </p>

                    <p><input type="password" name="password" placeholder="请输入密码" style="height: 30px; width: 230px;"/>
                    </p>

                    <p>
                        <span style="margin-right: 80px;"><label><input type="checkbox"
                                                                        name="rememberMe"/>下次自动登录</label></span>
                        <span><label><a href="#">忘记密码</a></label></span>
                    </p>

                    <p>
                    <span style="margin-left: 65px;">
                        还没有漫FM帐户？<a href="#">立即注册!</a>
                    </span>
                    </p>
                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary">登陆</button>
            </div>
        </div>
    </div>
</div>
<!--ModelLogin END-->

<!-- ModalRegister -->
<div class="modal fade" id="RegisterDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <br><br><br><br><br><br><br><br><br><br>

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="RegisterLabel">漫FM账号注册</h4>
            </div>
            <div class="modal-body">
                <center>
                    <p><input type="text" name="username" placeholder="您的邮箱地址或用户名" style="height: 30px; width: 230px;"/>
                    </p>

                    <p><input type="password" name="password" placeholder="请输入密码" style="height: 30px; width: 230px;"/>
                    </p>

                    <p>
                        <span style="margin-right: 80px;"><label><input type="checkbox"
                                                                        name="rememberMe"/>下次自动登录</label></span>
                        <span><label><a href="#">忘记密码</a></label></span>
                    </p>

                    <p>
                    <span style="margin-left: 60px;">
                        还没有漫FM帐户？<a href="#">立即注册!</a>
                    </span>
                    </p>
                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary">注册</button>
            </div>
        </div>
    </div>
</div>
<!--ModelRegister END-->

<footer class="footer">
    <div class="container">
        <div class="row footer-top">
            <div class="col-md-6 col-sm-6 col-lg-6">
                <h4>
                    <img src="images/29.jpg" style="width: 10rem">
                </h4>

                <p>sfdgsgsdgsdgsdgfsdgfsfsdgfsd<a href="#">linklinklink</a>asdfagar.</p>
            </div>
            <div class="col-sm-6  col-lg-5 col-lg-offset-1">
                <div class="row about">
                    <div class="col-xs-3">
                        <h4>关于</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">关于我们</a></li>
                            <li><a href="#">友情链接</a></li>
                            <li><a href="#">招聘</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-3">
                        <h4>联系方式</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" title="JCT" target="_blank">JCT</a></li>
                            <li><a href="#">电子邮件</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-3">
                        <h4>其他</h4>
                    </div>
                    <div class="col-xs-3">
                        <h4>其他</h4>
                    </div>
                </div>

            </div>
        </div>
        <hr>
        <div class="row footer-bottom">
            <ul class="list-inline text-center">
                <li><a href="#" target="_blank">xxx</a></li>
                <li>xxx</li>
            </ul>
        </div>
    </div>
</footer>

<script>
    $("#navtab a").click(function (e) {
        $(this).tab("show");
    })
</script>

<!--返回顶部-->
<a id="scrollUp" href="#allmv" style="position: fixed; z-index: 2147483647; display: block;">
    <i class="glyphicon glyphicon-menu-up"></i></a>
<!--END 返回顶部-->

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>