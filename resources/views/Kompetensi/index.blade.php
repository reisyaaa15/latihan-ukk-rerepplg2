@extends('layouts.app')

@section('title', 'Daftar Kompetensi')

@section('content')

<h1>Daftar Kompetensi PKL</h1>

@if (session('success'))
    <div style="background:#dcfce7; padding:10px; margin-bottom:15px;">
        {{ session('success') }}
    </div>
@endif

<a href="{{ route('kompetensi.create') }}">
    + Tambah Kompetensi
</a>

<br><br>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kompetensi</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($kompetensi as $index => $k)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $k->nama_kompetensi }}</td>
                <td>{{ $k->deskripsi }}</td>
                <td>
                    <a href="{{ route('kompetensi.edit', $k->id) }}">
                        Edit
                    </a>

                    <form action="{{ route('kompetensi.destroy', $k->id) }}"
                          method="POST"
                          style="display:inline">

                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                onclick="return confirm('Yakin ingin menghapus kompetensi ini?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">
                    Belum ada data kompetensi.
                </td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection
