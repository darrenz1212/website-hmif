<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function manage()
    {
       $event = Event::all();

       return view('admin.editEvent',[
           'events' => $event
       ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_event' => 'required|string|max:255',
            'img_path' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Proses upload gambar ke folder 'public/asset/eventimg'
        $imagePath = null;
        if ($request->hasFile('img_path')) {
            $file = $request->file('img_path');
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('asset/eventimg'), $filename);
            $imagePath = 'asset/eventimg/' . $filename;
        }

        Event::create([
            'nama_event' => $request->nama_event,
            'img_path' => $imagePath,
        ]);

        return redirect()->route('events.manage')->with('success', 'Event berhasil ditambahkan!');
    }

    // Memperbarui event yang sudah ada di database
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $request->validate([
            'nama_event' => 'required|string|max:255',
            'img_path' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Proses upload gambar ke folder 'public/asset/eventimg'
        $imagePath = $event->img_path;
        if ($request->hasFile('img_path')) {
            // Hapus gambar lama jika ada
            if ($event->img_path && file_exists(public_path($event->img_path))) {
                unlink(public_path($event->img_path));
            }

            $file = $request->file('img_path');
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('asset/eventimg'), $filename);
            $imagePath = 'asset/eventimg/' . $filename;
        }

        $event->update([
            'nama_event' => $request->nama_event,
            'img_path' => $imagePath,
        ]);

        return redirect()->route('events.manage')->with('success', 'Event berhasil diperbarui!');
    }

    // Menghapus event dari database
    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        // Hapus gambar jika ada
        if ($event->img_path && file_exists(public_path($event->img_path))) {
            unlink(public_path($event->img_path));
        }

        $event->delete();

        return redirect()->route('events.manage')->with('success', 'Event berhasil dihapus!');
    }
}
