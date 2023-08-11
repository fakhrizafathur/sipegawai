<html>
<head>
    <title>Data Karyawan</title>
    <!-- Tambahkan stylesheet Bootstrap jika diperlukan -->
    <link href="{{ public_path('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Data Karyawan</h1>
        <table id="customers">
            <thead>
                <tr>
                    <th scope="col">No Karyawan</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Pendidikan Terakhir</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item->no_karyawan }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jabatan }}</td>
                    <td>{{ $item->pendidikan_terakhir }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>