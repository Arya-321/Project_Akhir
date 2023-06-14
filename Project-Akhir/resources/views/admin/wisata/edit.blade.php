@extends('admin.layout.appadmin')

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
                    <label for="deksripsi">Deksripsi</label>
                    <input id="deksripsi" name="deksripsi" type="text" class="form-control" value="{{$w->deksripsi}}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input id="alamat" name="alamat" type="text" class="form-control" value="{{$w->alamat}}">
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input id="foto" name="foto" type="file" class="form-control" value="{{$w->foto}}">
                </div>
                <div class="form-group text-center">
                    <button name="submit" type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>

            @endforeach

            @endsection