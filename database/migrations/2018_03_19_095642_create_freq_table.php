<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFreqTable extends Migration
{

    public function up(){
        Schema::create('freqs', function (Blueprint $table) {
            $table->increments("id");
            $table->bigInteger("value", false, true)->index();
        });
    }


    public function down(){
        Schema::table('freqs', function (Blueprint $table) {
            $table->dropIfExists();
        });
    }
}
