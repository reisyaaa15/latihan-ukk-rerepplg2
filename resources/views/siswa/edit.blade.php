@extends('layouts.app')

@section('title', 'Edit Siswa')

@section('content')

<h1>Edit Siswa</h1>

<form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
    @csrf
    @method('PUT')

    <p>
        <label>NIS</label><br>
        <input type="text"
               name="nis"
               value="{{ $siswa->nis }}"
               required>
    </p>

    <p>
        <label>Nama Siswa</label><br>
        <input type="text"
               name="nama_siswa"
               value="{{ $siswa->nama_siswa }}"
               required>
    </p>

    <p>
        <label>Kelas</label><br>
        <input type="text"
               name="kelas"
               value="{{ $siswa->kelas }}"
               required>
    </p>

    <p>
        <label>Jurusan</label><br>
        <input type="text"
               name="jurusan"
               value="{{ $siswa->jurusan }}"
               required>
    </p>

    <p>
        <label>Perusahaan</label><br>

        <select name="perusahaan_id" required>
            @foreach ($perusahaan as $p)
                <option value="{{ $p->id }}"
                    {{ $siswa->perusahaan_id == $p->id ? 'selected' : '' }}>
                    {{ $p->nama_perusahaan }}
                </option>
            @endforeach
        </select>
    </p>

    <button type="submit">Update</button>

    <a href="{{ route('siswa.index') }}">
        Kembali
    </a>

</form>

@endsection
