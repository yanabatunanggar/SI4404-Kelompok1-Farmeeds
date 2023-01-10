@extends('layouts.layoutAdmin')

@section('container')

<h3 class="text-center mt-5 mb-5">Kelola alat yang tersedia</h3>

@if (session()->has('deleteSuccess'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('deleteSuccess') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session()->has('editSuccess'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('editSuccess') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    
<div class="container">

    <div class="row">
        <div class="col-3 mb-2">
            <h5>Filter</h5>
        </div>
        <form action="">
            <div class="row">
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
            </div>
            <button type="submit" class="btn btn-primary mt-3">Filter</button>
        </form>
    </div>

    <div class="row mt-3">
        @foreach ($alats as $alat)
            <div class="col-3 mt-5 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/'.$alat->gambar) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $alat->nama_produk }}</h5>
                    <p class="card-text">{{ $alat->deskripsi }}</p>
                    <p class="card-text">Stock: {{ $alat->stock }}</p>
                    <p class="card-text">Provinsi: {{ $alat->provinces->name }}</p>
                    <p class="card-text">Kota: {{ $alat->regencies->name }}</p>
                    <a href="{{ url('/admin/editAlat/'.$alat->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ url('/admin/hapusProduk/'.$alat->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
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
        })
    })
</script>

@endsection