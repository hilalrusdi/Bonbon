<?php

namespace Database\Factories;

use App\Models\Tanaman;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TanamanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tanaman::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'spesies' => $this->faker->company(),
            'asal' => $this->faker->country(),
            'alamat' => $this->faker->address(),
        ];
    }
}