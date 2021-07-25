@extends ('admin.layout')

@section ('content-header')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Portofolio</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Portofolio</li>
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
            <h3 class="card-title">Edit Portofolio</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">

            <form method="post" action="/admin/portofolio/{{$portofolio->id}}" enctype="multipart/form-data">
              @csrf
              @method('patch')

              <table style="width: 100%;">
                <tr>
                  <div class="form-group">
                    <td>    
                      <label for="judul_berita">Judul</label>
                    </td>
                    <td>
                      <input type="text" class="form-control @error('judul_berita') is-invalid @enderror" id="judul_berita" placeholder="Masukan Judul Berita" name="judul" value="{{ $portofolio->judul }}">
                      @error('judul_berita')
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
                        <option value="1" @if ($portofolio->status == '1') selected="selected" @endif>aktif</option>
                        <option value="0" @if ($portofolio->status == '0') selected="selected" @endif>tidak</option>
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

                  <label for="thumbnail">Upload thumbnail</label>
                </td>
                <td>       
                  <input type="file" class="form-control @error('thumbnail') is invalid @enderror btn-sm" id="thumbnail" name="gambar" value="{{ $portofolio->gambar }}">
                  @error('thumbnail')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
                  <small><p>Thumbnail : <a href="{{asset('/gambar_portofolio/'.$portofolio->gambar)}}" target="_blank">{{$portofolio->gambar}}</a></p></small>
                </td>
              </div>
            </tr>

            <tr>
              <div class="form-group">
                <td>
                  <label for="isi_berita">Deskripsi</label>
                </td>
                <td>
                  <textarea class="form-control tinymce-editor col-md-12" name="deskripsi" id="isi_berita" rows="8" placeholder="Masukan Deskripsi">
                    {{$portofolio->deskripsi}}
                  </textarea>
                </td>
              </div>
            </tr>
          </table>
          <br>
          <div class="mb-2">
            <button type="submit" class="btn btn-info">Simpan Data</button>
            <a href="/admin/portofolio" class="btn btn-success ml-1">Kembali</a><br>
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