@extends('layouts.starter')

@section('main-content')
    <h1>Pengelolaan Berita</h1>

    {{-- Tombol Tambah Berita --}}
    <button class="btn btn-primary mb-3" onclick="toggleForm('create')">Tambahkan Berita</button>

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
                    <button class="btn btn-sm btn-info" onclick="editNews({{ $n }})">Edit</button>
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

    {{-- Form Tambah/Edit Berita --}}
    <div id="news-form" style="display: none;">
        <form id="newsForm" action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" id="form-method" value="POST">
            <input type="hidden" name="news_id" id="news_id">

            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" id="author" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="artikel">Artikel</label>
                <textarea name="artikel" id="artikel" class="form-control" rows="5" required></textarea>
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
            const form = document.getElementById('news-form');
            const newsForm = document.getElementById('newsForm');
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
            newsForm.action = action === 'create' ? "{{ route('news.store') }}" : "{{ url('/news') }}/" + document.getElementById('news_id').value;
            document.getElementById('form-method').value = action === 'create' ? 'POST' : 'PUT';
        }

        function editNews(news) {
            toggleForm('edit');
            document.getElementById('news_id').value = news.id;
            document.getElementById('judul').value = news.judul;
            document.getElementById('author').value = news.author;
            document.getElementById('artikel').value = news.artikel;
        }
    </script>
@endsection
