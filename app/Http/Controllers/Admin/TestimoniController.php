<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    // Admin tambah testimoni manual (misal pelanggan dikenal tapi nggak nulis sendiri)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'   => 'required|string|max:255',
            'pesan'  => 'required|string|max:1000',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Testimoni yang admin input sendiri langsung disetujui
        $validated['disetujui'] = true;

        Testimoni::create($validated);

        return redirect()->route('admin.menus.index')->with('success', 'Testimoni berhasil ditambahkan.');
    }

    public function toggleApprove(Testimoni $testimoni)
    {
        $testimoni->update(['disetujui' => ! $testimoni->disetujui]);

        return back()->with('success', 'Status testimoni diupdate.');
    }

    public function toggleHome(Testimoni $testimoni)
    {
        $testimoni->update(['tampil_home' => ! $testimoni->tampil_home]);

        return back()->with('success', 'Status tampil di home diupdate.');
    }

    public function destroy(Testimoni $testimoni)
    {
        $testimoni->delete();

        return back()->with('success', 'Testimoni berhasil dihapus.');
    }
}