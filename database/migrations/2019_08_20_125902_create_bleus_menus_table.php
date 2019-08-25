<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBleusMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bleus_menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('lien');
            $table->integer('droit');
            $table->boolean('afficher');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bleus_menus');
    }
}
