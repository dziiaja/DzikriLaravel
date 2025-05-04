<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Rubik', sans-serif;
            background-color: #f2f7ff;
            color: #2c3e50;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px;
        }

        h1 {
            font-size: 30px;
            margin-bottom: 25px;
            color: #1e3799;
        }

        table {
            width: 60%;
            max-width: 500px;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 14px 20px;
            border-bottom: 1px solid #ecf0f1;
            text-align: left;
        }

        th {
            background-color: #1e3799;
            color: #fff;
        }

        tr:last-child td {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <h1>Informasi Produk</h1>
    <table>
        <tr>
            <th>Nama Produk</th>
            <td>{{ $namaProduk }}</td>
        </tr>
        <tr>
            <th>Kategori</th>
            <td>{{ $kategori }}</td>
        </tr>
        <tr>
            <th>Harga</th>
            <td>Rp {{ number_format($harga, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <th>Stok</th>
            <td>{{ $stok }} unit</td>
        </tr>
    </table>
</body>
</html>
