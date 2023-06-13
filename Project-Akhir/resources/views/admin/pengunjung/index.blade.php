@extends('admin.layout.appadmin')

@section('content')

<<<<<<< HEAD

<h1 class="mt-4">Tables</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active">Tables</li>
</ol>
<div class="card mb-4">
    <div class="card-body">
        DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
        <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
        .
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">
        <!-- <i class="fas fa-table me-1"></i>
                                DataTable Example -->
        <!-- membuat tombol mengarahkan ke file produk_form.php -->

        <a href="{{url('admin/pengunjung/create')}}" class="btn btn-primary btn-sm">Tambah</a>

    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>NoHP</th>

                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>NoHP</th>

                    <th>Action</th>
                </tr>
            </tfoot>
            <!-- pemanggilan isi database -->
            <tbody>
                @php
                $no = 1;
                @endphp
                @foreach($pengunjung as $p)
                <tr>
                    <td>{{$no}}</td>
                    <td>{{$p->id}}</td>
                    <td>{{$p->namaPengunjung}}</td>
                    <td>{{$p->alamat}}</td>
                    <td>{{$p->email}}</td>
                    <td>{{$p->noHP}}</td>

                    <td>
                        <form action="#" method="POST">
                            <a class="btn btn-info btn-sm" href="{{url('admin/pengunjung/show/'.$p->id)}}">Detail</a>

                            <a class="btn btn-warning btn-sm" href="{{url('admin/pengunjung/edit/'.$p->id)}}">Ubah</a>
                            <!-- <button type="submit"  class="btn btn-danger btn-sm" name="proses" value="hapus"
                                                    onclick="return confirm('Anda yakin akan dihapus?')">Hapus</button> -->

                            <!-- <input type="hidden" name="idx" value=""> -->
                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$p->id}}">
                                Hapus
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{$p->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda Yakin akan menghapus data?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                            <a class="btn btn-danger" href="{{url('admin/pengunjung/delete/'.$p->id)}}">Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </td>
                </tr>
                @php
                $no++
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</div>

=======
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{url('admin/pegawai/importexcel')}}" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
            {{csrf_field()}}
            <input type="file" name="file" >

        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    </form>
  </div>
</div>





<!-- end modal -->
<h1 class="mt-4">Tables</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Dashboard Admin</a></li>
    <li class="breadcrumb-item active">Tables</li>
</ol>
<div class="card mb-4">
    <div class="card-body">
        DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
        <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
        .
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">
        <!-- <i class="fas fa-table me-1"></i>
                                DataTable Example -->
        <!-- membuat tombol mengarahkan ke file produk_form.php -->

        <a href="{{url('admin/pengunjung/create')}}" class="btn btn-primary btn-sm">Tambah</a>
    </div>
    <div class="card-header">
                            <a href="{{url('admin/pengunjung/pengunjungPDF')}}" class="btn btn-success btn-sm" target="_blank">Eksport PDF</a>
                            <a href="{{url('admin/pengunjung/exportexcel')}}" class="btn btn-success btn-sm" > Export To EXCEL</a>
                            <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal">
                               Import To Excel
                            </button>
                            </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Jenis Kelamin</th>
                    <th>Password</th>
                    <th>No Hp</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Jenis Kelamin</th>
                    <th>Password</th>
                    <th>No Hp</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <!-- pemanggilan isi database -->
            <tbody>
                @php
                $no = 1;
                @endphp
                @foreach($pengunjung as $p)
                <tr>
                    <td>{{$no}}</td>
                    <td>{{$p->nama}}</td>
                    <td>{{$p->username}}</td>
                    <td>{{$p->jk}}</td>
                    <td>{{$p->password}}</td>
                    <td>{{$p->nohp}}</td>
                    <td>{{$p->email}}</td>
                    <td>{{$p->alamat}}</td>
                    <td>
                        <form action="#" method="POST">
                            <a class="btn btn-info btn-sm" href="{{url('admin/pengunjung/show/'.$p->id)}}">Detail</a>

                            <a class="btn btn-warning btn-sm" href="{{url('admin/pengunjung/edit/'.$p->id)}}">Ubah</a>
                            <!-- <button type="submit"  class="btn btn-danger btn-sm" name="proses" value="hapus"
                                                    onclick="return confirm('Anda yakin akan dihapus?')">Hapus</button> -->

                            <!-- <input type="hidden" name="idx" value=""> -->
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$p->id}}">
                                Hapus
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{$p->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda Yakin akan menghapus data?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                            <a class="btn btn-danger" href="{{url('admin/pengunjung/delete/'.$p->id)}}">Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </td>
                </tr>
                @php
                $no++
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</div>

>>>>>>> denis
@endsection