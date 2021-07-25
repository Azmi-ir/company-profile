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
            <h3 class="card-title">Tambah Data</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">

            <form method="post" action="/admin/portofolio" enctype="multipart/form-data">
              @csrf
              <table style="width: 100%;">
                <tr>
                  <div class="form-group">
                    <td>      
                      <label for="judul_berita">Judul </label>
                    </td>
                    <td>      
                      <input type="text" class="form-control @error('judul_berita') is-invalid @enderror" id="judul_berita" placeholder="Masukan Judul " name="judul" value="{{ old('judul') }}">
                      @error('judul_berita')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                      @enderror
                    </td>
                  </div>
                </tr>


               <input type="hidden" name="status" value="1">

               <tr>
                 <div class="form-group">
                  <td>
                    <label for="cover">Upload Thumbnail</label>
                  </td>
                  <td>      
                    <input type="file" class="form-control @error('gambar') is invalid @enderror btn-sm" id="gambar" name="gambar" required>
                    @error('cover')
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
                    <label for="isi_berita">Deskripsi</label>
                  </td>
                  <td>    
                    <textarea class="form-control  col-md-12" name="deskripsi" id="isi_berita" rows="8" placeholder="Masukan Deskripsi">
                    </textarea>
                  </td>
                </div>
              </tr>
            </table>

            <br>
            <div class="mb-2">
              <button type="submit" class="btn btn-info">Simpan</button>
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


<!--CKEDITOR-->

@endsection