<html>
<head>
    <title>Data Pengguna</title>
</head>
<body>

    <h1>Data Pengguna</h1>

    <a href="{{ route('inputpengguna.create') }}">
        <button>Tambah Data</button><br><br>
    </a>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Usia</th>
            <th>Kota</th>
            <th>Dibuat Pada</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->age }}</td>
                <td>{{ $user->city }}</td>
                <td>{{ $user->created_at }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
