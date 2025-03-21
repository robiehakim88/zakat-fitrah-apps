<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrangBerzakat;
use App\Models\PenerimaZakat;
use App\Models\JenisZakat;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanController extends Controller
{
    // Laporan Orang Berzakat
    public function laporanOrangBerzakat()
    {
        $orangBerzakats = OrangBerzakat::all();
        return view('laporan.orang_berzakat', compact('orangBerzakats'));
    }

    public function cetakOrangBerzakat()
    {
        $orangBerzakats = OrangBerzakat::all();
        $pdf = Pdf::loadView('laporan.pdf.orang_berzakat_pdf', compact('orangBerzakats'));
        return $pdf->download('laporan_orang_berzakat.pdf');
    }

    // Laporan Penerima Zakat
    public function laporanPenerimaZakat()
    {
        $penerimaZakats = PenerimaZakat::all();
        return view('laporan.penerima_zakat', compact('penerimaZakats'));
    }

    public function cetakPenerimaZakat()
    {
        $penerimaZakats = PenerimaZakat::all();
        $pdf = Pdf::loadView('laporan.pdf.penerima_zakat_pdf', compact('penerimaZakats'));
        return $pdf->download('laporan_penerima_zakat.pdf');
    }




    
    public function laporanRincianZakat()
{
    $jenisZakats = JenisZakat::with('orangBerzakat')->get();
    $totalZakatUang = JenisZakat::where('jenis', 'uang')->sum('jumlah');
    $totalZakatBeras = JenisZakat::where('jenis', 'beras')->sum('jumlah');

    // Hitung jumlah unik orang yang berzakat
    $jumlahOrangBerzakat = JenisZakat::distinct()->count('orang_berzakat_id');

    return view('laporan.rincian_zakat', compact(
        'jenisZakats',
        'totalZakatUang',
        'totalZakatBeras',
        'jumlahOrangBerzakat'
    ));
}

public function cetakRincianZakat()
{
    $jenisZakats = JenisZakat::with('orangBerzakat')->get();
    $totalZakatUang = JenisZakat::where('jenis', 'uang')->sum('jumlah');
    $totalZakatBeras = JenisZakat::where('jenis', 'beras')->sum('jumlah');

    // Hitung jumlah unik orang yang berzakat
    $jumlahOrangBerzakat = JenisZakat::distinct()->count('orang_berzakat_id');

    $pdf = Pdf::loadView('laporan.pdf.rincian_zakat_pdf', compact(
        'jenisZakats',
        'totalZakatUang',
        'totalZakatBeras',
        'jumlahOrangBerzakat'
    ));
    return $pdf->download('laporan_rincian_zakat.pdf');
}
}