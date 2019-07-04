<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBleuParrainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bleu_parrain', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('bleu_id');
            $table->unsignedBigInteger('parrain_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bleu_parrain');
    }
}
