<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    // Tampilkan daftar kategori buku
    public function index()
    {
        $kategoris = Kategori::withCount('buku')->orderBy('id', 'desc')->get();

        return view('admin.kategori.index', compact('kategoris'));
    }

    // Simpan data kategori baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required|string|max:100|unique:kategoris,nama_kategori',
            'deskripsi' => 'nullable|string|max:255',
        ]);

        Kategori::create($validated);

        return redirect()->route('admin.kategori.index')->with('success', 'Kategori baru berhasil ditambahkan!');
    }

    // Perbarui data kategori
    public function update(Request $request, $id)
    {
        $kategori = Kategori::findOrFail($id);

        $validated = $request->validate([
            'nama_kategori' => 'required|string|max:100|unique:kategoris,nama_kategori,'.$id,
            'deskripsi' => 'nullable|string|max:255',
        ]);

        $kategori->update($validated);

        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil diperbarui!');
    }

    // Hapus kategori jika tidak memiliki relasi buku
    public function destroy($id)
    {
        $kategori = Kategori::withCount('buku')->findOrFail($id);

        if ($kategori->buku_count > 0) {
            return redirect()->route('admin.kategori.index')->with('error', 'Kategori tidak dapat dihapus karena masih memiliki relasi dengan buku.');
        }

        $kategori->delete();

        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil dihapus!');
    }
}
