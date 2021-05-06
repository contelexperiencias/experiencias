<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTitle1ToCarrusels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carrusels', function (Blueprint $table) {
            $table->string('title2',67);
            $table->string('title3',67);
            $table->string('descripcion2',200);
            $table->string('descripcion3',200);         
            $table->string('link2',100)->nullable();
            $table->string('link3',100)->nullable();         


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
            $table->dropColumn('title2');
            $table->dropColumn('title3');
            $table->dropColumn('descripcion2');
            $table->dropColumn('descripcion3');
            $table->dropColumn('link2');
            $table->dropColumn('link3');
        });
    }
}
