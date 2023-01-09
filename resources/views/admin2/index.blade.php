@extends('layouts.admin.layoutAdmin')

@section('container')

  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex align-items-center">
        <a class="navbar-brand brand-logo" href="{{ route('admin') }}">
          <img src="{{asset('assets/admin/images/logo.png')}}" alt="logo" class="logo-dark" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="{{ route('admin') }}"><img src="{{asset('assets/admin/images/logo.png')}}" alt="logo" /></a>
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
      <!-- partial:partials/_sidebar.html -->
      
      @include('layouts.admin.navbarFix')


      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row purchace-popup">
            <div class="col-12 stretch-card grid-margin">
              <div class="card card-secondary">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Laporan Harian</h4>
                  <div class="aligner-wrapper">
                    <canvas id="sessionsDoughnutChart" height="210"></canvas>
                    <div class="wrapper d-flex flex-column justify-content-center absolute absolute-center">
                      <h2 class="text-center mb-0 font-weight-bold">143</h2>
                      <small class="d-block text-center text-muted  font-weight-semibold mb-0">Transaksi <br> Diajukan</small>
                    </div>
                  </div>
                  <div class="wrapper mt-4 d-flex flex-wrap align-items-cente">
                    <div class="d-flex">
                      <span class="square-indicator bg-danger ml-2"></span>
                      <p class="mb-0 ml-2">Belum Diproses</p>
                    </div>
                    <div class="d-flex">
                      <span class="square-indicator bg-success ml-2"></span>
                      <p class="mb-0 ml-2">Selesai</p>
                    </div>
                    <div class="d-flex">
                      <span class="square-indicator bg-warning ml-2"></span>
                      <p class="mb-0 ml-2">Perlu Diproses</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body performane-indicator-card">
                  <div class="d-sm-flex">
                    <h4 class="card-title flex-shrink-1">Transaksi Tahunan</h4>
                    <p class="m-sm-0 ml-sm-auto flex-shrink-0">
                      <span class="data-time-range ml-0">7d</span>
                      <span class="data-time-range active">2w</span>
                      <span class="data-time-range">1m</span>
                      <span class="data-time-range">3m</span>
                      <span class="data-time-range">6m</span>
                    </p>
                  </div>
                  <div class="d-sm-flex flex-wrap">
                    <div class="d-flex align-items-center">
                      <span class="dot-indicator bg-primary ml-2"></span>
                      <p class="mb-0 ml-2 text-muted font-weight-semibold">Pengajuan Bibit (2098)</p>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="dot-indicator bg-info ml-2"></span>
                      <p class="mb-0 ml-2 text-muted font-weight-semibold"> Pengajuan Alat (523)</p>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="dot-indicator bg-danger ml-2"></span>
                      <p class="mb-0 ml-2 text-muted font-weight-semibold">Keduanya (174)</p>
                    </div>
                  </div>
                  <div id="performance-indicator-chart" class="ct-chart mt-4"></div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="d-sm-flex align-items-baseline report-summary-header">
                        <h5 class="font-weight-semibold">Report Summary Farmeeds Indonesia </h5> <span class="ml-auto">Updated Report</span> <button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="row report-inner-cards-wrapper">
                    <div class=" col-md -6 col-xl report-inner-card">
                      <div class="inner-card-text">
                        <span class="report-title">KELOMPOK <BR> TANI <BR> BERGABUNG</span>
                        <span class="report-count"> 723.253</span>
                      </div>
                      <div class="inner-card-icon bg-success">
                        <i class="icon-rocket"></i>
                      </div>
                    </div>
                    <div class="col-md-6 col-xl report-inner-card">
                      <div class="inner-card-text">
                        <span class="report-title">MITRA <BR> SUPPLIER <br> BERGABUNG </span>
                        <span class="report-count"> 983.342</span>
                      </div>
                      <div class="inner-card-icon bg-danger">
                        <i class="icon-briefcase"></i>
                      </div>
                    </div>
                    <div class="col-md-6 col-xl report-inner-card">
                      <div class="inner-card-text">
                        <span class="report-title">BIBIT <BR>TANAMAN <BR> TERSALURKAN</span>
                        <span class="report-count"> 263.023.123</span>
                      </div>
                      <div class="inner-card-icon bg-warning">
                        <i class="icon-globe-alt"></i>
                      </div>
                    </div>
                    <div class="col-md-6 col-xl report-inner-card">
                      <div class="inner-card-text">
                        <span class="report-title">ALAT <br> PERTANIAN <br> TERSALURKAN</span>
                        <span class="report-count"> 365.467 Unit</span>
                      </div>
                      <div class="inner-card-icon bg-primary">
                        <i class="icon-diamond"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-sm-flex align-items-center mb-4">
                    <h4 class="card-title mb-sm-0">Status Transaksi Terbaru</h4>
                    <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> Lihat Semua Transaksi</a>
                  </div>
                  <div class="table-responsive border rounded p-1">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="font-weight-bold">Nama Pengaju</th>
                          <th class="font-weight-bold">Kelompok Tani</th>
                          <th class="font-weight-bold">Mengajukan</th>
                          <th class="font-weight-bold">Diajukan Pada</th>
                          <th class="font-weight-bold">ID Pengajuan</th>
                          <th class="font-weight-bold">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <img class="img-sm rounded-circle" src="{{asset('assets/admin/images/faces/face1.jpg')}}" alt="profile image"> Katie Holmes
                          </td>
                          <td>Tani Bojongsoang</td>
                          <td>Alat, Bibit</td>
                          <td>08 Jan 2023</td>
                          <td>0023445</td>
                          <td>
                            <div class="badge badge-success p-2">Selesai</div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <img class="img-sm rounded-circle" src="{{asset('assets/admin/images/faces/face2.jpg')}}" alt="profile image"> Minnie Copeland
                          </td>
                          <td>Sukabirus Jaya</td>
                          <td>Bibit</td>
                          <td>08 Jan 2023</td>
                          <td>0023444</td>
                          <td>
                            <div class="badge badge-danger p-2">Ditolak</div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <img class="img-sm rounded-circle" src="{{asset('assets/admin/images/faces/face3.jpg')}}" alt="profile image"> Rodney Sims
                          </td>
                          <td>Sukapura Indah</td>
                          <td>Alat</td>
                          <td>08 Jan 2023</td>
                          <td>0023443</td>
                          <td>
                            <div class="badge badge-warning p-2">Menunggu Proses</div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <img class="img-sm rounded-circle" src="{{asset('assets/admin/images/faces/face4.jpg')}}" alt="profile image"> Carolyn Barker
                          </td>
                          <td>Ciganitri Makmur</td>
                          <td>Alat, Bibit</td>
                          <td>08 Jan 2023</td>
                          <td>0023442</td>
                          <td>
                            <div class="badge badge-success p-2">Selesai</div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="d-flex mt-4 flex-wrap">
                    <p class="text-muted">Showing 1 to 4 of 8279 entries</p>
                    <nav class="ml-auto">
                      <ul class="pagination separated pagination-info">
                        <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-left"></i></a></li>
                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-right"></i></a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
    
@endsection
