<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Supplier;
use DB;

class SupplierController extends Controller
{
    public function index()
    {
        
        return view('supplier.index', [
            'tittle' => 'Supplier',
            'active' => 'supplier',
            'image' => 'img/bonbon.jpg',
            'profile' =>  'user.png',
            'css' => 'css/whyy.css',
            'suppliers' => Supplier::filter(request(['search']))->paginate(10)
        ]);
    }

    public function show()
    {
        return view('supplier.tambah.index', [
            'tittle' => 'Supplier',
            'active' => 'tambah',
            'image' => 'img/bonbon.jpg',
            'profile' => 'user.png',
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

    public function delete($id)
    {
        DB::table('suppliers')->where('id', $id)->delete();
        return redirect('supplier')->with('delete', 'Data berhasil dihapus!!');
        
    }

    public function edit($id)
    {
        return view('supplier.edit.index', [
            "tittle" => "Supplier",
            "active" => "edit",
            "image" => "img/bonbon.jpg",
            "profile" => "user.png",
            "css" => "css/whyy.css",
            'suppliers' => Supplier::find($id)
        ]);

        

    }
}
