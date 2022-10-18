<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Power;
use App\Models\Sensor;
use App\Models\Sensor1;
use App\Models\Sensor2;
use App\Models\Sensor3;
use App\Models\Sensor4;
use App\Models\Sensor5;
use App\Models\Sensor6;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function store(Request $request){
        $power = Power::first();
        if($power->sensor1 == 1){
            Sensor1::create([
                'value'=>$request->d2,
        ]);
        }
        if($power->sensor2 == 1){
            Sensor2::create([
                'value'=>$request->d4,
            ]);
        }
        if($power->sensor3 == 1){
            Sensor3::Create([
                'value'=>$request->d5,
            ]);
        }
        if($power->sensor4 == 1){
            Sensor4::create([
                'value'=>$request->d6,
            ]);
        }
        if($power->sensor5 == 1){
            Sensor5::create([
                'value'=>$request->d7,
            ]);
        }
        if($power->sensor6 == 1){
            Sensor6::create([
                'value'=>$request->d8,
            ]);
        }
    }

    public function switch(Request $request){

    }
}
