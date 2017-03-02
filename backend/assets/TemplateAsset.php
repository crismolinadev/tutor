<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class TemplateAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        "template/assets/css/bootstrap.min.css",
        "template/assets/css/core.css" ,
        "template/assets/css/components.css",
        "template/assets/css/icons.css",
        "template/assets/css/pages.css",
        "template/assets/css/menu.css",
        "template/assets/css/responsive.css",
        "template/plugins/switchery/switchery.min.css",
    ];
    public $js = [
        "template/assets/js/modernizr.min.js",
        // "template/assets/js/jquery.min.js",
        "template/assets/js/bootstrap.min.js",
        "template/assets/js/detect.js",
        "template/assets/js/fastclick.js",
        "template/assets/js/jquery.blockUI.js",
        "template/assets/js/waves.js",
        "template/assets/js/jquery.slimscroll.js",
        "template/assets/js/jquery.scrollTo.min.js",
        "template/plugins/switchery/switchery.min.js",
        "template/assets/js/jquery.core.js",
        "template/assets/js/jquery.app.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
