@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- Total Warga 
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $totalWarga }}</h3>
                        <p>Total Warga</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="{{ route('warga.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>-->

            <!-- Total Penerima Zakat -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $totalPenerimaZakat }}</h3>
                        <p>Total Mustahiq</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <a href="{{ route('penerimazakat.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- Total Orang Berzakat -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $totalOrangBerzakat }}</h3>
                        <p>Total Muzakki</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-donate"></i>
                    </div>
                    <a href="{{ route('orangberzakat.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

          <!-- Total Zakat Uang -->
<div class="col-lg-3 col-6">
    <div class="small-box bg-danger">
        <div class="inner">
            <h3>Rp {{ isset($totalZakatUang) ? number_format($totalZakatUang, 0, ',', '.') : '0' }}</h3>
            <p>Total Zakat Uang</p>
        </div>
        <div class="icon">
            <i class="fas fa-coins"></i>
        </div>
        <a href="{{ route('jeniszakat.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

<!-- Total Zakat Beras -->
<div class="col-lg-3 col-6">
    <div class="small-box bg-secondary">
        <div class="inner">
            <h3>{{ isset($totalZakatBeras) ? $totalZakatBeras . ' kg' : '0 kg' }}</h3>
            <p>Total Zakat Beras</p>
        </div>
        <div class="icon">
            <i class="fas fa-balance-scale"></i>
        </div>
        <a href="{{ route('jeniszakat.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
        </div>
    </div>
</section>
@endsection