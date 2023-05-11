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
        Schema::create('pengelola', function (Blueprint $table) {
            $table->id();
            $table->integer('id_uup');
            $table->integer('r310');
            $table->integer('r311');
            $table->integer('r312');
            $table->integer('r313');
            $table->integer('r314');
            $table->integer('r315');
            $table->integer('r316');
            $table->integer('r317');
            $table->integer('r318');
            $table->integer('r319');
            $table->integer('r320');
            $table->integer('r321');
            $table->string('r322', 1);
            $table->string('r323', 1);
            $table->string('r324_prov', 1);
            $table->string('r324_kabkot', 1);
            $table->string('r324_kec', 1);
            $table->string('r324_desa', 1);

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
        Schema::dropIfExists('pengelola');
    }
};
