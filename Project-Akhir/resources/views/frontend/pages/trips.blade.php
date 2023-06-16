@extends('frontend.layout.appmain')

@section('content')

<div class="site-section py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="heading-39101 mb-5">
              <span class="backdrop">Story</span>
              <span class="subtitle-39191">Discover Story</span>
              <h3>Our Story</h3>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quae expedita fugiat quo incidunt, possimus temporibus aperiam eum, quaerat sapiente.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis enim a pariatur molestiae.</p>
          </div>
          <div class="col-md-6" data-aos="fade-right">
            <img src="images/traveler.jpg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
<div class="site-section">
<div class="grid-container">
        @foreach($trips as $w)
        <div class="card">
            <div class="card-image-container">
                <img src="{{url('admin/image')}}/{{$w->foto}}" class="card-image">
            </div>
            <div class="card-title">{{$w->nama}}</div>
            <div class="card-description">{{$w->deksripsi}}</div>
            <div class="card-address">{{$w->alamat}}</div>
            
        </div>
        @endforeach
    </div>
</div>

          

        </div>

      </div>
    </div>


    
    @endsection

    <style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #f7f7f7;
            padding: 20px;
            text-align: center;
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
        }

        .card-description {
            font-size: 14px;
            margin-top: 5px;
        }

        .card-address {
            font-size: 12px;
            margin-top: 5px;
        }

        .card-image-container {
            width: 300px;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
        }

        .card-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card-rating {
            font-size: 20px;
            margin-top: 10px;
        }
    </style>