<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <marquee behavior="scroll" direction="left">
                Selamat Datang di Sistem Informasi Pegawai PT, Teknologi Server Indonesia
                </marquee>
                    <!-- Tampilkan popup alert hanya saat login berhasil dan belum ditampilkan sebelumnya -->
                    <div class="popup-container" id="alertPopup" style="display: none;">
                        <div class="popup-alert">
                            <span class="close-btn" onclick="closeAlertPopup()">&times;</span>
                            <h2>Welcome!</h2>
                            <p>You're logged in. Enjoy your experience!</p>
                            <button class="cta-btn" onclick="closeAlertPopup()">Got it!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Fungsi untuk menampilkan popup alert
        function showPopupAlert() {
            const alertPopup = document.getElementById('alertPopup');
            // Cek apakah popup sudah ditampilkan sebelumnya menggunakan localStorage
            const isPopupShown = localStorage.getItem('isPopupShown');
            if (!isPopupShown || isPopupShown === 'false') {
                alertPopup.style.display = 'flex';
                // Setelah popup muncul, simpan informasi bahwa popup sudah ditampilkan
                localStorage.setItem('isPopupShown', 'true');
            }
        }

        // Fungsi untuk menyembunyikan popup alert
        function closeAlertPopup() {
            const alertPopup = document.getElementById('alertPopup');
            alertPopup.style.display = 'none';
        }

        // Panggil fungsi showPopupAlert setelah halaman dimuat
        window.addEventListener('load', function() {
            showPopupAlert();
        });
    </script>
<body>
    <link href="{{ asset('css/karyawan.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <h2 class="h1 text-center mt-4">Data Karyawan</h2>

    <div class="row g-3 align-items-center mt-2 mb-2">
        <div class="col-auto">
            <a href="{{ route('karyawan.create') }}"  class="btn btn-success">Tambah Karyawan</a>
        </div>
        <div class="col-auto">
            <a href="{{ route('karyawan.pdf') }}" class="btn btn-primary">Export to PDF</a>
        </div>
        <div class="col-auto">
            <a href="{{ route('karyawan.excel') }}" class="btn btn-primary">Export to Excel</a>
        </div>
        <form action="{{ route('karyawan.index') }}" method="GET" class="d-flex col-md-2 offset-md-6">
            <input class="form-control me-2" name="search" placeholder="Cari karyawan...">
            <button type="submit" class="btn btn-outline-success">Cari</button>
        </form>
    </div>
    
    
    <table class="table table-striped">
        <tr>
            <th scope="col">No Karyawan</th> <!-- Ubah label menjadi No Karyawan -->
            <th scope="col">Nama</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Pendidikan Terakhir</th> <!-- Tambahkan kolom pendidikan terakhir -->
            <th scope="col">Aksi</th>
        </tr>
        @foreach ($karyawan as $item)
        <tr class="table-light">
            <td scope="row">{{ $item->no_karyawan }}</td> <!-- Tampilkan no_karyawan -->
            <td>{{ $item->nama }}</td>
            <td>{{ $item->jabatan }}</td>
            <td>{{ $item->pendidikan_terakhir }}</td>
            <td>
                <a href="{{ route('karyawan.edit', $item->no_karyawan) }}" class="btn btn-info">Edit</a>
                <a href="/delete/{{ $item->no_karyawan }}" class="btn btn-danger delete" data-id="{{ $item->no_karyawan }}" data-nama="{{ $item->nama }}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
    <footer class="text-center" style="background-color: #e5e7eb;">
        <div class="container p-2 mt-4">
            <section>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <center><img src="/images/XCODE.png" alt="X-Code"  height="24"></center>
                    </div>
                </div>
            </section>
        </div>
        <div class="text-center p-3">
            <p class="card-text text-black">COPYRIGHT © X-CODE PROFESSIONAL, PT. TEKNOLOGI SERVER INDONESIA, YOGYAKARTA INDONESIA. YOGYAKARTA INDONESIA</p>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</x-app-layout>
