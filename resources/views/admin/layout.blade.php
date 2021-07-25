@php
$total_pesan = App\Models\Pesan::where('status', '0')->count();
$pesan_masuk = App\Models\Pesan::where('status', '0')->orderBy('created_at', 'desc')->get();
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PT. DWIMITRA TUNGGAL ABADI</title>
  <link rel="shortcut icon" href="{{asset ('logo.png') }}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{ asset ('template/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{ asset ('template/plugins/toastr/toastr.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset ('template/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset ('template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('template/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">


        <!-- Messages Dropdown Menu -->
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            @if($total_pesan != null)
            <span class="badge badge-danger navbar-badge">{{$total_pesan}}</span>
            @endif
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            @forelse($pesan_masuk as $item)
            <a href="/lihat-pesan/{{$item->id}}" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    {{$item->nama}}
                  </h3>
                  <p class="text-sm">{{$item->subjek}}</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>{{$item->created_at->diffForHumans()}}</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            @empty
            <a href="" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Tidak Ada Pesan Masuk
                  </h3>
                </div>
              </div>
              <!-- Message End -->
            </a>
            @endforelse
            <a href="/pesan-masuk" class="dropdown-item dropdown-footer">Lihat Semua pesan</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/" class="brand-link">
        <img src="{{asset ('logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PT. DTA</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <br>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="/admin/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas"></i>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/admin/profil-instansi" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                profil Instansi
                <i class="right fas"></i>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/admin/staff" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Staff
                <i class="right fas"></i>
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="/admin/layanan" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Layanan
                <i class="right fas"></i>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/admin/portofolio" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Portofolio
                <i class="right fas"></i>
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="/admin/berita" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Berita
                <i class="right fas"></i>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/admin/testimoni" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Testimoni
                <i class="right fas"></i>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/admin/pesan-masuk" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Pesan Masuk
                <i class="right fas"></i>
                @if ($total_pesan != null)
                <span class="badge badge-info right">{{$total_pesan}}</span>
                @endif
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/admin/user/{{Auth()->user()->id}}/edit" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Akun
                <i class="right fas"></i>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/admin/list-user" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User Terdaftar
                <i class="right fas"></i>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
                <i class="right fas"></i>
              </p>
            </a>
          </li>



        </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield ('content-header')

    @yield ('content')

  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset ('template/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset ('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset ('template/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset ('template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset ('template/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset ('template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset ('template/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset ('template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset ('template/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset ('template/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset ('template/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset ('template/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset ('template/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset ('template/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('template/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset ('template/dist/js/demo.js') }}"></script>
<!-- SweetAlert2 -->
<script src="{{ asset ('template/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- Toastr -->
<script src="{{ asset ('template/plugins/toastr/toastr.min.js') }}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": true,
      
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>


<!--CKEDITOR-->
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace( 'isi_berita', {
      filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
      filebrowserUploadMethod: 'form',
    });
    CKEDITOR.config.removeButtons = 'Print,NewPage,Preview,Save,Templates,Find,Replace,SelectAll,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,CreateDiv,Language,Anchor,Flash,PageBreak,Iframe,About,ShowBlocks';
    

  </script>

  <script type="text/javascript">
    @if (Session::has('status'))
    toastr.success("{{Session::get('status')}}", "Sukses")
    @endif
  </script>

  <script type="text/javascript">
    @if (Session::has('info'))
    toastr.info("{{Session::get('info')}}", "Anda sudah login")
    @endif
  </script>

</body>
</html>
