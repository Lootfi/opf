<?php

namespace Database\Factories;

use App\Models\Immobilier;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImmobilierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Immobilier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['Terrain', 'Hangar', 'Maison', 'Appartement', 'Batiment']),
            'commune' => $this->faker->randomElement([
                "Fornaka",
                "Oued El Kheir",
                "Hassiane",
                "Hassi Mameche",
                "Mazagran",
                "Stidia",
                "Ain-Tedles",
                "Sidi Belaattar",
                "Sour",
                "Ain-Boudinar",
                "Kheir-Eddine",
                "Sayada",
                "Sidi Ali",
                "Tazgait",
                "Benabdelmalek Ramdane",
                "Mostaganem",
                "Hadjadj",
                "Sidi-Lakhdar",
                "Achaacha",
                "Khadra",
                "Nekmaria",
                "Ouled Boughalem",
                "Bouguirat",
                "Safsaf",
                "Sirat",
                "Souaflia",
                "Ain-Sidi Cherif",
                "Mansourah",
                "Mesra",
                "Touahria",
                "Ain-Nouissy",
                "Ouled-Maalah",
            ]),
            'rue' => $this->faker->streetName,
            'numero' => $this->faker->randomNumber(2),
            'superficie_total' => $this->faker->randomNumber(3),
        ];
    }
}
