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
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-7">
            <div class="heading-39101 mb-5">
              <span class="backdrop text-center">Journey</span>
              <span class="subtitle-39191">Journey</span>
              <h3>Your Journey Starts Here</h3>
            </div>
          </div>
        </div>

       <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered table-striped" id="datatablesSimple">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Pengunjung</th>
                    <th class="text-center">Tempat Wisata</th>
                    <th class="text-center">Rating</th>
                    
                </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
                @endphp
                @foreach($rating as $r)
                <tr>
                <td>{{$no}}</td>
                    <td>{{$r->pengunjung}}</td>
                    <td>{{$r->wisata}}</td>
                    <td>{{$r->nama}}</td>
                    
                </tr>
                @php
                $no++;
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</div>

          

        </div>

      </div>
    </div>


    
    @endsection