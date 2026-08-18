<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::latest()->get();
        $testimonis = Testimoni::latest()->get();

        return view('admin.menus.index', compact('menus', 'testimonis'));
    }

    public function featured()
    {
        $menus = Menu::latest()->get();
        return view('admin.menus.featured', compact('menus'));
    }

    public function updateFeatured(Request $request)
    {
        $request->validate([
            'featured'   => 'nullable|array|max:4',
            'featured.*' => 'exists:menus,id',
        ], [
            'featured.max' => 'Maksimal cuma boleh pilih 4 menu unggulan.',
        ]);

        Menu::query()->update(['aktif' => false]);

        if ($request->filled('featured')) {
            Menu::whereIn('id', $request->featured)->update(['aktif' => true]);
        }

        return redirect()->route('admin.menus.featured')->with('success', 'Menu unggulan berhasil diupdate.');
    }

    public function create()
    {
        return view('admin.menus.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'      => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga'     => 'required|numeric|min:0',
            'gambar'    => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('menus', 'public');
        }

        Menu::create($validated);

        return redirect()->route('admin.menus.index')->with('success', 'Menu berhasil ditambahkan.');
    }

    public function edit(Menu $menu)
    {
        return view('admin.menus.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $validated = $request->validate([
            'nama'      => 'required|string|max:255',
            'paket' => 'required|in:silver,gold,premium',
            'deskripsi' => 'nullable|string',
            'harga'     => 'required|numeric|min:0',
            'gambar'    => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            if ($menu->gambar) {
                Storage::disk('public')->delete($menu->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('menus', 'public');
        }

        $menu->update($validated);

        return redirect()->route('admin.menus.index')->with('success', 'Menu berhasil diupdate.');
    }

    public function destroy(Menu $menu)
    {
        if ($menu->gambar) {
            Storage::disk('public')->delete($menu->gambar);
        }
        $menu->delete();

        return back()->with('success', 'Menu berhasil dihapus.');
    }
}