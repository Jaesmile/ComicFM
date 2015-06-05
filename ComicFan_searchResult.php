<!DOCTYPE html>
<?php
    session_start();

    require_once 'php/DataHandler.class.php';
    $keyword = $_POST["keyword"];
    $_SESSION["value"] = 5;
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

<div class="container" style="margin-top: 21px;">
	<h2>
		搜索结果：
	</h2>
	<div class="row">
		
	</div>
	<p>
		<?php 
		$handler = new DataHandler();
		$result = $handler->mvSearch($keyword);

		echo '<div class="panel">
               <ul class="media-list">
                    <li class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="images/Origin.jpg">
                        </a>

                        <div class="media-body">
                        <br> ';
                        echo '<a href="#"><h4 class="media-heading">'.$result[0].'</h4></a>';//漫单名
                        echo' <a href="#" class="btn btn-primary" role="button">收藏</a> ';
						echo' <a href="#" class="btn btn-primary" role="button">播放</a> ';
                        echo ' </div>
                    </li>
                </ul>
            </div>';
		?>
	</p>
</div>

<?php
include_once("php/footer.php");
?>

<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>