<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function store(Request $request){
        $sensor = Sensor::create([
            'sensor1'=>$request->d1,
            'sensor2'=>$request->d2,
            'sensor3'=>$request->d3,
            'sensor4'=>$request->d4,
            'sensor5'=>$request->d5,
            'sensor6'=>$request->d6,
        ]);
    }

    public function switch(Request $request){

    }
}
