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
        Schema::create('master_wilayahs', function (Blueprint $table) {
            $table->id();
            $table->string('kode_prov',2);
            $table->string('nama_prov',20);
            $table->string('kode_kab',2);
            $table->string('id_kab',4);
            $table->string('nama_kab',30);
            $table->string('kode_kec',3);
            $table->string('id_kec',7);
            $table->string('nama_kec',30);
            $table->string('kode_desa',3);
            $table->string('id_desa',10);
            $table->string('nama_desa',30);
            $table->string('klas',1);//klasifikasi desa
            $table->string('kode_sls4',4);
            $table->string('kode_sls6',6);
            $table->string('kdsub_sls',6);
            $table->string('id_sls',14);
            $table->string('id_sls6',16);
            $table->string('nama_sls',40);
            $table->string('jenis_sls',20);
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
        Schema::dropIfExists('master_wilayah');
    }
};
