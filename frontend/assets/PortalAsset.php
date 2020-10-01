<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class PortalAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "/eras/font-awesome/css/font-awesome.css",
        "/eras/css/bootstrap.min.css" ,
        "/eras/css/plugins/toastr/toastr.min.css" ,
        "/eras/js/plugins/gritter/jquery.gritter.css" ,
        "/eras/css/animate.css",
        "/eras/css/style.css"

    ];
    public $js = [
        "/eras/js/jquery-2.1.1.js",
        "/eras/js/bootstrap.min.js",
        "/eras/js/plugins/metisMenu/jquery.metisMenu.js",
        "/eras/js/plugins/slimscroll/jquery.slimscroll.min.js",
        "/eras/js/plugins/flot/jquery.flot.js",
        "/eras/js/plugins/flot/jquery.flot.tooltip.min.js",
        "/eras/js/plugins/flot/jquery.flot.spline.js",
        "/eras/js/plugins/flot/jquery.flot.resize.js",
        "/eras/js/plugins/flot/jquery.flot.pie.js",
        "/eras/js/plugins/peity/jquery.peity.min.js",
        "/eras/js/demo/peity-demo.js",
        "/eras/js/inspinia.js",
        '/eras/js/plugins/pace/pace.min.js',
        "/eras/js/plugins/jquery-ui/jquery-ui.min.js",
        "/eras/js/plugins/gritter/jquery.gritter.min.js",
        "/eras/js/plugins/sparkline/jquery.sparkline.min.js",
        "/eras/js/demo/sparkline-demo.js",
        "/eras/js/plugins/chartJs/Chart.min.js",
        "/eras/js/plugins/toastr/toastr.min.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
