@extends('layouts.layout')

@section('title', 'Status')
    
@section('content')
    <h1>Halaman Status Order</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">no</th>
            <th scope="col">nama lengkap</th>
            <th scope="col">nama alat</th>
            <th scope="col">nama bibit</th>
            <th scope="col">status</th>
            <th scope="col">deskripsi</th>
            <th scope="col">order</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($listOrder as $order)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>
                        @foreach ($order->user as $user)
                            {{ $user->name }}
                        @endforeach
                    </td>
                    <td>
                        @foreach ($order->alat as $alat)
                            {{ $alat->nama_alat }}
                        @endforeach
                    </td>
                    <td>
                        @foreach ($order->bibit as $bibit)
                            {{ $bibit->nama_bibit }}
                        @endforeach
                    </td>
                    <td>
                        {{ $order->status }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection