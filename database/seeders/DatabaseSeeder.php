<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        User::create([
            'name' => 'Hilal Rusdi',
            'NIK' => '351511',
            'password' => bcrypt('12345'),
            'born' => '31 agustus 2001',
            'no_hp' => '0826347263',
            'alamat' => 'sidoarjo',
            'tgl_kerja' => '2008-09-24'
        ]);
    }
}
