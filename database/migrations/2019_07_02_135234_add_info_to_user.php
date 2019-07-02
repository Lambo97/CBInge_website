<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInfoToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('prenom');
            $table->string('surnom');
            $table->string('login');
            $table->date('date_de_naissance');
            $table->string('adresse');
            $table->string('ville');
            $table->integer('code_postal');
            $table->integer('gsm');
            $table->year('entree_inge');
            $table->year('annee_batpeme');
            $table->string('autre_etudes');
            $table->text('probleme_sante');
            $table->text('descritpion');
            $table->integer('droit');
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
            $table->dropColumn('prenom');
            $table->dropColumn('surnom');
            $table->dropColumn('login');
            $table->dropColumn('date_de_naissance');
            $table->dropColumn('adresse');
            $table->dropColumn('ville');
            $table->dropColumn('code_postal');
            $table->dropColumn('gsm');
            $table->dropColumn('entree_inge');
            $table->dropColumn('annee_batpeme');
            $table->dropColumn('autre_etudes');
            $table->dropColumn('probleme_sante');
            $table->dropColumn('descritpion');
            $table->dropColumn('droit');
        });
    }
}
