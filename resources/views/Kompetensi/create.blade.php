@extends('layouts.app')

@section('title', 'Tambah Kompetensi')

@section('content')

<h1>Tambah Kompetensi</h1>

<form action="{{ route('kompetensi.store') }}" method="POST">
    @csrf

    <p>
        <label>Nama Kompetensi</label><br>
        <input type="text" name="nama_kompetensi" required>
    </p>

    <p>
        <label>Deskripsi</label><br>
        <textarea name="deskripsi" required></textarea>
    </p>

    <button type="submit">Simpan</button>

    <a href="{{ route('kompetensi.index') }}">
        Kembali
    </a>
</form>

@endsection
