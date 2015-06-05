<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="admin">
    <meta name="author" content="jae">
    <title>漫FM-Comic 管理员</title>
    <!-- Bootstrap css-->
    <link rel="stylesheet" href="css/site.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/buttons.css">
    <link rel="shortcut icon" href="images/comicfm.ico">
</head>

<body>
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
            <a href="ComicFan_admin.php" class="navbar-brand">Comic-FM</a>
        </div>

        <!--navbar header-->
        <nav class="navbar-collapse bs-navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
            <ul class="nav navbar-nav" id="navtab">
                <li>
                    <input type="text" value="首页" />
                </li>

            <ul class="nav navbar-nav navbar-right">
                <?php
                    if (empty ( $_SESSION["username"] )) {
                ?>
                <li role="presentation">
                    <a href="ComicFan_login.php">登陆</a>
                </li>
                <li role="presentation">
                    <a href="ComicFan_register.php">注册</a>
                </li>
                <?php
                }
                    else
                    {
                ?>
                <li>
                    <a href="#" class="dropdown-toggle"
                       data-toggle="dropdown" role="button"> 
                       <?php echo $_SESSION["username"] ?>
                       <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">个人设置</a></li>
                        <li><a href="php/logout.php" class="">退出</a></li>
                    </ul>
                </li>
                <?php
                    }
                ?>
            </ul>
        </nav>
    </div>
</header>
<!--END NAVBAR-->

<div class="container" id="news">
    <div id="content_header" class="row" style="margin-top: 20px;">
        <div class="ourlogo">
            <img src="images/logo.png" alt="our logo">
        </div>
    </div>

    <div id="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                资讯
            </div>
            <div class="content_panel">
                <div class="row"><!---->
                    <div class="news-item">
                        <img class="news-item-image" src="images/1.jpg">

                        <div class="item-text">
                            <h4 class="new-item-title">马天宇身穿不同材质的格子西装，与名车相伴，一展优雅绅士.</h4>

                            <p class="new-item-intro">
                                5月16-17日，由著名导演陈蔚执导、陕西演艺集团、陕西省歌舞剧院有限公司打造的歌剧《大汉苏武》将在走上国家大剧院的舞台，届时，这部集艺术性、思想性...</p>
                            <a href="#" class="button button-pill button-tiny">查看全文</a>
                        </div>
                    </div>
                </div>
                <div class="row"><!---->
                    <div class="news-item">
                        <img class="news-item-image" src="images/1.jpg">

                        <div class="item-text">
                            <h4 class="new-item-title">马天宇身穿不同材质的格子西装，与名车相伴，一展优雅绅士.</h4>

                            <p class="new-item-intro">
                                5月16-17日，由著名导演陈蔚执导、陕西演艺集团、陕西省歌舞剧院有限公司打造的歌剧《大汉苏武》将在走上国家大剧院的舞台，届时，这部集艺术性、思想性...</p>
                            <a href="#" class="button button-pill button-tiny">查看全文</a>
                        </div>
                    </div>
                </div>
                <div class="row"><!---->
                    <div class="news-item">
                        <img class="news-item-image" src="images/1.jpg">

                        <div class="item-text">
                            <h4 class="new-item-title">马天宇身穿不同材质的格子西装，与名车相伴，一展优雅绅士.</h4>

                            <p class="new-item-intro">
                                5月16-17日，由著名导演陈蔚执导、陕西演艺集团、陕西省歌舞剧院有限公司打造的歌剧《大汉苏武》将在走上国家大剧院的舞台，届时，这部集艺术性、思想性...</p>
                            <a href="#" class="button button-pill button-tiny">查看全文</a>
                        </div>
                    </div>
                </div>
                <div class="row"><!---->
                    <div class="news-item">
                        <img class="news-item-image" src="images/1.jpg">

                        <div class="item-text">
                            <h4 class="new-item-title">马天宇身穿不同材质的格子西装，与名车相伴，一展优雅绅士.</h4>

                            <p class="new-item-intro">
                                5月16-17日，由著名导演陈蔚执导、陕西演艺集团、陕西省歌舞剧院有限公司打造的歌剧《大汉苏武》将在走上国家大剧院的舞台，届时，这部集艺术性、思想性...</p>
                            <a href="#" class="button button-pill button-tiny">查看全文</a>
                        </div>
                    </div>
                </div>
                <div class="row"><!---->
                    <div class="news-item">
                        <img class="news-item-image" src="images/1.jpg">

                        <div class="item-text">
                            <h4 class="new-item-title">马天宇身穿不同材质的格子西装，与名车相伴，一展优雅绅士.</h4>

                            <p class="new-item-intro">
                                5月16-17日，由著名导演陈蔚执导、陕西演艺集团、陕西省歌舞剧院有限公司打造的歌剧《大汉苏武》将在走上国家大剧院的舞台，届时，这部集艺术性、思想性...</p>
                            <a href="#" class="button button-pill button-tiny">查看全文</a>
                        </div>
                    </div>
                </div>
                <div class="row"><!---->
                    <div class="news-item">
                        <img class="news-item-image" src="images/1.jpg">

                        <div class="item-text">
                            <h4 class="new-item-title">马天宇身穿不同材质的格子西装，与名车相伴，一展优雅绅士.</h4>

                            <p class="new-item-intro">
                                5月16-17日，由著名导演陈蔚执导、陕西演艺集团、陕西省歌舞剧院有限公司打造的歌剧《大汉苏武》将在走上国家大剧院的舞台，届时，这部集艺术性、思想性...</p>
                            <a href="#" class="button button-pill button-tiny">查看全文</a>
                        </div>
                    </div>
                </div>
                <div class="row"><!---->
                    <div class="news-item">
                        <img class="news-item-image" src="images/1.jpg">

                        <div class="item-text">
                            <h4 class="new-item-title">马天宇身穿不同材质的格子西装，与名车相伴，一展优雅绅士.</h4>

                            <p class="new-item-intro">
                                5月16-17日，由著名导演陈蔚执导、陕西演艺集团、陕西省歌舞剧院有限公司打造的歌剧《大汉苏武》将在走上国家大剧院的舞台，届时，这部集艺术性、思想性...</p>
                            <a href="#" class="button button-pill button-tiny">查看全文</a>
                        </div>
                    </div>
                </div>
                <div class="row"><!---->
                    <div class="news-item">
                        <img class="news-item-image" src="images/1.jpg">

                        <div class="item-text">
                            <h4 class="new-item-title">马天宇身穿不同材质的格子西装，与名车相伴，一展优雅绅士.</h4>

                            <p class="new-item-intro">
                                5月16-17日，由著名导演陈蔚执导、陕西演艺集团、陕西省歌舞剧院有限公司打造的歌剧《大汉苏武》将在走上国家大剧院的舞台，届时，这部集艺术性、思想性...</p>
                            <a href="#" class="button button-pill button-tiny">查看全文</a>
                        </div>
                    </div>
                </div>
                <div style="float:right">
                    <nav class="page">
                        <ul class="pagination">
                            <li class="disabled"><a href="#" aria-label="Previous"><span
                                    aria-hidden="true">&laquo;</span></a></li>
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

<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>