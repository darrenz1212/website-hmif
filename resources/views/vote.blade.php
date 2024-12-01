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
                           <strong><h3 class="card-title">{{ $candidate->nama }}</h3></strong>
                            <p><strong>No Urut:</strong> {{ $candidate->no_urut }}</p>

                            <!-- Visi dan Misi -->
                            <div class="text-left">
                              <strong><h3>Visi:</h3></strong>
                                <p>{{ $candidate->visi }}</p>
                                <br>
                                <br>
                                <strong><h3>Misi:</h3></strong>
                                <ol>
                                    @foreach(explode("\n", trim($candidate->misi)) as $misi)
                                        @if(!empty($misi))
                                            <li>{{ $misi }}</li>
                                        @endif
                                    @endforeach
                                </ol>
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
