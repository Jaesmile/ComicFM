<!DOCTYPE html>
<html>
<head lang="en-zh">
    <meta charset="UTF-8">
    <meta name="keywords" content="漫FM,动漫音乐MV,音乐,动漫,动漫MV,在线动漫MV,音乐MV,动漫视频,音乐视频,动漫音乐"/>
    <meta name="description" content="专为动漫迷打造的音乐盛会，仅供学习使用。"/>
    <title>漫FM-Comic MV播放</title>
    <link href="css/site.min.css" rel="stylesheet">
    <!--<link href="http://cdn.bootcss.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">-->
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
                <li style="display: none">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        UserName
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">我的MV</a></li>
                        <li><a href="#">我的漫友</a></li>
                        <li><a href="#">我的漫单</a></li>
                        <li><a href="#">我的漫粉</a></li>
                        <li><a href="#">个人设置</a></li>
                        <li><a href="#" class="">退出</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>
<!--END NAVBAR-->

<div class="container">
    <!--VIDEO-->
    <div class="video_content" style="background: #efefef">
        <center>
            <video width="900" height="550" poster="images/1.jpg" controls="controls" style="margin-top: -10px;">
                <source src="video/banana.mp4" type="video/mp4">
                您的浏览器不支持此种视频格式。
            </video>
        </center>
    </div>
    <!--END VIDEO-->

    <div class="video_message">
        <h3>视频信息</h3>
        <img src="images/1.jpg" width="45px" height="45px">
    </div>
</div>

<!-- ModalLogin -->
<div class="modal fade" id="LoginDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <br><br><br><br><br><br><br><br><br><br>

    <div class="modal-dialog">
        <div class="modal-content" id="LoginDialogContent">
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
                        <span style="margin-right: 60px;"><label><input type="checkbox" name="rememberMe"/>
                            下次自动登录</label></span>
                        <span><label><a href="#">忘记密码</a></label></span>
                    </p>

                    <p>
                    <span style="margin-left: 10px;">
                        还没有漫FM帐户？
                        <a>
                            <button type="button" data-toggle="modal" data-target="#RegisterDialog"
                                    name="instantRegister"
                                    style="background-color: transparent; border: 0;" onclick="closeLogin(this)">
                                立即注册!
                            </button>
                        </a>
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
        <div class="modal-content" id="RegisterDialogContent">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="RegisterLabel">漫FM账号注册</h4>
            </div>
            <div class="modal-body" style="background: url(images/29.jpg)">
                <center>
                    <p><input type="text" name="nickname" placeholder="昵称" style="height: 30px; width: 230px;"/>
                    </p>

                    <p><input type="text" name="username" placeholder="您的邮箱地址或用户名" style="height: 30px; width: 230px;"/>
                    </p>

                    <p><input type="password" name="password" placeholder="请输入密码" style="height: 30px; width: 230px;"/>
                    </p>

                    <p><input type="password" name="checkpwd" placeholder="请再次输入密码"
                              style="height: 30px; width: 230px;"/>
                    </p>

                    <p>
                        <span style="margin-right: 80px;"><label><input type="checkbox"
                                                                        name="rememberMe"/>下次自动登录</label></span>
                        <span><label><a href="#">忘记密码</a></label></span>
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

<!--FOOTER-->
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
<!--END FOOTER-->


<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $("#navtab a").click(function (e) {
        $(this).tab("show");
    })
</script>
</body>
</html>