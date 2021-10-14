<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanaman;

class TanamanController extends Controller
{
    public function index()
    {
        return view('tanaman.index', [
            'tittle' => 'Tanaman',
            'active' => 'tanaman',
            'image' => 'img/bonbon.jpg',
            'profile' =>  'user.png',
            'css' => 'css/whyy.css',
            'tanamen' => Tanaman::latest()->filter(request(['search']))->get()
        ]);
    }

    public function show()
    {
        return view('tanaman.tambah.index', [
            'tittle' => 'Tanaman',
            'active' => 'tambah',
            'image' => 'img/bonbon.jpg',
            'profile' => 'user.png',
            'css' => 'css/whyy.css',
            'tanamen' => Tanaman::all()
        ]);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama' => 'required',
            'spesies' => 'required|unique:tanamen',
            'asal' => 'required',
            'alamat' => 'required',

            
        ]);

        Tanaman::create($validatedData);
        $request->session()->flash('success', 'Berhasil menambah data!');
        return redirect('/tanaman');
        
    }
}
