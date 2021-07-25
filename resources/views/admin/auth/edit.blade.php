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

            <form method="post" action="/admin/user/update">
              @method('patch')
              @csrf
              <table style="width: 100%" class="table table-bordered">
                <tr>
                  <div class="form-group">
                    <td style="width: 10%;">  
                      <label>Username</label>
                    </td>
                    <td style="width: 80%;">  
                      <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" placeholder="Username" name="name" value="{{ $user['name'] }}">
                      @if ($errors->has('name'))
                      <div class="invalid-feedback">
                        {{$errors->first('name')}}
                      </div>
                      @endif
                    </div>
                  </td>
                </tr>


                <tr>
                  <div class="form-group">
                    <td style="width: 10%;">   
                     <label>Email</label>
                   </td>
                   <td style="width: 80%;">   
                     <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" placeholder="Email" name="email" value="{{ $user['email'] }}">
                     @if ($errors->has('email'))
                     <div class="invalid-feedback">
                       {{$errors->first('email')}}
                     </div>
                     @endif
                   </div>
                 </td>
               </tr>

             </table>

             <button type="submit" class="btn btn-info">Update Profil</button>
             <a href="/admin/user/editpassword" class="btn btn-success ml-2">Ganti Password</a>
           </div>
         </form>
         <form action="/admin/hapus/{{Auth()->user()->id}}" method="post" class="d-inline ml-3 mb-2" onsubmit="return confirm('Yakin ingin menghapus akun?')">
          @method('delete')
          @csrf
          <button type="submit" class="btn btn-danger ml-2" >Hapus Akun</button>
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