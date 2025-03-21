@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Penerima Zakat</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('penerimazakat.create') }}" class="btn btn-primary">Tambah Penerima Zakat</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kriteria</th>
                            <th>Alamat</th>
                            <th>No. Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penerimaZakats as $penerima)
                        <tr>
                            <td>{{ $penerima->nama }}</td>
                            <td>{{ $penerima->kriteria }}</td>
                            <td>{{ $penerima->alamat }}</td>
                            <td>{{ $penerima->no_telepon }}</td>
                            <td>
                                <a href="{{ route('penerimazakat.edit', $penerima->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('penerimazakat.destroy', $penerima->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection