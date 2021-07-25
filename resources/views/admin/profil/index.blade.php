@extends ('admin.layout')

@section ('content-header')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Profil Instansi</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Profil Instansi</li>
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

        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Edit Profil Instansi</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

              <form method="post" action="/admin/update-profil/{{$profil->id}}" enctype="multipart/form-data">
                @csrf

                <table style="width: 100%;">
                  <tr>    
                    <div class="form-group">
                      <td style="width: 15%;">
                        <label for="alamat">Alamat</label>
                      </td>
                      <td style="width: 85%;">
                        <input type="text" class="form-control @error('alamat') is invalid @enderror" id="alamat" name="alamat" value="{{$profil->alamat}}">
                      </td>
                      @error('alamat')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                      @enderror
                    </div>
                  </tr>

                  <tr>    
                    <div class="form-group">
                      <td style="width: 15%;">
                        <label for="telpon">Telpon</label>
                      </td>
                      <td style="width: 85%;">
                        <input type="number" class="form-control @error('telpon') is invalid @enderror" id="telpon" name="telpon" value="{{$profil->telpon}}">
                      </td>
                      @error('telpon')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                      @enderror
                    </div>
                  </tr>

                  <tr>    
                    <div class="form-group">
                      <td style="width: 15%;">
                        <label for="email">Email</label>
                      </td>
                      <td style="width: 85%;">
                        <input type="text" class="form-control @error('email') is invalid @enderror" id="email" name="email" value="{{$profil->email}}">
                      </td>
                      @error('email')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                      @enderror
                    </div>
                  </tr>


                  <tr>    
                    <div class="form-group">
                      <td style="width: 15%;">
                        <label for="facebook">Facebook</label>
                      </td>
                      <td style="width: 85%;">
                        <input type="text" class="form-control @error('facebook') is invalid @enderror" id="facebook" name="facebook" value="{{$profil->facebook}}">
                      </td>
                      @error('facebook')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                      @enderror
                    </div>
                  </tr>

                  <tr>    
                    <div class="form-group">
                      <td style="width: 15%;">
                        <label for="instagram">Instagram</label>
                      </td>
                      <td style="width: 85%;">
                        <input type="text" class="form-control @error('instagram') is invalid @enderror" id="instagram" name="instagram" value="{{$profil->instagram}}">
                      </td>
                      @error('instagram')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                      @enderror
                    </div>
                  </tr>


                </table><br>


                <button type="submit" class="btn btn-info">Simpan</button>
              </div>

            </form>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>

  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection