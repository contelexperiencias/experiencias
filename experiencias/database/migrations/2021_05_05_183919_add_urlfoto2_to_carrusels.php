<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUrlfoto2ToCarrusels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carrusels', function (Blueprint $table) {
            $table->string('urlfoto1',100);
            $table->string('urlfoto2',100);
            $table->string('urlfoto3',100);
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
            $table->dropColumn('urlfoto1');
            $table->dropColumn('urlfoto2');
            $table->dropColumn('urlfoto3');
        });
    }
}
