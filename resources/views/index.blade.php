@extends('layouts.layout')
@section('container')

<main>

    <section class="hero-section hero-section-full-height">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 col-12 p-0">
                    <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/images/slide/petani1.jpg" class="carousel-image img-fluid" alt="...">
                                
                                <div class="carousel-caption d-flex flex-column justify-content-end">
                                    <h1>Bersama <br> Petani</h1>
                                    
                                    <p>Membangun Indonesia dengan <br> ketahanan pangan yang kuat</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="assets/images/slide/petani2.jpg" class="carousel-image img-fluid" alt="...">
                                
                                <div class="carousel-caption d-flex flex-column justify-content-end">
                                    <h1>Tidak <br> Dipungut <br> Biaya</h1>
                                    
                                    <p>Membantu petani dengan memberikan <br> bantuan gratis</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="assets/images/slide/petani3.jpeg" class="carousel-image img-fluid" alt="...">
                                
                                <div class="carousel-caption d-flex flex-column justify-content-end">
                                    <h1>Kemanusiaan</h1>
                                    
                                    <p>Bangun dunia yang lebih baik</p>
                                </div>
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#hero-slide" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-12 text-center mx-auto">
                    <h2 class="mb-5">Mulai jadi pahlawan pangan</h2>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="{{ '/login' }}" class="d-block">
                            <img src="assets/images/icons/hands.png" class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text">Jadi bagian dari <strong>Kelompok Tani</strong></p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="{{ '/ajukan-alat' }}" class="d-block">
                            <img src="assets/images/icons/heart.png" class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text">Gunakan Produk <strong> Berkualitas</strong></p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="{{ '/ajukan-alat' }}" class="d-block">
                            <img src="assets/images/icons/receive.png" class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text">Mulai Kembangkan <strong> Komunitas </strong></p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="{{ '/ajukan-alat' }}" class="d-block">
                            <img src="assets/images/icons/scholarship.png" class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text">Dapatkan bantuan <strong> Gratis </strong></p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-padding section-bg" id="section_2">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <img src="assets/images/petani5.jpg" class="custom-text-box-image img-fluid" alt="">
                </div>

                <div class="col-lg-6 col-12">
                    <div class="custom-text-box">
                        <h2 class="mb-2">Latar Belakang</h2>

                        <h5 class="mb-3">Bantu Pahlawan Pangan</h5>

                        <p class="mb-0">Melalui program kerja Kementrian Pertanian dan Ketahanan Pangan Republik Indonesia, Dinas Pertanian berupaya memberikan fasilitas yang membantu para petani dalam pengajuan bibit dan alat pertanian untuk didapatkan secara gratis.</p>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="custom-text-box mb-lg-0">
                                <h5 class="mb-3">Our Mission</h5>

                                <p>Dengan Farmeeds, kelompok tani dipermudah dalam mengajukan kebutuhan alat tani.</p>

                                <ul class="custom-list mt-2">
                                    <li class="custom-list-item d-flex">
                                        <i class="bi-check custom-text-box-icon me-2"></i>
                                        Cepat Tanggap
                                    </li>

                                    <li class="custom-list-item d-flex">
                                        <i class="bi-check custom-text-box-icon me-2"></i>
                                        Birokrasi Gampang
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                <div class="counter-thumb"> 
                                    <div class="d-flex">
                                        <span class="counter-number" data-from="1" data-to="723" data-speed="1000"></span>
                                        <span class="counter-number-text">K</span>
                                    </div>

                                    <span class="counter-text">Kelompok Tani Bergabung</span>
                                </div> 

                                <div class="counter-thumb mt-4"> 
                                    <div class="d-flex">
                                        <span class="counter-number" data-from="1" data-to="263" data-speed="1000"></span>
                                        <span class="counter-number-text">JT</span>
                                    </div>

                                    <span class="counter-text">Bibit dan alat tani tersalurkan</span>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="about-section section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-5 col-12">
                    <img src="assets/images/mentri.jpg" class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
                </div>

                <div class="col-lg-5 col-md-7 col-12">
                    <div class="custom-text-block">
                        <h6 class="mb-0">Dr H. Syahrul Yasin Limpo, S.H, M.H</h6>

                        <p class="text-muted mb-lg-4 mb-md-4">Menteri Pertanian</p>

                        <p> Kementerian Pertanian mempunyai tugas menyelenggarakan urusan di bidang pertanian dalam pemerintahan untuk membantu Presiden dalam menyelenggarakan pemerintahan negara dibantu oleh Dinas Pertanian dan Ketahanan Pangan dalam melaksanakan urusan pemerintahan bidang tanaman pangan dan hortikultura, bidang perkebunan, bidang prasarana, sarana dan perlindungan tanaman, bidang ketahanan pangan dan bidang bina usaha dan penyuluhan pertanian yang menjadi kewenangan daerah. </p>

                        <ul class="social-icon mt-4">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram"></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="cta-section section-padding section-bg">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <div class="col-lg-5 col-12 ms-auto">
                    <h2 class="mb-0">Make an impact. <br> Be Powerful.</h2>
                </div>

                <div class="col-lg-5 col-12">
                    <a href="{{ '/ajukan-alat' }}" class="me-4">Ajukan bibit</a>

                    <a href="{{ '/login' }}" class="custom-btn btn smoothscroll">Ambil bagian</a>
                </div>

            </div>
        </div>
    </section>


    <section class="section-padding" id="section_3">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center mb-4">
                    <h2>Testimoni Tahun Ini</h2>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block-wrap">
                        <img src="assets/images/alattani.jpg" class="custom-block-image img-fluid" alt="">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">Alat Pertanian</h5>

                                <p>Bantuan berupa traktor, ekskavator, dan alat lainnya untuk menunjang aktivitas petani.</p>

                                <div class="progress mt-4">
                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="d-flex align-items-center my-2">
                                    <p class="mb-0">
                                        <strong>Tersalurkan:</strong>
                                        365k unit
                                    </p>

                                    <p class="ms-auto mb-0">
                                        <strong>Goal:</strong>
                                        500k unit
                                    </p>
                                </div>
                            </div>

                            <a href="{{ '/ajukan-alat' }}" class="custom-btn btn">Ajukan</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block-wrap">
                        <img src="assets/images/bibit.jpg" class="custom-block-image img-fluid" alt="">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">Bibit Tanaman</h5>

                                <p>Bantuan benih sayuran dan buah-buahan untuk kelompok tani.</p>

                                <div class="progress mt-4">
                                    <div class="progress-bar w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="d-flex align-items-center my-2">
                                    <p class="mb-0">
                                        <strong>Tersalurkan</strong>
                                        263jt
                                    </p>

                                    <p class="ms-auto mb-0">
                                        <strong>Goal:</strong>
                                        500jt
                                    </p>
                                </div>
                            </div>

                            <a href="{{ '/ajukan-alat' }}" class="custom-btn btn">Ajukan</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="custom-block-wrap">
                        <img src="assets/images/kelompoktani.jpeg" class="custom-block-image img-fluid" alt="">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">Kelompok Tani</h5>

                                <p>Memfasilitasi kelompok tani agar semakin berkembang dan membentuk kelompok tani baru.</p>

                                <div class="progress mt-4">
                                    <div class="progress-bar w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="d-flex align-items-center my-2">
                                    <p class="mb-0">
                                        <strong>Terbentuk:</strong>
                                        723k
                                    </p>

                                    <p class="ms-auto mb-0">
                                        <strong>Goal:</strong>
                                        500k
                                    </p>
                                </div>
                            </div>

                            <a href="{{ '/login' }}" class="custom-btn btn">Bergabung</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="news-section section-padding" id="section_5">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 mb-5">
                    <h2>Berita Terbaru</h2>
                </div>

                <div class="col-lg-7 col-12">
                    <div class="news-block">
                        <div class="news-block-top">
                            <a href="{{ '/news-detail' }}">
                                <img src="assets/images/news/news1.jpg" class="news-image img-fluid" alt="">
                            </a>

                            <div class="news-category-block">
                                <a href="#" class="category-block-link">
                                    Kelompok Tani,
                                </a>

                                <a href="#" class="category-block-link">
                                    Riau
                                </a>
                            </div>
                        </div>

                        <div class="news-block-info">
                            <div class="d-flex mt-2">
                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        October 12, 2036
                                    </p>
                                </div>

                                <div class="news-block-author mx-5">
                                    <p>
                                        <i class="bi-person custom-icon me-1"></i>
                                        By Admin
                                    </p>
                                </div>

                                <div class="news-block-comment">
                                    <p>
                                        <i class="bi-chat-left custom-icon me-1"></i>
                                        32 Comments
                                    </p>
                                </div>
                            </div>

                            <div class="news-block-title mb-2">
                                <h4><a href="{{ '/news-detail' }}" class="news-block-title-link">Disketapang Serahkan Stimulus Bantuan tahap II kepada Kelompok Tani</a></h4>
                            </div>

                            <div class="news-block-body">
                                <p>PEKANBARU --  Untuk meningkatkan kemampuan, pendapatan dan kesejahteraan seluruh anggota kelompok tani dalam melakukan usaha pertanian, Pemerintah Kota (Pemko) Pekanbaru, melalui Dinas Ketahanan Pangan, kembali menyerahkan bantuan pertanian kepada 10 Kelompok Tani. </p>
                            </div>
                        </div>
                    </div>

                    <div class="news-block mt-3">
                        <div class="news-block-top">
                            <a href="{{ '/news-detail' }}">
                                <img src="assets/images/news/news2.webp" class="news-image img-fluid" alt="">
                            </a>

                            <div class="news-category-block">
                                <a href="#" class="category-block-link">
                                    Petani,
                                </a>

                                <a href="#" class="category-block-link">
                                    Indonesia,
                                </a>

                                <a href="#" class="category-block-link">
                                    Hari Tani
                                </a>
                            </div>
                        </div>

                        <div class="news-block-info">
                            <div class="d-flex mt-2">
                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        October 20, 2036
                                    </p>
                                </div>

                                <div class="news-block-author mx-5">
                                    <p>
                                        <i class="bi-person custom-icon me-1"></i>
                                        By Admin
                                    </p>
                                </div>

                                <div class="news-block-comment">
                                    <p>
                                        <i class="bi-chat-left custom-icon me-1"></i>
                                        35 Comments
                                    </p>
                                </div>
                            </div>

                            <div class="news-block-title mb-2">
                                <h4><a href="{{ '/news-detail' }}" class="news-block-title-link">Hari Tani Nasional 24 September : Urgensi Pertanian di Indonesia</a></h4>
                            </div>

                            <div class="news-block-body">
                                <p>Hari Tani Nasional diperingati setiap tahun pada tanggal 24 September. Perayaan Hari Tani Nasional menghormati perjuangan para petani untuk membebaskan diri dari kesulitan.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12 mx-auto">
                    <form class="custom-form search-form" action="#" method="get" role="form">
                        <input name="search" type="search" class="form-control" id="search" placeholder="Search" aria-label="Search">

                        <button type="submit" class="form-control">
                            <i class="bi-search"></i>
                        </button>
                    </form>

                    <h5 class="mt-5 mb-3">Recent news</h5>

                    <div class="news-block news-block-two-col d-flex mt-4">
                        <div class="news-block-two-col-image-wrap">
                            <a href="{{ '/news-detail' }}">
                                <img src="assets/images/news/news3.jpg" class="news-image img-fluid" alt="">
                            </a>
                        </div>

                        <div class="news-block-two-col-info">
                            <div class="news-block-title mb-2">
                                <h6><a href="{{ '/news-detail' }}" class="news-block-title-link">Krisis Pangan</a></h6>
                            </div>

                            <div class="news-block-date">
                                <p>
                                    <i class="bi-calendar4 custom-icon me-1"></i>
                                    October 16, 2036
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="news-block news-block-two-col d-flex mt-4">
                        <div class="news-block-two-col-image-wrap">
                            <a href="{{ '/news-detail' }}">
                                <img src="assets/images/news/news4.jpg" class="news-image img-fluid" alt="">
                            </a>
                        </div>

                        <div class="news-block-two-col-info">
                            <div class="news-block-title mb-2">
                                <h6><a href="{{ '/news-detail' }}" class="news-block-title-link">Komoditas di Indonesia</a></h6>
                            </div>

                            <div class="news-block-date">
                                <p>
                                    <i class="bi-calendar4 custom-icon me-1"></i>
                                    October 24, 2036
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="category-block d-flex flex-column">
                        <h5 class="mb-3">Categories</h5>

                        <a href="#" class="category-block-link">
                            Pertanian
                            <span class="badge">20</span>
                        </a>

                        <a href="#" class="category-block-link">
                            Pemerintah
                            <span class="badge">30</span>
                        </a>

                        <a href="#" class="category-block-link">
                            Pangan
                            <span class="badge">10</span>
                        </a>

                        <a href="#" class="category-block-link">
                            Sumber Daya Manusia
                            <span class="badge">15</span>
                        </a>

                        <a href="#" class="category-block-link">
                            Pengajuan
                            <span class="badge">20</span>
                        </a>
                    </div>

                    <div class="tags-block">
                        <h5 class="mb-3">Tags</h5>

                        <a href="#" class="tags-block-link">
                            Pertanian
                        </a>

                        <a href="#" class="tags-block-link">
                            Pemerintah
                        </a>

                        <a href="#" class="tags-block-link">
                            Pangan
                        </a>

                        <a href="#" class="tags-block-link">
                            Sumber Daya Manusia
                        </a>

                        <a href="#" class="tags-block-link">
                            Pengajuan
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>


    <section class="testimonial-section section-padding section-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">
                    <h6 class="mb-lg-3">"Pertanian adalah pengejaran kita yang paling bijaksana karena pada akhirnya, pertanian akan memberikan kontribusi paling besar bagi kekayaan sejati, moral yang baik, dan kebahagiaan." - Thomas Jefferson</h6>
                </div>

            </div>
        </div>
    </section>


    <section class="contact-section section-padding" id="section_6">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 mx-auto">
                    <form class="custom-form contact-form" action="#" method="post" role="form">
                        <h2>Customer Service</h2>

                        <p class="mb-4">Apabila ada yang ditanyakan, Anda juga dapat menghubungi 
                            <a href="#">(021) 29278888</a>
                        </p>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="first-name" id="first-name" class="form-control" placeholder="Nama Anda" required>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="last-name" id="last-name" class="form-control" placeholder="Nama Kelompok Tani" required>
                            </div>
                        </div>

                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email/No HP" required>

                        <textarea name="message" rows="5" class="form-control" id="message" placeholder="Apa yang dapat kami bantu?"></textarea>

                        <button type="submit" class="form-control">Kirim</button>
                    </form>
                </div>

            </div>
        </div>
    </section>
</main>
    
@endsection