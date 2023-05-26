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
        //
        Schema::table('rt', function (Blueprint $table) {
            $table->string('r110')->after('jumlah_uup');
            $table->string('r111')->after('r110');
            $table->string('qc1',1)->default('2')->after('r111');;
            $table->string('qc2',1)->default('2')->after('qc1');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
