<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenteDiversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vente_divers', function (Blueprint $table) {
            $table->id();
            $table->integer('montant_payer');
            $table->integer('quantite');
            $table->timestamps();
            /**
             * réferecement des clés étrangères
             */
            $table->unsignedBigInteger('divers_id');
            $table->foreign('divers_id')->references('id')->on('divers')
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
        Schema::dropIfExists('vente_divers');
    }
}
