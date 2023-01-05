@extends('layouts.layoutAdmin')

@section('container')

<h1>Halaman tambah bibit dan alat</h1>

@if (session()->has('addSuccess'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('addSuccess') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="container">
    <form action="/simpanProduk" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="nama_produk" class="form-label">Nama Produk</label>
          <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name="nama_produk">

        @error('nama_produk')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <select class="form-select" aria-label="Default select example" name="kategori">
                <option value="bibit">Bibit</option>
                <option value="alat">Alat</option>
            </select>  
        </div>

        <div class="mb-3">
          <label for="stock" class="form-label">Stock</label>
          <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" min="0">

            @error('stock')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="row mb-3">
            <div class="col-lg-6 col-12"> 
                <label class="form-label">Provinsi</label>   
                <select class="form-select" aria-label="Default select example" name="provinsi" id="provinsi">
                    <option value="Jawa barat">Jawa barat</option>
                </select>
            </div>
    
            <div class="col-lg-6 col-12"> 
                <label class="form-label">Kota</label>   
                <select class="form-select" aria-label="Default select example" name="kota" id="kota">
                    <option value="Bandung">Bandung</option>
                    <option value="Bogor">Bogor</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control @error('stock') is-invalid @enderror" id="deskripsi" rows="3" name="deskripsi"></textarea>

            @error('deskripsi')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar Produk</label>
            <input class="form-control" type="file" id="gambar" name="gambar">
        </div>

        <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
    </form>
</div>
    
@endsection