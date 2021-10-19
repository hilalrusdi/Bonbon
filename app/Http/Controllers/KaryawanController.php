<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class KaryawanController extends Controller
{
    public function index()
    {

        return view('karyawan.index', [
            'tittle' => 'Karyawan',
            'active' => 'karyawan',
            'image' => 'img/bonbon.jpg',
            'profile' =>  'user.png',
            'css' => 'css/whyy.css',
            'users' => User::filter(request(['search']))->paginate(10)
        ]);
    }

    public function delete($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('karyawan')->with('delete', 'Data berhasil dihapus!!');
        
    }

    public function edit($id)
    {
        return view('karyawan.edit.index', [
            "tittle" => "Karyawan",
            "active" => "edit",
            "image" => "img/bonbon.jpg",
            "profile" => "user.png",
            "css" => "css/whyy.css",
            'users' => User::find($id)
        ]);

        

    }
}
