@extends('admin.layout.appadmin')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- menampilkan pesan error -->
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif
<!--  -->
<style>
  .container {
    margin-top: 50px;
  }

  .form-box {
  display: inline-block;
  border: 1px solid #ccc;
  padding: 20px;
  background-color: #f8f9fa;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  width: 600px;
  height: 650px;
}




  .form-box label {
    font-weight: bold;
  }
</style>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="form-box">
        @foreach($pengunjung as $p)
        <form method="POST" action="{{url('admin/pengunjung/update/')}}" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
            <input type="hidden" name="id" value="{{$p->id}}" />
            <label for="nama">Nama</label>
            <input id="nama" name="nama" type="text" class="form-control" value="{{$p->nama}}">
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input id="username" name="username" type="text" class="form-control" value="{{$p->username}}">
          </div>
          <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="radio_0" type="radio" class="custom-control-input" value="L"> 
        <label for="radio_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="radio_1" type="radio" class="custom-control-input" value="P"> 
        <label for="radio_1" class="custom-control-label">Perempuan</label>
      </div>
      
    </div>
  </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input id="password" name="password" type="text" class="form-control" value="{{$p->password}}">
          </div>
          <div class="form-group">
            <label for="nohp">No HP</label>
            <input id="nohp" name="nohp" type="text" class="form-control" value="{{$p->nohp}}">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input id="email" name="email" type="text" class="form-control" value="{{$p->email}}">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input id="alamat" name="alamat" type="text" class="form-control" value="{{$p->alamat}}">
          </div>
          <div class="form-group text-center">
            <button name="submit" type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
        @endforeach
      </div>
    </div>
  </div>
</div>

@endsection