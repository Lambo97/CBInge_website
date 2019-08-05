<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSousMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sous_menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_menu');
            $table->string('nom');
            $table->string('lien');
            $table->integer('droit');
            $table->boolean('afficher')->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sous_menus');
    }
}
