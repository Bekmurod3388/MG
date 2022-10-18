<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Sensor1;
use App\Models\Sensor2;
use App\Models\Sensor3;
use App\Models\Sensor4;
use App\Models\Sensor5;
use App\Models\Sensor6;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(PowerSeeder::class);
        Sensor1::create(['value'=>0]);
        Sensor2::create(['value'=>0]);
        Sensor3::create(['value'=>0]);
        Sensor4::create(['value'=>0]);
        Sensor5::create(['value'=>0]);
        Sensor6::create(['value'=>0]);
    }
}
