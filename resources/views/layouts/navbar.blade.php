<nav class="navbar navbar-expand-lg bg-light shadow-lg">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" class="logo img-fluid" alt="">
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
                    <a class="nav-link click-scroll" href="{{ '/' }}">Home</a>
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
                        <li><a class="dropdown-item" href="news.html">Berita Pertanian</a></li>

                        <li><a class="dropdown-item" href="news-detail.html">Kabar Dinas</a></li>
                    </ul>
                </li>

                <li class="nav-item ms-3">
                    <a class="nav-link" href="pengajuan.html">Pengajuan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ '/login' }}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>