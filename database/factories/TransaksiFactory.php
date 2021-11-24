<?php

namespace Database\Factories;

use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TransaksiFactory extends Factory
{
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
            // 'slug' => $this->faker->word(),
            'ket' => $this->faker->word(),
            'total' => $this->faker->numberBetween($min = 1000, $max = 10000),
            'supplier_id' => $this->faker->numberBetween($min = 1, $max = 15),
            'tanaman_id' => $this->faker->numberBetween($min = 1, $max = 5),
            'user_id' => $this-> faker->numberBetween($min = 1, $max = 5),
        ];
    }
}
