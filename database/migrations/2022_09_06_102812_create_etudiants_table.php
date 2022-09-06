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
            $table->string('ldn_etudiants');
            $table->string('sexe_etudiants');
            $table->string('email_etudiants');
            $table->integer('contact_etudiants');
            $table->string('adresse_etudiants');
            $table->string('dossier_etudiants');
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
