<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandDb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bands', function (Blueprint $table) {
            $table->tinyIncrements("id", true, true);
            $table->string("name");
            $table->integer("rbw")->index();
            $table->integer("points")->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bands', function (Blueprint $table) {
            $table->dropIfExists();
        });
    }
}
