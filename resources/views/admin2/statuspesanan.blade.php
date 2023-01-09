@extends('layouts.admin.layoutAdmin')

@section('container')

  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex align-items-center">
        <a class="navbar-brand brand-logo" href="index.html">
          <img src="{{url('assets/admin/images/logo.png')}}" alt="logo" class="logo-dark" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('assets/admin/images/logo.png')}}" alt="logo" /></a>
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
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Daftar Pengajuan</h4>
                  <a href="editpesanan.html" class="btn btn-primary btn-sm">Edit</a>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th> ID Pengajuan </th>
                        <th> Kelompok Tani </th>
                        <th> Daftar Ajuan </th>
                        <th> Tanggal Pengajuan </th>
                        <th> Status Pengajuan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td> 00024245</td>
                        <td> Sukabirus Jaya </td>
                        <td> 5x Bibit Cabai Keriting, 8x Bibit Mangga, 2x Bibit Rambutan</td>
                        <td> 21 Januari 2023 </td>
                        <td>
                          <div>
                          <label class="badge badge-warning">Sedang Diproses</label>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td> 00024245</td>
                        <td> Sukabirus Jaya </td>
                        <td> 5x Bibit Cabai Keriting, 8x Bibit Mangga, 2x Bibit Rambutan</td>
                        <td> 21 Januari 2023 </td>
                        <td>
                          <div>
                            <label class="badge badge-danger">Belum Diproses</label>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td> 00024245</td>
                        <td> Sukabirus Jaya </td>
                        <td> 5x Bibit Cabai Keriting, 8x Bibit Mangga, 2x Bibit Rambutan</td>
                        <td> 21 Januari 2023 </td>
                        <td>
                          <div>
                            <label class="badge badge-success">Selesai</label>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
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
    
@endsection
