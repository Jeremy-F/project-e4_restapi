<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LinkDonneesBands extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('donnees', function (Blueprint $table) {
            $table->tinyInteger("band_id", false, true)->nullable()->index();
            $table->foreign("band_id")
                ->references('id')
                ->on('bands')
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
            $table->dropForeign(["band_id"]);
        });
    }
}
