@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Muzakki</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('orangberzakat.create') }}" class="btn btn-primary">Tambah Muzakki</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No. Telepon</th>
                            <th>Zakat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orangBerzakats as $orang)
                        <tr>
                            <td>{{ $orang->nama }}</td>
                            <td>{{ $orang->alamat }}</td>
                            <td>{{ $orang->no_telepon }}</td>
                            <td>
                                <ul>
                                    @forelse ($orang->jenisZakats as $zakat)
                                        <li>
                                            {{ ucfirst($zakat->jenis) }}: 
                                            @if ($zakat->jenis == 'uang')
                                                Rp {{ number_format($zakat->jumlah, 0, ',', '.') }}
                                            @elseif ($zakat->jenis == 'beras')
                                                {{ $zakat->jumlah }} kg
                                            @endif
                                        </li>
                                    @empty
                                        <li>Tidak ada zakat.</li>
                                    @endforelse
                                </ul>
                            </td>
                            <td>
                                <a href="{{ route('orangberzakat.edit', $orang->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('orangberzakat.destroy', $orang->id) }}" method="POST" style="display:inline;">
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