<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Merriweather', serif;
            background-color: #fffbe6;
            color: #3e3e3e;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 30px;
            color: #8e5e3b;
        }

        table {
            width: 65%;
            max-width: 550px;
            border-collapse: collapse;
            background-color: #fffdf7;
            border: 1px solid #e6caa5;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 16px 20px;
            border-bottom: 1px solid #e6caa5;
            text-align: left;
        }

        th {
            background-color: #f5e3cc;
            color: #5e402b;
        }

        tr:last-child td {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <h1>Informasi Buku</h1>
    <table>
        <tr>
            <th>Judul</th>
            <td>{{ $judul }}</td>
        </tr>
        <tr>
            <th>Penulis</th>
            <td>{{ $penulis }}</td>
        </tr>
        <tr>
            <th>Tahun Terbit</th>
            <td>{{ $tahun }}</td>
        </tr>
        <tr>
            <th>Penerbit</th>
            <td>{{ $penerbit }}</td>
        </tr>
    </table>
</body>
</html>
