<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier;
use App\Models\Tanaman;
use App\Models\Transaksi;
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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Hilal',
            'username' => 'hilal',
            'password' => bcrypt('12345'),
            'born' => '31 agustus 2001',
            'no_hp' => '0826347263',
            'alamat' => 'sidoarjo',
            'tgl_kerja' => '2008-09-24',
            'is_admin' => true,
        ]);

        Supplier::factory(20)->create();

        User::factory(15)->create();

        Tanaman::factory(5)->create();

        Transaksi::factory(5)->create();

    }
}
