@extends('layouts.app')

@section('title', 'Edit Perusahaan')

@section('content')

<h1>Edit Perusahaan</h1>

<form action="{{ route('perusahaan.update', $perusahaan->id) }}" method="POST">
    @csrf
    @method('PUT')

    <p>
        <label>Nama Perusahaan</label><br>
        <input type="text"
               name="nama_perusahaan"
               value="{{ $perusahaan->nama_perusahaan }}"
               required>
    </p>

    <p>
        <label>Bidang Usaha</label><br>
        <input type="text"
               name="bidang_usaha"
               value="{{ $perusahaan->bidang_usaha }}"
               required>
    </p>

    <p>
        <label>Alamat</label><br>
        <textarea name="alamat" required>{{ $perusahaan->alamat }}</textarea>
    </p>

    <p>
        <label>Nama Pembimbing Industri</label><br>
        <input type="text"
               name="nama_pembimbing_industri"
               value="{{ $perusahaan->nama_pembimbing_industri }}">
    </p>

    <p>
        <label>Telepon</label><br>
        <input type="text"
               name="telepon"
               value="{{ $perusahaan->telepon }}">
    </p>

    <button type="submit">Update</button>

    <a href="{{ route('perusahaan.index') }}">
        Kembali
    </a>

</form>

@endsection
