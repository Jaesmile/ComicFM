<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="en-zh-CN">
<head>
    <meta charset="utf-8">
    <title>ComicFM 登陆</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="http://sandbox.runjs.cn/js/sandbox/bootstrap-2.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <link rel="shortcut icon" href="images/comicfm.ico">
    <style>
        .error {
            color: #d9534f;
            margin-left: 3px;
        }
    </style>
</head>
<body>

<div class="container" id="div1" style="background-color: #f5f5f5; display: block">
    <div class="modal" id="LoginDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content" id="LoginDialogContent">
                <form action="php/login.php" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title" id="LoginLabel">漫FM账号登录</h4>
                    </div>
                    <div class="modal-body" style="background: url(images/33.jpg)">
                        <center>
                            <p style="margin-top: 20px;"><input type="text" name="username" placeholder="您的邮箱地址或用户名"
                                      style="height: 30px; width: 230px;"/>
                                <span class="error">* </span></p>

                            <p><input type="password" name="password" placeholder="请输入密码"
                                      style="height: 30px; width: 230px;"/>
                                <span class="error">* </span></p>

                            <p style="margin-top: -8px;">
                                    <input type="checkbox" name="rememberMe" style="margin-top: -2px;"/>下次自动登录
                                    <a href="#" style="margin-left: 70px;">忘记密码</a>
                            </p>

                            <p style="margin-top: 15px;">
                                <span>还没有漫FM帐户？
                                    <a href="ComicFan_register.php" style="margin-left: 50px;">立即注册</a>
                                </span>
                            </p>
                        </center>
                    </div>
                    <div class="modal-footer" style="background-color: #ffffff">
                        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="javascript:window.location.href='index.php'">取消</button>
                        <input value="登陆" type="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /login -->
</div>
<!-- /container -->

</body>
</html>