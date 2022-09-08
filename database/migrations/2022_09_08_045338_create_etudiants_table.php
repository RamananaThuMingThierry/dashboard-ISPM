<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nom_etudiants', 255);
            $table->string('prenom_etudiants', 255);
            $table->date('ddn_etudiants');
            $table->string('ldn_etudiants', 255);
            $table->string('email_etudiants', 255);
            $table->string('adresse_etudiants', 255);
            $table->integer('contact_etudiants', 10);
            $table->string('dossiers_etudiants', 255);
            $table->string('numero_matricule_moto_etudiants');
            $table->foreignId('filieres_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('etudiants');
    }
};
