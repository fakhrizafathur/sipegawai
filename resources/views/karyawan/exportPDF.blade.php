<html>
<head>
    <title>Data Karyawan</title>
    <!-- Tambahkan stylesheet Bootstrap jika diperlukan -->
    <link href="{{ public_path('css/app.css') }}" rel="stylesheet">
    <style>
        #karyawan tr:nth-child(even){background-color: #f2f2f2;}

        #karyawan tr:hover {background-color: #ddd;}

        #karyawan th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #04AA6D;
            color: white;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Karyawan</h1>
        <table id="karyawan">
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