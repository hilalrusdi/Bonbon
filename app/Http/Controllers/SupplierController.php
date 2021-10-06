<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        return view('supplier.index', [
            'tittle' => 'Supplier',
            'active' => 'supplier',
            'image' => 'img/bonbon.jpg',
            'profile' => 'img/profile.png',
            'telepon' => '0894572384',
            'job' => 'Project Manajer',
            'nama' => 'Nabila',
            'email' => 'nabila@gmail.com'
        ]);
    }
}
