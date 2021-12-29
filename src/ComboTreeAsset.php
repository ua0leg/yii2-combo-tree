<?php

namespace MrMuminov\ComboTree;

use yii\web\AssetBundle;

/**
 * The asset bundle for the [[ComboTree]] widget.
 *
 * @author Bahridin Mo'minov <darkshadeuz@gmail.com>
 * @since 2.0
 */
class ComboTreeAsset extends AssetBundle
{
    /**
     * @var string $sourcePath the source path to the asset files
     */
    public $sourcePath = '@vendor/mrmuminov/yii2-combo-tree/assets/js';

    /**
     * @var string[] $js the js files that this bundle contains.
     */
    public $js = [
        'comboTreePlugin.min.js',
    ];

    /**
     * @var string[] $depends list of bundle class names that this bundle depends on.
     */
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
