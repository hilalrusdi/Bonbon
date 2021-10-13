<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        return view('transaksi.index', [
            'tittle' => 'Transaksi',
            'active' => 'transaksi',
            'image' => 'img/bonbon.jpg',
            'profile' => 'img/user.png',
            'css' => 'css/whyy.css',
            'transaksis' => Transaksi::all()
        ]);
    }

    public function show()
    {
        return view('transaksi.tambah.index', [
            'tittle' => 'Transaksi',
            'active' => 'tambah',
            'image' => 'img/bonbon.jpg',
            'profile' => 'img/user.png',
            'css' => 'css/whyy.css',
            'transaksis' => Transaksi::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'tgl' => 'required',
            'no_hp' => 'required',
            'status' => 'required',
            'ket' => 'required',
            'total' => 'required',

            
        ]);

        Transaksi::create($validatedData);
        $request->session()->flash('success', 'Berhasil menambah data!');
        return redirect('/transaksi');
        
    }
}
