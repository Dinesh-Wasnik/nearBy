<?php

namespace App;


class Helper 
{  

    /**
     * Return the distance between a given coordinate in KM.
     *
     * @param  float $officeLat1   latitude of office location
     * @param  float $officeLong1  longitude of office location
     * @param  float $affilateLat2 latitude of affiliates location
     * @param  float $affilateLong2 latitude of affiliates location
     * 
     * @return string
     */   
    public static function getDistance(float $officeLat1, float $officeLong1, float $affilateLat2, float $affilateLong2) : string
    {
       
        $theta = $officeLong1 - $affilateLong2;
        $dist = sin(deg2rad($officeLat1)) * sin(deg2rad($affilateLat2)) +  cos(deg2rad($officeLat1)) * cos(deg2rad($affilateLat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $metre = ($miles * 1.609344);
        

        return number_format((float)($metre), 2);  
        
    }//end getDistance()

}