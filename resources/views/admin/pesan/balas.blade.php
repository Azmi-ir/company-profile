@extends ('admin.layout')

@section ('content-header')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Pesan</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Pesan</li>
          <li class="breadcrumb-item active">Balas</li>
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
      <!-- /.col -->
      <div class="col-md-12">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">Kirim Pesan Balasan</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form method="GET" action="/admin/kirim-balasan/{{$detail_pesan->id}}">
              <table style="width:100%;">
                <tr>
                  <div class="form-group">
                    <td>
                      <label>Nama</label>
                    </td>
                    <td>
                      <input class="form-control" value="{{$detail_pesan->nama}}" name="nama">
                    </td>
                  </div>
                </tr>

                <tr>
                  <div class="form-group">
                    <td>
                      <label>Email</label>
                    </td>
                    <td>
                      <input class="form-control" value="{{$detail_pesan->email}}" name="email">
                    </td>
                  </div>
                </tr>

                <tr>
                  <div class="form-group">
                    <td>
                      <label>Subjek</label>
                    </td>
                    <td>
                      <input class="form-control" value="{{$detail_pesan->subjek}}" name="subjek">
                    </td>
                  </div>
                </tr>

                <tr>
                  <div class="form-group">
                    <td>
                      <label for="tembusan">Tembusan</label>
                    </td>
                    <td>
                      <input type="tembusan" class="form-control" id="xtembusan" placeholder="Cc" name="tembusan" value="{{ old('tembusan') }}">
                    </td>
                  </div>
                </tr>

                <tr>
                  <div class="form-group">
                    <td>
                      <label>Isi pesan</label>
                    </td>
                    <td>
                      <textarea class="form-control" rows="4" placeholder="Masukan Isi Pesan" name="pesan" id="isi_berita"></textarea>
                    </td>
                  </tr>
                </div>
              </table>

              <br>
              <div class="form-group">
                <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Balas Pesan</button>
                <a href="/admin/pesan-masuk" class="btn btn-info">Batal</a>
              </div>
            </form>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <div class="float-right">
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

<script>
  function getInputValue(){
            // Selecting the input element and get its value 
            var inputVal = document.getElementById("myInput").value;
            
            // Displaying the value
            alert(inputVal);
          }
        </script>
        @endsection