@extends ('admin.layout')

@section ('content-header')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
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
                <h3 class="card-title">Tambah User</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

        <form class="register" method="POST" action="/postregister">
                    @csrf
        <table class="table table-bordered">
          <tr>
            <div class="form-group">
              <td>    
                <label>Username</label>
              </td>
              <td style="width: 80%;">    
                <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" placeholder="Username" name="name" value="{{ old('name') }}">
                  @if ($errors->has('name'))
                    <div class="invalid-feedback">
                    {{$errors->first('name')}}
                    </div>
                  @endif
              </td>
            </div>
          </tr>

          <tr>
           <div class="form-group">
            <td>
              <label>Email</label>
            </td>
            <td>
              <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" placeholder="Email" name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                  <div class="invalid-feedback">
                    {{$errors->first('email')}}
                  </div>
                @endif
            </td>
          </div>  
          </tr>

          <tr>
            <div class="form-group">
              <td>
                <label>Password</label>
              </td>
              <td>
                <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : ''}}" placeholder="Password" name="password">
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
            <button type="submit" class="btn btn-primary my-3">Register</button>
            <a href="/admin/list-user" class="btn btn-success my-3">kembali</a>
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