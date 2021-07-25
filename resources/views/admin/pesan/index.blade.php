@extends ('admin.layout')

@section ('content-header')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pesan Masuk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Pesan</li>
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
                <h3 class="card-title">Pesan Masuk</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <h5>*Tekan tombol <i class="fas fa-check btn-success btn-sm"></i> untuk mengubah status pesan, apabila sudah di balas</h5>
                <br>
                <table id="example1" class="table">
                  <thead>
                  <tr>
                    <th style="width: 10%;">No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Subjek</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($pesan as $item)
                  <tr>
                    <td>{{$loop->iteration}}</td>  
                    <td>{{$item->nama}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->subjek}}</td>
                    <td>
                      @if($item->status == '1')
                        <span class="badge badge-info">sudah dibalas</span>
                      @else
                        <span class="badge badge-warning">belum dibalas</span>
                        </form>
                      @endif
                    </td>

                    <td>
                          <a class="btn btn-primary btn-sm" href="/admin/lihat-pesan/{{$item->id}}">
                              <i class="fas fa-eye"></i>
                          </a>
                          <form action="/admin/hapus-pesan/{{ $item->id }}" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data?')">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger ml-2 btn-sm" ><i class="fas fa-trash"></i></button>
                        </form>
                        @if($item->status == '0')
                        <form action="/admin/ubah-pesan/{{ $item->id }}" method="post" class="d-inline">
                        @csrf
                        <input type="hidden" name="status" value="1">
                        <button type="submit" class="btn btn-success ml-2 btn-sm" ><i class="fas fa-check"></i></button>
                        </form>
                        @endif
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
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
