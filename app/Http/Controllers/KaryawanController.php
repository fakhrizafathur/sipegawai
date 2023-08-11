<?php
namespace App\Http\Controllers;

use Dompdf\Dompdf;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use PDF;
use Excel;
use App\Exports\KaryawanExport;

class KaryawanController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $karyawan = Karyawan::where('no_karyawan', 'LIKE', "%$search%")
            ->orWhere('nama', 'LIKE', "%$search%")
            ->orWhere('jabatan', 'LIKE', "%$search%")
            ->orWhere('pendidikan_terakhir', 'LIKE', "%$search%")
            ->get();

        return view('dashboard', compact('karyawan'));
    }

    public function create()
    {
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'no_karyawan' => 'required|integer',
            'nama' => 'required',
            'jabatan' => 'required',
            'pendidikan_terakhir' => 'required',
        ], [
            'no_karyawan.required' => 'Nomor Karyawan Harus Diisi',
            'no_karyawan.integer' => 'Nomor Karyawan Harus Berupa Angka',
            'nama.required' => 'Nama Harus Diisi',
            'jabatan.required' => 'Jabatan Harus Diisi',
            'pendidikan_terakhir.required' => 'Pendidikan Terakhir Harus Diisi',
        ]);

        Karyawan::create($request->all());

        return redirect()->route('dashboard')->with('success', 'Karyawan berhasil ditambahkan.');
    }

    public function edit($no_karyawan)
    {
        $karyawan = Karyawan::findOrFail($no_karyawan);

        return view('karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, $no_karyawan)
    {
        $validatedData = $request->validate([
            'no_karyawan' => 'required|integer',
            'nama' => 'required',
            'jabatan' => 'required',
            'pendidikan_terakhir' => 'required',
        ], [
            'no_karyawan.required' => 'Nomor Karyawan Harus Diisi',
            'no_karyawan.integer' => 'Nomor Karyawan Harus Berupa Angka',
            'nama.required' => 'Nama Harus Diisi',
            'jabatan.required' => 'Jabatan Harus Diisi',
            'pendidikan_terakhir.required' => 'Pendidikan Terakhir Harus Diisi',
        ]);

        $karyawan = Karyawan::findOrFail($no_karyawan);
        $karyawan->update($request->all());

        return redirect()->route('dashboard')->with('success', 'Karyawan berhasil diperbarui.');
    }

    public function destroy($no_karyawan)
    {
        $karyawan = Karyawan::findOrFail($no_karyawan);
        $karyawan->delete();

        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil dihapus.');
    }

    public function exportPDF()
    {
        $data = Karyawan::all();

        $pdf = PDF::loadView('karyawan.exportPDF', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('data.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new KaryawanExport(), 'data_karyawan.xlsx');
    }
}