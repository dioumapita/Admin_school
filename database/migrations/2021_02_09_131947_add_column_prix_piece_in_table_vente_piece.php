<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnPrixPieceInTableVentePiece extends Migration
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
            $table->integer('prix_piece')->after('id');
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
            $table->dropColumn('prix_piece');
        });
    }
}
