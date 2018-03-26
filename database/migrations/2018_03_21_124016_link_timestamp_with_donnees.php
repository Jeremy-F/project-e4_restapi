<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LinkTimestampWithDonnees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('donnees', function (Blueprint $table) {
            $table->dropColumn("tmstp");

            $table->integer("timestamp_id", false, true)->nullable()->index();

            $table->foreign("timestamp_id")
                ->references('id')
                ->on('timestamps')
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
            //
        });
    }
}
