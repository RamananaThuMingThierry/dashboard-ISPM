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
            'prenom_etuidants' => fake()->name(),
            'ddn_etudiants' => fake()->dateTimeBetween('1990-01-01', '2012-12-31')->format('d/m/Y'),
            'ldn_etudiants' => fake()->sentence(10),
            'adresse_etudiants' => fake()->sentence(10), 
            'email_etudiants' => fake()->unique->email()
        ];
    }
}
