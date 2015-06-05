<!DOCTYPE html>
<?php
    $lifeTime = 24 * 3600;
    session_set_cookie_params($lifeTime);
    session_start();
    $_SESSION["value"] = 1;
?>
<html>
<head lang="en-zh">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="漫FM,动漫音乐MV,音乐,动漫,动漫MV,在线动漫MV,音乐MV,动漫视频,音乐视频,动漫音乐"/>
    <meta name="description" content="专为动漫迷打造的音乐盛会，仅供学习使用。"/>
    <meta name="author" content="jae">
    <title>漫FM-Comic Fan</title>
    <link rel="stylesheet" href="css/site.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/comicfm.ico">

    <style>
        #MyCarousel {
            top: 1.7rem;
        }
    </style>
</head>
<body>

<?php
include_once("php/navbar.php");
?>

<!--Carousel-->
<div id="MyCarousel" class="carousel slide">
    <ol class="carousel-indicators">
        <li data-target="#MyCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#MyCarousel" data-slide-to="1"></li>
        <li data-target="#MyCarousel" data-slide-to="2"></li>
        <li data-target="#MyCarousel" data-slide-to="3"></li>
        <li data-target="#MyCarousel" data-slide-to="4"></li>
    </ol>
    <!-- Carousel items -->
    <div class="carousel-inner">

        <div class="active item">
            <img src="images/carousel1.jpg" alt="29"/>

            <div class="container">
                <div class="carousel-caption">
                    <h2>秒速五厘米</h2>

                    <p class="lead">你知道么？樱花飘落的速度是秒 速 五 厘 米</p>
                </div>
            </div>
        </div>

        <div class="item">
            <img src="images/carousel2.jpg" alt="carouse2"/>

            <div class="container">
                <div class="carousel-caption">
                    <h2>Guilty Crown</h2>

                    <p class="lead">这结局太美我不忍看</p>
                </div>
            </div>
        </div>

        <div class="item">
            <img src="images/carousel3.jpg" alt="31"/>

            <div class="container">
                <div class="carousel-caption">
                    <h2>Fate Stay Night</h2>

                    <p class="lead">还是Fate Zero里面的女主好看，男主就是渣，还有Saber和吾王才是王道</p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="images/carousel4.jpg" alt="32"/>

            <div class="container">
                <div class="carousel-caption">
                    <h2>Bleach！！！</h2>

                    <p class="lead">萝莉羊突然变身美女羊？！！还是个破面？！！！</p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="images/carousel5.jpg" alt="33"/>

            <div class="container">
                <div class="carousel-caption">
                    <h2>某科学的超电磁炮</h2>

                    <p class="lead">炮姐实力不是盖的，但还是一方通行比较帅羞</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#MyCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>‹</a>
    <a class="carousel-control right" href="#MyCarousel" data-slide="next">›
        <span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
<!--END CAROUSEL-->

<br>
<br>
<br>
<br>
<br>

