@extends('layouts.layout')

@section('container')

@if (session()->has('addSuccess'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('addSuccess') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<h1>Ini halaman order</h1>
    
@endsection