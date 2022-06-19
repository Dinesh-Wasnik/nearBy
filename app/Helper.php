<?php

namespace App;


class Helper 
{
    
    // calculate distance from lat, lag
    public static function getDistance(float $officeLat1, float $officeLong1, float $affilateLat2, float $affilateLong2) 
    {
       
        $theta = $officeLong1 - $affilateLong2;
        $dist = sin(deg2rad($officeLat1)) * sin(deg2rad($affilateLat2)) +  cos(deg2rad($officeLat1)) * cos(deg2rad($affilateLat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $metre = ($miles * 1609.344);
        
        return number_format((float)($metre/1000), 2);  
        
    }//end getDistance()

}