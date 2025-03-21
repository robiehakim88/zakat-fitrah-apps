<?php

namespace App\Http\Controllers;

use App\Models\OrangBerzakat;
use Illuminate\Http\Request;

class OrangBerzakatController extends Controller
{
    // Menampilkan daftar orang berzakat dengan detail zakatnya
    public function index()
    {
        $orangBerzakats = OrangBerzakat::with('jenisZakats')->get();
        return view('orangberzakat.index', compact('orangBerzakats'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('orangberzakat.create');
    }

    // Menyimpan data baru ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_telepon' => 'nullable|string|max:15',
        ]);

        OrangBerzakat::create($validated);

        return redirect()->route('orangberzakat.index')->with('success', 'Data orang berzakat berhasil ditambahkan.');
    }

    // Menampilkan form edit data
    public function edit(OrangBerzakat $orangberzakat)
    {
        return view('orangberzakat.edit', compact('orangberzakat'));
    }

    // Memperbarui data di database
    public function update(Request $request, OrangBerzakat $orangberzakat)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_telepon' => 'nullable|string|max:15',
        ]);

        $orangberzakat->update($validated);

        return redirect()->route('orangberzakat.index')->with('success', 'Data orang berzakat berhasil diperbarui.');
    }

    // Menghapus data dari database
    public function destroy(OrangBerzakat $orangberzakat)
    {
        $orangberzakat->delete();

        return redirect()->route('orangberzakat.index')->with('success', 'Data orang berzakat berhasil dihapus.');
    }
}