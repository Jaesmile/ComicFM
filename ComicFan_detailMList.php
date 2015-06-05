<!DOCTYPE html>
<html>
<head lang="en-zh">
    <meta charset="UTF-8">
    <meta name="keywords" content="漫FM,动漫音乐MV,音乐,动漫,动漫MV,在线动漫MV,音乐MV,动漫视频,音乐视频,动漫音乐"/>
    <meta name="description" content="专为动漫迷打造的音乐盛会，仅供学习使用。"/>
    <title>漫FM-Comic 漫单细节</title>
    <link href="http://static.bootcss.com/www/assets/css/site.min.css?v5" rel="stylesheet">
    <!--<link href="http://cdn.bootcss.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">-->
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
                <li class="active">
                    <a href="index.php">首页<span class="sr-only">(current)</span></a>
                </li>

                <li class="dropdown">
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
                        <li><a href="hComicFan_mMan.php">漫单达人</a></li>
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
<br><br><br>

<div class="container">
    <div class="row">
        <div class="col-sm-3 col-xs-3 col-md-3">
            <a href="#" class="thumbnail"><img src="images/muse.jpg" alt=""/></a>
        </div>


        <div class="col-xs-5 col-sm-5 col-md-5">
            <h2>动漫那些事</h2>

            <p>播放次数:1,729</p>

            <p>推荐:3</p>

            <p>收藏:56</p>
            <hr style="border:1px dashed #000000;width:450px;height:1px"/>
            <p>总有那么一个画面，让你爱上动漫。总有那么一首歌，让你爱上动漫！</p>
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="media ">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object media-middle" src="images/people.jpg" alt="...">
                    </a>
                </div>
                <div class="media-body">
                    <br>
                    <a href="#"><h4 class="media-heading">Vincent</h4></a>

                    <p>处女座 | 女</p>
                </div>
                <div class="media-bottom">
                    <br>

                    <p>关注 :<a href="#">40</a></p>

                    <p>粉丝：<a href="#">66</a></p>

                    <p>如果再也见不到你,祝你早安,午安,晚安。</p>

                    <p><a href="#" class="btn btn-primary" role="button">关注</a>
                        <a href="#" class="btn btn-primary" role="button">@她</a></p>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="text-center col-sm-3 col-xs-3 col-md-3">
            <button type="button" class="btn btn-danger">
                <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>播放漫单
            </button>
        </div>

        <div class="col-sm-1 col-xs-1 col-md-1">
            <button type="button" class="btn btn-default">
                <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>推荐
            </button>
        </div>

        <div class="col-sm-1 col-xs-1 col-md-1">
            <button type="button" class="btn btn-default">
                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>收藏
            </button>
        </div>

        <div class="col-sm-1 col-xs-1 col-md-1">
            <button type="button" class="btn btn-default">
                <span class="glyphicon glyphicon-save" aria-hidden="true"></span>下载
            </button>
        </div>
    </div>

    <br>

    <div class="well">
        <br>
        <p> &nbsp;收录视频：12 &nbsp; &nbsp; 更新时间：2015-03-21<br></p>
    </div>

    <div class="row">
        <div class="col-md-12">

            <!--caurousel-->
            <div id="slidershow" class="carousel slide" data-ride="carousel" data-wrap="true" data-interval="3000">
                <!-- 设置图片轮播的顺序 -->
                <ol class="carousel-indicators">
                    <li class="active" data-target="#slidershow" data-slide-to="0">1</li>
                    <li data-target="#slidershow" data-slide-to="1">2</li>
                </ol>
                <!-- 设置轮播图片 -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-md-1 col-xs-1"></div>
                            <div class="col-md-2 col-xs-2">
                                <a href="#" class="thumbnail"><img src="images/absolution.jpg" alt=""/></a>
                            </div>
                            <div class="col-md-2 col-xs-2">
                                <a href="#" class="thumbnail"><img src="images/muse.jpg" alt=""/></a>
                            </div>
                            <div class="col-md-2 col-xs-2">
                                <a href="#" class="thumbnail"><img src="images/Origin.jpg" alt=""/></a>
                            </div>
                            <div class="col-md-2 col-xs-2">
                                <a href="#" class="thumbnail"><img src="images/The%20Resistance.jpg" alt=""/></a>
                            </div>
                            <div class="col-md-2 col-xs-2">
                                <a href="#" class="thumbnail"><img src="images/The%20Resistance.jpg" alt=""/></a>
                            </div>
                            <div class="col-md-1 col-xs-1"></div>
                        </div>

                        <div class="row">
                            <div class="col-md-1 col-xs-1"></div>
                            <div class="col-md-2 col-xs-2">
                                <a href="#" class="thumbnail"><img src="images/absolution.jpg" alt=""/></a>
                            </div>
                            <div class="col-md-2 col-xs-2">
                                <a href="#" class="thumbnail"><img src="images/muse.jpg" alt=""/></a>
                            </div>
                            <div class="col-md-2 col-xs-2">
                                <a href="#" class="thumbnail"><img src="images/Origin.jpg" alt=""/></a>
                            </div>
                            <div class="col-md-2 col-xs-2">
                                <a href="#" class="thumbnail"><img src="images/The%20Resistance.jpg" alt=""/></a>
                            </div>
                            <div class="col-md-2 col-xs-2">
                                <a href="#" class="thumbnail"><img src="images/The%20Resistance.jpg" alt=""/></a>
                            </div>
                            <div class="col-md-1 col-xs-1"></div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row">
                            <div class="col-md-1 col-xs-1"></div>
                            <div class="col-md-2 col-xs-2">
                                <a href="#" class="thumbnail"><img src="images/absolution.jpg" alt=""/></a>
                            </div>
                            <div class="col-md-2 col-xs-2">
                                <a href="#" class="thumbnail"><img src="images/muse.jpg" alt=""/></a>
                            </div>
                            <div class="col-md-2 col-xs-2">
                                <a href="#" class="thumbnail"><img src="images/Origin.jpg" alt=""/></a>
                            </div>
                            <div class="col-md-2 col-xs-2">
                                <a href="#" class="thumbnail"><img src="images/The%20Resistance.jpg" alt=""/></a>
                            </div>
                            <div class="col-md-2 col-xs-2">
                                <a href="#" class="thumbnail"><img src="images/The%20Resistance.jpg" alt=""/></a>
                            </div>
                            <div class="col-md-1 col-xs-1"></div>
                        </div>

                        <div class="row">
                            <div class="col-md-1 col-xs-1"></div>
                            <div class="col-md-2 col-xs-2">
                                <a href="#" class="thumbnail"><img src="images/absolution.jpg" alt=""/></a>
                            </div>

                            <div class="col-md-2 col-xs-2">
                                <a href="#" class="thumbnail"><img src="images/The%20Resistance.jpg" alt=""/></a>
                            </div>
                            <div class="col-md-1 col-xs-1"></div>
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

<!--返回顶部-->
<a id="scrollUp" href="#mman" style="position: fixed; z-index: 2147483647; display: block;">
    <i class="glyphicon glyphicon-menu-up"></i></a>
<!--END 返回顶部-->

<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>