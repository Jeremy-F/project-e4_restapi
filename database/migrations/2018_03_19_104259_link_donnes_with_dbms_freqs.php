<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LinkDonnesWithDbmsFreqs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('donnees', function (Blueprint $table) {
            $table->integer("freq_id", false, true)->nullable()->index();

            $table->foreign("freq_id")
                ->references('id')
                ->on('freqs')
                ->onDelete('CASCADE');

            $table->tinyInteger("dbm_id", false, true)->nullable()->index();

            $table->foreign("dbm_id")
                ->references('id')
                ->on('dbms')
                ->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('donnees', function (Blueprint $table) {
            $table->dropForeign(["freq_id", "dbm_id"]);
        });
    }
}
