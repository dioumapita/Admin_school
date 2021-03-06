<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->id();
            $table->string('nom_article');
            $table->integer('prix');
            $table->integer('quantite');
            $table->timestamps();

            /**
             * Réferecement des clé étrangè
             */
            $table->unsignedBigInteger('voiture_id')->nullable();
            $table->foreign('voiture_id')->references('id')->on('voiture')
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
        Schema::dropIfExists('article');
    }
}
