<?php

namespace yii2fullcalendar;

use yii\web\AssetBundle;

/**
 * @author hjp1011 <hjp1011@163.com> 
 */

class MomentAsset extends AssetBundle
{
    /**
     * [$sourcePath description]
     * @var string
     */
    public $sourcePath = '@bower/moment';

    /**
     * [$js description]
     * @var array
     */
    public $js = [
        'moment.js'
    ];

}
