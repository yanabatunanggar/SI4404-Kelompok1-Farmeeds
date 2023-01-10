@extends('layouts.layout')

@section('container')

<h4 class="text-center mt-4 mb-4">Lihat Status Pengajuanmu di sini</h4>
@if (session()->has('addSuccess'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('addSuccess') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="container mb-5">

<table class="table">
    <thead>
        <tr>
            <th scope="col">Order ID</th>
            <th scope="col">Tanggal Pengajuan</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
            <tr>
                <th scope="row">{{ $order->id }}</th>
                <td>{{ $order->created_at->format('l, d F Y') }}</td>
                <td>{{ $order->status }}</td>
                <td>
                    <a href="{{route('detailOrder.user',['id' => $order->id])}}" class="btn btn-primary">Detail</a>
                </td>
            </tr>
        @endforeach
    </tbody>
    
</table>
</div>

@endsection