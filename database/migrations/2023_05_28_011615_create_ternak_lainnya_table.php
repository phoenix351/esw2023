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
        Schema::create('ternak_lainnya', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pengelola');
            $table->string('r602',20);
            $table->string('r603',20);
            $table->string('r606',20);
            $table->string('r617',20);
            $table->string('r618',20);
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
        Schema::dropIfExists('ternak_lainnya');
    }
};
