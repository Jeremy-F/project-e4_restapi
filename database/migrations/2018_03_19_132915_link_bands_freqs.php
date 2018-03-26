<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LinkBandsFreqs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bands', function (Blueprint $table) {
            $table->integer("min_freq_id", false, true)->nullable()->index();
            $table->foreign("min_freq_id")
                ->references('id')
                ->on('freqs')
                ->onDelete('CASCADE');

            $table->integer("max_freq_id", false, true)->nullable()->index();
            $table->foreign("max_freq_id")
                ->references('id')
                ->on('freqs')
                ->onDelete('CASCADE');

            $table->integer("antenna_id", false, true)->nullable()->index();
            $table->foreign("antenna_id")
                ->references('id')
                ->on('antennas')
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
        Schema::table('bands', function (Blueprint $table) {
            $table->dropForeign(["min_freq_id", "max_freq_id"]);
        });
    }
}
