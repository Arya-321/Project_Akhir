@extends('admin.layout.appadmin')
@section('content')

<style>
  .container {
    margin-top: 50px;
    
  }

  .project-info-box {
  display: inline-block;
  border: 1px solid #ccc;
  padding: 30px;
  margin-bottom: 20px;
  background-color: #f8f9fa;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}


  .project-info-box p {
    margin-bottom: 10px;
  }

  .project-info-box b {
    font-weight: bold;
  }

  h1 {
    margin-bottom: 30px;
  }

  .center-table {
    margin: 0 auto;
    float: none;
  }
</style>

<div class="container">
  <h1 class="text-center">Details</h1>
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="project-info-box center-table">
        @foreach ($pengunjung as $p)
        <p><b>Nama:</b> {{$p->nama}}</p>
        <p><b>Username:</b> {{$p->username}}</p>
        <p><b>Jenis Kelamin:</b> {{$p->jk}}</p>
        <p><b>Password:</b> {{$p->password}}</p>
        <p><b>No HP:</b> {{$p->nohp}}</p>
        <p><b>Email:</b> {{$p->email}}</p>
        <p><b>Alamat:</b> {{$p->alamat}}</p>
        @endforeach
      </div>
    </div>
  </div>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">

</script>
@endsection