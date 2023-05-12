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
        Schema::create('uup', function (Blueprint $table) {
            $table->id();
            $table->integer('id_rt');
            $table->integer('r301');
            $table->string('r302',255);
            $table->string('r303',16);
            $table->string('r307',1);
            $table->integer('r309');
            
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
        Schema::dropIfExists('uup');
    }
};
