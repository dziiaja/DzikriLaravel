<!DOCTYPE html>
<html>
<head>
    <title>Data Kelas</title>
</head>
<body>

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

<table border="1">
    <thead>
        <tr>
            <th>Ruangan</th>
            <th>Nama Kelas</th>
            <th>Jurusan</th>
            <th>Wali Kelas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kelas as $k)
            <tr>
                <td>{{ $k->lokasi_ruangan }}</td>
                <td>{{ $k->nama_kelas }}</td>
                <td>{{ $k->jurusan }}</td>
                <td>{{ $k->nama_wali_kelas }}</td>
                <td>
                    <a href="{{ url('/kelas/' . $k->id . '/edit') }}">Edit</a>
                    <form action="{{ url('/kelas /' . $k->id) }}" method="POST" style="display:inline">
                        @csrf @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
