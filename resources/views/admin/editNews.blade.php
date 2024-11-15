@extends('layouts.starter')

@section('main-content')
    <h1>Pengelolaan Berita</h1>

    {{-- Tombol Tambah Berita --}}
    <button class="btn btn-primary mb-3" onclick="toggleCreateForm()">Tambahkan Berita</button>

    {{-- Tabel Daftar Berita --}}
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Author</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($news as $n)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $n->judul }}</td>
                <td>{{ $n->author }}</td>
                <td>
                    <button class="btn btn-sm btn-info" onclick="toggleEditForm({{ $n }})">Edit</button>
                    <form action="{{ route('news.destroy', $n->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{-- Form Tambah Berita --}}
    <div id="create-form" style="display: none;">
        <h3>Tambah Berita Baru</h3>
        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="artikel">Artikel</label>
                <textarea name="artikel" class="form-control" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label for="img_path">Gambar</label>
                <input type="file" name="img_path" class="form-control-file">
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            <button type="button" class="btn btn-secondary" onclick="toggleCreateForm()">Batal</button>
        </form>
    </div>

    {{-- Form Edit Berita --}}
    <div id="edit-form" style="display: none;">
        <h3>Edit Berita</h3>
        <form id="editNewsForm" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="edit_judul">Judul</label>
                <input type="text" name="judul" id="edit_judul" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="edit_author">Author</label>
                <input type="text" name="author" id="edit_author" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="edit_artikel">Artikel</label>
                <textarea name="artikel" id="edit_artikel" class="form-control" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label for="edit_img_path">Gambar</label>
                <input type="file" name="img_path" id="edit_img_path" class="form-control-file">
            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <button type="button" class="btn btn-secondary" onclick="toggleEditForm()">Batal</button>
        </form>
    </div>

    <script>
        function toggleCreateForm() {
            const createForm = document.getElementById('create-form');
            createForm.style.display = createForm.style.display === 'none' ? 'block' : 'none';
        }

        function toggleEditForm(news = null) {
            const editForm = document.getElementById('edit-form');
            editForm.style.display = editForm.style.display === 'none' ? 'block' : 'none';

            if (news) {
                // Isi form dengan data berita yang akan diedit
                document.getElementById('edit_judul').value = news.judul;
                document.getElementById('edit_author').value = news.author;
                document.getElementById('edit_artikel').value = news.artikel;

                // Atur action form dengan route update sesuai ID berita
                const editNewsForm = document.getElementById('editNewsForm');
                editNewsForm.action = "{{ url('/news') }}/" + news.id;
            }
        }
    </script>
@endsection
