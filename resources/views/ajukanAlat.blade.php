@extends('layouts.layout')

@section('container')

<h1>Ini adalah halaman alat</h1>

@if (session()->has('addCartSuccess'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('addCartSuccess') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    
<div class="container">

    <div class="row">
        <div class="col-3">Filter</div>
        <form action="">
            <div class="col-3">
                <label class="form-label">Provinsi</label>   
                <select class="form-select" aria-label="Default select example" name="provinsi" id="provinsi">
                    <option>Pilih Provinsi...</option>
                    @foreach ($provinces as $provinsi)
                        <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-3">
                <label class="form-label">Kota</label>   
                <select class="form-select" aria-label="Default select example" name="kota" id="kota">
                    
                </select>
            </div>
        
            <button type="submit" class="btn btn-primary">Filter</button>
        </form>
    </div>

    <div class="row mt-5">
        @foreach ($alats as $alat)
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/'.$alat->gambar) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $alat->nama_produk }}</h5>
                        <p class="card-text">{{ $alat->deskripsi }}</p>
                        <p class="card-text">Stock: {{ $alat->stock }}</p>
                        <p class="card-text">Provinsi: {{ $alat->provinces->name }}</p>
                        <p class="card-text">Kota: {{ $alat->regencies->name }}</p>
                        <form action="/addCart" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $alat->id }}">
                            <div class="row">
                                <label class="form-label" for="jumlah">Jumlah: </label>   
                                <input type="number" name="jumlah" id="jumlah" min="0" max="{{ $alat->stock }}" value="0">
                            </div>
                            <button type="submit" class="btn btn-primary" {{ $alat->stock === 0 ? 'disabled' : '' }}>{{ $alat->stock === 0 ? 'Stock Produk Habis' : 'Tambah Ke Keranjang' }}</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<script>
    $(function() {
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        })

        $(function() {
            $('#provinsi').on('change', function(){
                let id_provinsi = $('#provinsi').val();

                $.ajax({
                    type: 'POST',
                    url: "{{route('getkota')}}",
                    data: {id_provinsi:id_provinsi},
                    cache: false,

                    success: function(msg) {
                        $('#kota').html(msg);
                    },
                    error: function(data){
                        console.log('error: ', data);
                    },
                })
            })

            $('#kota').on('change', function(){
                let id_kota = $('#kota').val();

                $.ajax({
                    type: 'POST',
                    url: "{{route('getkecamatan')}}",
                    data: {id_kota:id_kota},
                    cache: false,

                    success: function(msg) {
                        $('#kecamatan').html(msg);
                    },
                    error: function(data){
                        console.log('error: ', data);
                    },
                })
            })

            $('#kecamatan').on('change', function(){
                let id_kecamatan = $('#kecamatan').val();

                $.ajax({
                    type: 'POST',
                    url: "{{route('getkelurahan')}}",
                    data: {id_kecamatan:id_kecamatan},
                    cache: false,

                    success: function(msg) {
                        $('#kelurahan').html(msg);
                    },
                    error: function(data){
                        console.log('error: ', data);
                    },
                })
            })
        })
    })
</script>

@endsection