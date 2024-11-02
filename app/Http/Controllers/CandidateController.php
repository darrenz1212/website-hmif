<?php

namespace App\Http\Controllers;

use App\Models\Candidates;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function editCandidates()
    {
        $candidates = Candidates::all();

        return view('admin.editCandidates',[
            'candidates' => $candidates
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_urut' => 'required|integer|unique:candidates,no_urut',
            'nama' => 'required|string|max:255',
            'visi' => 'required|string',
            'misi' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Proses upload gambar ke folder 'public/asset/voteimg'
        $imagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('asset/voteimg'), $filename);
            $imagePath = 'asset/voteimg/' . $filename;
        }

        // Simpan data kandidat baru ke database
        Candidates::create([
            'no_urut' => $request->no_urut,
            'nama' => $request->nama,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'image' => $imagePath,
        ]);

        return redirect()->route('candidates.edit')->with('success', 'Kandidat berhasil ditambahkan!');
    }
    public function update(Request $request, $id)
    {
        $candidate = Candidates::findOrFail($id);

        $request->validate([
            'no_urut' => 'required|integer',
            'nama' => 'required|string|max:255',
            'visi' => 'required|string',
            'misi' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $imagePath = $candidate->image;
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($candidate->image && file_exists(public_path($candidate->image))) {
                unlink(public_path($candidate->image));
            }

            $file = $request->file('image');
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('asset/voteimg'), $filename);
            $imagePath = 'asset/voteimg/' . $filename;
        }

        // Update data kandidat
        $candidate->update([
            'no_urut' => $request->no_urut,
            'nama' => $request->nama,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'image' => $imagePath,
        ]);

        return redirect()->route('candidates.edit')->with('success', 'Kandidat berhasil diperbarui!');
    }

    // Method untuk menghapus kandidat
    public function destroy($id)
    {
        $candidate = Candidates::findOrFail($id);

        // Hapus gambar jika ada
        if ($candidate->image && file_exists(public_path($candidate->image))) {
            unlink(public_path($candidate->image));
        }

        $candidate->delete();

        return redirect()->route('candidates.edit')->with('success', 'Kandidat berhasil dihapus!');
    }
}
