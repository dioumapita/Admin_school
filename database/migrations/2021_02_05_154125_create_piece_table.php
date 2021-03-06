<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePieceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piece', function (Blueprint $table) {
            $table->id();
            $table->string('nom_piece');
            $table->integer('prix');
            $table->integer('quantite');
            $table->string('image_piece')->default('image_piece.png');
            $table->timestamps();
            /**
             * référecement des clés étrangères
             */
            $table->unsignedBigInteger('voiture_id')->nullable();
            $table->foreign('voiture_id')->references('id')->on('voiture')
                                         ->onDelete('cascade')
                                         ->onUpdate('cascade');

            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('category')
                                          ->onDelete('cascade')
                                          ->onUpdate('cascade');

            $table->unsignedBigInteger('arrivage_id')->nullable();
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
        Schema::dropIfExists('piece');
    }
}
