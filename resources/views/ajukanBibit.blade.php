@extends('layouts.layout')
@section('container')

<main>

    <section class="volunteer-section section-padding" id="section_4">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-12">
                    <h2 class="text-white mb-4">Ajukan bibit Anda di sini</h2>
                    
                    @if (session()->has('addCartSuccess'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('addCartSuccess') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

    <div class="row">
        <div class="col-3">
        </div>
        <form action="">
            <div class="col-3">
                <label class="form-label"><b>Provinsi</b></label>   
                <select class="form-select" aria-label="Default select example" name="provinsi" id="provinsi">
                    <option>Pilih Provinsi...</option>
                    @foreach ($provinces as $provinsi)
                        <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="col-3">
                <label class="form-label"><b>Kota</b></label>   
                <select class="form-select" aria-label="Default select example" name="kota" id="kota">
                </select>
            </div>
        
            <br><button type="submit" class="btn btn-primary">Filter</button>
        </form>
    </div>
    
    <section class="section-padding" id="section_3">
        <div class="container">
            <div class="row">
                @foreach ($bibits as $bibit)
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block-wrap">
                        <img src="{{ asset('storage/'.$bibit->gambar) }}" class="card-img-top" alt="...">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">{{ $bibit->nama_produk }}</h5>

                                <p class="card-text">{{ $bibit->deskripsi }}</p>
                                <p class="card-text">Stock: {{ $bibit->stock }}</p>
                                <p class="card-text">Provinsi: {{ $bibit->provinces->name }}</p>
                                <p class="card-text">Kota: {{ $bibit->regencies->name }}</p>
                                <form action="/addCart" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $bibit->id }}">
                                    <div class="row">
                                        <label class="form-label" for="jumlah">Jumlah: </label>   
                                        <input type="number" name="jumlah" id="jumlah" min="0" max="{{ $bibit->stock }}" value="0">
                                    </div>
                                    <button type="submit" class="btn btn-primary" {{ $bibit->stock === 0 ? 'disabled' : '' }}>{{ $bibit->stock === 0 ? 'Stock Produk Habis' : 'Tambah Ke Keranjang' }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

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
 
                </div>
            </div>
        </div>
    </section>
</main>



@endsection