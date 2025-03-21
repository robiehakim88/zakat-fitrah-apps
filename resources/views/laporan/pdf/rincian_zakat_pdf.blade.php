<!DOCTYPE html>
<html>
<head>
    <title>Laporan Rincian Zakat</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th:first-child, td:first-child {
            width: 5%; /* Lebar kolom nomor */
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Laporan Rincian Zakat</h1>
    <h3>Total Zakat Uang: Rp {{ number_format($totalZakatUang, 0, ',', '.') }}</h3>
    <h3>Total Zakat Beras: {{ $totalZakatBeras }} kg</h3>
    <h3>Jumlah Orang yang Berzakat: {{ $jumlahOrangBerzakat }} orang</h3>

    <table>
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
</body>
</html>