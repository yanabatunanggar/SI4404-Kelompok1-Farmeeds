@extends('layouts.layout')

@section('title', 'Bibit Tani')
    
@section('content')
    <h1>Halaman Bibit Tani</h1>

    <div class="container">
        @foreach ($listBibit as $bibit)
            <div class="card" style="width: 18rem;">
                <img src="{{ $bibit->gambar }}" class="card-img-top" alt="{{ $bibit->gambar }}">
                <div class="card-body">
                <h5 class="card-title">{{ $bibit->nama_bibit }}</h5>
                <p class="card-text">{{ $bibit->deskripsi }}</p>
                <p class="card-text">{{ $bibit->order }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection