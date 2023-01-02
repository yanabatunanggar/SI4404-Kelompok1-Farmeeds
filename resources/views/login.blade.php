@extends('layouts.layout')
@section('container')

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
                        dinaspertanian@jabar.com
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

<main>

    <section class="volunteer-section section-padding" id="section_4">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-12">
                    <h2 class="text-white mb-4">Login</h2>

                    <form class="custom-form volunteer-form mb-5 mb-lg-0" action="#" method="post" role="form">
                        <h3 class="mb-4">Masuk ke akun Anda</h3>

                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <input type="text" name="volunteer-subject" id="volunteer-subject" class="form-control" placeholder="Nomor HP" required>
                            </div>

                            <div class="col-lg-6 col-12">
                                <input type="password" name="volunteer-subject" id="volunteer-subject" class="form-control" placeholder="Password" required>
                            </div>

                        <p class="mb-4">Belum punya akun? Registrasi
                            <a href="registrasi.html">Di sini</a>
                        </p>

                        <button type="submit" class="form-control">Masuk</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12 mb-4">
                <img src="images/logo.png" class="logo img-fluid" alt="">
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <h5 class="site-footer-title mb-3">Quick Links</h5>

                <ul class="footer-menu">
                    <li class="footer-menu-item"><a href="index.html" class="footer-menu-link">Home</a></li>

                    <li class="footer-menu-item"><a href="index.html" class="footer-menu-link">About</a></li>

                    <li class="footer-menu-item"><a href="index.html" class="footer-menu-link">Testimoni</a></li>

                    <li class="footer-menu-item"><a href="news.html" class="footer-menu-link">Berita</a></li>

                    <li class="footer-menu-item"><a href="login.html" class="footer-menu-link">Login</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mx-auto">
                <h5 class="site-footer-title mb-3">Contact Infomation</h5>

                <p class="text-white d-flex mb-2">
                    <i class="bi-telephone me-2"></i>

                    <a href="tel: 120-240-9600" class="site-footer-link">
                        (021) 29278888
                    </a>
                </p>

                <p class="text-white d-flex">
                    <i class="bi-envelope me-2"></i>

                    <a href="mailto:info@yourgmail.com" class="site-footer-link">
                        dinaspertanian@jabar.com
                    </a>
                </p>

                <p class="text-white d-flex mt-3">
                    <i class="bi-geo-alt me-2"></i>
                    Dinas Pertanian Kota Masing-Masing
                </p>
            </div>
        </div>
    </div>

    <div class="site-footer-bottom">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-7 col-12">
                    <p class="copyright-text mb-0">Copyright © 2036 <a href="#">Farmeeds</a> Dipersembahkan oleh Dinas Pertanian.
                    Design: <a href="https://templatemo.com" target="_blank">TemplateMo</a></p>
                </div>
                
                <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
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
                            <a href="#" class="social-icon-link bi-linkedin"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="https://youtube.com/templatemo" class="social-icon-link bi-youtube"></a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</footer>
@endsection