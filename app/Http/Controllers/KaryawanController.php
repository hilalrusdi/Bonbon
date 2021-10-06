<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        return view('karyawan.index', [
            'tittle' => 'Karyawan',
            'active' => 'karyawan',
            'image' => 'img/bonbon.jpg',
            'profile' => 'img/profile.png',
            'telepon' => '0894572384',
            'job' => 'Project Manajer',
            'nama' => 'Nabila',
            'email' => 'nabila@gmail.com',
        ]);
    }
}
