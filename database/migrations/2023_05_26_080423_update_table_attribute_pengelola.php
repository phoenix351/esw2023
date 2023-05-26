<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        DB::statement('ALTER TABLE pengelola CHANGE id_uup id_pengelola INT(11) NOT NULL');
        Schema::table('pengelola', function (Blueprint $table) {
            $table->rename('lahan');
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
        Schema::table('lahan', function (Blueprint $table) {
            $table->rename('pengelola');
            $table->renameColumn('id_pengelola', 'id_lahan');
        });
    }
};
