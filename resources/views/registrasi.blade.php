@extends('layouts.layout')
@section('container')

<main>

    <section class="volunteer-section section-padding" id="section_4">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-12">
                    <h2 class="text-white mb-4">Registrasi</h2>
                    
                    <form class="custom-form volunteer-form mb-5 mb-lg-0" action="/registerPost" method="post" enctype="multipart/form-data">
                        @csrf
                        <h3 class="mb-4">Buat akun Anda</h3>

                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control @error('nama_lengkap') is-invalid @enderror" placeholder="Nama Lengkap" required>
                                @error('nama_lengkap')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-lg-6 col-12">
                                <input type="text" name="nama_kelompok" id="nama_kelompok" class="form-control @error('nama_kelompok') is-invalid @enderror" placeholder="Nama Kelompok Tani" required>
                                @error('nama_kelompok')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-lg-6 col-12">
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            

                            <div class="col-lg-6 col-12">
                                <input type="text" name="no_hp" id="no_hp" class="form-control @error('no_hp') is-invalid @enderror" placeholder="Nomor HP" required>
                                
                                @error('no_hp')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-lg-6 col-12"> 
                                <label class="input-group-text">Provinsi</label>   
                                <select class="form-select" aria-label="Default select example" name="provinsi" id="provinsi">
                                    <option value="Jawa barat">Jawa barat</option>
                                </select>
                                {{-- <input type="text" name="kota" id="kota" class="form-control" placeholder="Kota" required> --}}
                            </div>

                            <div class="col-lg-6 col-12"> 
                                <label class="input-group-text">Kota</label>   
                                <select class="form-select" aria-label="Default select example" name="kota" id="kota">
                                    <option value="Bandung">Bandung</option>
                                </select>
                                {{-- <input type="text" name="kota" id="kota" class="form-control" placeholder="Kota" required> --}}
                            </div>

                            <div class="col-lg-6 col-12 mt-3">
                                <label class="input-group-text">Kecamatan</label>   
                                <select class="form-select" aria-label="Default select example" name="kecamatan" id="kecamatan">
                                    <option value="Bojongsoang">Bojongsoang</option>
                                </select>
                            </div>

                            <div class="col-lg-6 col-12 mt-3">
                                <label class="input-group-text">Kelurahan</label>   
                                <select class="form-select" aria-label="Default select example" name="kelurahan" id="kelurahan">
                                    <option value="Telkom University">Telkom</option>
                                </select>
                            </div>

                            <div class="col-lg-12 col-12 mt-3">
                                <label class="input-group-text">Upload surat keterangan kelompok tani</label>
                                <input type="file" class="form-control" id="foto_surat" name="foto_surat">
                            </div>

                        </div>

                        <textarea name="alamat" rows="3" class="form-control" id="alamat" placeholder="Alamat lengkap"></textarea>

                        <p class="mb-4">Sudah punya akun? Login
                            <a href="{{ '/login' }}">Di sini</a>
                        </p>

                        <button type="submit" class="form-control" name="daftar">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection