<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEncabezadoToCarrusels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carrusels', function (Blueprint $table) {
            $table->string('encabezado',100);
            $table->string('subencabezado',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carrusels', function (Blueprint $table) {
            $table->dropColumn('encabezado');
            $table->dropColumn('subencabezado');
        });
    }
}
