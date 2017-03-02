<?php
use backend\assets\LoginAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

LoginAsset::register($this);
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
    <!-- HOME -->
    <section>
        <div class="container-alt">
          <?= $content ?>
        </div>
      </section>
      <!-- END HOME -->

    <script>
        var resizefunc = [];
    </script>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