<div class="container">
    <!--首播MV-->
    <div class="container shouboEntries">

        <div class="navbar navbar-default" style="width: 86rem;">
            <ul class="nav nav-pills" id="shouboTab">
                <li role="presentation" style="top: -1rem"><h1>MV首播</h1></li>
                <li class="navbar-right"></li>
                <li role="presentation" class="navbar-right" style="top: 1.6rem"><a href="#">
                    其他</a></li>
                <li class="navbar-right" style="top: 2.4rem"><span
                        class="glyphicon glyphicon glyphicon-option-vertical"></span></li>
                <li role="presentation" style="top: 1.6rem" class="navbar-right"><a href="#">
                    欧美</a></li>
                <li class="navbar-right" style="top: 2.4rem"><span
                        class="glyphicon glyphicon glyphicon-option-vertical"></span></li>
                <li role="presentation" style="top: 1.6rem" class="navbar-right"><a href="#">
                    日本</a></li>
                <li class="navbar-right" style="top: 2.4rem"><span
                        class="glyphicon glyphicon glyphicon-option-vertical"></span></li>
                <li role="presentation" style="top: 1.6rem" class="navbar-right"><a href="#">
                    中国</a></li>
                <li class="navbar-right" style="top: 2.4rem"><span
                        class="glyphicon glyphicon glyphicon-option-vertical"></span></li>
                <li role="presentation" style="top: 1.6rem" class="active navbar-right"><a href="#">
                    全部</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <a href="#" class="thumbnail" style="height: 24.5rem"><img src="images/37.jpg" alt="#"></a>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-3">
                <a href="#" class="thumbnail"><img src="images/34.jpg" alt="#"></a>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-3">
                <a href="#" class="thumbnail"><img src="images/34.jpg" alt="#"></a>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-3">
                <a href="#" class="thumbnail"><img src="images/34.jpg" alt="#"></a>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-3">
                <a href="#" class="thumbnail"><img src="images/34.jpg" alt="#"></a>
            </div>

        </div>
    </div>
    <!--END SHOUBO-->

    <br>
    <br>
    <br>

    <!--M榜-->
    <div class="container mBangEntries">

        <div class="navbar navbar-default" style="width: 86rem;">
            <ul class="nav nav-pills" id="mBangTab">
                <li role="presentation" style="top: -1rem"><h1>漫M榜</h1></li>
                <li class="navbar-right"></li>
                <li role="presentation" class="navbar-right" style="top: 1.6rem"><a href="#">
                    其他</a></li>
                <li style="top: 2.4rem" class="navbar-right"><span
                        class="glyphicon glyphicon glyphicon-option-vertical"></span></li>
                <li role="presentation" style="top: 1.6rem" class="navbar-right"><a href="#">
                    欧美</a></li>
                <li style="top: 2.4rem" class="navbar-right"><span
                        class="glyphicon glyphicon glyphicon-option-vertical"></span></li>
                <li role="presentation" style="top: 1.6rem" class="navbar-right"><a href="#">
                    日本</a></li>
                <li style="top: 2.4rem" class="navbar-right"><span
                        class="glyphicon glyphicon glyphicon-option-vertical"></span></li>
                <li role="presentation" style="top: 1.6rem" class="navbar-right"><a href="#">
                    中国</a></li>
                <li style="top: 2.4rem" class="navbar-right"><span
                        class="glyphicon glyphicon glyphicon-option-vertical"></span></li>
                <li role="presentation" style="top: 1.6rem" class="active navbar-right"><a href="#">
                    全部</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-9 col-lg-9">
                <a href="#" class="thumbnail" style="height: 24rem;">
                <img src="images/30.jpg" alt="#" style="height: 23rem"></a>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <a href="#" class="thumbnail"><img src="images/34.jpg" alt="#"></a>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <a href="#" class="thumbnail"><img src="images/34.jpg" alt="#"></a>
            </div>

        </div>
    </div>
    <!--END MBANG-->

    <br>
    <br>
    <br>

    <!--热门推荐-->
    <div class="container hotEntries">

        <div class="navbar navbar-default" style="width: 86rem;">
            <ul class="nav nav-pills" id="hotTab">
                <li role="presentation" style="top: -1rem"><h1>热门推荐</h1></li>
                <li class="navbar-right"></li>
                <li role="presentation" style="top: 1.6rem" class="navbar-right"><a href="#">
                    其他</a></li>
                <li style="top: 2.4rem" class="navbar-right"><span
                        class="glyphicon glyphicon glyphicon-option-vertical"></span></li>
                <li role="presentation" style="top: 1.5rem" class="navbar-right"><a href="#">
                    欧美</a></li>
                <li style="top: 2.4rem" class="navbar-right"><span
                        class="glyphicon glyphicon glyphicon-option-vertical"></span></li>
                <li role="presentation" style="top: 1.6rem" class="navbar-right"><a href="#">
                    日本</a></li>
                <li style="top: 2.4rem" class="navbar-right"><span
                        class="glyphicon glyphicon glyphicon-option-vertical"></span></li>
                <li role="presentation" style="top: 1.6rem" class="navbar-right"><a href="#">
                    中国</a></li>
                <li style="top: 2.4rem" class="navbar-right"><span
                        class="glyphicon glyphicon glyphicon-option-vertical"></span></li>
                <li role="presentation" style="top: 1.6rem" class="active navbar-right"><a href="#">
                    全部</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-9 col-lg-9">
                <a href="#" class="thumbnail" style="height: 23.9rem;"><img src="images/30.jpg" alt="#"
                                                                            style="height: 23rem"></a>
                <!--<div class="caption">
                    <h3>
                        <a href="#" title="This is a test" target="_blank" onclick="">This is a test.<br><small>xxx</small></a>
                    </h3>
                    <p>
                        yoyodsfhahfskdhfal;hfiewohfla;nkndskla;hvd;oeihrk.
                    </p>
                </div>-->
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <a href="#" class="thumbnail"><img src="images/34.jpg" alt="#"></a>
                <!--<div class="caption">
                    <h3>
                        <a href="#" title="This is a test" target="_blank" onclick="">This is a test.<br><small>xxx</small></a>
                    </h3>
                    <p>
                        yoyodsfhahfskdhfal;hfiewohfla;nkndskla;hvd;oeihrk.
                    </p>
                </div>-->
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <a href="#" class="thumbnail"><img src="images/34.jpg" alt="#"></a>
                <!--<div class="caption">
                    <h3>
                        <a href="#" title="This is a test" target="_blank" onclick="">This is a test.<br><small>xxx</small></a>
                    </h3>
                    <p>
                        yoyodsfhahfskdhfal;hfiewohfla;nkndskla;hvd;oeihrk.
                    </p>
                </div>-->
            </div>

        </div>
    </div>
    <!--END 热门推荐-->

    <br>
    <br>
    <br>

    <!--漫M资讯-->
    <div class="container infoEntries">

        <div class="navbar navbar-default" style="width: 86rem;">
            <ul class="nav nav-pills" id="infoTab">
                <li role="presentation" style="top: -1rem"><h1>漫M资讯</h1></li>
                <li class="navbar-right"></li>
                <li style="top: 1.7rem" class="navbar-right"><a href="#" role="presentation">
                    更多...</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <a href="#" class="thumbnail" style="height: 23.9rem;">
                    <img src="images/30.jpg" alt="#" style="height: 23rem">
                </a>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail">
                    <a href="#"><img src="images/34.jpg" alt="#"></a>

                    <div class="caption">
                        <h3>
                            <a href="#" title="This is a test" target="_blank" onclick="">This is a test.<br>
                                <small>xxx</small>
                            </a>
                        </h3>
                        <p>
                            yoyodsfhahfskdhfal;hfiewohfla;<br>nkndskla;hvd;oeihrk.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail">
                    <a href="#"><img src="images/34.jpg" alt="#"></a>

                    <div class="caption">
                        <h3>
                            <a href="#" title="This is a test" target="_blank" onclick="">This is a test.<br>
                                <small>xxx</small>
                            </a>
                        </h3>
                        <p>
                            yoyodsfhahfskdhfal;hfiewohfla;<br>nkndskla;hvd;oeihrk.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--END 漫M资讯-->

    <br>
    <br>
    <br>

    <!--精品漫单-->
    <div class="container delicateEntries">

        <div class="navbar navbar-default" style="width: 86rem;">
            <ul class="nav nav-pills" id="delicateTab">
                <li role="presentation" style="top: -1rem"><h1>精品漫单</h1></li>
                <li class="navbar-right"></li>
                <li style="top: 1.7rem" class="navbar-right"><a href="#" role="presentation">
                    更多...</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail">
                    <a href="#"><img src="images/34.jpg" alt="#"></a>

                    <div class="caption">
                        <h3>
                            <a href="#" title="This is a test" target="_blank" onclick="">This is a test.<br>
                                <small>xxx</small>
                            </a>
                        </h3>
                        <p>
                            yoyodsfhahfskdhfal;hfiewohfla;<br>nkndskla;hvd;oeihrk.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail">
                    <a href="#"><img src="images/34.jpg" alt="#"></a>

                    <div class="caption">
                        <h3>
                            <a href="#" title="This is a test" target="_blank" onclick="">This is a test.<br>
                                <small>xxx</small>
                            </a>
                        </h3>
                        <p>
                            yoyodsfhahfskdhfal;hfiewohfla;<br>nkndskla;hvd;oeihrk.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail">
                    <a href="#"><img src="images/34.jpg" alt="#"></a>

                    <div class="caption">
                        <h3>
                            <a href="#" title="This is a test" target="_blank" onclick="">This is a test.<br>
                                <small>xxx</small>
                            </a>
                        </h3>
                        <p>
                            yoyodsfhahfskdhfal;hfiewohfla;<br>nkndskla;hvd;oeihrk.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail">
                    <a href="#"><img src="images/34.jpg" alt="#"></a>

                    <div class="caption">
                        <h3>
                            <a href="#" title="This is a test" target="_blank" onclick="">This is a test.<br>
                                <small>xxx</small>
                            </a>
                        </h3>
                        <p>
                            yoyodsfhahfskdhfal;hfiewohfla;<br>nkndskla;hvd;oeihrk.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END 精品漫单-->

    <br>
    <br>
    <br>

    <!--猜你喜欢-->
    <div class="container likeEntries">
        <div class="navbar" style="width: 86rem;">
            <ul class="nav nav-pills" id="likeTab">
                <li role="presentation"><h1>猜你喜欢</h1></li>
                <li class="navbar-right"></li>
                <li style="top: 1.3rem" class="navbar-right"><a href="#" role="presentation">
                    <img src="images/btn_refresh1.png" alt="btn_refresh"/>
                    换一换</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-3 col-lg-3">
                <a href="#" class="thumbnail" style="height: 23.9rem;"><img src="images/30.jpg" alt="#"></a>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <a href="#" class="thumbnail" style="height: 23.9rem;"><img src="images/30.jpg" alt="#"></a>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <a href="#" class="thumbnail" style="height: 23.9rem;"><img src="images/30.jpg" alt="#"></a>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <a href="#" class="thumbnail" style="height: 23.9rem;"><img src="images/30.jpg" alt="#"></a>
            </div>
        </div>
    </div>
    <!--END 猜你喜欢-->
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
    $("#shouboTab a").click(function (e) {
        $(this).tab("show");
    })
    $("#mBangTab a").click(function (e) {
        $(this).tab("show");
    })
    $("#hotTab a").click(function (e) {
        $(this).tab("show");
    })
</script>

<script>
    !function ($) {
        $(function () {
            $('#MyCarousel').carousel()
        })
    }(window.jQuery)
</script>

</body>
</html>