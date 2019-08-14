<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserFeature extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('admin_photo')->default(0);
            $table->integer('forum_check')->default(0);
            $table->integer('forum_bleu_check')->default(0);
            $table->integer('pv_comite_check')->default(0);
            $table->integer('pv_repet_chant_check')->default(0);
            $table->boolean('newsletter')->default(0);
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
            $table->dropColumn('admin_photo');
            $table->dropColumn('forum_check');
            $table->dropColumn('forum_bleu_check');
            $table->dropColumn('pv_comite_check');
            $table->dropColumn('pv_repet_chant_check');
            $table->dropColumn('newsletter');
        });
    }
}
