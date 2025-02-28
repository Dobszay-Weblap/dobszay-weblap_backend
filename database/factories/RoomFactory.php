<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    protected $model = Room::class;

    public function definition()
    {
        $szobaId = $this->faker->randomElement(['F1/1', 'F1/2', 'F2/1', 'F2/2']);
        $fahazId = explode('/', $szobaId)[0]; // F1/1 -> F1

        return [
            'szoba_id' => $szobaId,
            'fahaz_id' => $fahazId,
            'nev' => $this->faker->randomElement(['1. Faház', '2. Faház']),
            'max' => $this->faker->numberBetween(1, 4),
            'lakok' => json_encode($this->faker->randomElements(['Eszter', 'Dávid', 'Anna', 'Sára'], rand(1, 3)))
        ];
    }
}
