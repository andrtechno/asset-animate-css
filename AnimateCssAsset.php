<?php

namespace panix\assets\animateCss;

use yii\web\AssetBundle;

/**
 * Class AnimateCssAsset
 */
class AnimateCssAsset extends AssetBundle
{

    public $sourcePath = '@npm/animate.css';

    public $css = [
        'animate.min.css',
    ];

}
