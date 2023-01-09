<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="profile-image">
            <img class="img-xs rounded-circle" src="{{asset('assets/admin/images/faces/face8.jpg')}}" alt="profile image">
            <div class="dot-indicator bg-success"></div>
          </div>
          <div class="text-wrapper">
            <p class="profile-name">John Padi</p>
            <p class="designation">Administrator</p>
          </div>
          <div class="icon-container">
            <i class="icon-bubbles"></i>
            <div class="dot-indicator bg-danger"></div>
          </div>
        </a>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Dashboard</span>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin')}}">
          <span class="menu-title">Dashboard</span>
          <i class="icon-screen-desktop menu-icon"></i>
        </a>
      </li>
      <li class="nav-item nav-category"><span class="nav-link"> Kelola Produk </span></li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="{{route('tambahProduk')}}" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-title">Tambah Produk</span>
          <i class="icon-layers menu-icon"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('cekAlat')}}">Alat</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('cekBibit')}}">Bibit Tanaman</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('cekAlat')}}">
          <span class="menu-title">Alat</span>
          <i class="icon-book-open menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('cekBibit')}}">
          <span class="menu-title">Bibit Tanaman</span>
          <i class="icon-grid menu-icon"></i>
        </a>
      </li>
      <li class="nav-item nav-category"><span class="nav-link">Customer Services</span></li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="{{route('pesanCustomer')}}" aria-expanded="false" aria-controls="auth">
          <span class="menu-title">Pesan Customer</span>
          <i class="icon-doc menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('statusPesanan')}}">
          <span class="menu-title">Status Pesanan</span>
          <i class="icon-chart menu-icon"></i>
        </a>
      </li>
    </ul>
  </nav>