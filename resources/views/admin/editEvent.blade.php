@extends('layouts.starter')

@section('main-content')
    <div class="container my-5">
        <h1>Kelola Event</h1>

        {{-- Tombol Tambah Event --}}
        <button class="btn btn-primary mb-3" onclick="toggleCreateForm()">Tambahkan Event</button>

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
                        {{-- Tombol Edit --}}
                        <button class="btn btn-sm btn-info" onclick="toggleEditForm({{ $event }})">Edit</button>

                        {{-- Form Hapus --}}
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

        {{-- Form Tambah Event --}}
        <div id="create-form" style="display: none;">
            <h3>Tambah Event Baru</h3>
            <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="nama_event">Nama Event</label>
                    <input type="text" name="nama_event" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="img_path">Gambar</label>
                    <input type="file" name="img_path" class="form-control-file">
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="button" class="btn btn-secondary" onclick="toggleCreateForm()">Batal</button>
            </form>
        </div>

        {{-- Form Edit Event --}}
        <div id="edit-form" style="display: none;">
            <h3>Edit Event</h3>
            <form id="editEventForm" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="hidden" name="event_id" id="edit_event_id">

                <div class="form-group">
                    <label for="nama_event">Nama Event</label>
                    <input type="text" name="nama_event" id="edit_nama_event" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="img_path">Gambar</label>
                    <input type="file" name="img_path" class="form-control-file">
                </div>

                <button type="submit" class="btn btn-success">Update</button>
                <button type="button" class="btn btn-secondary" onclick="toggleEditForm()">Batal</button>
            </form>
        </div>
    </div>

    <script>
        function toggleCreateForm() {
            const createForm = document.getElementById('create-form');
            createForm.style.display = createForm.style.display === 'none' ? 'block' : 'none';
        }

        function toggleEditForm(event = null) {
            const editForm = document.getElementById('edit-form');
            editForm.style.display = editForm.style.display === 'none' ? 'block' : 'none';

            if (event) {
                // Isi form dengan data event yang akan diedit
                document.getElementById('edit_event_id').value = event.event_id;
                document.getElementById('edit_nama_event').value = event.nama_event;

                // Atur action form dengan route update sesuai event ID
                const editEventForm = document.getElementById('editEventForm');
                editEventForm.action = "{{ url('/events') }}/" + event.event_id;
            }
        }
    </script>
@endsection
