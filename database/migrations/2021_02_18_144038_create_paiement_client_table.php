<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiement_client', function (Blueprint $table) {
            $table->id();
            $table->integer('montant_payer');
            $table->string('type_paiement');
            $table->timestamps();

            /**
             * réferecement de la clé etrangère
             */
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
        Schema::dropIfExists('paiement_client');
    }
}
