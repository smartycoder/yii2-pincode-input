<?php
/**
 * Created by PhpStorm.
 * User: bahaaodeh
 * Date: 2/18/19
 * Time: 1:07 PM
 */

namespace smartysoft\PincodeInput;
use yii\web\AssetBundle;


class PinCodeInputAsset extends AssetBundle
{
    /** @var string */
    public $sourcePath = '@vendor/smartysoft/yii2-pincode-input/assets/';

    /** @var array */
    public $css = ['css/bootstrap-pincode-input.css'];

    /** @var array */
    public $js = [
        'js/bootstrap-pincode-input.js',
    ];
    
    /** @var array */
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
