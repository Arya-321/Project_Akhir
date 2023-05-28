@extends('admin.layout.appadmin')

@section('content')

<br>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@foreach($tmpt_wisata as $t)
<h1 align="center"> Form Edit Tempat Wisata</h1>
<form method="POST" action="{{url('admin/tmpt_wisata/update/')}}" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Nama Tempat Wisata</label>
        <div class="col-8">
            <input id="text1" name="nama" type="text" class="form-control" value="{{$t->namatmpt_wisata}}">
        </div>
    </div>
    </div>
    <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Deskripsi Tempat Wisata</label>
        <div class="col-8">
            <input id="textarea" name="deskripsi" type="text" class="form-control" value="{{$t->deskripsi}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="text3" class="col-4 col-form-label">Gambar</label>
        <div class="col-8">
            <input id="text3" name="gambar" type="text" class="form-control" value="{{$t->gambar}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="textarea" class="col-4 col-form-label">Alamat</label>
        <div class="col-8">
            <textarea id="textarea" name="alamat" cols="40" rows="5" class="form-control" value="{{$t->alamat}}"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

@endforeach

@endsection