<?php

namespace App\Http\Controllers;

use App\Models\Dish;
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $sensor1 = Sensor1::all()->sum('value');
        $sensor2 = Sensor2::all()->sum('value');
        dd($sensor2);

        $sensor3 = Sensor3::all();
        $sensor4 = Sensor4::all();
        $sensor5 = Sensor5::all();
        $sensor6 = Sensor6::all();
        return view('welcome',[
            'sensor1'=>$sensor1,
            'sensor2'=>$sensor2,
            'sensor3'=>$sensor3,
            'sensor4'=>$sensor4,
            'sensor5'=>$sensor5,
            'sensor6'=>$sensor6]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sensors  $sensors
     * @return \Illuminate\Http\Response
     */
    public function show(sensors $sensors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sensors  $sensors
     * @return \Illuminate\Http\Response
     */
    public function edit(sensors $sensors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sensors  $sensors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sensors $sensors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sensors  $sensors
     * @return \Illuminate\Http\Response
     */
    public function destroy(sensors $sensors)
    {
        //
    }

    public function power(Request $request,Power $power){
        //dd($request->all());
            if (isset($request->sensor1)) {
                if ($power->sensor1 === 0) {
                    $power->update([
                        'sensor1' => 1
                    ]);
                } else {
                    $power->update([
                        'sensor1' => 0
                    ]);
                }
            }
        if (isset($request->sensor2)) {
            if ($power->sensor2 === 0) {
                $power->update([
                    'sensor2' => 1
                ]);
            } else {
                $power->update([
                    'sensor2' => 0
                ]);
            }
        }
        if (isset($request->sensor3)) {
            if ($power->sensor3 === 0) {
                $power->update([
                    'sensor3' => 1
                ]);
            } else {
                $power->update([
                    'sensor3' => 0
                ]);
            }
        }
        if (isset($request->sensor4)) {
            if ($power->sensor4 === 0) {
                $power->update([
                    'sensor4' => 1
                ]);
            } else {
                $power->update([
                    'sensor4' => 0
                ]);
            }
        }
        if (isset($request->sensor5)) {
            if ($power->sensor5 === 0) {
                $power->update([
                    'sensor5' => 1
                ]);
            } else {
                $power->update([
                    'sensor5' => 0
                ]);
            }
        }
        if (isset($request->sensor6)) {
            if ($power->sensor6 === 0) {
                $power->update([
                    'sensor6' => 1
                ]);
            } else {
                $power->update([
                    'sensor6' => 0
                ]);
            }
        }
        return redirect()->route('power_index')->with('success','status o\'zgartirildi!');
    }

    public function power_index(){
        $powers = Power::first();
        return view('power')->with('powers',$powers);
    }
}
