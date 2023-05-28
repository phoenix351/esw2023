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
        Schema::create('ternak_kerbau', function (Blueprint $table) {
            $table->id();
            $table->string('r602',20);
            $table->string('r603',20);
            $table->string('r604',20);
            $table->string('r605',20);
            $table->string('r606',20);
            $table->string('r607',20);
            $table->string('r608',20);
            $table->string('r609',20);
            $table->string('r610',20);
            $table->string('r611',20);
            $table->string('r612',20);
            $table->string('r613',20);
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
        Schema::dropIfExists('ternak_kerbau');
    }
};
