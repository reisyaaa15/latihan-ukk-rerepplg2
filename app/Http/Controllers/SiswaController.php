<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Perusahaan;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // Menampilkan semua data siswa
    public function index()
    {
        $siswa = Siswa::with('perusahaan')->get();

        return view('siswa.index', compact('siswa'));
    }

    // Menampilkan form tambah siswa
    public function create()
    {
        $perusahaan = Perusahaan::all();

        return view('siswa.create', compact('perusahaan'));
    }

    // Menyimpan data siswa
   public function store(Request $request)
{
    $request->validate([
        'nis' => 'required',
        'nama_siswa' => 'required',
        'kelas' => 'required',
        'jurusan' => 'required',
        'perusahaan_id' => 'required',
    ]);

    Siswa::create([
        'nis' => $request->nis,
        'nama_siswa' => $request->nama_siswa,
        'kelas' => $request->kelas,
        'jurusan' => $request->jurusan,
        'perusahaan_id' => $request->perusahaan_id,
    ]);

    return redirect()->route('siswa.index')
        ->with('success', 'Data siswa berhasil ditambahkan.');
}

    // Menampilkan form edit siswa
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);

        $perusahaan = Perusahaan::all();

        return view('siswa.edit', compact('siswa', 'perusahaan'));
    }

    // Mengubah data siswa
    public function update(Request $request, $id)
    {
        $request->validate([
            'nis' => 'required',
            'nama_siswa' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'perusahaan_id' => 'required',
        ]);

        $siswa = Siswa::findOrFail($id);

        $siswa->update([
            'nis' => $request->nis,
            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'perusahaan_id' => $request->perusahaan_id,
        ]);

        return redirect()
            ->route('siswa.index')
            ->with('success', 'Data siswa berhasil diubah.');
    }

    // Menghapus data siswa
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);

        $siswa->delete();

        return redirect()
            ->route('siswa.index')
            ->with('success', 'Data siswa berhasil dihapus.');
    }
}
