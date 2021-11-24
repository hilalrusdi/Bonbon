<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SupplierFactory extends Factory
{
    protected $model = Supplier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company' => $this->faker->company(),
            'name' => $this->faker->name(),
            'no_hp' => $this->faker->phoneNumber(),
            'alamat' => $this->faker->address(),
            'tgl_join' => $this->faker->dateTimeThisYear(),
        ];
    }
}
