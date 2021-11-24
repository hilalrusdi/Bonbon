<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Tanaman;
use App\Models\User;
use App\Models\Supplier;
use DB;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('transaksi.index', [
            "tittle" => "Transaksi",
            "active" => "transaksi",
            "image" => "img/bonbon.jpg",
            "profile" =>  'img/user_menu.png',
            "css" => "css/whyy.css",
            "transaksis" => Transaksi::filter(request(['search']))->paginate(10),
            "tanamans" => Tanaman::filter(request(['search']))->paginate(10),
            "suppliers" => Supplier::filter(request(['search']))->paginate(10),
            "users" => User::filter(request(['search']))->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transaksi.create', [
            "tittle" => "Transaksi",
            "active" => "tambah",
            "image" => "img/bonbon.jpg",
            "profile" => "img/user_menu.png",
            "css" => "css/whyy.css",
            "tanamans" => Tanaman::all(),
            "suppliers" => Supplier::all(),
            "users" => User::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'tanaman_id' => 'required',
            'supplier_id' => 'required',
            'tgl' => 'required',
            'no_hp' => 'required',
            'status' => 'required',
            'ket' => 'required',
            'total' => 'required',
            
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        
        Transaksi::create($validatedData);
        $request->session()->flash('success', 'Berhasil menambah data!');
        return redirect('/transaksi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('transaksi.detail', [
            "tittle" => "Transaksi",
            "active" => "tambah",
            "image" => "img/bonbon.jpg",
            "profile" => "img/user_menu.png",
            "css" => "css/whyy.css",
            'transaksis' => Transaksi::find($id),
            'tanamans' => Tanaman::all(),
            'suppliers' => Supplier::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('transaksi.edit', [
            "tittle" => "Transaksi",
            "active" => "tambah",
            "image" => "img/bonbon.jpg",
            "profile" => "img/user_menu.png",
            "css" => "css/whyy.css",
            'transaksis' => Transaksi::find($id),
            'tanamans' => Tanaman::all(),
            'suppliers' => Supplier::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        $rules = [
            'nama' => 'required',
            'tanaman_id' => 'required',
            'supplier_id' => 'required',
            'tgl' => 'required',
            'no_hp' => 'required',
            'status' => 'required',
            'ket' => 'required',
            'total' => 'required',
        ];

        $validatedData['user_id'] = auth()->user()->id;

        $validatedData = $request->validate($rules);
        
        Transaksi::where('id', $transaksi->id)
                ->update($validatedData);        

        return redirect('/transaksi')->with('success', 'Berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('transaksis')->where('id', $id)->delete();
        return redirect('transaksi')->with('delete', 'Data berhasil dihapus!!');
        
    }
}
