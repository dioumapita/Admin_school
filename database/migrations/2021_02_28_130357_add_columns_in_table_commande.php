<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsInTableCommande extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('commande', function (Blueprint $table) {
            //
            $table->date('date_validation')->nullable()->after('voiture_id');
            $table->string('temoin_client')->nullable()->after('date_validation');
            $table->integer('tel_temoin_client')->nullable()->after('temoin_client');
            $table->string('temoin_vendeur')->nullable()->after('tel_temoin_client');
            $table->integer('tel_temoin_vendeur')->nullable()->after('temoin_vendeur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('commande', function (Blueprint $table) {
            //
            $table->dropColumn(['date_validation','temoin_client','tel_temoin_client','temoin_vendeur','tel_temoin_vendeur']);
        });
    }
}
