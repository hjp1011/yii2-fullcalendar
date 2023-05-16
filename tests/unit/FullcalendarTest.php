<?php

namespace yii2fullcalendar\tests\unit;

use \yii2fullcalendar\yii2fullcalendar;

/**
 * This is MasonryTest unit test.
 *
 * @author hjp1011 <hjp1011@163.com>
 */

class FullcalendarTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @var \yii2masonry\yii2masonry
     */
    protected $instance;

    /**
     * @inheritdoc
     */
    protected function _before()
    {
        $this->instance = new yii2fullcalendar();
    }

    /**
     * @inheritdoc
     */
    protected function _after()
    {
        $this->instance = null;
    }

    // tests
    public function testMe()
    {

    }

}