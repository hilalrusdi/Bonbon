<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class KaryawanController extends Controller
{
    public function index()
    {
        return view('karyawan.index', [
            'tittle' => 'Karyawan',
            'active' => 'karyawan',
            'image' => 'img/bonbon.jpg',
            'profile' => 'img/user.png',
            'css' => 'css/table1.css',
            'users' => User::all()
        ]);
    }
}
