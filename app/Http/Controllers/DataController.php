<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index(){
        $datas = Data::all();
        return view('data',['datas'=>$datas]);
    }
}
