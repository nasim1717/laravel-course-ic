<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function WeatherPage(){

        $BASE="http://api.weatherapi.com/v1/current.json";
        $KEY="291e2d051e624ed488974910240410";
        $LOCATION="dhaka";
        $URL=$BASE."?key=".$KEY."&q=".$LOCATION;

        $response=Http::get($URL);
        $weather=$response->json();

        return view('weather',compact('weather'));

    }


}
