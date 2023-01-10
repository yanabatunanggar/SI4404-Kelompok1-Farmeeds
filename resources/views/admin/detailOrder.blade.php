@extends(auth()->user()->role == 'admin'?'layouts.layoutAdmin':'layouts.layout')

@section('container')

<h4 class="text-center mt-4 mb-4">Halaman Detail pesanan Order ID: {{ $order->id }}</h4>
<div class="container mb-5">
<table class="table table">
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
                <th>{{ $loop->iteration }}</th>
                <th>{{ $item->products->nama_produk }}</th>
                <td>{{ $item->jumlah }}</td>
            </tr>
        @endforeach
    </tbody>
    
</table>
</div>
@endsection