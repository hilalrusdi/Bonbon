<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanaman;
use DB;

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
            'tanamen' => Tanaman::filter(request(['search']))->paginate(10)
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

    public function delete($id)
    {
        DB::table('tanamen')->where('id', $id)->delete();
        return redirect('tanaman')->with('delete', 'Data berhasil dihapus!!');
        
    }

    public function edit($id)
    {
        return view('tanaman.edit.index', [
            "tittle" => "Tanaman",
            "active" => "edit",
            "image" => "img/bonbon.jpg",
            "profile" => "user.png",
            "css" => "css/whyy.css",
            'tanamen' => Tanaman::find($id)
        ]);

        

    }

    public function update(Request $request)
    {
        $rules = [
            'nama' => 'required',
            'spesies' => 'required|unique:tanamen',
            'asal' => 'required',
            'alamat' => 'required',
        ];

        $validatedData = $request->validate($rules);
        

        Tanaman::updateOrCreate($validatedData);


        $request->session()->flash('success', 'Berhasil mengubah data!');
        return redirect('/tanaman');
    }
}
