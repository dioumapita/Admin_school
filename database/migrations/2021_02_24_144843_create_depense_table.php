<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepenseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depense', function (Blueprint $table) {
            $table->id();
            $table->string('nom_depense');
            $table->integer('montant');
            $table->date('date_depense');
            $table->timestamps();

            /**
             * Réferecement de la clé étrangère arrivage_id
             */
            $table->unsignedBigInteger('arrivage_id');
            $table->foreign('arrivage_id')->references('id')->on('arrivage')
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
        Schema::dropIfExists('depense');
    }
}
