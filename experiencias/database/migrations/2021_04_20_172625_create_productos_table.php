<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('slug',50);
            $table->string('title',67);
            $table->string('description',155);
            $table->string('nombre',50);
            $table->text('descripcion');            
            $table->string('urlfoto',50)->default("foto.jpg");
            $table->string('urlfoto2',50)->default("foto.jpg");
            $table->string('urlfoto3',50)->default("foto.jpg");
            $table->string('urlfoto4',50)->default("foto.jpg");
            $table->string('urlfoto5',50)->default("foto.jpg");
            $table->string('visitas')->default(0);
            $table->string('orden')->default(0);
            $table->foreignId('categoria_id')->constrained();
            $table->string('tarifa',50);
            $table->boolean('familia')->default(0);
            $table->boolean('pareja')->default(0);
            $table->boolean('grupo')->default(0);
            $table->boolean('solo')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
