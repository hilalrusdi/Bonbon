<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use DB;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('supplier.index', [
            'tittle' => 'Supplier',
            'active' => 'supplier',
            'image' => 'img/bonbon.jpg',
            'profile' =>  'img/user_menu.png',
            'css' => 'css/whyy.css',
            'suppliers' => Supplier::filter(request(['search']))->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.create', [
            'tittle' => 'Supplier',
            'active' => 'tambah',
            'image' => 'img/bonbon.jpg',
            'profile' => 'img/user_menu.png',
            'css' => 'css/whyy.css',
            'suppliers' => Supplier::all()
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
            'company' => 'required',
            'name' => 'required|max:25',
            'no_hp' => 'required',
            'alamat' => 'required',
            'tgl_join' => 'required',

            
        ]);

        Supplier::create($validatedData);
        $request->session()->flash('success', 'Berhasil menambah data!');
        return redirect('/supplier');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('supplier.edit', [
            "tittle" => "Supplier",
            "active" => "edit",
            "image" => "img/bonbon.jpg",
            "profile" => "img/user_menu.png",
            "css" => "css/whyy.css",
            'suppliers' => Supplier::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $rules = [
            'company' => 'required',
            'name' => 'required|max:25',
            'no_hp' => 'required',
            'alamat' => 'required',
            'tgl_join' => 'required',
        ];


        $validatedData = $request->validate($rules);
        
        Supplier::where('id', $supplier->id)
                ->update($validatedData);        

        return redirect('/supplier')->with('success', 'Berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('suppliers')->where('id', $id)->delete();
        return redirect('supplier')->with('delete', 'Data berhasil dihapus!!');
        
    }
}
