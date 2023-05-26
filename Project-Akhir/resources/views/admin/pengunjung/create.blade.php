@extends('admin.layout.appadmin')

@section('content')

<br>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1 align="center"> Form Tambah Pegawai</h1>
<form method="POST" action="{{url('admin/pengunjung/store')}}" enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">ID</label> 
    <div class="col-8">
      <input id="text1" name="id" type="text" class="form-control" placeholder="masukan id">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="text1" name="namaPengunjung" type="text" class="form-control" placeholder="masukan nama">
    </div>
  </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="text2" name="email" type="email" class="form-control" placeholder="masukan email">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">No HP</label> 
    <div class="col-8">
      <input id="text3" name="noHP" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="textarea" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <textarea id="textarea" name="alamat" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>



@endsection