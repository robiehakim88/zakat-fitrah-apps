@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Jenis Zakat</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('jeniszakat.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="orang_berzakat_id">Nama Pemberi Zakat</label>
                        <select name="orang_berzakat_id" id="orang_berzakat_id" class="form-control" required>
                            <option value="">Pilih Pemberi Zakat</option>
                            @foreach ($orangBerzakats as $orang)
                            <option value="{{ $orang->id }}">{{ $orang->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis Zakat</label>
                        <select name="jenis" id="jenis" class="form-control" required>
                            <option value="uang">Uang</option>
                            <option value="beras">Beras</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" name="jumlah" id="jumlah" class="form-control" step="0.01" min="0" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection