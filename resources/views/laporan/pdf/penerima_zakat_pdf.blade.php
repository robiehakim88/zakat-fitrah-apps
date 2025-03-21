<!DOCTYPE html>
<html>
<head>
    <title>Laporan Penerima Zakat</title>
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
    </style>
</head>
<body>
    <h1>Laporan Penerima Zakat</h1>
    <table>
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
</body>
</html>