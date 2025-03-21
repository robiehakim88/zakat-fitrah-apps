@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Penerima Zakat</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('penerimazakat.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="kriteria">Kriteria</label>
                        <select name="kriteria" id="kriteria" class="form-control" required>
                            <option value="fakir">Fakir</option>
                            <option value="miskin">Miskin</option>
                            <option value="amil">Amil</option>
                            <option value="muallaf">Muallaf</option>
                            <option value="orang_berhutang">Orang Berhutang</option>
                            <option value="sabilillah">Sabilillah</option>
                            <option value="ibnu_sabil">Ibnu Sabil</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="no_telepon">No. Telepon</label>
                        <input type="text" name="no_telepon" id="no_telepon" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection