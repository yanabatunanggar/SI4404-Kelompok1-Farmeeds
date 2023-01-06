@extends('layouts.layoutAdmin')

@section('container')

<h1>Ini adalah halaman bibit</h1>

@if (session()->has('deleteSuccess'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('deleteSuccess') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="container row">
    <div class="col-3">Filter</div>

    <form action="/filterBibit", method="get">
        @csrf
        <div class="col-3">
            <label class="form-label">Provinsi</label>   
            <select class="form-select" aria-label="Default select example" name="provinsi" id="provinsi">
                @foreach ($provinces as $province)
                    <option value="{{ $province->provinsi }}">{{ $province->provinsi }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-3">
            <label class="form-label">Kecamatan</label>   
            <select class="form-select" aria-label="Default select example" name="kota" id="kota">
                @foreach ($cities as $city)
                    <option value="{{ $city->kota }}">{{ $city->kota }}</option>
                @endforeach
            </select>
        </div>
    
        <button type="submit" class="btn btn-primary" name="filter">Filter</button>
    </form>

</div>
    
<div class="container mt-5">
    <div class="row">
        @foreach ($bibits as $bibit)
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/'.$bibit->gambar) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $bibit->nama_produk }}</h5>
                    <p class="card-text">{{ $bibit->deskripsi }}</p>
                    <p class="card-text">Stock: {{ $bibit->stock }}</p>
                    <p class="card-text">Provinsi: {{ $bibit->provinsi }}</p>
                    <p class="card-text">Kota: {{ $bibit->kota }}</p>
                    <a href="{{ url('/editBibit/'.$bibit->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ url('/hapusProduk/'.$bibit->id) }}" method="post">
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