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
        Schema::create('datas', function (Blueprint $table) {
            $table->id();
            $table->string('pi_id');
            $table->string('device_id');
            $table->string('controller');
            $table->float('temperature');
            $table->float('humidity');
            $table->json('motion');
            $table->json('cmk');
            $table->json('smoke');
            $table->float('gas');
            $table->boolean('button');
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
        Schema::dropIfExists('datas');
    }
};
