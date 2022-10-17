<?php

namespace Database\Seeders;

use App\Models\Power;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Power::create([
            'sensor1'=>1,
            'sensor2'=>1,
            'sensor3'=>1,
            'sensor4'=>1,
            'sensor5'=>1,
            'sensor6'=>1,
        ]);
    }
}
