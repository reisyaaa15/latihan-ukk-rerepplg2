<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Sistem E-PKL')</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            color: #333;
        }

        nav {
            background-color: #2563eb;
            padding: 16px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            color: white;
            font-size: 22px;
            font-weight: bold;
        }

        .menu {
            display: flex;
            gap: 10px;
        }

        .menu a {
            color: white;
            text-decoration: none;
            padding: 9px 14px;
            border-radius: 6px;
        }

        .menu a:hover {
            background-color: #1d4ed8;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 35px auto;
        }

        .card {
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
        }

        h1 {
            margin-top: 0;
            color: #1e3a8a;
        }

        .deskripsi {
            color: #666;
            margin-bottom: 25px;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        th {
            background-color: #2563eb;
            color: white;
            padding: 13px;
            text-align: left;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f1f5f9;
        }

        .badge {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 13px;
            background-color: #dbeafe;
            color: #1d4ed8;
        }

        .utama {
            background-color: #dcfce7;
            color: #15803d;
        }

        .kosong {
            text-align: center;
            color: #777;
            padding: 20px;
        }

        footer {
            text-align: center;
            padding: 25px;
            color: #777;
            margin-top: 40px;
        }
    </style>
</head>

<body>

    <nav>
        <div class="logo">
            Sistem E-PKL
        </div>

       <div class="menu">
    <a href="{{ route('home') }}">Beranda</a>
    <a href="{{ route('kompetensi.index') }}">Kompetensi</a>
    <a href="{{ route('perusahaan.index') }}">Perusahaan</a>
    <a href="{{ route('siswa.index') }}">Siswa</a>
</div>

    </nav>

    <main class="container">
        <div class="card">
            @yield('content')
        </div>
    </main>

    <footer>
        &copy; {{ date('Y') }} SMK — Modul E-PKL
    </footer>

</body>
</html>
