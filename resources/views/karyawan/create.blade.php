<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <body>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <h2 class="text-center mb-4 mt-4">Tambah Karyawan</h1>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('karyawan.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="no_karyawan" class="form-label">No Karyawan:</label> <!-- Ubah label menjadi No Karyawan -->
                                    <input type="text" class="form-control @error('no_karyawan') is-invalid @enderror" name="no_karyawan" id="no_karyawan" value="{{ old('no_karyawan') }}">
                                    @error('no_karyawan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama:</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{ old('nama') }}">
                                    @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="jabatan" class="form-label">Jabatan:</label>
                                    <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" id="jabatan" value="{{ old('jabatan') }}">
                                    @error('jabatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="pendidikan_terakhir" class="form-label">Pendidikan Terakhir:</label> <!-- Tambahkan input pendidikan_terakhir -->
                                    <input type="text" class="form-control @error('pendidikan_terakhir') is-invalid @enderror" name="pendidikan_terakhir" id="pendidikan_terakhir" value="{{ old('pendidikan_terakhir') }}">
                                    @error('pendidikan_terakhir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    <input type="submit" value="Simpan" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
