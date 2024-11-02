@extends('layouts.starter')

@section('main-content')
    <div class="container my-5">
        <h1>Hasil Penghitungan Suara</h1>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>No Urut</th>
                <th>Nama Kandidat</th>
                <th>Jumlah Vote</th>
            </tr>
            </thead>
            <tbody>
            @foreach($candidates as $candidate)
                <tr>
                    <td>{{ $candidate->no_urut }}</td>
                    <td>{{ $candidate->nama }}</td>
                    <td>{{ $candidate->votes_count }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
