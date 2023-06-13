@include('user.layout.top')
@include('user.layout.menu')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        @include('sweetalert::alert')
            @yield('content')
            
            <!-- yield ini adalah mendeklarasikan yang akan diisi konten ketika yieldnya dipanggil
    didalam konten masing-masing, contoh yield yang diatas menggunakan value content -->
        </div>
    </main>
    @include('user.layout.bottom')
</div>