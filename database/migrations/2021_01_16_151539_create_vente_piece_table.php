<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentePieceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('vente_piece', function (Blueprint $table) {
            $table->id();
            $table->integer('montant_payer');
            $table->integer('quantite');
            $table->timestamps();

            /**
             * referencement des clés étrangères
             */
            $table->unsignedBigInteger('piece_id');
            $table->foreign('piece_id')->references('id')->on('piece')
                                      ->onDelete('cascade')
                                      ->onUpdate('cascade');

            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('client')
                                        ->onDelete('cascade')
                                        ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vente_piece');
    }
}
