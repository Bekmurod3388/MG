<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function store(Request $request){
        $sensor = Sensor::create([
            'sensor1'=>$request->d2,
            'sensor2'=>$request->d3,
            'sensor3'=>$request->d4,
            'sensor4'=>$request->d5,
            'sensor5'=>$request->d6,
            'sensor6'=>$request->d8,
        ]);
    }

    public function switch(Request $request){

    }
}
