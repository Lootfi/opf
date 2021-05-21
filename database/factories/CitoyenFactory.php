<?php

namespace Database\Factories;

use App\Models\Citoyen;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitoyenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Citoyen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lieu_naiss' => $this->faker->address,
            'date_naiss' => $this->faker->date('Y-m-d', '2000-01-01'),
            'n_carte_identite' => $this->faker->numberBetween(1000000000, 9999999999),
            'adresse' => $this->faker->address,
        ];
    }
}
