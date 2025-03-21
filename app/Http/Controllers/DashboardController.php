<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\PenerimaZakat;
use App\Models\OrangBerzakat;
use App\Models\JenisZakat;

class DashboardController extends Controller
{
    public function index()
    {
        $totalWarga = Warga::count();
        $totalPenerimaZakat = PenerimaZakat::count();
        $totalOrangBerzakat = OrangBerzakat::count();
        $totalZakat = JenisZakat::sum('jumlah');

 // Ambil semua data zakat
    $jenisZakats = JenisZakat::all();

    // Hitung total zakat berdasarkan jenis menggunakan collection
    $totalZakatUang = $jenisZakats
        ->where('jenis', 'uang')
        ->sum('jumlah');

    $totalZakatBeras = $jenisZakats
        ->where('jenis', 'beras')
        ->sum('jumlah');



        return view('dashboard', compact(
            'totalWarga',
            'totalPenerimaZakat',
            'totalOrangBerzakat',
            'totalZakat',
            'totalZakatUang',
            'totalZakatBeras'
        ));
    }
    
     public function __construct()
    {
        $this->middleware('auth'); // Pastikan middleware auth digunakan
    }


}
