@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Laporan Penerima Zakat</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kriteria</th>
                            <th>Alamat</th>
                            <th>No. Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penerimaZakats as $penerima)
                        <tr>
                            <td>{{ $penerima->nama }}</td>
                            <td>{{ ucfirst($penerima->kriteria) }}</td>
                            <td>{{ $penerima->alamat }}</td>
                            <td>{{ $penerima->no_telepon }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('laporan.cetak_penerima_zakat') }}" class="btn btn-primary mt-3">Cetak PDF</a>
            </div>
        </div>
    </div>
</section>
@endsection