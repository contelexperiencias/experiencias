<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddParejaToProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productos', function (Blueprint $table) {
           $table->boolean('pareja')->default(0);//
        });
        Schema::table('productos', function (Blueprint $table) {
            $table->boolean('grupo')->default(0);//
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
           $table->dropColumn('pareja'); //
        });
        Schema::table('productos', function (Blueprint $table) {
            $table->dropColumn('grupo'); //
         });
    }
}
