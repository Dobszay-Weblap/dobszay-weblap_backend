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
        return [
            'szoba_id' => $this->faker->numberBetween(1, 5), 
            'nev' => $this->faker->word(),
            'max' => $this->faker->numberBetween(1, 5),
            'lakok' => json_encode($this->faker->words(3)), // Lakók mező generálása
        ];
    }
}
