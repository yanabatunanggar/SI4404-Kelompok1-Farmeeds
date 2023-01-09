@extends(auth()->user()->role == 'admin'?'layouts.layoutAdmin':'layouts.layout')

@section('container')

<h1>Halaman Detail pesanan Order ID: {{ $order->id }}</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Nomor</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Jumlah</th>
        </tr>
    </thead>
    <tbody>
        {{-- {{ $order_detail }} --}}
        @foreach ($order_detail as $item)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <th scope="row">{{ $item->products->nama_produk }}</th>
                <td>{{ $item->jumlah }}</td>
            </tr>
        @endforeach
    </tbody>
    
</table>
    
@endsection