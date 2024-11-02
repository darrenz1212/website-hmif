@extends('layouts.starter')

@section('main-content')
    <div class="container my-5">
        <h1>Kelola Kandidat</h1>

        {{-- Tombol Buat Kandidat Baru --}}
        <button class="btn btn-primary mb-4" onclick="toggleForm('create')">Buat Kandidat Baru</button>

        {{-- Tabel Daftar Kandidat --}}
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>No Urut</th>
                <th>Nama</th>
                <th>Gambar</th>
                <th>Visi</th>
                <th>Misi</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($candidates as $candidate)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $candidate->no_urut }}</td>
                    <td>{{ $candidate->nama }}</td>
                    <td><img src="{{ asset($candidate->image) }}" alt="Candidate Image" class="img-thumbnail" width="100"></td>
                    <td>{{ $candidate->visi }}</td>
                    <td>{{ $candidate->misi }}</td>
                    <td>
                        <button class="btn btn-sm btn-info" onclick="editCandidate({{ $candidate }})">Edit</button>
                        <form action="{{ route('candidates.destroy', $candidate->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{-- Form Edit Kandidat --}}
        <div id="candidate-form" style="display: none;">
            <form id="candidateForm" action="{{ route('candidates.update', 0) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="candidate_id" id="candidate_id">

                <div class="form-group">
                    <label for="no_urut">No Urut</label>
                    <input type="number" name="no_urut" id="no_urut" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="visi">Visi</label>
                    <textarea name="visi" id="visi" class="form-control" rows="3" required></textarea>
                </div>

                <div class="form-group">
                    <label for="misi">Misi</label>
                    <textarea name="misi" id="misi" class="form-control" rows="3" required></textarea>
                </div>

                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" name="image" id="image" class="form-control-file">
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="button" class="btn btn-secondary" onclick="toggleForm()">Batal</button>
            </form>
        </div>
    </div>

    <script>
        function toggleForm() {
            const form = document.getElementById('candidate-form');
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
        }

        function editCandidate(candidate) {
            toggleForm();
            document.getElementById('candidateForm').action = "{{ url('/candidates') }}/" + candidate.id;
            document.getElementById('no_urut').value = candidate.no_urut;
            document.getElementById('nama').value = candidate.nama;
            document.getElementById('visi').value = candidate.visi;
            document.getElementById('misi').value = candidate.misi;
            document.getElementById('candidate_id').value = candidate.id;
        }
    </script>
@endsection
