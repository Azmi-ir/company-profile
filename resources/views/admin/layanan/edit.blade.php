@extends ('admin.layout')

@section ('content-header')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Layanan</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Layanan</li>
          <li class="breadcrumb-item active">Edit</li>
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
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit Layanan</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form method="post" action="/admin/layanan/{{$layanan->id}}" enctype="multipart/form-data">
              @csrf
              @method('patch')
              <table width="100%">
                <tr>

                  <div class="form-group">
                    <td>  
                      <label for="nama_layanan">Nama Layanan</label>
                    </td>
                    <td>
                      <input type="text" class="form-control @error('nama_layanan') is-invalid @enderror" id="nama_layanan" placeholder="Masukan Nama Layanan" name="nama_layanan" value="{{$layanan->nama_layanan}}">
                      @error('nama_layanan')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                      @enderror    
                    </td>
                  </div>
                </tr>

                <tr>
                  <div class="form-group">
                    <td>

                      <label for="status">Status</label>
                    </td>
                    <td>
                      <select class="form-control" name="status">
                        <option value="1" @if ($layanan->status == '1') selected="selected" @endif>aktif</option>
                        <option value="0" @if ($layanan->status == '0') selected="selected" @endif>tidak</option>
                      </select>
                      @error('status')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                      @enderror
                    </td>
                  </div>
                </tr>

                <tr>
                  <div class="form-group">
                    <td>
                      <label for="isi_berita">Deskripsi Layanan</label>
                    </td>
                    <td>
                      <textarea class="form-control tinymce-editor col-md-12" name="deskripsi" id="isi_berita" rows="8" placeholder="Masukan Deskripsi Layanan">
                        {{$layanan->deskripsi}}
                      </textarea>
                    </td>
                  </div>
                </tr>
              </table>
              <br>
              <div class="mb-2">
                <button type="submit" class="btn btn-info">Tambah Data</button>
                <a href="/admin/layanan" class="btn btn-success ml-1">Kembali</a><br>
              </div>            
            </form>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection