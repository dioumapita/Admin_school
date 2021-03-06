<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsTemoinInTableVenteVoiture extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vente_voiture', function (Blueprint $table) {
            //
            $table->string('temoin_acheteur')->nullable();
            $table->integer('contact_temoin_acheteur')->nullable();
            $table->string('temoin_vendeur')->nullable();
            $table->integer('contact_temoin_vendeur')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vente_voiture', function (Blueprint $table) {
            //
            $table->dropColumn(['temoin_acheteur','contact_temoin_acheteur','temoin_vendeur','contact_temoin_vendeur']);
        });
    }
}
