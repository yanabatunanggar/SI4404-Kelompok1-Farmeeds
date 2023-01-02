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
                    <a class="nav-link click-scroll" href="index.html#section_1">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="index.html#section_2">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="index.html#section_3">Testimoni</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link click-scroll dropdown-toggle" href="index.html#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Berita</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="news.html">Berita Pertanian</a></li>

                        <li><a class="dropdown-item" href="news-detail.html">Kabar Dinas</a></li>
                    </ul>
                </li>

                <li class="nav-item ms-3">
                    <a class="nav-link active" href="pengajuan.html">Pengajuan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="login.html">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main>

    <section class="donate-section">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mx-auto">
                    <form class="custom-form donate-form" action="#" method="get" role="form">
                        <h3 class="mb-4">Make a donation</h3>

                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <h5 class="mb-3">Donation Frequency</h5>
                            </div>

                            <div class="col-lg-6 col-6 form-check-group form-check-group-donation-frequency">
                                <div class="form-check form-check-radio">
                                    <input class="form-check-input" type="radio" name="DonationFrequency" id="DonationFrequencyOne" checked>
                                    
                                    <label class="form-check-label" for="DonationFrequencyOne">
                                        One Time
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-6 col-6 form-check-group form-check-group-donation-frequency">
                                <div class="form-check form-check-radio">
                                    <input class="form-check-input" type="radio" name="DonationFrequency" id="DonationFrequencyMonthly">
                                    
                                    <label class="form-check-label" for="DonationFrequencyMonthly">
                                        Monthly
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-12 col-12">
                                <h5 class="mt-2 mb-3">Select an amount</h5>
                            </div>

                            <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                <div class="form-check form-check-radio">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        $10
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                <div class="form-check form-check-radio">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        $15
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                <div class="form-check form-check-radio">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        $20
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                <div class="form-check form-check-radio">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                    <label class="form-check-label" for="flexRadioDefault4">
                                        $30
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                <div class="form-check form-check-radio">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                                    <label class="form-check-label" for="flexRadioDefault5">
                                        $45
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                <div class="form-check form-check-radio">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                                    <label class="form-check-label" for="flexRadioDefault6">
                                        $50
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12 form-check-group">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">$</span>
                                    
                                    <input type="text" class="form-control" placeholder="Custom amount" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>

                            <div class="col-lg-12 col-12">
                                <h5 class="mt-1">Personal Info</h5>
                            </div>

                            <div class="col-lg-6 col-12 mt-2">
                                <input type="text" name="donation-name" id="donation-name" class="form-control" placeholder="Jack Doe" required>
                            </div>

                            <div class="col-lg-6 col-12 mt-2">
                                <input type="email" name="donation-email" id="donation-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jackdoe@gmail.com" required>
                            </div>

                            <div class="col-lg-12 col-12">
                                <h5 class="mt-4 pt-1">Choose Payment</h5>
                            </div>

                            <div class="col-lg-12 col-12 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="DonationPayment" id="flexRadioDefault9">
                                    <label class="form-check-label" for="flexRadioDefault9">
                                        <i class="bi-credit-card custom-icon ms-1"></i>
                                        Debit or Credit card
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="DonationPayment" id="flexRadioDefault10">
                                    <label class="form-check-label" for="flexRadioDefault10">
                                        <i class="bi-paypal custom-icon ms-1"></i>
                                        Paypal
                                    </label>
                                </div>

                                <button type="submit" class="form-control mt-4">Submit Donation</button>
                            </div>
                        </div>
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