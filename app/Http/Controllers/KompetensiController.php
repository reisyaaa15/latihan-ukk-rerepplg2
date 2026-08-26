<?php

namespace App\Http\Controllers;

use App\Models\Kompetensi;
use Illuminate\Http\Request;

class KompetensiController extends Controller
{
    public function index()
    {
        $kompetensi = Kompetensi::all();

        return view('kompetensi.index', compact('kompetensi'));
    }

    public function create()
    {
        return view('kompetensi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kompetensi' => 'required',
            'deskripsi' => 'required',
        ]);

        Kompetensi::create($request->all());

        return redirect()->route('kompetensi.index')
            ->with('success', 'Data kompetensi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kompetensi = Kompetensi::findOrFail($id);

        return view('kompetensi.edit', compact('kompetensi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kompetensi' => 'required',
            'deskripsi' => 'required',
        ]);

        $kompetensi = Kompetensi::findOrFail($id);
        $kompetensi->update($request->all());

        return redirect()->route('kompetensi.index')
            ->with('success', 'Data kompetensi berhasil diubah.');
    }

    public function destroy($id)
    {
        $kompetensi = Kompetensi::findOrFail($id);
        $kompetensi->delete();

        return redirect()->route('kompetensi.index')
            ->with('success', 'Data kompetensi berhasil dihapus.');
    }
}
