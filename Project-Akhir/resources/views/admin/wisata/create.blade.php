@extends('admin.layout.appadmin')

@section('content')

<br>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1 align="center"> Form Tambah Wisata</h1>
<form method="POST" action="{{url('admin/wisata/store')}}" enctype="multipart/form-data">
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
            <input id="text1" name="nama" type="text" class="form-control" placeholder="masukan nama">
        </div>
    </div>
    <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Deskripsi</label>
        <div class="col-8">
            <input id="text2" name="deksripsi" type="text" class="form-control" placeholder="masukan deksripsi">
        </div>
    </div>
    <div class="form-group row">
        <label for="text3" class="col-4 col-form-label">Alamat</label>
        <div class="col-8">
            <input id="text3" name="alamat" type="text" class="form-control" placeholder="masukan alamat">
        </div>
    </div>
    <div class="form-group row">
        <label for="text4" class="col-4 col-form-label">Foto</label>
        <div class="col-8">
            <input id="text4" name="foto" type="file" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>



@endsection