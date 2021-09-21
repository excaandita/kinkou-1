
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
    <head>
        @include('template.head')
    </head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
    @include('template.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('template.sidebar')

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Berobat</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Berobat</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
              <h3>Create Berobat</h3>
            </div>
            <div class="card-body">
              <form action="{{ route('simpan-layanan-berobat') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                  <select class="form-control select2" style="width:100%;" name="hewan_id" id="hewan_id">
                    <option disabled value>Pilih Hewan</option>
                      @foreach ($hwn as $item)
                      <option value="{{ $item->id }}">{{ $item->namahewan }}</option>  
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <select class="form-control select2" style="width:100%;" name="customer_id" id="customer_id">
                    <option disabled value>Pilih Customer</option>
                      @foreach ($cust as $item)
                      <option value="{{ $item->id }}">{{ $item->namacust }}</option>  
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <select class="form-control select2" style="width:100%;" name="penyakit_id" id="penyakit_id">
                    <option disabled value>Pilih Penyakit</option>
                      @foreach ($pykt as $item)
                      <option value="{{ $item->id }}">{{ $item->namapenyakit }}</option>  
                      @endforeach
                  </select>
                </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan</button>
                  </div>
                  <p>Customer belum terdaftar ? <a href="{{ route('create-customer') }}">Tambah Customer </a></p>
                  <p>Hewan belum terdaftar ? <a href="{{ route('create-hewan') }}">Tambah Hewan </a></p>
              </form>
            </div>
        </div>
    </div>
    </div>
          <!-- /.content -->
    </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    @include('template.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
    @include('template.script')
</body>
</html>