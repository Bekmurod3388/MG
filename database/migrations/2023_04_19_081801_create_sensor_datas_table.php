<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensor_datas', function (Blueprint $table) {
            $table->id();
            $table->string('object');
            $table->string('device_id');
            $table->string('controller');
            $table->float('temperature')->nullable();
            $table->boolean('temperature_status')->nullable();
            $table->float('humidity')->nullable();
            $table->boolean('humidity_status')->nullable();
            $table->json('motion')->nullable();
            $table->json('motion_status')->nullable();
            $table->json('cmk')->nullable();
            $table->json('cmk_status')->nullable();
            $table->json('smoke')->nullable();
            $table->json('smoke_status')->nullable();
            $table->float('gas')->nullable();
            $table->boolean('status')->nullable();
            $table->boolean('button')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sensor_datas');
    }
};
