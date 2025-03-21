<?php

namespace App\Http\Controllers;

use App\Models\PenerimaZakat;
use Illuminate\Http\Request;

class PenerimaZakatController extends Controller
{
    public function index()
    {
        $penerimaZakats = PenerimaZakat::all();
        return view('penerimazakat.index', compact('penerimaZakats'));
    }

    public function create()
    {
        return view('penerimazakat.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kriteria' => 'required|in:fakir,miskin,amil,muallaf,orang_berhutang,sabilillah,ibnu_sabil',
            'alamat' => 'required|string',
            'no_telepon' => 'nullable|string|max:15',
        ]);

        PenerimaZakat::create($validated);

        return redirect()->route('penerimazakat.index')->with('success', 'Data penerima zakat berhasil ditambahkan.');
    }

    public function edit(PenerimaZakat $penerimazakat)
    {
        return view('penerimazakat.edit', compact('penerimazakat'));
    }

    public function update(Request $request, PenerimaZakat $penerimazakat)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kriteria' => 'required|in:fakir,miskin,amil,muallaf,orang_berhutang,sabilillah,ibnu_sabil',
            'alamat' => 'required|string',
            'no_telepon' => 'nullable|string|max:15',
        ]);

        $penerimazakat->update($validated);

        return redirect()->route('penerimazakat.index')->with('success', 'Data penerima zakat berhasil diperbarui.');
    }

    public function destroy(PenerimaZakat $penerimazakat)
    {
        $penerimazakat->delete();

        return redirect()->route('penerimazakat.index')->with('success', 'Data penerima zakat berhasil dihapus.');
    }
}