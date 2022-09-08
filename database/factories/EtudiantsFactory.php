<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiants>
 */
class EtudiantsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom_etudiants' => fake()->name(),
            'prenom_etudiants' => fake()->name(),
            'sexe_etudiants' => 'homme',
            'ddn_etudiants' => '12-12-22',
            'ldn_etudiants' => fake()->sentence(10),
            'adresse_etudiants' => fake()->sentence(10),
            'contact_etudiants' => 032,
            'N_moto_etudiants' => 0000,
            'dossiers_etudiants' => '',
            'photo_etudiants' => '', 
            'email_etudiants' => fake()->unique->email(),
            'filieres_id' => 1
        ];
    }
}
