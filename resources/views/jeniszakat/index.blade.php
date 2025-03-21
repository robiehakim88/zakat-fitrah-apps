@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Jenis Zakat</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('jeniszakat.create') }}" class="btn btn-primary">Tambah Jenis Zakat</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama Pemberi Zakat</th>
                            <th>Jenis Zakat</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jenisZakats as $zakat)
                        <tr>
                            <td>{{ $zakat->orangBerzakat->nama }}</td>
                            <td>{{ ucfirst($zakat->jenis) }}</td>
                            <td>
                                @if ($zakat->jenis == 'uang')
                                    Rp {{ number_format($zakat->jumlah, 0, ',', '.') }}
                                @elseif ($zakat->jenis == 'beras')
                                    {{ $zakat->jumlah }} kg
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('jeniszakat.edit', $zakat->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('jeniszakat.destroy', $zakat->id) }}" method="POST" style="display:inline;">
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