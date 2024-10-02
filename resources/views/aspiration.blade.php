@extends('layout.master')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100 pt-5 pb-10">
        <div class="w-full max-w-md p-8 space-y-6 bg-white rounded shadow-md">
            <h2 class="text-2xl font-bold text-center text-gray-900">Form Aspirasi</h2>
            <form action="{{ route('store-asp') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Aspirasi Anda</label>
                    <textarea name="message" id="message" rows="5" maxlength="255" class="w-full p-2 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Tulis aspirasi Anda di sini, aspirasi yang Anda kirimkan bersifat anonim"></textarea>
                    <p class="text-sm text-gray-500">Maksimal 255 karakter.</p>
                </div>
                <button type="submit" class="w-full px-4 py-2 font-semibold text-white bg-indigo-600 rounded-md hover:bg-indigo-700">Kirim Aspirasi</button>
            </form>
        </div>
    </div>

    <!-- SweetAlert2 JS (Jika belum ditambahkan di layout.master) -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('success'))
        <script>
            Swal.fire({
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
@endsection
