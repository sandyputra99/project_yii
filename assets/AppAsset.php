<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    
   "theme/vendor/fontawesome-free/css/all.min.css" ,
    "https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i",
   "theme/css/sb-admin-2.min.css",

 
    ];
    public $js = [

    "theme/vendor/jquery/jquery.min.js",
    "theme/vendor/bootstrap/js/bootstrap.bundle.min.js",
    "theme/vendor/jquery-easing/jquery.easing.min.js",
    "theme/js/sb-admin-2.min.js"


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
