@extends('layouts.starter')

@section('main-content')
    <div class="container my-5">
        <h1>Clear Vote</h1>

        {{-- Pesan Sukses --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Tombol Hapus Semua Vote --}}
        <form action="{{ route('votes.clear') }}" method="POST" class="mb-4">
            @csrf
            <button type="submit" class="btn btn-danger">Hapus Semua Vote</button>
        </form>
    </div>
@endsection
