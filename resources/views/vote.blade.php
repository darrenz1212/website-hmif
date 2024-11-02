{{-- resources/views/vote.blade.php --}}
@extends('layouts.homeTemplate')

@section('main-home')
    <div class="container my-5 py-4">
        <h1 class="text-center mb-4 my-5">Pilih Ketua Himpunan Mahasiswa</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="row">
            @foreach ($candidates as $candidate)
                <div class="col-md-6 mb-4">
                    <div class="card shadow-lg">
                        <div class="card-body text-center">
                            <!-- Gambar Kandidat -->
                            <img src="{{ asset($candidate->image) }}" alt="{{ $candidate->nama }}" class="img-fluid rounded-circle mb-3" style="width: 200px; height: 200px; object-fit: cover;">

                            <!-- Informasi Kandidat -->
                            <h3 class="card-title">{{ $candidate->nama }}</h3>
                            <p><strong>No Urut:</strong> {{ $candidate->no_urut }}</p>

                            <!-- Visi dan Misi -->
                            <div class="text-left">
                                <h5>Visi:</h5>
                                <p>{{ $candidate->visi }}</p>
                                <h5>Misi:</h5>
                                <p>{{ $candidate->misi }}</p>
                            </div>

                            <!-- Tombol Vote -->
                            <form action="{{ route('vote.cast', $candidate->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-lg mt-3">Vote</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
