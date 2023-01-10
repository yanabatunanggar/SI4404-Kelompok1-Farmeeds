@extends('layouts.layoutAdmin')

@section('container')
<div class="container mt-5 mb-5">
<h4 class="text-center mb-4">Kelola status ajuan</h4>

@if (session()->has('updateSuccess'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('updateSuccess') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<table class="table">
    <thead>
        <tr>
            <th scope="col">Order ID</th>
            <th scope="col">Nama Kelompok Petani</th>
            <th scope="col">Tanggal Pengajuan</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
            <th scope="col">Pilih Status</th>
            <th scope="col">Aksi Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
            <tr>
                <th scope="row">{{ $order->id }}</th>
                <td>{{ $order->users->nama_kelompok }}</td>
                <td>{{ $order->created_at->format('l, d F Y') }}</td>
                <td>{{ $order->status }}</td>
                <td>
                    <a href="{{route('detailOrder',['id' => $order->id])}}" class="btn btn-primary">Detail</a>
                </td>
                <form action="{{ route('ubahStatus', ['id' => $order->id]) }}" method="post">
                    @csrf
                    <td>
                        <select class="form-select" aria-label="Default select example" name="status">
                            <option selected>Dikirim</option>
                            <option selected>Dibatalkan</option>
                        </select>
                    </td>
                    <td>
                        <button class="btn btn-primary" type="submit">Ubah Status</button>
                    </td>
                </form>
            </tr>
        @endforeach
    </tbody>
    
</table>
</div>

@endsection