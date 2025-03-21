@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Penerima Zakat</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('penerimazakat.update', $penerimazakat->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ $penerimazakat->nama }}" required>
                    </div>
                    <div class="form-group">
                        <label for="kriteria">Kriteria</label>
                        <select name="kriteria" id="kriteria" class="form-control" required>
                            <option value="fakir" {{ $penerimazakat->kriteria == 'fakir' ? 'selected' : '' }}>Fakir</option>
                            <option value="miskin" {{ $penerimazakat->kriteria == 'miskin' ? 'selected' : '' }}>Miskin</option>
                            <option value="amil" {{ $penerimazakat->kriteria == 'amil' ? 'selected' : '' }}>Amil</option>
                            <option value="muallaf" {{ $penerimazakat->kriteria == 'muallaf' ? 'selected' : '' }}>Muallaf</option>
                            <option value="orang_berhutang" {{ $penerimazakat->kriteria == 'orang_berhutang' ? 'selected' : '' }}>Orang Berhutang</option>
                            <option value="sabilillah" {{ $penerimazakat->kriteria == 'sabilillah' ? 'selected' : '' }}>Sabilillah</option>
                            <option value="ibnu_sabil" {{ $penerimazakat->kriteria == 'ibnu_sabil' ? 'selected' : '' }}>Ibnu Sabil</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" required>{{ $penerimazakat->alamat }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="no_telepon">No. Telepon</label>
                        <input type="text" name="no_telepon" id="no_telepon" class="form-control" value="{{ $penerimazakat->no_telepon }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection