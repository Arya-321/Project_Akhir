@extends('admin.layout.appadmin')
@section('content')

<<<<<<< HEAD
<h1> Details</h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="project-info-box mt-0">
                @foreach ($wisata as $w)
                <h5>Data Pengunjung</h5>
                <p class="mb-0">Vivamus pellentesque, felis in aliquam ullamcorper, lorem tortor porttitor erat, hendrerit porta nunc tellus eu lectus. Ut vel imperdiet est. Pellentesque condimentum, dui et blandit laoreet, quam nisi tincidunt tortor.</p>
            </div>
            <input type="hidden" value="{{$w->id}}" />
            <div class="project-info-box">
                <p><b>ID:</b>{{$w->id}}</p>
                <p><b>Nama:</b> {{$w->nama}}</p>
                <p><b>Deksripsi:</b> {{$w->deksripsi}}</p>
                <p><b>Alamat:</b> {{$2->alamat}}</p>
                <p><b>Foto:</b> {{$2->foto}}</p>
            </div>
            <div class="project-info-box mt-0 mb-0">
                <p class="mb-0">
                    <span class="fw-bold mr-10 va-middle hide-mobile">Share:</span>
                    <a href="#x" class="btn btn-xs btn-facebook btn-circle btn-icon mr-5 mb-0"><i class="fab fa-facebook-f"></i></a>
                    <a href="#x" class="btn btn-xs btn-twitter btn-circle btn-icon mr-5 mb-0"><i class="fab fa-twitter"></i></a>
                    <a href="#x" class="btn btn-xs btn-pinterest btn-circle btn-icon mr-5 mb-0"><i class="fab fa-pinterest"></i></a>
                    <a href="#x" class="btn btn-xs btn-linkedin btn-circle btn-icon mr-5 mb-0"><i class="fab fa-linkedin-in"></i></a>
                </p>
            </div>
        </div>
        <div class="col-md-7">
            <img src="https://www.bootdey.com/image/400x300/FFB6C1/000000" alt="project-image" class="rounded">
            <div class="project-info-box">
                <p><b>Categories:</b> Design, Illustration</p>
                <p><b>Skills:</b> Illustrator</p>
            </div>
        </div>
    </div>
=======
<style>
  .container {
    margin-top: 50px;
  }

  .project-info-box {
    background-color: #f8f9fa;
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .project-info-box h5 {
    margin-bottom: 10px;
    font-weight: bold;
    color: #333;
    text-transform: uppercase;
  }

  .project-info-box p {
    margin-bottom: 10px;
    color: #666;
  }

  .project-info-box img {
    max-width: 100%;
    height: auto;
    margin-top: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .back-button {
    margin-top: 20px;
  }
</style>

<h1 align="center">Detail Wisata</h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<div class="container">
  @foreach ($wisata as $w)
  <div class="row">
    <div class="col-md-5">
      <div class="project-info-box mt-0">
        <h5>Detail Wisata</h5>
        <p><i class="fas fa-id-badge"></i> <b>ID:</b> {{$w->id}}</p>
        <p><i class="fas fa-heading"></i> <b>Nama:</b> {{$w->nama}}</p>
        <p><i class="fas fa-info-circle"></i> <b>Deskripsi:</b> {{$w->deksripsi}}</p>
        <p><i class="fas fa-map-marker-alt"></i> <b>Alamat:</b> {{$w->alamat}}</p>
      </div>
      <input type="hidden" value="{{$w->id}}" />
    </div>
    <div class="col-md-7">
      @empty($w->foto)
      <img src="{{url('admin/image/nofoto.png')}}" alt="project-image" class="rounded">
 @else
<img src="{{url('admin/image')}}/{{$w->foto}}" alt="project-image" class="rounded">
      @endempty
      <div class="project-info-box back-button">
        <a href="{{url('admin/wisata')}}">
          <button class="btn btn-primary btn-lg"><i class="fas fa-arrow-left"></i> Back</button>
        </a>
      </div>
    </div>
  </div>
>>>>>>> denis
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">

</script>
@endforeach
<<<<<<< HEAD
@endsection
=======

@endsection
>>>>>>> denis
