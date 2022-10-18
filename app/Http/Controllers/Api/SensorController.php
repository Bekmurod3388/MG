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
            $sensor1 = new Sensor1();
            $sensor1->updateOrCreate([
                'value'=>$sensor1->value + $request->d2,
        ]);
        }
        if($power->sensor2 == 1){
            $sensor2 =new Sensor2();
            $sensor2->updateOrCreate([
                'value'=>$sensor2->value + $request->d4,
            ]);
        }
        if($power->sensor3 == 1){
            $sensor3 =new Sensor3();
            $sensor3->updateOrCreate([
                'value'=>$sensor3->value + $request->d5,
            ]);
        }
        if($power->sensor4 == 1){
            $sensor4 =new Sensor4();
            $sensor4->updateOrCreate([
                'value'=>$sensor4->value+$request->d6,
            ]);
        }
        if($power->sensor5 == 1){
            $sensor5 =new Sensor5();
            $sensor5->updateOrCreate([
                'value'=>$sensor5->value+$request->d7,
            ]);
        }
        if($power->sensor6 == 1){
            $sensor6 =new Sensor6();
            $sensor6->updateOrCreate([
                'value'=>$sensor6->value+$request->d8,
            ]);
        }
    }

    public function switch(Request $request){

    }
}
