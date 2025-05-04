<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f7f9fc;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px 20px;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 30px;
            color: #2c3e50;
        }

        table {
            width: 60%;
            max-width: 500px;
            border-collapse: separate;
            border-spacing: 0;
            background-color: #ffffff;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            border-radius: 12px;
            overflow: hidden;
        }

        th, td {
            padding: 15px 20px;
            text-align: left;
        }

        th {
            background-color: #2c3e50;
            color: #fff;
            font-weight: 600;
        }

        tr:nth-child(even) td {
            background-color: #f1f4f9;
        }

        td {
            background-color: #fff;
        }
    </style>
</head>
<body>
    <h1>Data Siswa</h1>
    <table>
        <tr>
            <th>Nama</th>
            <td>{{ $nama }}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{ $jk }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{ $alamat }}</td>
        </tr>
        <tr>
            <th>Tempat Tanggal Lahir</th>
            <td>{{ $lahir }}</td>
        </tr>
    </table>
</body>
</html>
