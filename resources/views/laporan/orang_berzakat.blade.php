@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Laporan Muzakki</h1>
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
                            <th>Alamat</th>
                            <th>No. Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orangBerzakats as $orang)
                        <tr>
                            <td>{{ $orang->nama }}</td>
                            <td>{{ $orang->alamat }}</td>
                            <td>{{ $orang->no_telepon }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('laporan.cetak_orang_berzakat') }}" class="btn btn-primary mt-3">Cetak PDF</a>
            </div>
        </div>
    </div>
</section>
@endsection