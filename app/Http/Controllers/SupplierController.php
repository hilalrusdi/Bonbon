<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index()
    {
        return view('supplier.index', [
            'tittle' => 'Supplier',
            'active' => 'supplier',
            'image' => 'img/bonbon.jpg',
            'profile' => 'img/user.png',
            'suppliers' => Supplier::all()
        ]);
    }
}
