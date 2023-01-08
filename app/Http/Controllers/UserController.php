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


use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

class UserController extends Controller
{
    public function userView() {
        $provinces = Province::all();

        return view('index', compact('provinces'));
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
            return redirect()->intended('/pengajuan');
        }

        return back()->with('loginError', 'Login gagal!');
    }

    public function registerView() {
        // Get semua data
        $provinces = Province::all();

        return view('registrasi', compact('provinces'));
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
            'kota' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'keluhan' => 'required',
        ]);

        Complain::create($validatedData);

        return redirect()->back()->with('complainSuccess', 'Pesan Anda Berhasil Ditambahkan');
    }

    public function profileViewDetail(Request $request) {
        $id = $request->id;
        
        return view('profile', [
            'users' => User::where('id', $id)->with(['provinces', 'regencies', 'districts', 'villages'])->get()
        ]);
    }

    public function editProfile(Request $request) {
        $id = $request->id;
        
        return view('profileEdit', [
            'users' => User::where('id', $id)->with(['provinces', 'regencies', 'districts', 'villages'])->get()
        ]);
    }

    public function updateProfile(Request $request) {
        $id = $request->id;
        $data = $request->all();

        $user = User::find($id);

        if (( $request->hasFile('foto_surat') )) {
            $img = Storage::disk('public')->put('/fotoSurat', $request->file('foto_surat'));
            $user->foto_surat = $img;
        }

        $user->nama_lengkap = $data['nama_lengkap'];
        $user->nama_kelompok = $data['nama_kelompok'];
        $user->no_hp = $data['no_hp'];
        $user->alamat = $data['alamat'];

        $user->save();

        return redirect()->to('/profile/'.$id)->with('editSuccess', 'Profil Berhasil Diubah');
    }
}
