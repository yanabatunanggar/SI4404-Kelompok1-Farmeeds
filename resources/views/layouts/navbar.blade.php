<nav class="navbar navbar-expand-lg bg-light shadow-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ '/' }}">
            <img src="{{ asset('/assets/images/logo.png')}}" class="logo img-fluid" alt="">
            <span>
                Farmeeds
                <small>Dipersembahkan oleh Dinas Pertanian</small>
            </span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ '/' }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_2">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_3">Testimoni</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link click-scroll dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Berita</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ '/news' }}">Berita Pertanian</a></li>

                        <li><a class="dropdown-item" href="{{ '/news-detail' }}">Kabar Dinas</a></li>
                    </ul>
                </li>

                @auth
                    <li class="nav-item ms-3">
                        <a class="nav-link" href="{{ '/pengajuan' }}">Pengajuan</a>
                    </li>

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Halo, {{ auth()->user()->nama_lengkap }}</a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ '/profile/'.auth()->user()->id }}">Profile</a></li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ '/login' }}">Login</a>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>

<header class="site-header">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-8 col-12 d-flex flex-wrap">
                <p class="d-flex me-4 mb-0">
                    <i class="bi-geo-alt me-2"></i>
                    Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257
                </p>

                <p class="d-flex mb-0">
                    <i class="bi-envelope me-2"></i>

                    <a href="mailto:info@company.com">
                        telkomuniversity@gmail.com
                    </a>
                </p>
            </div>

            <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                <ul class="social-icon">
                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link bi-twitter"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link bi-facebook"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link bi-instagram"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link bi-youtube"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link bi-whatsapp"></a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</header>