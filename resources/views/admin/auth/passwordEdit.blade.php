@extends ('admin.layout')

@section ('content-header')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profil</li>
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
                <h3 class="card-title">Edit Data Profil</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

        <form method="post" action="updatepassword">
        @method('patch')
        @csrf
          @if (session('success'))
          <div class="alert alert-success">
          {{session('success')}}
          </div>
          @endif

          @if (session('error'))
          <div class="alert alert-danger">
          {{session('error')}}
          </div>
          @endif

        <table class="table table-bordered">
        <tr> 
        <div class="form-group">
          <td>  
          <label>Password lama</label>
          </td>
          <td style="width: 80%;">  
          <input type="password" class="form-control {{ $errors->has('oldpassword') ? 'is-invalid' : ''}}" placeholder="masukan password lama" name="oldpassword">
          @if ($errors->has('oldpassword'))
            <div class="invalid-feedback">
              {{$errors->first('oldpassword')}}
            </div>
          @endif
          </td> 
        </div>
        </tr>

        <tr> 
        <div class="form-group">
          <td>
            <label>Password baru</label>
          </td>
          <td>
            <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : ''}}" placeholder="masukan password baru" name="password">
            @if ($errors->has('password'))
            <div class="invalid-feedback">
            {{$errors->first('password')}}
            </div>
            @endif
          </td>
        </div>
        </tr>
        
        <tr>  
        <div class="form-group">
          <td>  
          <label>Konfirmasi Password</label>
          </td>
          <td>  
          <input type="password" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : ''}}" placeholder="Konfirmasi Password" name="password_confirmation">
            @if ($errors->has('password_confirmation'))
              <div class="invalid-feedback">
                {{$errors->first('password_confirmation')}}
              </div>
            @endif
          </td>
        </div>
        </tr>
        </table>


        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="/admin/user/{{Auth()->user()->id}}/edit" class="btn btn-success ml-2">Kembali</a>
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