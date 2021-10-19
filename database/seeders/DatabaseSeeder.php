<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Supplier;
use App\Models\Tanaman;
use App\Models\Transaksi;

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
            'tgl_kerja' => '2008-09-24',
        ]);

        Transaksi::create([
            'supplier_id' => '1',
            'tanaman_id' => '2',
            'user_id' => '4',
            'nama' => 'haloo',
            'tgl' => '2021-12-01',
            'no_hp' => '0895635',
            'status' => 'lunas',
            'ket' => 'wow',
            'total' => '50000',
            'slug' => 'Haloo'
            
        ]);

        Supplier::factory(15)->create();

        Tanaman::factory(5)->create();

        Transaksi::factory(5)->create();

        // $this->call(LaratrustSeeder::class);
    }
}
