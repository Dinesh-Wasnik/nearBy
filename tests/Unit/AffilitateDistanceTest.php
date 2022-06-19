<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use App\Helper;

class AffilitateDistanceTest extends TestCase
{
    /**
     * test distance from india to dublin.
     *
     * @return void
     */
    public function testDistanceFromIndiaToDublin() : void
    {
        $indiaLat  = '20.5937';
        $indiaLong = '78.9629';

        $dublinLat  = '53.3340285';
        $dublinLong = '-6.2535495';

        $distance  = Helper::getDistance($indiaLat, $indiaLong, $dublinLat, $dublinLong);
        
        $this->assertEquals('7,872.97', $distance);

    }
}
