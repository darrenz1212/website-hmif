<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('asset/Logo-HMIF.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
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
                <a href="#home" class="block px-1 py-2 text-gray-700 hover:text-[#0DB0BB]">Home</a>
                <a href="#about" class="block px-1 py-2 text-gray-700 hover:text-[#0DB0BB]">About</a>
                <a href="#event" class="block px-1 py-2 text-gray-700 hover:text-[#0DB0BB]">Event</a>
                <a href="{{ route('aspiration')}}" class="block px-1 py-2 text-gray-700 hover:text-[#0DB0BB]">Aspiration Form</a>
                <a href="#news" class="block px-1 py-2 text-gray-700 hover:text-[#0DB0BB]">News</a>
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
        <a href="#home" class="block px-1 py-2 text-gray-700 hover:text-[#0DB0BB]">Home</a>
        <a href="#about" class="block px-1 py-2 text-gray-700 hover:text-[#0DB0BB]">About</a>
        <a href="#event" class="block px-1 py-2 text-gray-700 hover:text-[#0DB0BB]">Event</a>
        <a href="{{ route('aspiration')}}" class="block px-1 py-2 text-gray-700 hover:text-[#0DB0BB]">Aspiration Form</a>
        <a href="#news" class="block px-1 py-2 text-gray-700 hover:text-[#0DB0BB]">News</a>
        <a href="#" class="block px-1 py-2 text-gray-700 hover:text-[#0DB0BB]">Contact</a>
    </div>
</nav>
{{--=========================================================== Hero =========================================================== --}}
<section class="bg-[#F5F5F5]" data-aos="fade" data-aos-duration="2000" id="home">
    <div
        class="hero min-h-screen"
        style="background-image: url('{{ asset('asset/fullteam.png') }}');">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Welcome to HMIF official website</h1>
                <p class="mb-5">
                    Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                    quasi. In deleniti eaque aut repudiandae et a id nisi.
                </p>
            </div>
        </div>
    </div>
</section>
{{--=========================================================== Hero end =========================================================== --}}
{{--=========================================================== About HMIF =========================================================== --}}
<section id="about">
    <div class="container-sm  my-5 pt-5 pb-10">
        <div class="row">
            <h1 class="font-sans text-5xl font-semibold text-center underline-offset-8">About HMIF</h1>
        </div>
        <div class="row pt-8 my-5 mx-5 pl-5">
            <div class="col-4" data-aos="fade-up" data-aos-duration="2000">
                <img src="{{ asset('asset/Logo-HMIF-Tulisan.png') }}" alt="Logo HMIF">
            </div>
            <div class="col-sm-8" data-aos="fade-left" data-aos-duration="2000">
                <h1 class="font-sans font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mauris magna, eleifend quis luctus a, tincidunt eu mauris. Mauris nec velit lorem. Fusce imperdiet, augue ut tempus facilisis, orci nulla maximus lacus, ut eleifend dui dui ac ante. Quisque nec lacus et est tincidunt tempus. Nulla sollicitudin auctor nibh ut ullamcorper. Curabitur sollicitudin, velit nec dignissim semper, justo tortor luctus neque, ac dapibus orci leo sed nulla. Ut iaculis semper dolor, sed blandit lectus iaculis eget. Curabitur nec sem erat. Sed fermentum urna semper orci blandit, eu pharetra lorem maximus. Vestibulum laoreet libero arcu, ac varius quam sagittis sed. Pellentesque sit amet pulvinar tellus. Fusce ante risus, efficitur vitae turpis nec, vulputate placerat ante. Aenean malesuada feugiat fringilla. Praesent facilisis tortor id varius vehicula. Curabitur fermentum odio eget vulputate euismod.</h1>
            </div>
        </div>
    </div>
</section>
{{--=========================================================== About HMIF END =========================================================== --}}
{{--=========================================================== Event =========================================================== --}}
<section id="event">
    <div class="container-sm my-5 pt-16 pb-10">
        <div class="row" data-aos="fade-up" data-aos-duration="2000">
            <h1 class="font-sans text-5xl font-semibold text-center underline-offset-8">Our Event</h1>
        </div>
        {{--   CAROUSEL EVENT  --}}
        <div class="row pt-10 my-4" >
            <div class="w-full relative" >
                <div class="swiper multiple-slide-carousel swiper-container relative" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500">
                    <div class="swiper-wrapper mb-16">
                        @foreach($events as $e)
                            <div class="swiper-slide">
                                <div class=" relative max-w-xl mx-auto mt-20">
                                    <img class="h-64 w-full object-cover rounded-md" src="{{ asset($e->img_path) }}" alt="Random image">
                                    <div class="absolute inset-0 bg-gray-700 opacity-60 rounded-md"></div>
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <h2 class="text-white text-3xl font-bold">{{ $e->nama_event }}</h2>
                                    </div>
                                </div>
                            </div>
                        @endforeach
{{--                        <div class="swiper-slide" data-aos="fade-up">--}}
{{--                            <div class=" relative max-w-xl mx-auto mt-20">--}}
{{--                                <img class="h-64 w-full object-cover rounded-md" src="{{ asset('asset/forkom.JPG') }}" alt="Random image">--}}
{{--                                <div class="absolute inset-0 bg-gray-700 opacity-60 rounded-md"></div>--}}
{{--                                <div class="absolute inset-0 flex items-center justify-center">--}}
{{--                                    <h2 class="text-white text-3xl font-bold">Forum Komunikasi</h2>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class=" relative max-w-xl mx-auto mt-20">--}}
{{--                                <img class="h-64 w-full object-cover rounded-md" src="{{ asset($events->img_path) }}" alt="Random image">--}}
{{--                                <div class="absolute inset-0 bg-gray-700 opacity-60 rounded-md"></div>--}}
{{--                                <div class="absolute inset-0 flex items-center justify-center">--}}
{{--                                    <h2 class="text-white text-3xl font-bold">{{ $events->nama_event }}</h2>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                    <div class="absolute flex justify-center items-center m-auto left-0 right-0 w-fit bottom-12" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500">
                        <button id="slider-button-left" class="swiper-button-prev group !p-2 flex justify-center items-center border border-solid border-indigo-600 !w-12 !h-12 transition-all duration-500 rounded-full  hover:bg-indigo-600 !-translate-x-16" data-carousel-prev>
                            <svg class="h-5 w-5 text-indigo-600 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M10.0002 11.9999L6 7.99971L10.0025 3.99719" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button id="slider-button-right" class="swiper-button-next group !p-2 flex justify-center items-center border border-solid border-indigo-600 !w-12 !h-12 transition-all duration-500 rounded-full hover:bg-indigo-600 !translate-x-16" data-carousel-next>
                            <svg class="h-5 w-5 text-indigo-600 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M5.99984 4.00012L10 8.00029L5.99748 12.0028" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{--=========================================================== Event end =========================================================== --}}
{{--===========================================================  Division  =========================================================== --}}
<section id="division">
    <div class="container-sm my-5 pt-16 pb-10">
        <div class="row" data-aos="fade-up" data-aos-duration="2000" >
            <h1 class="font-sans text-5xl font-semibold text-center underline-offset-8">HMIF Division</h1>
        </div>
        {{--  Fist Row  --}}
        <div class="row pt-10 my-4">
            <div class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 max-w-sm mx-auto mt-24" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500">
                <img src="{{ asset('asset/divisi/BPH.png') }}" alt="Badan Penguus Harian" class="absolute inset-0 h-full w-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                <h3 class="z-10 mt-3 text-3xl font-bold text-[#0DB0BB]">BPH</h3>
                <div class="z-10 gap-y-1 overflow-hidden text-sm leading-6 text-[#0DB0BB]">Badan Pengurus Harian</div>
            </div>
        </div>
        {{--  Second Row  --}}
        <div class="row pt-4">
            <div class="col" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500">
                <div class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 max-w-sm mx-auto mt-24">
                    <img src="{{ asset('asset/divisi/Litbang.png') }}" alt="Litbang" class="absolute inset-0 h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                    <h3 class="z-10 mt-3 text-3xl font-bold text-[#0DB0BB]">Litbang</h3>
                    <div class="z-10 gap-y-1 overflow-hidden text-sm leading-6 text-[#0DB0BB]">Penelitian & pengembakan</div>
                </div>
            </div>
            <div class="col" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500">
                <div class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 max-w-sm mx-auto mt-24">
                    <img src="{{ asset('asset/divisi/Humas.png') }}" alt="Humas" class="absolute inset-0 h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                    <h3 class="z-10 mt-3 text-3xl font-bold text-[#0DB0BB]">Humas</h3>
                    <div class="z-10 gap-y-1 overflow-hidden text-sm leading-6 text-[#0DB0BB]">Hubungan Masyarakat</div>
                </div>
            </div>
        </div>
        {{--  Third Row  --}}
        <div class="row pt-4" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500">
            <div class="col">
                <div class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 max-w-sm mx-auto mt-24">
                    <img src="{{ asset('asset/divisi/Kerohanian.png') }}" alt="Kerohanian" class="absolute inset-0 h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                    <h3 class="z-10 mt-3 text-3xl font-bold text-[#0DB0BB]">Kerohanian</h3>
                    <div class="z-10 gap-y-1 overflow-hidden text-sm leading-6 text-[#0DB0BB]">Kerohanian</div>
                </div>
            </div>
            <div class="col">
                <div class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 max-w-sm mx-auto mt-24">
                    <img src="{{ asset('asset/divisi/Medkom.png') }}" alt="Medkom" class="absolute inset-0 h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                    <h3 class="z-10 mt-3 text-3xl font-bold text-[#0DB0BB]">Medkom</h3>
                    <div class="z-10 gap-y-1 overflow-hidden text-sm leading-6 text-[#0DB0BB]">Media Komunikasi</div>
                </div>
            </div>
        </div>


    </div>
</section>
{{--===========================================================  Division end =========================================================== --}}
{{--===========================================================  News   =========================================================== --}}
<section id="news">
    <div class="container-sm my-5 pt-16 pb-10">
        <div class="row pb-10" data-aos="fade-up" data-aos-duration="2000" >
            <h1 class="font-sans text-5xl font-semibold  underline">News</h1>
        </div>
        {{-- News --}}
        @foreach($news as $n)
            @if($n->id / 3 == 0)
                <div class="row pt-10 my-4" data-aos="fade-up">
                    <div class="col" data-aos-duration="2000" data-aos-delay="500">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset($n->img_path) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $n->judul }}</h5>
                                <p class="card-text">By {{ $n->author }}</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="col" data-aos-duration="2000" data-aos-delay="500">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset($n->img_path) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $n->judul }}</h5>
                            <p class="card-text">By {{ $n->author }}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

        {{--            <div class="col" data-aos-duration="2000" data-aos-delay="500">--}}
{{--                <div class="card" style="width: 18rem;" >--}}
{{--                    <img src="{{ asset('asset/hmif-full.png') }}" class="card-img-top" alt="...">--}}
{{--                    <div class="card-body">--}}
{{--                        <h5 class="card-title">ORANG CABUL TERTANGKAP!</h5>--}}
{{--                        <p class="card-text">By koboy lonte</p>--}}
{{--                        <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col" data-aos-duration="2000" data-aos-delay="500">--}}
{{--                <div class="card" style="width: 18rem;" >--}}
{{--                    <img src="{{ asset('asset/pilmapres_02.png') }}" class="card-img-top" alt="...">--}}
{{--                    <div class="card-body">--}}
{{--                        <h5 class="card-title">kini HMIF aman</h5>--}}
{{--                        <p class="card-text">by jawanisme</p>--}}
{{--                        <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</section>
{{--===========================================================  News end =========================================================== --}}

<footer class="bg-[#2C3E50] dark:bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="https://flowbite.com/" class="flex items-center">
                    <img src="{{ asset('asset/Logo-HMIF-tulisan.png') }}" class="h-8 me-3" alt="FlowBite Logo" />
                </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white-900 uppercase dark:text-white">Resources</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                        </li>
                        <li>
                            <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                        </li>
                        <li>
                            <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com/" class="hover:underline">HMIF™</a>. All Rights Reserved.
          </span>
            <div class="flex mt-4 sm:justify-center sm:mt-0">
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                        <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                    </svg>
                    <span class="sr-only">Facebook page</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                        <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                    </svg>
                    <span class="sr-only">Discord community</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                        <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                    </svg>
                    <span class="sr-only">Twitter page</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                    </svg>
                    <span class="sr-only">GitHub account</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
                    </svg>
                    <span class="sr-only">Dribbble account</span>
                </a>
            </div>
        </div>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    AOS.init();
</script>
<script src="js/app.js"></script>
</body>
</html>
