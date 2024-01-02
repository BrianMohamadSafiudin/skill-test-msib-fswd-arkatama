<html>
<head>
    <title>Tambah Data Pengguna</title>
</head>
<body>
    <h1>Tambah Data Pengguna</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('inputpengguna.store') }}">
        @csrf
        <label for="data">Input Pengguna (NAMA USIA KOTA):</label>
        <input type="text" name="data" required>
        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="{{ route('showpengguna.index') }}">
        <button>Kembali</button><br><br>
    </a>
</body>
</html>
