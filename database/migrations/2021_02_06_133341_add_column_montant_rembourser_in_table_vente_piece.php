<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnMontantRembourserInTableVentePiece extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vente_piece', function (Blueprint $table) {
            //
            $table->integer('montant_rembourser')->default(0)->after('montant_payer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vente_piece', function (Blueprint $table) {
            //
            $table->dropColumn('montant_rembourser');
        });
    }
}
