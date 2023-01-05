@extends('layouts.layoutAdmin')

@section('container')

<h1>Ini adalah halaman alat</h1>

@if (session()->has('deleteSuccess'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('deleteSuccess') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    
<div class="container">

    <div class="row">
        <div class="col-3">Filter</div>
        <div class="col-3">
            <label class="form-label">Provinsi</label>   
            <select class="form-select" aria-label="Default select example" name="kelurahan" id="kelurahan">
                <option value="Telkom University">Jawa Barat</option>
            </select>
        </div>
        <div class="col-3">
            <label class="form-label">Kecamatan</label>   
            <select class="form-select" aria-label="Default select example" name="kelurahan" id="kelurahan">
                <option value="Telkom University">Bandung</option>
                <option value="Telkom University">Bogor</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Filter</button>
    </div>

    <div class="row mt-5">
        @foreach ($alats as $alat)
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/'.$alat->gambar) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $alat->nama_produk }}</h5>
                    <p class="card-text">{{ $alat->deskripsi }}</p>
                    <p class="card-text">Stock: {{ $alat->stock }}</p>
                    <p class="card-text">Provinsi: {{ $alat->provinsi }}</p>
                    <p class="card-text">Kota: {{ $alat->kota }}</p>
                    <a href="#" class="btn btn-primary">Detail</a>
                    <form action="{{ url('/hapusProduk/'.$alat->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection