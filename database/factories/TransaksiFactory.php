<?php

namespace Database\Factories;

use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransaksiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaksi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'tgl' => $this->faker->dateTimeThisYear(),
            'no_hp' => $this->faker->phoneNumber(),
            'status' => $this->faker->word(),
            'ket' => $this->faker->text(),
            'total' => $this->faker->numberBetween($min = 1000, $max = 10000),

        ];
    }
}
