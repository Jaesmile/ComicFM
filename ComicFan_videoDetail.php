<!DOCTYPE html>
<?php
    session_start();
?>
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
include_once("php/navbar.php");
?>

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

<?php
include_once("php/footer.php");
?>

<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $("#navtab a").click(function (e) {
        $(this).tab("show");
    })
</script>
</body>
</html>