<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditTravailleurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_travailleur', function (Blueprint $table) {
            $table->id();
            $table->integer('montant_credit');
            $table->string('type_paiement');
            $table->timestamps();
            /**
             * Réferecement de la clé travailleur
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
        Schema::dropIfExists('credit_travailleur');
    }
}
