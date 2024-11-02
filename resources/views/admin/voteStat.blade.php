@extends('layouts.starter')

@section('main-content')
    <div class="container my-5">
        <h1>Pengaturan Status Voting</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('vote.updateStatus') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="status">Status Voting:</label>
                <select name="status" id="status" class="form-control">
                    <option value="1" {{ $voteStatus && $voteStatus->status ? 'selected' : '' }}>Aktif</option>
                    <option value="0" {{ $voteStatus && !$voteStatus->status ? 'selected' : '' }}>Nonaktif</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Perbarui Status</button>
        </form>
    </div>
@endsection
