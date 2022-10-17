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
        Schema::create('powers', function (Blueprint $table) {
            $table->id();
            $table->integer('sensor1')->default(1);
            $table->integer('sensor2')->default(1);
            $table->integer('sensor3')->default(1);
            $table->integer('sensor4')->default(1);
            $table->integer('sensor5')->default(1);
            $table->integer('sensor6')->default(1);
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
        Schema::dropIfExists('powers');
    }
};
