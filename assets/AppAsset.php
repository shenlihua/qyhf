<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD,
//        'condition'=>'if lt IE 9',

    ];
    public $css = [
        'static/h-ui/css/H-ui.min.css',
        'static/h-ui.admin/css/H-ui.admin.css',
        'lib/Hui-iconfont/1.0.7/iconfont.css',
        'lib/icheck/icheck.css',
        ['static/h-ui.admin/skin/default/skin.css','id'=>'skin'],
        'static/h-ui.admin/css/style.css',
    ];
    public $js = [
        ['lib/html5.js','condition'=>'if lt IE 9'],
        ['lib/respond.min.js','condition'=>'if lt IE 9'],
        ['lib/PIE_IE678.js','condition'=>'if lt IE 9'],
        ['lib/jquery/1.9.1/jquery.min.js'],
        ['lib/layer/2.1/layer.js'],
        ['static/h-ui/js/H-ui.js'],
        ['static/h-ui.admin/js/H-ui.admin.js'],
    ];
    //依赖包
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
