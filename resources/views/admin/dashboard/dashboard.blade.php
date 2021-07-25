@php
$profil       = App\Models\Profil::count();
$berita       = App\Models\Berita::count();
$staff        = App\Models\Staff::count();
$layanan      = App\Models\Layanan::count();
$portofolio   = App\Models\Portofolio::count();
$testimoni    = App\Models\Testimoni::count();
$pesan        = App\Models\Pesan::count();
$user         = App\Models\User::count();
@endphp

@extends ('admin.layout')

@section ('content-header')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Dashboard</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
@endsection

@section ('content')
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{$profil}}</h3>

            <p>Profil Instansi</p>
          </div>
          <div class="icon">
            <i class="ion ion-document-text"></i>
          </div>
          <a href="/admin/profil" class="small-box-footer">Lebih Lengkap <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$staff}}</h3>

                <p>Staff</p>
              </div>
              <div class="icon">
                <i class="ion ion-document-text"></i>
              </div>
              <a href="/admin/staff" class="small-box-footer">Lebih Lengkap <i class="fas fa-arrow-circle-right"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$layanan}}</h3>

                <p>Layanan</p>
              </div>
              <div class="icon">
                <i class="ion ion-document-text"></i>
              </div>
              <a href="/admin/layanan" class="small-box-footer">Lebih Lengkap <i class="fas fa-arrow-circle-right"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$portofolio}}</h3>

                <p>Portofolio</p>
              </div>
              <div class="icon">
                <i class="ion ion-document-text"></i>
              </div>
              <a href="/admin/portofolio" class="small-box-footer">Lebih Lengkap <i class="fas fa-arrow-circle-right"></i></a>
            </div>

          </div>

      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{$berita}}</h3>

            <p>Berita</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="/admin/berita" class="small-box-footer">Lebih Lengkap <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{$testimoni}}</h3>

            <p>Testimoni</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="/admin/testimoni" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{$pesan}}</h3>

            <p>Pesan Masuk</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="/admin/pesan-masuk" class="small-box-footer">Lebih Lengkap <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{$user}}</h3>

            <p>User Terdaftar</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="/admin/list-user" class="small-box-footer">Lebih Lengkap <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    
      <!-- ./col -->
    </div>
    <!-- /.row -->

  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
