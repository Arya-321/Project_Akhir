@extends('admin.layout.appadmin')
<<<<<<< HEAD

@section('content')

<br>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="form-box">
            @foreach($wisata as $w)
            <form method="POST" action="{{url('user/wisata/update/')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="hidden" name="id" value="{{$w->id}}" />
                    <label for="nama">Nama</label>
                    <input id="nama" name="nama" type="text" class="form-control" value="{{$w->nama}}">
                </div>
                <div class="form-group">
                    <label for="nohp">Deksripsi</label>
                    <input id="nohp" name="deksripsi" type="text" class="form-control" value="{{$w->deksripsi}}">
                </div>
                <div class="form-group">
                    <label for="email">Alamat</label>
                    <input id="email" name="alamat" type="text" class="form-control" value="{{$w->alamat}}">
                </div>
                <div class="form-group">
                    <label for="alamat">Foto</label>
                    <input id="alamat" name="foto" type="text" class="form-control" value="{{$w->foto}}">
                </div>
                <div class="form-group text-center">
                    <button name="submit" type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>

            @endforeach

            @endsection
=======
@section('content')

<style>
  .container {
    margin-top: 50px;
  }

  .form-group {
    margin-bottom: 20px;
  }

  img {
    max-width: 100%;
    height: auto;
    margin-top: 10px;
  }
</style>
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
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Update Wisata</div>
        <div class="card-body">
          @foreach($wisata as $w)
          <form method="POST" action="{{url('admin/wisata/update/')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$w->id}}">
            <div class="form-group row">
              <label for="nama" class="col-md-4 col-form-label text-md-right">Nama</label>
              <div class="col-md-8">
                <input id="nama" name="nama" type="text" class="form-control" value="{{$w->nama}}">
              </div>
            </div>
            <div class="form-group row">
              <label for="deksripsi" class="col-md-4 col-form-label text-md-right">Deksripsi</label>
              <div class="col-md-8">
                <input id="deksripsi" name="deksripsi" type="text" class="form-control" value="{{$w->deksripsi}}">
              </div>
            </div>
            <div class="form-group row">
              <label for="alamat" class="col-md-4 col-form-label text-md-right">Alamat</label>
              <div class="col-md-8">
                <input id="alamat" name="alamat" type="text" class="form-control" value="{{$w->alamat}}">
              </div>
            </div>
            <div class="form-group row">
              <label for="foto" class="col-md-4 col-form-label text-md-right">Foto</label>
              <div class="col-md-8">
                <input id="foto" name="foto" type="file" class="form-control">
                <div>
                  @empty($w->foto)
                  <img src="{{url('admin/image/nofoto.png')}}">
                  @else
                  <img src="{{url('admin/image')}}/{{$w->foto}}">
                  @endempty
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-8 offset-md-4">
                <button name="submit" type="submit" class="btn btn-primary">Update</button>
              </div>
            </div>
          </form>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
>>>>>>> denis
