@extends('layouts.admin.layoutAdmin')

@section('container')
    


 <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="../images/logo.png" alt="logo" class="logo-dark" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../images/logo.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Farmeeds - Admin Dinas Pertanian Jawa Barat </h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
            <form class="search-form d-none d-md-block" action="#">
              <i class="icon-magnifier"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
            <li class="nav-item dropdown language-dropdown d-none d-sm-flex align-items-center">
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ml-2" src="../images/faces/face8.jpg" alt="Profile image"> <span class="font-weight-normal"> John Padi </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="../images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3">John Padi</p>
                  <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> Profil Saya <span class="badge badge-pill badge-danger">1</span></a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Log Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        
        @include('layouts.admin.navbarFix')

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Traktor</h4>
                    <div class="media">
                      <img src="../../images/alat/traktor.png" class="news-image img-fluid" alt="">
                    </div>
                    <div class="text-left mt-4">
                      <p class="card-text">
                        <h6>Stok: 8789</h6>
                        <p></p>
                        <h6>Deskripsi:</h6>
                        <p>Cap Panah Merah Benih Bibit Cabai Kering</p>
                        <h6>Provinsi:</h6>
                        <p>Jawa Barat</p>
                        <h6>Kota:</h6>
                        <p>Bandung</p>
                      </p>
                    </div>
                    <div class="text-center mt-4">
                      <a href="editproduk.html" class="btn btn-primary btn-sm">Edit</a>
                      <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Traktor</h4>
                    <div class="media">
                      <img src="../../images/alat/traktor.png" class="news-image img-fluid" alt="">
                    </div>
                    <div class="text-left mt-4">
                      <p class="card-text">
                        <h6>Stok: 8789</h6>
                        <p></p>
                        <h6>Deskripsi:</h6>
                        <p>Cap Panah Merah Benih Bibit Cabai Kering</p>
                        <h6>Provinsi:</h6>
                        <p>Jawa Barat</p>
                        <h6>Kota:</h6>
                        <p>Bandung</p>
                      </p>
                    </div>
                    <div class="text-center mt-4">
                      <a href="editproduk.html" class="btn btn-primary btn-sm">Edit</a>
                      <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Traktor</h4>
                    <div class="media">
                      <img src="../../images/alat/traktor.png" class="news-image img-fluid" alt="">
                    </div>
                    <div class="text-left mt-4">
                      <p class="card-text">
                        <h6>Stok: 8789</h6>
                        <p></p>
                        <h6>Deskripsi:</h6>
                        <p>Cap Panah Merah Benih Bibit Cabai Kering</p>
                        <h6>Provinsi:</h6>
                        <p>Jawa Barat</p>
                        <h6>Kota:</h6>
                        <p>Bandung</p>
                      </p>
                    </div>
                    <div class="text-center mt-4">
                      <a href="editproduk.html" class="btn btn-primary btn-sm">Edit</a>
                      <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../vendors/select2/select2.min.js"></script>
    <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../js/typeahead.js"></script>
    <script src="../../js/select2.js"></script>
    <!-- End custom js for this page -->
@endsection