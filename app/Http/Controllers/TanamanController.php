<?php

namespace App\Http\Controllers;

use App\Models\Tanaman;
use Illuminate\Http\Request;
use DB;

class TanamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tanaman.index', [
            "tittle" => "Tanaman",
            "active" => "tanaman",
            "image" => "img/bonbon.jpg",
            "profile" =>  'img/user_menu.png',
            "css" => "css/whyy.css",
            "tanamans" => Tanaman::filter(request(['search']))->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tanaman.create', [
            "tittle" => "Tanaman",
            "active" => "tanaman",
            "image" => "img/bonbon.jpg",
            "profile" => "img/user_menu.png",
            "css" => "css/whyy.css",
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
            'spesies' => 'required|unique:tanamen',
            'limit1' => 'required',
            'limit2' => 'required',
            'limit3' => 'required',
            'limit4' => 'required',
            'limit5' => 'required',
            'lolos' => 'required',
            'asal' => 'required',
        ]);

        $cek = $request->limit1 + $request->limit2 + $request->limit3;

        if ($cek == 100) {
            Tanaman::create($validatedData);
            $request->session()->flash('success', $cek);
            return redirect('/tanaman');
        }

        // Tanaman::create($validatedData);
        // $request->session()->flash('success', $cek);
        // return redirect('/tanaman');

        return back()->with('error_cek', 'Bobot Positif harus berjumlah 100');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tanaman  $tanaman
     * @return \Illuminate\Http\Response
     */
    public function show(Tanaman $tanaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tanaman  $tanaman
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('tanaman.edit', [
            "tittle" => "Tanaman",
            "active" => "edit",
            "image" => "img/bonbon.jpg",
            "profile" => "img/user_menu.png",
            "css" => "css/whyy.css",
            'tanamans' => Tanaman::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tanaman  $tanaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tanaman $tanaman)
    {
        $rules = [
            'nama' => 'required',
            'spesies' => 'required|unique|tanamen',
            'asal' => 'required',
        ];

        $validatedData = $request->validate($rules);
        
        Tanaman::where('id', $tanaman->id)
                ->update($validatedData);        

        return redirect('/tanaman')->with('success', 'Berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tanaman  $tanaman
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tanamen')->where('id', $id)->delete();
        return redirect('tanaman')->with('delete', 'Data berhasil dihapus!!');
        
    }
}
