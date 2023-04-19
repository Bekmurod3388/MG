<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function store(Request $request){
        Data::create($request->all());
        return response()->json('success',201);
    }
}
