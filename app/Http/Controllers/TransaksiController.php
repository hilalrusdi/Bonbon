<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Supplier;
use App\Models\Tanaman;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        return view('transaksi.index', [
            "tittle" => "Transaksi",
            "active" => "transaksi",
            "image" => "img/bonbon.jpg",
            "profile" =>  'user.png',
            "css" => "css/whyy.css",
            "transaksis" => Transaksi::all(),
            "supplier" => Supplier::all(),
            "tanaman" => Tanaman::all(),
            
        ]);
    }

    public function detail($slug)
    {
        return view('detail', [
            "tittle" => "Detail Transaksi",
            "active" => "detail transaksi",
            "image" => "img/bonbon.jpg",
            "profile" => 'user.png',
            "css" => "css/whyy.css",
            "transaksis" => Transaksi::find($slug),
            "supplier" => Supplier::all(),
            "tanaman" => Tanaman::all(),
            
        ]);
    }

    public function show()
    {
        return view('transaksi.tambah.index', [
            "tittle" => "Transaksi",
            "active" => "tambah",
            "image" => "img/bonbon.jpg",
            "profile" => "user.png",
            "css" => "css/whyy.css",
            "transaksis" => Transaksi::all(),
            "supplier" => Supplier::all(),
            "tanaman" => Tanaman::all(),

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
