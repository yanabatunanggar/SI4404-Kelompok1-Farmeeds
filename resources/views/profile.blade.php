@extends('layouts.layout')

@section('container')

@if (session()->has('editSuccess'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('editSuccess') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

{{-- <h1>Ini halaman profil: {{ $users->provinces }}</h1> --}}
@foreach ($users as $user)
    <h1>Ini halaman profil: {{ $user->nama_lengkap }}</h1>

    <div class="row">
        <p>Nama Lengkap: {{ $user->nama_lengkap }}</p>
        <p>Nama Kelompok Tani: {{ $user->nama_kelompok }}</p>
        <p>Nomor HP: {{ $user->no_hp }}</p>
        <p>Alamat: {{ $user->alamat }}</p>
        <p>Provinsi: {{$user->provinces->name}} </p>
        <p>Kota: {{$user->regencies->name}} </p>
        <p>Kecamatan: {{$user->districts->name}} </p>
        <p>Kelurahan: {{$user->villages->name}} </p>
        <p>Foto Surat: <img src="{{ asset('storage/'.$user->foto_surat) }}" width="200px" height="200px" alt=""></p>
        <a href="{{'/editProfile/'.$user->id}}" class="btn btn-primary">Ubah Profile</a>
    </div>
@endforeach

@endsection