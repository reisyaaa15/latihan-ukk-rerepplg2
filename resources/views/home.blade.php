@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<h1>Selamat Datang di Sistem E-PKL</h1>

<p>
    Sistem Informasi Praktik Kerja Lapangan (PKL)
</p>

<div style="display: flex; gap: 15px; margin-top: 25px;">

    <a href="{{ route('siswa.index') }}"
       style="padding: 15px; background: #3498db; color: white; text-decoration: none;">
        Data Siswa
    </a>

    <a href="{{ route('perusahaan.index') }}"
       style="padding: 15px; background: #2ecc71; color: white; text-decoration: none;">
        Data Perusahaan
    </a>

    <a href="{{ route('kompetensi.index') }}"
       style="padding: 15px; background: #9b59b6; color: white; text-decoration: none;">
        Data Kompetensi
    </a>

</div>

@endsection
