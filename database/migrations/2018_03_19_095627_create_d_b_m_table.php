<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDBMTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dbms', function (Blueprint $table) {
            $table->tinyInteger("id", true, true)->index();
            $table->tinyInteger("value", false, false)->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dbms', function (Blueprint $table) {
            $table->dropIfExists();
        });
    }
}
