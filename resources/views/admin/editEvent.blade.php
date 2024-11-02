@extends('layouts.starter')

@section('main-content')
    <div class="container my-5">
        <h1>Kelola Event</h1>

        {{-- Tombol Tambah Event --}}
        <button class="btn btn-primary mb-3" onclick="toggleForm('create')">Tambahkan Event</button>

        {{-- Tabel Daftar Event --}}
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Nama Event</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($events as $event)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $event->nama_event }}</td>
                    <td><img src="{{ asset($event->img_path) }}" alt="Event Image" class="img-thumbnail" width="100"></td>
                    <td>
                        <button class="btn btn-sm btn-info" onclick="editEvent({{ $event }})">Edit</button>
                        <form action="{{ route('events.destroy', $event->event_id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{-- Form Tambah/Edit Event --}}
        <div id="event-form" style="display: none;">
            <form id="eventForm" action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" id="form-method" value="POST">
                <input type="hidden" name="event_id" id="event_id">

                <div class="form-group">
                    <label for="nama_event">Nama Event</label>
                    <input type="text" name="nama_event" id="nama_event" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="img_path">Gambar</label>
                    <input type="file" name="img_path" id="img_path" class="form-control-file">
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="button" class="btn btn-secondary" onclick="toggleForm()">Batal</button>
            </form>
        </div>
    </div>

    <script>
        function toggleForm(action = 'create') {
            const form = document.getElementById('event-form');
            const eventForm = document.getElementById('eventForm');
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
            eventForm.action = action === 'create' ? "{{ route('events.store') }}" : "{{ url('/events') }}/" + document.getElementById('event_id').value;
            document.getElementById('form-method').value = action === 'create' ? 'POST' : 'PUT';
        }

        function editEvent(event) {
            toggleForm('edit');
            document.getElementById('event_id').value = event.event_id;
            document.getElementById('nama_event').value = event.nama_event;
        }
    </script>
@endsection
