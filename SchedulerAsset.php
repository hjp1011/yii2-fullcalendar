<?php

namespace yii2fullcalendar;

use Yii;
use yii\web\AssetBundle;

/**
 * @author hjp1011 <hjp1011@163.com> 
 */

class SchedulerAsset extends AssetBundle
{
    public $sourcePath = '@bower/fullcalendar-scheduler/dist';
    
    /**
     * [$js description]
     * @var array
     */
    public $js = [
        'scheduler.js',
    ];
    
    public $css = [
        'scheduler.css'
    ];
}
