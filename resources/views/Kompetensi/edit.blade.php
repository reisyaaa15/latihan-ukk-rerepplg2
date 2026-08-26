@extends('layouts.app')

@section('title', 'Edit Kompetensi')

@section('content')

<h1>Edit Kompetensi</h1>

<form action="{{ route('kompetensi.update', $kompetensi->id) }}" method="POST">
    @csrf
    @method('PUT')

    <p>
        <label>Nama Kompetensi</label><br>
        <input type="text"
               name="nama_kompetensi"
               value="{{ $kompetensi->nama_kompetensi }}"
               required>
    </p>

    <p>
        <label>Deskripsi</label><br>
        <textarea name="deskripsi" required>{{ $kompetensi->deskripsi }}</textarea>
    </p>

    <button type="submit">Update</button>

    <a href="{{ route('kompetensi.index') }}">
        Kembali
    </a>
</form>

@endsection
