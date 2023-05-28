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
        Schema::table('lahan', function (Blueprint $table) {
            $table->string('r324_prov', 2)->change();
            $table->string('r324_kabkot', 2)->change();
            $table->string('r324_kec', 3)->change();
            $table->string('r324_desa', 3)->change();
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
