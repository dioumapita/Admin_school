<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnImageVoitureInTableVoiture extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('voiture', function (Blueprint $table) {
            //
            $table->string('image_voiture')->default('image_voiture.png');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('voiture', function (Blueprint $table) {
            //
            $table->dropColumn('image_voiture');
        });
    }
}
