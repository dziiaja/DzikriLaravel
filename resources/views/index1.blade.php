<head>
<a href="{{ url('/kelas/create') }}">Tambah data</a>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
</head>
<body>
    <table border=1>
        <thead>
            <tr>
                <th>Ruangan</th>
                <th>Nama_kelas
                <th>Jurusan</th>
                <th>Wali Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $k)
                <tr>
                    <td>{{ $k->lokasi_ruangan }}</td>
                    <td>{{ $k->nama_kelas }}</td>
                    <td>{{ $k->jurusan }}</td>
                    <td>{{ $k->nama_wali_kelas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
