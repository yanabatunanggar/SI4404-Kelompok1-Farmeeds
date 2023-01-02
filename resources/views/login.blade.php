@extends('layouts.layout')
@section('container')

<main>

    <section class="volunteer-section section-padding" id="section_4">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-12">
                    <h2 class="text-white mb-4">Login</h2>

                    @if (session()->has('registerSuccess'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('registerSuccess') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    
                    @if (session()->has('logoutSuccess'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('logoutSuccess') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form class="custom-form volunteer-form mb-5 mb-lg-0" action="/loginPost" method="post" role="form">
                        @csrf
                        <h3 class="mb-4">Masuk ke akun Anda</h3>

                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <input type="text" name="no_hp" id="no_hp" class="form-control @error('no_hp') is-invalid @enderror" placeholder="Nomor HP" required>
                                
                                @error('no_hp')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-lg-6 col-12">
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                        <p class="mb-4">Belum punya akun? Registrasi
                            <a href="{{ '/register' }}">Di sini</a>
                        </p>

                        <button type="submit" class="form-control" name="login">Masuk</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection