@extends ('admin.layout')

@section ('content-header')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Berita</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Berita</li>
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
            <h3 class="card-title">Tambah Berita</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">

            <form method="post" action="/admin/berita" enctype="multipart/form-data">
              @csrf
              <table style="width: 100%;">
                <tr>
                  <div class="form-group">
                    <td>      
                      <label for="judul_berita">Judul Berita</label>
                    </td>
                    <td>      
                      <input type="text" class="form-control @error('judul_berita') is-invalid @enderror" id="judul_berita" placeholder="Masukan Judul Berita" name="judul_berita" value="{{ old('judul_berita') }}">
                      @error('judul_berita')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                      @enderror
                    </td>
                  </div>
                </tr>

                

               <input type="hidden" name="publisher" value="{{Auth()->user()->name}}">

               <tr>
                 <div class="form-group">
                  <td>
                    <label for="cover">Upload Thumbnail</label>
                  </td>
                  <td>      
                    <input type="file" class="form-control @error('gambar') is invalid @enderror btn-sm" id="gambar" name="gambar" required="">
                    @error('gambar')
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
                    <label for="isi_berita">Isi Berita</label>
                  </td>
                  <td>    
                    <textarea class="form-control tinymce-editor col-md-12" name="isi_berita" id="isi_berita" rows="8" placeholder="Masukan isi berita">
                    </textarea>
                  </td>
                </div>
              </tr>
            </table>

            <br>
            <div class="mb-2">
              <button type="submit" class="btn btn-info">Buat Berita</button>
              <a href="/berita" class="btn btn-success ml-1">Kembali</a><br>
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


<!--CKEDITOR-->

@endsection