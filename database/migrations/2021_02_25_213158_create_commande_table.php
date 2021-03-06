<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('commande', function (Blueprint $table) {
            $table->id();
            $table->integer('status')->default(0);
            /**
             * Référecement des clés étrangères
             */
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('client')
                                        ->onUpdate('cascade')
                                        ->onDelete('cascade');

            $table->unsignedBigInteger('article_id')->nullable();
            $table->foreign('article_id')->references('id')->on('article')
                                        ->onUpdate('cascade')
                                        ->onDelete('cascade');
            $table->unsignedBigInteger('voiture_id')->nullable();
            $table->foreign('voiture_id')->references('id')->on('voiture')
                                        ->onUpdate('cascade')
                                        ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commande');
    }
}
