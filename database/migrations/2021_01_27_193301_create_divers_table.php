<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divers', function (Blueprint $table) {
            $table->id();
            $table->string('nom_divers');
            $table->integer('prix');
            $table->integer('quantite');
            $table->string('image_divers')->default('default_img_divers.png');
            $table->timestamps();
            /**
             * réferencement de clé étrangère
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
        Schema::dropIfExists('divers');
    }
}
