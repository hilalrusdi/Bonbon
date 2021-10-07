<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SupplierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Supplier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company' => $this->faker->unique()->company(),
            'name' => $this->faker->name(),
            'no_hp' => $this->faker->phoneNumber(),
            'alamat' => $this->faker->address(),
            'tgl_join' => $this->faker->dateTimeThisYear(),
            'remember_token' => Str::random(10),
        ];
    }
}
