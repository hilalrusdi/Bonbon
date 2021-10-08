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
            'css' => 'css/whyy.css',
            'suppliers' => Supplier::all()
        ]);
    }

    public function show()
    {
        return view('supplier.tambah.index', [
            'tittle' => 'Tambah Data',
            'active' => 'tambah',
            'image' => 'img/bonbon.jpg',
            'profile' => 'img/user.png',
            'css' => 'css/whyy.css',
            'suppliers' => Supplier::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'company' => 'required|unique:suppliers',
            'name' => 'required|max:25',
            'no_hp' => 'required',
            'alamat' => 'required',
            'tgl_join' => 'required',

            
        ]);

        Supplier::create($validatedData);
        $request->session()->flash('success', 'Berhasil menambah data!');
        return redirect('/supplier');
        
    }
}
