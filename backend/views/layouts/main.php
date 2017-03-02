<?php
use backend\assets\TemplateAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

TemplateAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= Html::csrfMetaTags() ?>
    <link rel="shortcut icon" href="assets_template/images/favicon.ico">
    <title><?= Html::encode($this->title) ?></title>
    <meta name="description" content="Description">
    <meta name="author" content="Camdlc">
    <?php $this->head() ?>
    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <?php $this->beginBody() ?>
    <!-- Navigation Bar-->
    <header id="topnav">
        <div class="topbar-main">
            <div class="container">

                <!-- Logo container-->
                <div class="logo">
                    <!-- Text Logo -->
                    <!--<a href="index.html" class="logo">-->
                    <!--Zircos-->
                    <!--</a>-->
                    <!-- Image Logo -->
                    <a href="javascript:void(0)" class="logo">

                    </a>

                </div>
                <!-- End Logo container-->


                <div class="menu-extras">

                    <ul class="nav navbar-nav navbar-right pull-right">

                        <li class="dropdown navbar-c-items">
                            <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img src="template/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                            <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                <li class="text-center">
                                    <h5><?= (Yii::$app->user->isGuest) ? 'Invitado' : Yii::$app->user->identity->username;?></h5>
                                </li>
                                <li><a href="<?= Url::to(['site/logout'])?>" data-method="post"><i class="ti-power-off m-r-5"></i> Cerrar Sesión</a></li>
                            </ul>

                        </li>
                    </ul>
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
                <!-- end menu-extras -->

            </div>
            <!-- end container -->
        </div>
        <!-- end topbar-main -->

        <div class="navbar-custom">
            <div class="container">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                      <li class="has-submenu">
                          <a href="<?= Url::to(['site/index'])?>"><i class="mdi mdi-library-books"></i>Dashboard</a>
                      </li>
                        <li class="has-submenu">
                            <a href="#"><i class="mdi mdi-library-books"></i>Categorias</a>
                            <ul class="submenu">
                                <li>
                                    <a href="#">Ver todo</a>
                                </li>
                                <li>
                                    <a href="#">Nueva</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- End navigation menu -->
                </div>
                <!-- end #navigation -->
            </div>
            <!-- end container -->
        </div>
        <!-- end navbar-custom -->
    </header>
    <!-- End Navigation Bar-->


    <div class="wrapper">
        <div class="container">
          <?= $content ?>
            <!-- Footer -->
            <footer class="footer text-right">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            2017 | Desarrollado por PuntoMX.
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->

        </div>
        <!-- end container -->
    </div>
    <!-- end wrapper -->
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
