@extends('layouts.homeTemplate')

@section('main-home')
    <section class="container my-5 py-4">
        <div class="card shadow-lg p-4">
            <div class="card-body">
                <h1 class="card-title text-center">{{ $news->judul }}</h1>
                <p class="text-muted text-center">By {{ $news->author }}</p>
                <hr>

                <div class="text-center mb-4">
                    <img src="{{ asset($news->img_path) }}" alt="News Image" class="img-fluid rounded">
                </div>

                <div class="card-text">
                    {!! nl2br(e($news->artikel)) !!}
                </div>

                <div class="mt-4 text-center">
                    <a href="{{ route('home') }}" class="btn btn-primary">
                        <i class="fas fa-arrow-left"></i> Kembali ke Daftar Berita
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
