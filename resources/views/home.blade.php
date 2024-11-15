@extends('layouts.homeTemplate')

@section('main-home')
{{--=========================================================== Hero =========================================================== --}}
<section class="bg-[#F5F5F5]" data-aos="fade" data-aos-duration="2000" id="home">
    <div
        class="hero min-h-screen"
        style="background-image: url('{{ asset('asset/fullteam.png') }}');">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Welcome to HMIF official website</h1>
{{--                <p class="mb-5">--}}
{{--                    Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem--}}
{{--                    quasi. In deleniti eaque aut repudiandae et a id nisi.--}}
{{--                </p>--}}
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
                <h1 class="font-sans font-medium">HMIF (Himpunan Mahasiswa Teknik Informatika) adalah wadah bagi mahasiswa Teknik Informatika untuk berkembang dan berkolaborasi, menghubungkan para mahasiswa dengan kesempatan belajar, berkarya, dan berkontribusi dalam dunia teknologi. Dengan berbagai program seperti seminar, workshop, hackathon, dan mentoring, kami berkomitmen untuk membentuk lingkungan yang mendukung pengembangan diri, baik secara akademis maupun profesional, serta membekali anggota kami dengan keterampilan yang relevan dan siap bersaing di dunia kerja.</h1>
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
        <div class="row" data-aos="fade-up" data-aos-duration="1000" >
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
            <div class="col" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="100">
                <div class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 max-w-sm mx-auto mt-24">
                    <img src="{{ asset('asset/divisi/Litbang.png') }}" alt="Litbang" class="absolute inset-0 h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                    <h3 class="z-10 mt-3 text-3xl font-bold text-[#0DB0BB]">Litbang</h3>
                    <div class="z-10 gap-y-1 overflow-hidden text-sm leading-6 text-[#0DB0BB]">Penelitian & pengembakan</div>
                </div>
            </div>
            <div class="col" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="100">
                <div class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 max-w-sm mx-auto mt-24">
                    <img src="{{ asset('asset/divisi/Humas.png') }}" alt="Humas" class="absolute inset-0 h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                    <h3 class="z-10 mt-3 text-3xl font-bold text-[#0DB0BB]">Humas</h3>
                    <div class="z-10 gap-y-1 overflow-hidden text-sm leading-6 text-[#0DB0BB]">Hubungan Masyarakat</div>
                </div>
            </div>
        </div>
        {{--  Third Row  --}}
        <div class="row pt-4" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="100">
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
            @if($loop->iteration % 3 == 1)
                <div class="row pt-10 my-4" data-aos="fade-up">
                    @endif
                    <div class="col" data-aos-duration="2000" data-aos-delay="500">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset($n->img_path) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $n->judul }}</h5>
                                <p class="card-text">By {{ $n->author }}</p>
                                <a href="{{ route('news.show', $n->slug) }}" class="btn btn-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @if($loop->iteration % 3 == 0 || $loop->last)
                </div> <!-- Tutup div row jika mencapai kelipatan 3 atau data terakhir -->
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

@endsection



