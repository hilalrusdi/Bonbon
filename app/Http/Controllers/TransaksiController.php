<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Supplier;
use App\Models\User;
use App\Models\Tanaman;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Sluggable;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use DB;

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
            "transaksis" => Transaksi::filter(request(['search']))->paginate(10),
            "supplier" => Supplier::all(),
            "tanaman" => Tanaman::all(),
            
        ]);
    }

    

    public function detail($id)
    {
        return view('detail', [
            "tittle" => "Detail Transaksi",
            "active" => "detail transaksi",
            "image" => "img/bonbon.jpg",
            "profile" => 'user.png',
            "css" => "css/whyy.css",
            "transaksis" => Transaksi::find($id),
            "suppliers" => Supplier::all(),
            "tanamen" => Tanaman::all(),
            
        ]);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'supplier_id' => 'required',
            'tanaman_id' => 'required',
            'nama' => 'required',
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

        $transaksis->slug = SlugService::createSlug(Transaksi::class, 'slug', $request->nama); 
        // $transaksis->supplier_id = $validatedData['supplier_id'];
        // $transaksis->tanaman_id = $validatedData['tanaman_id'];
        // $transaksis->user_id = $validatedData['user_id'];
        
    }

    public function create()
    {
        return view('transaksi.tambah.index', [
            "tittle" => "Transaksi",
            "active" => "tambah",
            "image" => "img/bonbon.jpg",
            "profile" => "user.png",
            "css" => "css/whyy.css",
            'suppliers' => Supplier::all(),
            'tanamen' => Tanaman::all(),
        ]);
    }

    public function checkSlug(Request $request){
        $transaksis->slug = SlugService::createSlug(Transaksi::class, 'slug', $request->nama);
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
            "suppliers" => Supplier::all(),
            "tanamen" => Tanaman::all(),
            "user" => User::all(),
        ]);
    }

    public function delete($id)
    {
        DB::table('transaksis')->where('id', $id)->delete();
        return redirect('transaksi')->with('delete', 'Data berhasil dihapus!!');
        
    }

    public function edit($id)
    {
        return view('transaksi.edit.index', [
            "tittle" => "Transaksi",
            "active" => "tambah",
            "image" => "img/bonbon.jpg",
            "profile" => "user.png",
            "css" => "css/whyy.css",
            'suppliers' => Supplier::all(),
            'tanamen' => Tanaman::all(),
            'transaksis' => Transaksi::find($id)
        ]);
    }

    public function update(Request $request, Transaksi $transaksis)
    {
        $rules = [
            'supplier_id' => 'required',
            'tanaman_id' => 'required',
            'nama' => 'required',
            'tgl' => 'required',
            'no_hp' => 'required',
            'status' => 'required',
            'ket' => 'required',
            'total' => 'required',
        ];

        // if($request->slug != $transaksi->slug){
        //     $rules['slug'] = 'required|unique:transaksis';
        // }

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;
        
        

        Transaksi::updateOrCreate($validatedData);


        $request->session()->flash('success', 'Berhasil mengubah data!');
        return redirect('/transaksi');
    }
}
