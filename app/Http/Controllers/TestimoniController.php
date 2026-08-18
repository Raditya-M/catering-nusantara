<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index()
    {
        $testimonis = Testimoni::where('disetujui', true)->latest()->paginate(9);

        return view('testimoni.index', compact('testimonis'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'   => 'required|string|max:255',
            'pesan'  => 'required|string|max:1000',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // disetujui default false -> nunggu admin approve dulu sebelum tampil publik
        Testimoni::create($validated);

        return back()->with('success', 'Terima kasih! Testimoni kamu sudah kami terima dan akan tampil setelah ditinjau.');
    }
}