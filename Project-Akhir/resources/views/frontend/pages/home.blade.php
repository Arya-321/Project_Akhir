@extends('frontend.layout.appmain')

@section('content')


<!-- <div class="ftco-blocks-cover-1">
<div class="site-section-cover overlay" style="background-image: url('{{asset('frontend/images/hero_1.jpg')}}')"></div> -->


    <div class="site-section py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="heading-39101 mb-5">
              <span class="backdrop">Cerita</span>
              <span class="subtitle-39191">Buatkan Cerita Mu</span>
              <h3>Cerita kita</h3>
            </div>
            <p>Di puncak bukit yang tinggi, terdapat seorang wanita yang duduk dengan tenang. Matanya terpesona oleh panorama yang memukau di hadapannya. Gunung-gunung menjulang gagah, lembah hijau yang menghampar, dan sungai yang mengalir dengan riak yang lembut. Dia terpesona oleh keindahan alam yang tak tergambarkan dalam kata-kata. Dalam diamnya, dia merasakan kedamaian dan kebesaran alam yang mengalir dalam setiap nafasnya. .</p>
            <p>Di saat itu, dia tahu bahwa keindahan alam adalah keajaiban terbesar yang diberikan kepada manusia, dan dia berjanji pada dirinya sendiri untuk selalu menghargainya dan menjaganya dengan penuh cinta.</p>
          </div>
          <div class="col-md-6" data-aos="fade-right">
            <img src="{{asset('frontend/images/traveler.jpg')}}" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
</div>
    <div class="site-section">

      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-7">
            <div class="heading-39101 mb-5">
              <span class="backdrop text-center">Tempat Wisata Favorit</span>
              <span class="subtitle-39191">Tempat Wisata Favorit</span>
              <h3>Tempat Wisata Favorit ada  Disini</h3>
            </div>
          </div>
        </div>
        <div class="row">
  @foreach($home as $w)
    <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch" data-aos="fade-up">
      <div class="card bg-light"> <!-- Menambahkan kelas bg-light untuk latar belakang abu-abu -->
        <img src="{{url('admin/image')}}/{{$w->foto}}" alt="Image" class="card-img-top" style="width: 100%; height: 200px; object-fit: cover;">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">{{$w->nama}}</h5>
          <p class="card-text text-justify">{{$w->deksripsi}}</p>
          <p class="card-text"><strong>Alamat:</strong> {{$w->alamat}}</p>
          <div class="d-flex align-items-center mt-auto">
            <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span> <!-- Menggunakan ikon bintang -->
            <!-- <a href="{{url('frontend/pages/home_detail/'.$w->id)}}" class="btn btn-primary ml-auto">Detail</a> -->
          </div>
        </div>
      </div>
    </div>
  @endforeach
</div>






<div>
    
</div>
      </div>
    </div>
    </div>
    <div class="site-section">

      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-10">
            <div class="heading-39101 mb-5">
              <span class="backdrop text-center">Our Team</span>
              <span class="subtitle-39191">Amazing Staff</span>
              <h3>Meet Our Team</h3>
            </div>
          </div>
        </div>

      </div>
        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="person-29191 text-center">
              <img src="{{asset('frontend/images/person_1.jpg')}}" alt="Image" class="img-fluid mb-4">
              <div class="px-4">
                <h2 class="mb-2">John Doe</h2>
                <p class="caption mb-4">Staff</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, maiores? Eos alias fugit eius, repudiandae molestias error</p>
                <div class="social_29128 mt-5">
                <a href="#"><span class="icon-facebook"></span></a>  
                <a href="#"><span class="icon-instagram"></span></a>  
                <a href="#"><span class="icon-twitter"></span></a>  
               </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="person-29191 text-center">
              <img src="{{asset('frontend/images/person_2.jpg')}}" alt="Image" class="img-fluid mb-4">
              <div class="px-4">
                <h2 class="mb-2">Jean Doe</h2>
                <p class="caption mb-4">Staff</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, maiores? Eos alias fugit eius, repudiandae molestias error</p>
                <div class="social_29128 mt-5">
                <a href="#"><span class="icon-facebook"></span></a>  
                <a href="#"><span class="icon-instagram"></span></a>  
                <a href="#"><span class="icon-twitter"></span></a>  
               </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="person-29191 text-center">
              <img src="{{asset('frontend/images/person_3.jpg')}}" alt="Image" class="img-fluid mb-4">
              <div class="px-4">
                <h2 class="mb-2">Claire Dormey</h2>
                <p class="caption mb-4">Staff</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, maiores? Eos alias fugit eius, repudiandae molestias error</p>
                <div class="social_29128 mt-5">
                <a href="#"><span class="icon-facebook"></span></a>  
                <a href="#"><span class="icon-instagram"></span></a>  
                <a href="#"><span class="icon-twitter"></span></a>  
               </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="site-section">

      <div class="container">

        <div class="row justify-content-center text-center">
          <div class="col-md-10">
            <div class="heading-39101 mb-5">
              <span class="backdrop text-center">Testimonials</span>
              <span class="subtitle-39191">Testimony</span>
              <h3>Testimoni Pengunjung</h3>
            </div>
          </div>
        </div>

        <div class="container">
  <div class="row">
    @foreach($ulasan->take(4) as $key => $u)
      <div class="col-md-6">
        <div class="testimonial-39191">
          <div class="card testimonial-card">
            <div class="card-body">
              <h5 class="card-title">{{ $u->pengunjung }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{ $u->wisata }}</h6>
              <p class="card-text">{{ $u->komentar }}</p>
            </div>
          </div>
        </div>
      </div>
      @if(($key + 1) % 2 == 0)
        </div><div class="row">
      @endif
    @endforeach
  </div>
</div>




    <div class="site-section">

      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-10">
            <div class="heading-39101 mb-5">
              <span class="backdrop text-center">Blog</span>
              <span class="subtitle-39191">Updates</span>
              <h3>Gambar</h3>
            </div>
          </div>
        </div>

        <div class="container">

  <div class="row">
    @foreach($home as $w)
      <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch" data-aos="fade-up">
        <div class="card bg-light">
          <img src="{{url('admin/image')}}/{{$w->foto}}" alt="Image" class="card-img-top" style="width: 100%; height: 200px; object-fit: cover;">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">{{$w->nama}}</h5>
            <p class="card-text text-justify">{{$w->deskripsi}}</p>
            <p class="card-text"><strong>Alamat:</strong> {{$w->alamat}}</p>
            <div class="d-flex align-items-center mt-auto">
              <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
      </div>
</div>
    @endsection
    <style>
  .listing-image img {
    width: 100%;
    height: 200px; /* Ubah tinggi sesuai kebutuhan Anda */
    object-fit: cover;
  }

  .testimonial-39191 {
    width: 100%;
    height: 350px; /* Ubah tinggi sesuai kebutuhan Anda */
    background-color: #B12C2C; /* Ubah warna latar belakang sesuai kebutuhan Anda */
    padding: 20px;
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .custom-text {
    font-size: 10px; /* Ubah ukuran teks sesuai kebutuhan */
  }

</style>

