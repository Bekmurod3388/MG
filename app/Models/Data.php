<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $fillable=['pi_id','device_id','controller','temperature','humidity','motion','cmk','smoke','gas','button'];

    protected $table = 'sensor_datas';
}
