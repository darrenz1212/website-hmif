<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class NewsController extends Controller
{
    public function manage()
    {
        $news = News::all();
        return view('admin.editNews',compact('news'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'artikel' => 'required|string',
            'img_path' => 'image|mimes:jpeg,png,jpg,gif,svg|max:20480',
        ]);

        $imagePath = null;
        if ($request->hasFile('img_path')) {
            $file = $request->file('img_path');
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('asset/newsimg'), $filename);
            $imagePath = 'asset/newsimg/' . $filename;
        }

        // Membuat data baru di database
        News::create([
            'judul' => $request->judul,
            'author' => $request->author,
            'artikel' => $request->artikel,
            'img_path' => $imagePath,
            'slug' => Str::slug($request->judul) . '-' . uniqid(),
        ]);

        return redirect()->route('news.manage')->with('success', 'Berita berhasil ditambahkan!');
    }

    // Memperbarui berita yang sudah ada di database
    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'artikel' => 'required|string',
            'img_path' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Proses upload gambar ke folder 'public/asset/newsimg'
        $imagePath = $news->img_path;
        if ($request->hasFile('img_path')) {
            // Hapus gambar lama jika ada
            if ($news->img_path && file_exists(public_path($news->img_path))) {
                unlink(public_path($news->img_path));
            }

            $file = $request->file('img_path');
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('asset/newsimg'), $filename);
            $imagePath = 'asset/newsimg/' . $filename;
        }

        // Update data di database
        $news->update([
            'judul' => $request->judul,
            'author' => $request->author,
            'artikel' => $request->artikel,
            'img_path' => $imagePath,
            'slug' => Str::slug($request->judul) . '-' . uniqid(),
        ]);

        return redirect()->route('news.manage')->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect()->route('news.manage')->with('success', 'Berita berhasil dihapus!');
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        return view('news', compact('news'));
    }

}
