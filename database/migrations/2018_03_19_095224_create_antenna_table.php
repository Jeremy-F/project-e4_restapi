<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntennaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antennas', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name");
            $table->string("place")->nullable();
            $table->date("start");
            $table->date("end");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('antennas', function (Blueprint $table) {
            $table->dropIfExists();
        });
    }
}
