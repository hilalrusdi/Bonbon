<?php

namespace App\Http\Controllers;

use App\Models\Quality;
use App\Models\tanaman;
use Illuminate\Http\Request;
use DB;

class QualityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('quality.index', [
            'tittle' => 'Quality',
            'active' => 'quality',
            'image' => 'img/bonbon.jpg',
            'profile' =>  'img/user_menu.png',
            'css' => 'css/whyy.css',
            'qualities' => Quality::filter(request(['search']))->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quality.create', [
            'tittle' => 'Quality',
            'active' => 'quality',
            'image' => 'img/bonbon.jpg',
            'profile' =>  'img/user_menu.png',
            'css' => 'css/whyy.css',
            'tanamans' => Tanaman::all(),
            'qualities' => Quality::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Tanaman $tanaman)
    {
        $route = Tanaman::find($request->tanaman_id);

        $validatedData = $request->validate([
            'bobot1' => 'required',
            'bobot2' => 'required',
            'bobot3' => 'required',
            'bobot4' => 'required',
            'bobot5' => 'required',
            'tanaman_id' => 'required',
        ]);

        $validatedData['total'] = 
        ($validatedData['bobot1']/5)*$route->limit1 + 
        ($validatedData['bobot2']/5)*$route->limit2 + 
        ($validatedData['bobot3']/5)*$route->limit3 - 
        ($validatedData['bobot4']/5)*$route->limit4 -
        ($validatedData['bobot5']/5)*$route->limit5;

        Quality::create($validatedData);


        if ($validatedData['total'] > $route->lolos) {
            $request->session()->flash('success', 'Data Berhasil Lolos');
        } elseif ($validatedData['total'] <= $route->lolos) {
            $request->session()->flash('success', 'Data Tidak Lolos');
        }
        

        // if ($validatedData['total'] > $tanaman->lolos ) {
        //     $request->session()->flash('success', 'Data Berhasil Lolos');
        // } elseif ($validatedData['total'] <= $tanaman->lolos ) {
        //     $request->session()->flash('success', 'Data Tidak Lolos');
        // }
        
        return redirect('/quality');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quality  $quality
     * @return \Illuminate\Http\Response
     */
    public function show(Quality $quality)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quality  $quality
     * @return \Illuminate\Http\Response
     */
    public function edit(Quality $quality)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quality  $quality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quality $quality)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quality  $quality
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('qualities')->where('id', $id)->delete();
        return redirect('quality')->with('delete', 'History berhasil dihapus!!');
    }

    public function pembobotan(Quality $quality)
    {
        $validatedData = $request->validate([
            'bobot1' => 'required',
            'bobot2' => 'required',
            'bobot3' => 'required',
            'bobot4' => 'required',
            'bobot5' => 'required',
            'tanaman_id' => 'required',
        ]);

        $validatedData['total'] = ($validatedData['bobot1']/5)*50/100 + 
        ($validatedData['bobot2']/5)*10/100 + 
        ($validatedData['bobot3']/5)*15/100 + 
        ($validatedData['bobot4']/5)*5/100 +
        ($validatedData['bobot5']/5)*20/100;

        Quality::create($validatedData);
        $request->session()->flash('success', 'Berhasil menambah data!');
        return redirect('/quality');
    }
}
