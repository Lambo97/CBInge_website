<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FonctionUserCorrectMisspelling extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fonction_user', function (Blueprint $table) {
            $table->dropColumn('user_is');
            $table->unsignedBigInteger('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fonction_user', function (Blueprint $table) {
            $table->unsignedBigInteger('user_is');
            $table->dropColumn('user_id');
        });
    }
}
