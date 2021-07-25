@extends ('admin.layout')

@section ('content-header')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Pesan</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Pesan</li>
          <li class="breadcrumb-item active">Balas</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
@endsection

@section ('content')
<!--Summernote-->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- /.col -->
      <div class="col-md-12">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">Kirim Pesan Balasan</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form method="GET" action="#">
              <table style="width:100%;">
                <tr>
                  <div class="form-group">
                    <td style="width:15%;">
                      <label>Nama Pengirim</label>
                    </td>
                    <td>
                      <input class="form-control" placeholder="{{$detail_pesan->nama}}" disabled>
                    </td>
                  </div>
                </tr>

                <tr>
                  <div class="form-group">
                    <td>
                      <label>Email Pengirim</label>
                    </td>
                    <td>
                      <input class="form-control" placeholder="{{$detail_pesan->email}}" disabled>
                    </td>
                  </div>
                </tr>

                <tr>
                  <div class="form-group">
                    <td>
                      <label>Subjek</details></label>
                    </td>
                    <td>
                      <input class="form-control" placeholder="{{$detail_pesan->subjek}}" disabled>
                    </td>
                  </div>
                </tr>

                <tr>
                  <div class="form-group">
                    <td>
                      <label>Isi pesan</label>
                    </td>
                    <td>
                      <textarea class="form-control" rows="4" disabled>{{$detail_pesan->pesan}}</textarea>
                    </td>
                  </div>
                </tr>

              </table>
              <div class="form-group">
                <a href="/admin/balas-pesan/{{$detail_pesan->id}}" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Balas Pesan</a>
              </div>
            </form>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <div class="float-right">
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>


@endsection