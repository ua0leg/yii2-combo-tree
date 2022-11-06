<?php

namespace ua0leg\Yii2ComboTree;

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
    public $sourcePath = '@vendor/ua0leg/yii2-combo-tree/assets';

    /**
     * @var string[] $js the js files that this bundle contains.
     */
    public $js = [
        'js/comboTreePlugin.js',
    ];

    /**
     * @var string[] $css the js files that this bundle contains.
     */
    public $css = [
        'css/comboTree.css',
    ];

    /**
     * @var string[] $depends list of bundle class names that this bundle depends on.
     */
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
