<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper;

class NearByController extends Controller
{

    const officeLat  = 53.3340285;
    const officeLong = -6.2535495;

    public function NearByAffiliates(){

        //get the file
        $file = fopen(storage_path('app/public/affiliates.txt'), "r");

        $affilates = [];

        while(!feof($file)) {

            $data = json_decode(fgets($file));

            //get the distance of affiliates from the office
            $data->distance = Helper::getDistance(self::officeLat, self::officeLong, $data->latitude, $data->longitude);

            $affilates[] = $data;
        }

        //close file
        fclose($file);
        
        //convert array into collection for sorting
        $collection = collect($affilates);

        //sort the collection by affiliate id  and return view   

        return view('welcome', ['newAffilates' => $collection->sortBy('affiliate_id')]);
    }

}
