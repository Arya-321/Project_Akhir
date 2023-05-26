@extends('admin.layout.appadmin')

@section('content')

<br>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1 align="center"> Form Tambah Rating</h1>
<form method="POST" action="{{url('admin/rating/store')}}" enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">ID</label> 
    <div class="col-8">
      <input id="text1" name="idRating" type="text" class="form-control" placeholder="masukan id">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nilai Rating</label> 
    <div class="col-8">
      <input id="text1" name="nilaiRating" type="text" class="form-control" placeholder="masukan nilai rating">
    </div>
  </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Tanggal Rating</label> 
    <div class="col-8">
      <input id="text2" name="tgl_rating" type="text" class="form-control" placeholder="masukan tanggal rating">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>



@endsection