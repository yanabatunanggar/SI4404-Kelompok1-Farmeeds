@extends('layouts.admin.layoutAdmin')

@section('container')
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex align-items-center">
        <a class="navbar-brand brand-logo" href="{{route('admin')}}">
          <img src="{{asset('assets/admin/images/logo.png')}}" alt="logo" class="logo-dark" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('assets/admin/images/logo.png')}}" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
        <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Farmeeds - Admin Dinas Pertanian Jawa Barat </h5>
        <ul class="navbar-nav navbar-nav-right ml-auto">
          <li class="nav-item dropdown language-dropdown d-none d-sm-flex align-items-center">
          </li>
          <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle ml-2" src="{{asset('assets/admin/images/faces/face8.jpg')}}" alt="Profile image"> <span class="font-weight-normal"> John Padi </span></a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="{{asset('assets/admin/images/faces/face8.jpg')}}" alt="Profile image">
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

          <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Input Alat dan Bibit yang tersedia</h4>
                  <p class="card-description"> Silahkan input alat dan bibit agar dapat diajukan oleh petani </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleSelectGender">Kategori</label>
                      <select class="form-control" id="exampleSelectGender">
                        <option>Alat</option>
                        <option>Bibit</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Nama Produk</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Masukkan Nama Produk">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Stok</label>
                      <input type="number" class="form-control" id="exampleInputName1" placeholder="Masukkan Jumlah Produk">
                    </div>

                    <div class="form-group col-md-6 grid-margin stretch-card">
                      <div class="form-group card">
                          <label for="exampleFormControlSelect2">Provinsi</label>
                          <select class="form-control" id="exampleFormControlSelect2">
                            <option>Jawa Barat</option>
                          </select>
                      </div>
                      
                      <div class="form-group card">
                          <label for="exampleFormControlSelect2">Kota</label>
                          <select class="form-control" id="exampleFormControlSelect2">
                            <option>Bandung</option>
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="exampleTextarea1">Deskripsi</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                    </div>

                    <div class="form-group">
                      <label>Gambar Produk</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Gambar Produk">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Tambah Produk</button>
                    <button class="btn btn-light">Batalkan</button>
                  </form>
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
@endsection