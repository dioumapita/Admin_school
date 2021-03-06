<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoitureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voiture', function (Blueprint $table) {
            $table->id();
            $table->string('immatriculation')->unique();
            $table->string('nom_voiture');
            $table->text('description')->nullable();
            $table->integer('prix');
            $table->timestamps();

            /**
             * réferecement des clés etrangères
             */
            $table->unsignedBigInteger('arrivage_id');
            $table->foreign('arrivage_id')->references('id')->on('arrivage')
                                          ->onDelete('cascade')
                                          ->onUpdate('cascade');

            $table->unsignedBigInteger('fournisseur_id');
            $table->foreign('fournisseur_id')->references('id')->on('fournisseur')
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
        Schema::dropIfExists('voiture');
    }
}
