<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsKilometrageAndStatusInTableVoiture extends Migration
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
            $table->string('kilometrage')->nullable();
            $table->string('status')->default('envente');
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
            $table->dropColumn(['kilometrage','status']);
        });
    }
}
