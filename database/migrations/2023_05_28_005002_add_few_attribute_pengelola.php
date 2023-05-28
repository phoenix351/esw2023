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
        Schema::table('pengelola', function (Blueprint $table) {
            $table->string('r1004a',2)->after('r309');
            $table->string('r1006a',2)->after('r1004a');
            $table->string('r1006b',2)->after('r1006a');
            $table->string('r1006c',2)->after('r1006b');
            $table->string('r1010a',2)->after('r1006c');
            $table->string('r1010b1',2)->after('r1010a');
            $table->string('r1010b2',2)->after('r1010b1');
            $table->string('r1010b3',2)->after('r1010b2');
            $table->string('r1010b4',2)->after('r1010b3');
            $table->string('r1010c1',2)->after('r1010b4');
            $table->string('r1010c2',2)->after('r1010c1');
            $table->string('r1010c3',2)->after('r1010c2');
            $table->string('r1010c4',2)->after('r1010c3');
            $table->string('r1010c5',2)->after('r1010c4');
            $table->string('r1011a',2)->after('r1010c5');
            $table->string('r1011b',2)->after('r1011a');
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
