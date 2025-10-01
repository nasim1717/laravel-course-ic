<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DemoController extends Controller
{
    public function demo1(){

        $x=10;
        $y=20;
        dump($x,$y);
        $z=30;
        $sum=$x+$y+$z;
        return $sum;
    }
}
