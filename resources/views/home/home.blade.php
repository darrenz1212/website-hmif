<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('asset/Logo-HMIF.png') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<nav id="navbar" class="fixed w-full z-10 top-0 left-0 transition duration-300 ease-in-out">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="">
                    <img class="h-10 w-10" src="{{ asset('asset/Logo-HMIF.png') }}" alt="Logo">

                </a>
            </div>
            <!-- Menu Navigasi -->
            <div class="hidden md:flex space-x-8">
                <a href="#" class="block px-1 py-2 text-gray-700 hover:text-[#0DB0BB]">Home</a>
                <a href="#" class="block px-1 py-2 text-gray-700 hover:text-[#0DB0BB]">About</a>
                <a href="#" class="block px-1 py-2 text-gray-700 hover:text-[#0DB0BB]">Event</a>
                <a href="#" class="block px-1 py-2 text-gray-700 hover:text-[#0DB0BB]">Aspiration Form</a>
                <a href="#" class="block px-1 py-2 text-gray-700 hover:text-[#0DB0BB]">Galery</a>
                <a href="#" class="block px-1 py-2 text-gray-700 hover:text-[#0DB0BB]">Contact</a>
            </div>
            <!-- Tombol Menu Mobile -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 hover:text-[#0DB0BB] focus:outline-none">
                    <!-- Ikon untuk menu mobile -->
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Menu Mobile -->
    <div id="mobile-menu" class="hidden md:hidden">
        <a href="#" class="block px-4 py-2 text-gray-700 hover:text-[#0DB0BB]">Home</a>
        <a href="#" class="block px-4 py-2 text-gray-700 hover:text-[#0DB0BB]">About</a>
        <a href="#" class="block px-4 py-2 text-gray-700 hover:text-[#0DB0BB]">Event</a>
        <a href="#" class="block px-4 py-2 text-gray-700 hover:text-[#0DB0BB]">Aspiration Form</a>
        <a href="#" class="block px-4 py-2 text-gray-700 hover:text-[#0DB0BB]">Galery</a>
        <a href="#" class="block px-4 py-2 text-gray-700 hover:text-[#0DB0BB]">Contact</a>
    </div>
</nav>
{{--=========================================================== Carousel =========================================================== --}}
<section class="bg-[#F5F5F5]">
    <div class="container pb-4" style="height: 40rem;">
        <div class="row h-100 d-flex align-items-center justify-content-center">
            <div class="col text-center mx-5">
                <div id="carouselExample" class="carousel slide" style="max-width: 1200px; max-height: 500px;">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('asset/hmif-full.png')}}" class="d-block w-100" alt="Full HMIF" style="object-fit: cover; height: 500px;">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('asset/MOOCS_04.png')}}" class="d-block w-100" alt="MOOCS" style="object-fit: cover; height: 500px;">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('asset/pilmapres_02.png')}}" class="d-block w-100" alt="Pilmapres" style="object-fit: cover; height: 500px;">
                        </div>
                    </div>
                    <!-- Custom Prev Button -->
                    <button class="carousel-control-prev custom-arrow" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true">
                            <i class="fas fa-chevron-left fa-2x"></i> <!-- Font Awesome Left Arrow -->
                        </span>
                        <span class="prev"> < </span>
                    </button>

                    <!-- Custom Next Button -->
                    <button class="carousel-control-next custom-arrow" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true">
                            <i class="fas fa-chevron-right fa-2x"></i> <!-- Font Awesome Right Arrow -->
                        </span>
                        <span class="next"> > </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <span style="height: 10rem; visibility: hidden;">.</span>
</section>
{{--=========================================================== Carousel end =========================================================== --}}
<section>
    <div class="container my-5 pt-5">
        <div class="row">
            <h1 class="font-sans text-5xl font-bold text-center underline">Helo</h1>
        </div>
    </div>
</section>






<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="js/app.js"></script>
</body>
</html>
