<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index', [
            'tittle' => 'User',
            'active' => 'user',
            'image' => 'img/bonbon.jpg',
            'profile' =>  'img/user_menu.png',
            'css' => 'css/whyy.css',
            'users' => User::filter(request(['search']))->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create', [
            'tittle' => 'User',
            'active' => 'user',
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
            'name' => 'required|max:255',
            'username' => 'required|unique:users|max:16',
            'born' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'tgl_kerja' => 'required',
            'password' => 'required|min:5|max:25',
            
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        $request->session()->flash('success', 'Berhasil menambah akun!');
        return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('user.edit', [
            "tittle" => "Karyawan",
            "active" => "edit",
            "image" => "img/bonbon.jpg",
            "profile" => "user.png",
            "css" => "css/whyy.css",
            'users' => User::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
            'born' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'tgl_kerja' => 'required',
            'password' => 'required|min:5|max:25',
        ];

        if($request->username != $user->username){
            $rules['username'] = 'required|unique:users|max:16';
        }

        $validatedData = $request->validate($rules);
        
        User::where('id', $user->id)
                ->update($validatedData);        

        return redirect('/user')->with('success', 'Berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
