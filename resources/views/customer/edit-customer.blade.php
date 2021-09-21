
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
                    <h1 class="m-0">Data Pegawai</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Data Customer</li>
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
              <h3>Update Data Customer</h3>
            </div>
            <div class="card-body">
              <form action="{{ url('customer/update-customer',$cust->id) }}" method="POST">
                {{ csrf_field() }}
                  <div class="form-group">
                    <input type="text" name="namacust" id="namacust" class="form-control" placeholder="Nama Customer" value="{{ $cust->namacust }}">
                  </div>
                  <div class="form-group">
                    <textarea name="alamatcust" id="alamatcust" class="form-control" placeholder="Alamat Customer">{{ $cust->alamatcust }}</textarea>
                  </div>
                  <div class="form-group">
                    <input type="text" name="telpcust" id="telpcust" class="form-control" placeholder="Telp Customer" value="{{ $cust->telpcust }}">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                  </div>
              </form>
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