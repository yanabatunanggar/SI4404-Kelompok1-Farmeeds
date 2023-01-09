@extends('layouts.layout')

@section('container')

<h1>Ini halaman cart</h1>

@if (session()->has('deleteSuccess'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('deleteSuccess') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Kategori</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>

    
    <form action="/tambahPesanan" method="post">
        @csrf
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <input type="hidden" name="id_cart" value="{{ $product->id }}">
                    <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $product->products->nama_produk }}</td>
                    <td>{{ $product->products->kategori }}</td>
                    <td>
                        {{ $product->jumlah }}
                        {{-- <input type="number" class="form-control" id="jumlah" name="jumlah" min="0" max="{{ $product->products->stock }}" value="{{ $product->jumlah }}"> --}}
                    </td>
                    <td>
                        <a href="{{ url('/deleteCart/'.$product->id) }}" class="btn btn-primary">Hapus</a>
                        {{-- <form action="" method="post">
                            <button type="submit" class="btn btn-primary">Ubah</button>
                        </form> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
        <button type="submit" class="btn btn-primary">Checkout</button>
    </form>
    
</table>


    

@endsection