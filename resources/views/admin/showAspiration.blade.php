@extends('layouts.starter')

@section('main-content')
    <table class="table">
        <thead>
        <tr>
            <th>Aspirasi</th>
            <th>Tanggal</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($aspiration as $s)
            <tr>
                <td>{{ $s->message }}</td>
                <td>{{$s-> created_at}}</td>
                <td>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>

@endsection
