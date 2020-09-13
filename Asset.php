<?php

namespace panix\asset\animateCss;

use yii\web\AssetBundle;

/**
 * Class Asset
 * @package panix\asset\animateCss
 */
class Asset extends AssetBundle
{

    public $sourcePath = '@npm/animate.css';

    public $css = [
        'animate.min.css',
    ];

}
