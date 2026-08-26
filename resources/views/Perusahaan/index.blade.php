@extends('layouts.app')

@section('title', 'Daftar Perusahaan')

@section('content')

    <h1>Daftar Perusahaan Mitra PKL</h1>

    <a href="{{ route('perusahaan.create') }}">
        + Tambah Perusahaan
    </a>

    <br><br>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Perusahaan</th>
                <th>Bidang Usaha</th>
                <th>Alamat</th>
                <th>Pembimbing Industri</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($perusahaan as $index => $p)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $p->nama_perusahaan }}</td>
                    <td>{{ $p->bidang_usaha }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td>{{ $p->nama_pembimbing_industri }}</td>
                    <td>{{ $p->telepon }}</td>
                    <td>
                        <a href="{{ route('perusahaan.edit', $p->id) }}">
                            Edit
                        </a>

                        <form action="{{ route('perusahaan.destroy', $p->id) }}"
                              method="POST"
                              style="display:inline">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    onclick="return confirm('Yakin ingin menghapus?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">
                        Belum ada data perusahaan.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection
