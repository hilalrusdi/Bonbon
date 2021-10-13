<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('registration.index', [
            'tittle' => 'Registration',
            'active' => 'registration',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'nik' => 'required|unique:users|max:16',
            'born' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'tgl_kerja' => 'required',
            'password' => 'required|min:5|max:25',
            
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        $request->session()->flash('success', 'Berhasil menambah akun!');
        return redirect('/karyawan');
        
    }
}

