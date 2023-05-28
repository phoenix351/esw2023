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
        Schema::create('ternak_unggas', function (Blueprint $table) {
            $table->id();
            $table->string('r602',20);
            $table->string('r603',20);
            $table->string('r606',20);
            $table->string('r610',20);
            $table->string('r614',20);
            $table->string('r615',20);
            $table->string('r616',20);
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
        Schema::dropIfExists('ternak_unggas');
    }
};
