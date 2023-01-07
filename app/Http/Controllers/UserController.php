<?php

namespace App\Http\Controllers;

use App\Models\Complain;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function userView() {
        return view('index');
    }

    public function adminView() {
        return view('admin/home');
    }

    // public function adminView() {
    //     return view('index');
    // }

    public function loginView() {
        return view('login');
    }

    public function loginUser(Request $request) {
        $credentials = $request->validate([
            'no_hp' => 'required|string',
            'password' => 'required|min:5|max:8',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/ajukan-alat');
        }

        return back()->with('loginError', 'Login gagal!');
    }

    public function registerView() {
        return view('registrasi');
    }

    public function registerUser(Request $request) {
        $img = Storage::disk('public')->put('/fotoSurat', $request->file('foto_surat'));

        $validatedData = $request->validate([
            'nama_lengkap' => 'required',
            'nama_kelompok' => 'required',
            'no_hp' => 'required|min:11|max:13|unique:users',
            'provinsi' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'password' => 'required|min:5|max:8',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['foto_surat'] = $img;

        User::create($validatedData);

        return redirect('/login')->with('registerSuccess', 'Registrasi Berhasil!');
    }

    public function logout(Request $request) {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login')->with('logoutSuccess', 'Logout Berhasil!');
    }

    public function showNews() {
        return view('news');
    }

    public function showNewsDetail() {
        return view('news-detail');
    }

    public function addKeluhan(Request $request) {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required',
            'no_hp' => 'required',
            'provinsi' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'keluhan' => 'required',
        ]);

        Complain::create($validatedData);

        return redirect()->back()->with('complainSuccess', 'Pesan Anda Berhasil Ditambahkan');
    }

}
