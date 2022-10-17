<?php

namespace App\Http\Controllers;

use App\Models\Power;
use App\Models\Sensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function power(Request $request){

        if(isset($request->sensor1)){
            if ($request->sensor1 == 0){
                Power::update(['sensor1'=>0]);
            }
            else Power::update(['sensor1'=>1]);
        }
        if(isset($request->sensor2)){
            if ($request->sensor2 == 0){
            Power::update(['sensor2'=>$request->sensor2]);
        }}
        if(isset($request->sensor3)){
            if ($request->sensor3 == 0){
            Power::update(['sensor3'=>$request->sensor3]);
        }}
        if(isset($request->sensor4)){
            if ($request->sensor4 == 0){
            Power::update(['sensor4'=>$request->sensor4]);
        }}
        if(isset($request->sensor5)){
            if ($request->sensor5 == 0){
            Power::update(['sensor5'=>$request->sensor5]);
        }}
        if(isset($request->sensor6)){
            if ($request->sensor6 == 0) {
            Power::update(['sensor6' => $request->sensor6]);
        }}
    }
    public function power_index(){
        $powers = Power::first();
        return view('power')->with('powers',$powers);
    }
}
