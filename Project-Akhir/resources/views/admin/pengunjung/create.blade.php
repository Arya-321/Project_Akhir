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
  .form-group {
    margin-bottom: 20px;
  }

  .form-label {
    text-align: right;
  }

  .form-control {
    border-radius: 0;
  }

  .btn-primary {
    border-radius: 0;
  }
  .center {
    text-align: center;
  }
</style>

<br>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h3 class="center">Form Tambah Pengunjung</h3>
        </div>
        <div class="card-body">
          <form method="POST" action="{{url('admin/pengunjung/store')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group row">
              <label for="nama" class="col-md-3 col-form-label form-label">Nama</label>
              <div class="col-md-9">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-user"></i>
                    </div>
                  </div>
                  <input id="nama" name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama">
                  @error('nama')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="username" class="col-md-3 col-form-label form-label">Username</label>
              <div class="col-md-9">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-address-card"></i>
                    </div>
                  </div>
                  <input id="username" name="username" type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Masukkan Username">
                  @error('username')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
                </div>
              </div>
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
            <div class="form-group row">
              <label for="password" class="col-md-3 col-form-label form-label">Password</label>
              <div class="col-md-9">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-lock"></i>
                    </div>
                  </div>
                  <input id="password" name="password" type="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Masukkan Password">
                  @error('password')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="nohp" class="col-md-3 col-form-label form-label">No HP</label>
              <div class="col-md-9">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-phone"></i>
                    </div>
                  </div>
                  <input id="nohp" name="nohp" type="text" class="form-control  @error('nohp') is-invalid @enderror" placeholder="Masukkan no hp">
                  @error('nohp')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-md-3 col-form-label form-label">Email</label>
              <div class="col-md-9">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-envelope"></i>
                    </div>
                  </div>
                  <input id="email" name="email" type="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Masukkan email">
                  @error('email')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="alamat" class="col-md-3 col-form-label form-label">Alamat</label>
              <div class="col-md-9">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-map-marker"></i>
                    </div>
                  </div>
                  <input id="alamat" name="alamat" type="text" class="form-control  @error('alamat') is-invalid @enderror" placeholder="Masukkan alamat">
                  @error('alamat')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-md-3 col-md-9">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection