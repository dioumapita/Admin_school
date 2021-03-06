<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsDelaisInTablePaiementClient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('paiement_client', function (Blueprint $table) {
            //
            $table->date('delais_reliquat')->nullable()->after('type_paiement');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('paiement_client', function (Blueprint $table) {
            //
            $table->dropColumn(['delais_reliquat']);
        });
    }
}
