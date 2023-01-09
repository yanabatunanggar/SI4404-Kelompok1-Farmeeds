@extends('layouts.layout')

@section('container')

<h1>Halaman status User</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Order ID</th>
            <th scope="col">Tanggal Pengajuan</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
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
    
@endsection