<?php

namespace Database\Factories;

use App\Models\Tanaman;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TanamanFactory extends Factory
{
    protected $model = Tanaman::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->word(),
            'spesies' => $this->faker->word(),
            'asal' => $this->faker->country(),
        ];
    }
}
