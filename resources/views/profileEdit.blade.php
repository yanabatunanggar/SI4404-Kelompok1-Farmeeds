@extends('layouts.layout')

@section('container')

{{-- <h1>Ini halaman profil: {{ $users->provinces }}</h1> --}}
@foreach ($users as $user)
    <h1>Ini halaman profil: {{ $user->nama_lengkap }}</h1>

    <form class="custom-form volunteer-form mb-5 mb-lg-0" action="/updateProfile/{{ $user->id }}" method="post" enctype="multipart/form-data">
        @csrf
        <h3 class="mb-4">Buat akun Anda</h3>

        <div class="row">
            <div class="col-lg-6 col-12">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control @error('nama_lengkap') is-invalid @enderror" placeholder="Nama Lengkap" value="{{ $user->nama_lengkap }}" required>
                @error('nama_lengkap')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="col-lg-6 col-12">
                <label for="nama_lengkap">Nama Kelompok Tani</label>
                <input type="text" name="nama_kelompok" id="nama_kelompok" class="form-control @error('nama_kelompok') is-invalid @enderror" placeholder="Nama Kelompok Tani" value="{{ $user->nama_kelompok }}" required>
                @error('nama_kelompok')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>            

            <div class="col-lg-6 col-12">
                <label for="nama_lengkap">Nomor HP</label>
                <input type="text" name="no_hp" id="no_hp" class="form-control @error('no_hp') is-invalid @enderror" placeholder="Nomor HP" value="{{ $user->no_hp }}" required>
                
                @error('no_hp')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            {{-- <div class="col-lg-6 col-12">
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                @error('password')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div> --}}

            <div class="col-lg-12 col-12 mt-3">
                <label class="input-group-text">Upload surat keterangan kelompok tani</label>
                <input type="file" class="form-control" id="foto_surat" name="foto_surat">
            </div>

            <div class="col-lg-12 col-12 mt-3">
                <label class="input-group-text">Alamat</label>
                <textarea name="alamat" rows="3" class="form-control" id="alamat" placeholder="Alamat lengkap">{{ $user->alamat }}</textarea>
            </div>

        </div>

        <button type="submit" class="form-control" name="daftar">Ubah</button>
    </form>
@endforeach

@endsection