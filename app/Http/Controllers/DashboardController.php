<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.dashboard-user.index', [
            'tittle' => 'Dashboard',
            'active' => 'dashboard',
            'image' => 'img/bonbon.jpg',
            'profile' => 'img/user.png',
            'telepon' => '0894572384',
            'job' => 'Project Manajer',
            'nama' => 'Nabila',
            'email' => 'nabila@gmail.com',
            'css' => 'css/table1.css',
            'posts' => Dashboard::all()
        ]);
    }

    public function admin()
    {
        return view('dashboard.dashboard-admin.index', [
            'tittle' => 'Dashboard',
            'active' => 'dashboard',
            'image' => 'img/bonbon.jpg',
            'profile' => 'img/user.png',
            'telepon' => '0894572384',
            'job' => 'Project Manajer',
            'nama' => 'Nabila',
            'email' => 'nabila@gmail.com',
            'css' => 'css/table1.css',
            'posts' => Dashboard::all()
        ]);
    }
}
