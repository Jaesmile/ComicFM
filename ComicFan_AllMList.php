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
    <title>漫FM-Comic 全部漫单</title>
    <link rel="stylesheet" href="css/site.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/comicfm.ico">
</head>

<body>
<?php
include_once("php/navbar.php");
?>

<br><br><br><br>
<div class="container">
    <div class="panel panel-default">
        <br>
        <p class="text-center">共1900个漫单</p>
        <br>
    </div>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="tuijian">
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <a href="ComicFan_detailMList.php" class="thumbnail"><img src="images/absolution.jpg" alt=""/></a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <a href="ComicFan_detailMList.php" class="thumbnail"><img src="images/muse.jpg" alt=""/></a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <a href="ComicFan_detailMList.php" class="thumbnail"><img src="images/Origin.jpg" alt=""/></a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <a href="ComicFan_detailMList.php" class="thumbnail"><img src="images/The%20Resistance.jpg" alt=""/></a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <a href="ComicFan_detailMList.php" class="thumbnail"><img src="images/absolution.jpg" alt=""/></a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <a href="ComicFan_detailMList.php" class="thumbnail"><img src="images/muse.jpg" alt=""/></a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <a href="ComicFan_detailMList.php" class="thumbnail"><img src="images/Origin.jpg" alt=""/></a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <a href="ComicFan_detailMList.php" class="thumbnail"><img src="images/The%20Resistance.jpg" alt=""/></a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <a href="ComicFan_detailMList.php" class="thumbnail"><img src="images/absolution.jpg" alt=""/></a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <a href="ComicFan_detailMList.php" class="thumbnail"><img src="images/muse.jpg" alt=""/></a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <a href="ComicFan_detailMList.php" class="thumbnail"><img src="images/Origin.jpg" alt=""/></a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <a href="ComicFan_detailMList.php" class="thumbnail"><img src="images/The%20Resistance.jpg" alt=""/></a>
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

<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>