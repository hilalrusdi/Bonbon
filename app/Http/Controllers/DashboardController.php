<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'tittle' => 'Dashboard',
            'active' => 'dashboard',
            'image' => 'img/bonbon.jpg',
            'profile' => 'img/profile.png',
            'telepon' => '0894572384',
            'job' => 'Project Manajer',
            'nama' => 'Nabil',
            'email' => 'nabila@gmail.com',
            'posts' => Dashboard::all()
        ]);
    }
}
