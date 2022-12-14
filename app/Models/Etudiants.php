<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiants extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_etudiants',
        'prenom_etudiants',
        'ddn_etudiants',
        'ldn_etudiants',
        'sexe_etudiants',
        'adresse_etudiants',
        'contact_etudiants',
        'email_etudiants',
        'N_moto_etudiants',
        'photo_etudiants',
        'dossiers_etudiants',
        'filieres_id'
    ];

    public $timestamps = false;
}
