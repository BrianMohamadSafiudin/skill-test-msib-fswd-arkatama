<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengguna</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: antiquewhite;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #0061f2;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            text-decoration: none;
            display: block;
            text-align: center;
            margin: 10px auto;
        }

        button {
            padding: 10px;
            background-color: #45a049;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: orange;
        }
    </style>
</head>
<body>

    <h1>Data Pengguna</h1>

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

    <a href="{{ route('inputpengguna.create') }}">
        <button>Tambah Data</button><br><br>
    </a>
</body>
</html>
