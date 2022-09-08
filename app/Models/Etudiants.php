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
        'adresse_etudiants',
        'email_etudiants',
    ];

    public $timestamps = false;
}
