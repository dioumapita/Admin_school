<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementTravailleurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiement_travailleur', function (Blueprint $table) {
            $table->id();
            $table->integer('montant_payer');
            $table->string('type_paiement');
            $table->timestamps();
            /**
             * Réferencement des clés étrangère
             */
            $table->unsignedBigInteger('travailleur_id');
            $table->foreign('travailleur_id')->references('id')->on('travailleur')
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
        Schema::dropIfExists('paiement_travailleur');
    }
}
