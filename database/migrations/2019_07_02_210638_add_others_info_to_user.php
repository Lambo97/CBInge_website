<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOthersInfoToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('section')->nullable();
            $table->string('citation')->nullable();
            $table->text('boisson')->nullable();
            $table->text('guindaille')->nullable();
            $table->text('titre_guindaille')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('section')->nullable();
            $table->dropColumn('citation')->nullable();
            $table->dropColumn('boisson')->nullable();
            $table->dropColumn('guindaille')->nullable();
            $table->dropColumn('titre_guindaille')->nullable();
        });
    }
}
