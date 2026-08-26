@extends('layouts.app')

@section('title', 'Tambah Siswa')

@section('content')

<h1>Tambah Siswa</h1>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('siswa.store') }}" method="POST">

    @csrf

    <p>
        <label>NIS</label><br>
        <input type="text" name="nis" value="{{ old('nis') }}" required>
    </p>

    <p>
        <label>Nama Siswa</label><br>
        <input type="text" name="nama_siswa" value="{{ old('nama_siswa') }}" required>
    </p>

    <p>
        <label>Kelas</label><br>
        <input type="text" name="kelas" value="{{ old('kelas') }}" required>
    </p>

    <p>
        <label>Jurusan</label><br>
        <input type="text" name="jurusan" value="{{ old('jurusan') }}" required>
    </p>

    <p>
        <label>Perusahaan</label><br>

        <select name="perusahaan_id" required>
            <option value="">-- Pilih Perusahaan --</option>

            @foreach ($perusahaan as $p)
                <option value="{{ $p->id }}">
                    {{ $p->nama_perusahaan }}
                </option>
            @endforeach

        </select>
    </p>

    <button type="submit">
        Simpan
    </button>

    <a href="{{ route('siswa.index') }}">
        Kembali
    </a>

</form>

@endsection
