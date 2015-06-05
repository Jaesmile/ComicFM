<!--NAVBAR-->
<?php
$value = 5;
if (!empty($_SESSION["value"])) {
    $value = $_SESSION["value"];
}
?>
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
        <h

        <nav class="navbar-collapse bs-navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
            <ul class="nav navbar-nav" id="navtab">
                <li <?php if($value == 1){?> class="active"<?php }?>>
                    <a href="index.php">首页<span class="sr-only">(current)</span></a>
                </li>

                <li class="dropdown <?php if($value == 2){?> active<?php }?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">MV
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="ComicFan_mv.php">推荐MV</a></li>
                        <li><a href="ComicFan_AllMv.php">全部MV</a></li>
                    </ul>
                </li>

                <li class="dropdown <?php if($value == 3){?> active<?php }?>">
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

                <li role="presentation"<?php if($value == 4){?> class="active"<?php }?>><a href="ComicFan_news.php">资讯</a></li>


                <li role="presentation"><a href="#">
                    <span class="badge badge-info pull-right" style="background-color: #46b8da">1</span>通知</a>
                </li>

                <form class="navbar-form navbar-right" role="search" action="ComicFan_searchResult.php" method="POST">
                    <div class="form-group">
                        <input name="keyword" type="text" class="form-control" autocomplete="on"
                               placeholder="名侦探柯南《Time after Time》">
                    </div>
                    <!-- <button type="button" class="btn btn-default">
                        <span aria-hidden="true">
                        <img src="images/btn_search.png" alt="btn_search" style="width: 25px;"/>
                        </span>
                    </button> -->
                    <input type="submit" name="search" style="background: src="images/btn_search.png" " class="btn btn-default" />
                </form>
            </ul>

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
                        <li><a href="ComicFan_user.php">我的主页</a></li>
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

