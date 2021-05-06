<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarruselsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrusels', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',200);
            $table->string('urlfoto',100);
            $table->string('link',100)->nullable();
            $table->integer('orden')->default(0);
            $table->string('title',67);
            $table->string('title2',67);
            $table->string('title3',67);
            $table->string('descripcion2',200);
            $table->string('descripcion3',200);         
            $table->string('link2',100)->nullable();
            $table->string('link3',100)->nullable();   
            $table->string('urlfoto1',100);
            $table->string('urlfoto2',100);
            $table->string('urlfoto3',100);
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
        Schema::dropIfExists('carrusels');
    }
}
