<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostCitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_citations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_auteur');
            $table->text('message');
            $table->integer('score')->nullable();
            $table->boolean('ancre')->default(FALSE);
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
        Schema::dropIfExists('post_citations');
    }
}
