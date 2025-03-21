<!DOCTYPE html>
<html>
<head>
    <title>Laporan Muzakki</title>
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
    <h1>Laporan Muzakki</h1>
    <table>
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
</body>
</html>