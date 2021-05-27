<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUrlfoto2ToProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->string('urlfoto2',50)->default("foto.jpg");
            $table->string('urlfoto3',50)->default("foto.jpg");
            $table->string('urlfoto4',50)->default("foto.jpg");
            $table->string('urlfoto5',50)->default("foto.jpg");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->dropColumn('urlfoto2');
            $table->dropColumn('urlfoto3');
            $table->dropColumn('urlfoto4');
            $table->dropColumn('urlfoto5');
        });
    }
}
