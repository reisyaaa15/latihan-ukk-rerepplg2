@extends('layouts.app')

@section('title', 'Data Siswa')

@section('content')

<h1>Data Siswa</h1>

<a href="{{ route('siswa.create') }}">+ Tambah Siswa</a>

<br><br>

@if(session('success'))
    <p style="color: green;">
        {{ session('success') }}
    </p>
@endif

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Perusahaan</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($siswa as $s)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $s->nis }}</td>
                <td>{{ $s->nama_siswa }}</td>
                <td>{{ $s->kelas }}</td>
                <td>{{ $s->jurusan }}</td>

                <td>
                    {{ $s->perusahaan->nama_perusahaan ?? '-' }}
                </td>

                <td>
                    <a href="{{ route('siswa.edit', $s->id) }}">
                        Edit
                    </a>

                    <form action="{{ route('siswa.destroy', $s->id) }}"
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
                    Belum ada data siswa.
                </td>
            </tr>

        @endforelse
    </tbody>
</table>

@endsection
