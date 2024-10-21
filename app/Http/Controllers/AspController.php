<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aspiration;

class AspController extends Controller
{
    public function index()
    {
        return view('aspiration');
    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|max:255',
        ]);

        if ($request->input('message') == "ELGARNACHOR") {
            return redirect()->back()->with('error', 'Pesan "ELGARNCHOR" tidak diperbolehkan.');
        } else {
            Aspiration::create([
                'message' => $request->input('message'),
            ]);
            return redirect()->back()->with('success', 'Aspirasi Anda telah dikirim.');
        }
    }

}
