<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TanamanController extends Controller
{
    public function index()
    {
        return view('tanaman.index', [
            'tittle' => 'Tanaman',
            'active' => 'tanaman',
            'image' => 'img/bonbon.jpg',
            'profile' => 'img/user.png',
            'css' => 'css/table.css',
        ]);
    }
}
