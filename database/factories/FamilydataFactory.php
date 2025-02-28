<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Familydata>
 */
class FamilydataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nev' => $this->faker->name(),
            'mobil_telefonszam' => $this->faker->phoneNumber(),
            'vonalas_telefon' => $this->faker->phoneNumber(),
            'cim' => $this->faker->address(),
            'szuletesi_ev' => $this->faker->year(),
            'szulinap' => $this->faker->unique()->randomNumber(),
            'nevnap' => $this->faker->unique()->randomNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'skype' => $this->faker->unique()->userName(),
            'csaladsorszam' => $this->faker->randomNumber(),
            'matebazsi_kod' => $this->faker->unique()->randomNumber(),
            'sor_szamlalo' => $this->faker->numberBetween(0, 100),
            'becenev_sor' => $this->faker->unique()->word(),
            'bankszamla' => $this->faker->unique()->iban(),
            'revolut_id' => $this->faker->unique()->uuid(),
            'ki_ki' => $this->faker->unique()->word(),
            'naptar' => $this->faker->numberBetween(0, 1),
            'elso_generacio' => $this->faker->optional()->numberBetween(0, 1),
            'unoka_generacio' => $this->faker->optional()->numberBetween(0, 1),
            'dedunoka_generacio' => $this->faker->optional()->numberBetween(0, 1),

        ];
    }
}
