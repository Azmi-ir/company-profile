@extends ('admin.layout')

@section ('content-header')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Testimoni</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Testimoni</li>
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
            <h3 class="card-title">Edit Testimoni</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">

            <form method="post" action="/admin/testimoni/{{$testimoni->id}}" enctype="multipart/form-data">
              @csrf
              @method('patch')

              <table style="width: 100%;">
                <tr>
                  <div class="form-group">
                    <td>    
                      <label for="judul_berita">Nama</label>
                    </td>
                    <td>
                      <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="masukan nama" name="nama" value="{{ $testimoni->nama }}">
                      @error('nama')
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
                      <label for="judul_berita">Keterangan</label>
                    </td>
                    <td>
                      <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" placeholder="masukan keterangan" name="keterangan" value="{{ $testimoni->keterangan }}">
                      @error('keterangan')
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
                        <option value="1" @if ($testimoni->status == '1') selected="selected" @endif>aktif</option>
                        <option value="0" @if ($testimoni->status == '0') selected="selected" @endif>tidak</option>
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

                  <label for="thumbnail">Upload Foto</label>
                </td>
                <td>       
                  <input type="file" class="form-control @error('thumbnail') is invalid @enderror btn-sm" id="thumbnail" name="gambar" value="{{ $testimoni->gambar }}">
                  @error('thumbnail')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
                  <small><p>Foto : <a href="{{asset('/gambar_testimoni/'.$testimoni->gambar)}}" target="_blank">{{$testimoni->gambar}}</a></p></small>
                </td>
              </div>
            </tr>

            <tr>
              <div class="form-group">
                <td>
                  <label for="isi_berita">Deskripsi</label>
                </td>
                <td>
                  <textarea class="form-control tinymce-editor col-md-12" name="testimoni" id="testimoni" rows="8" placeholder="Masukan Deskripsi">{{$testimoni->testimoni}}
                  </textarea>
                </td>
              </div>
            </tr>
          </table>
          <br>
          <div class="mb-2">
            <button type="submit" class="btn btn-info">Simpan Data</button>
            <a href="/admin/testimoni" class="btn btn-success ml-1">Kembali</a><br>
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