<?php

namespace panix\assets\animateCss;

use panix\engine\web\AssetBundle;

/**
 * Class AnimateCssAsset
 */
class AnimateCssAsset extends AssetBundle
{

    public $sourcePath = __DIR__ . '/assets';

    public $js = [
        'js/clipboard/clipboard.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
