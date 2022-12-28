@extends('layouts.layout')

@section('title', 'Alat Tani')
    
@section('content')
    <h1>Halaman Alat Tani</h1>

    <div class="container">
        @foreach ($listAlat as $alat)
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">no</th>
                    <th scope="col">gambar</th>
                    <th scope="col">nama</th>
                    <th scope="col">deskripsi</th>
                    <th scope="col">order</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="col">{{ $loop->iteration }}</th>
                    <th scope="col">{{ $alat->gambar}}</th>
                    <th scope="col">{{ $alat->nama_alat}}</th>
                    <th scope="col">{{ $alat->deskripsi}}</th>
                    <th scope="col">{{ $alat->order}}</th>
                </tr>
                </tbody>
            </table>
            {{-- <div class="card" style="width: 18rem;">
                <img src="{{ $alat->gambar }}" class="card-img-top" alt="{{ $alat->gambar }}">
                <div class="card-body">
                <h5 class="card-title">{{ $alat->nama_alat }}</h5>
                <p class="card-text">{{ $alat->deskripsi }}</p>
                <p class="card-text">{{ $alat->order }}</p>
                </div>
            </div> --}}
        @endforeach

        
    </div>
@endsection