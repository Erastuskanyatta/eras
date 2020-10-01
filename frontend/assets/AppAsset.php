<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'as/css/site.css',
        'as/css/bootstrap.css',
        'as/css/font-awesome.css',
        'as/css/style.css',
        'as/text/css',
        'as/css/cm-overlay.css',
        'as/vendor/fontawesome-free/css/all.min.css',
        'as/css1/sb-admin-2.min.css',
        


    ];
    public $js = [
        'as/js/jquery.tools.min.js',
        'as/js/jquery.mobile.custom.min.js',
        'as/js/jquery.cm-overlay.js',
        'as/js/SmoothScroll.min.js',
        'as/js/responsiveslides.min.js',
        'as/js/skill.bars.jquery.js',
        'as/js/jquery.cntl.js',
        'as/js/easing.js',
        'as/js/move-top.js',
        'as/js/bootstrap.js',
        'as/js/jquery-2.1.4.min.js',
        'as/vendor/jquery/jquery.min.js',
        'as/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'as/vendor/jquery-easing/jquery.easing.min.js',
        'as/js1/sb-admin-2.min.js',
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
