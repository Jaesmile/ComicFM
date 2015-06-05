<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="en-zh-CN">
<head>
    <meta charset="utf-8">
    <title>ComicFM 注册</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/comicfm.ico">
    <link rel="shortcut icon" href="images/comicfm.ico">

    <link rel="stylesheet" href="http://sandbox.runjs.cn/js/sandbox/bootstrap-2.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/comicfm.ico">
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <style>
        .error {
            color: #d9534f;
            margin-left: 3px;
        }
    </style>

</head>
<!-- register -->
<body>
<div class="container" style="background-color: #f5f5f5; display: block">
    <div class="modal" id="RegisterDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

        <div class="modal-dialog">
            <div class="modal-content" id="RegisterDialogContent">
                <form action="php/register.php" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title" id="RegisterLabel">漫FM账号注册</h4>
                    </div>
                    <div class="modal-body" style="background: url(images/33.jpg)">
                        <center>
                            <p style="margin-top: 20px;">
                            <input type="text" name="nickname" placeholder="昵称" style="height: 30px; width: 230px;"/>
                                <span class="error">* </span></p>

                            <p><input type="text" name="username" placeholder="您的邮箱地址或用户名"
                                      style="height: 30px; width: 230px;"/>
                                <span class="error">* </span></p>

                            <p><input type="password" name="password" placeholder="请输入密码"
                                      style="height: 30px; width: 230px;"/>
                                <span class="error">* </span></p>

                            <p><input type="password" name="checkpwd" placeholder="请再次输入密码"
                                      style="height: 30px; width: 230px;"/>
                                <span class="error">* </span></p>

                            <p>
                                <span>
                                    <input type="checkbox" name="rememberMe"/>下次自动登录<a
                                        href="#" style="margin-left: 75px;">忘记密码</a>
                                </span>
                            </p>
                        </center>
                    </div>
                    <div class="modal-footer" style="background-color: #fff">
                        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="javascript:window.location.href='index.php'">取消</button>
                        <input type="submit" name="submit" value="注册" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /register -->
</div>
<!-- /container -->

</body>
</html>