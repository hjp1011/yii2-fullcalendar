<?php

namespace yii2fullcalendar;

use Yii;
use yii\web\AssetBundle;

/**
 * @author hjp1011 <hjp1011@163.com> 
 */

class ThemeAsset extends AssetBundle
{   
    /**
     * [$depends description]
     * @var array
     */
    public $depends = [
        'yii\jui\JuiAsset'
    ];
}
