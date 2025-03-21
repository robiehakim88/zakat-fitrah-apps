<?php

namespace App\Http\Controllers;

use App\Models\JenisZakat;
use App\Models\OrangBerzakat;
use Illuminate\Http\Request;

class JenisZakatController extends Controller
{
    // Menampilkan daftar jenis zakat
    public function index()
    {
        $jenisZakats = JenisZakat::with('orangBerzakat')->get();
        return view('jeniszakat.index', compact('jenisZakats'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        $orangBerzakats = OrangBerzakat::all();
        return view('jeniszakat.create', compact('orangBerzakats'));
    }

    // Menyimpan data baru ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'orang_berzakat_id' => 'required|exists:orang_berzakats,id',
            'jenis' => 'required|in:uang,beras',
            'jumlah' => 'required|numeric|min:0',
        ]);

        JenisZakat::create($validated);

        return redirect()->route('jeniszakat.index')->with('success', 'Data jenis zakat berhasil ditambahkan.');
    }

    // Menampilkan form edit data
    public function edit(JenisZakat $jeniszakat)
    {
        $orangBerzakats = OrangBerzakat::all();
        return view('jeniszakat.edit', compact('jeniszakat', 'orangBerzakats'));
    }

    // Memperbarui data di database
    public function update(Request $request, JenisZakat $jeniszakat)
    {
        $validated = $request->validate([
            'orang_berzakat_id' => 'required|exists:orang_berzakats,id',
            'jenis' => 'required|in:uang,beras',
            'jumlah' => 'required|numeric|min:0',
        ]);

        $jeniszakat->update($validated);

        return redirect()->route('jeniszakat.index')->with('success', 'Data jenis zakat berhasil diperbarui.');
    }

    // Menghapus data dari database
    public function destroy(JenisZakat $jeniszakat)
    {
        $jeniszakat->delete();

        return redirect()->route('jeniszakat.index')->with('success', 'Data jenis zakat berhasil dihapus.');
    }
}