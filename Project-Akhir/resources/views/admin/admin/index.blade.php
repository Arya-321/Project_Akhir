@extends('admin.layout.appadmin')

@section('content')


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
                               
                                <a href="{{url('admin/admin/create')}}" class="btn btn-primary btn-sm">Tambah</a>
                                
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <!-- pemanggilan isi database -->
                                    <tbody>
                                        @php
                                        $no = 1;
                                        @endphp
                                        @foreach($admin as $a)
                                        <tr>
                                            <td>{{$no}}</td>
                                            <td>{{$a->nama}}</td>
                                            <td>{{$a->username}}</td>
                                            <td>{{$a->password}}</td>
                                            <td>
                                                <form action="#" method="POST">
                                                    <a class="btn btn-info btn-sm" href="{{url('admin/admin/show/'.$a->id)}}">Detail</a>
                    
                                                    <a class="btn btn-warning btn-sm" href="{{url('admin/admin/edit/'.$a->id)}}">Ubah</a>
                                                    <!-- <button type="submit"  class="btn btn-danger btn-sm" name="proses" value="hapus"
                                                    onclick="return confirm('Anda yakin akan dihapus?')">Hapus</button> -->

                                                    <!-- <input type="hidden" name="idx" value=""> -->
                                                    <!-- Button trigger modal -->
<button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$a->id}}">
  Hapus 
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal{{$a->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <a  class="btn btn-danger" href="{{url('admin/admin/delete/'.$a->id)}}">Hapus</a>
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
                    
@endsection