<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('Image/logo.jpeg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Kinkou Petshop</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('Image/fp.jpeg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Abdan Syakuro</a>
        </div>
      </div>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Master Data
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('data-customer') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Customer</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('data-hewan') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Hewan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('data-barang') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Barang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('data-grooming') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Grooming</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('data-penyakit') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Penyakit</p>
              </a>
            </li>
          </ul>
          <li class="nav-item">
            <a href="{{ route('data-layanan-grooming') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Grooming
              </p>
            </a>
          </li>
        </li>
      </ul>
    </nav>

  </aside>