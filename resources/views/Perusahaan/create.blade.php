@extends('layouts.app')

@section('title', 'Tambah Perusahaan')

@section('content')

<h1>Tambah Perusahaan</h1>

<form action="{{ route('perusahaan.store') }}" method="POST">
    @csrf

    <p>
        <label>Nama Perusahaan</label><br>
        <input type="text" name="nama_perusahaan">
    </p>

    <p>
        <label>Bidang Usaha</label><br>
        <input type="text" name="bidang_usaha">
    </p>

    <p>
        <label>Alamat</label><br>
        <textarea name="alamat"></textarea>
    </p>

    <p>
        <label>Nama Pembimbing Industri</label><br>
        <input type="text" name="nama_pembimbing_industri">
    </p>

    <p>
        <label>Telepon</label><br>
        <input type="text" name="telepon">
    </p>

    <button type="submit">Simpan</button>

    <a href="{{ route('perusahaan.index') }}">
        Kembali
    </a>
</form>

@endsection
