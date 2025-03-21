@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Laporan Rincian Zakat</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h3>Total Zakat Uang: Rp {{ number_format($totalZakatUang, 0, ',', '.') }}</h3>
                <h3>Total Zakat Beras: {{ $totalZakatBeras }} kg</h3>
                <h3>Jumlah Orang yang Berzakat: {{ $jumlahOrangBerzakat }} orang</h3>

                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>No</th> <!-- Kolom Nomor -->
                            <th>Nama Muzakki</th>
                            <th>Jenis Zakat</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jenisZakats as $zakat)
                        <tr>
                            <td>{{ $loop->iteration }}</td> <!-- Nomor Urut -->
                            <td>{{ $zakat->orangBerzakat->nama }}</td>
                            <td>{{ ucfirst($zakat->jenis) }}</td>
                            <td>
                                @if ($zakat->jenis == 'uang')
                                    Rp {{ number_format($zakat->jumlah, 0, ',', '.') }}
                                @elseif ($zakat->jenis == 'beras')
                                    {{ $zakat->jumlah }} kg
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('laporan.cetak_rincian_zakat') }}" class="btn btn-primary mt-3">Cetak PDF</a>
            </div>
        </div>
    </div>
</section>
@endsection