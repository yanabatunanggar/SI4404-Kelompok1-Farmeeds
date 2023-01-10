@extends('layouts.layout')

@section('container')

@if (session()->has('editSuccess'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('editSuccess') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="container">

{{-- <h1>Ini halaman profil: {{ $users->provinces }}</h1> --}}
@foreach ($users as $user)
    <h4 class="mb-4 mt-4">Halo, {{ $user->nama_lengkap }}</h4>

    <div class ="row">
        <div class="col-6">
            <p class="input-group-text">Nama Lengkap: {{ $user->nama_lengkap }}</p>
            <p class="input-group-text">Nama Kelompok Tani: {{ $user->nama_kelompok }}</p>
            <p class="input-group-text">Nomor HP: {{ $user->no_hp }}</p>
            <p class="input-group-text">Alamat: {{ $user->alamat }}</p>
            <p class="input-group-text">Provinsi: {{$user->provinces->name}} </p>
            <p class="input-group-text">Kota: {{$user->regencies->name}} </p>
            <p class="input-group-text">Kecamatan: {{$user->districts->name}} </p>
            <p class="input-group-text">Kelurahan: {{$user->villages->name}} </p>
        </div>
        <div class="col-6">
            <h5> Foto Surat</h5>
            <img src="{{ asset('storage/'.$user->foto_surat) }}" alt="" width="400px" height="250px">
        </div>
        <a href="{{'/editProfile/'.$user->id}}" class="btn btn-primary">Ubah Profile</a>
    </div>
 
@endforeach
</div>

@endsection