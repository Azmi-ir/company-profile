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
          <li class="breadcrumb-item active">Create</li>
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
            <h3 class="card-title">Tambah Layanan</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">

            <form method="post" action="/admin/layanan" enctype="multipart/form-data">
              @csrf
              <table style="width: 100%;">
                <tr>
                  <div class="form-group">
                    <td>
                      <label for="nama_layanan">Nama Layanan</label>
                    </td>
                    <td>
                      <input type="text" class="form-control @error('nama_layanan') is-invalid @enderror" id="nama_layanan" placeholder="Masukan Nama Layanan" name="nama_layanan" value="{{ old('nama_layanan') }}">
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
                      <label for="isi_berita">Deskripsi Layanan</label>
                    </td>
                    <td>
                      <textarea class="form-control tinymce-editor col-md-12" name="deskripsi" id="isi_berita" rows="8" placeholder="Masukan Deskripsi Layanan">
                      </textarea>
                    </td>
                  </div>
                </tr>
              </table>
              
              <div class="form-group">
                <input type="hidden" class="btn-sm form-control @error('cover') is invalid @enderror"name="status" value="1">
              </div>

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



<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace( 'isi_berita', {
      filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
      filebrowserUploadMethod: 'form'
    });
  </script>
  @endsection