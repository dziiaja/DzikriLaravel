<!DOCTYPE html>
<html>
<head meta charset="UTF-8">
    <title>Data Siswa</title>
</head>
<body>

<h1>Belajar Laravel, Tulisan ini ditampilkan dari Views</h1>

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


<a href="{{ url('/siswa/create') }}">Tambah data</a>
<br><br>

<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Golongan Darah</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($siswa as $i => $row)
        <tr>
            <td>{{ $i + 1 }}</td>
            <td>{{ $row->nis }}</td>
            <td>{{ $row->nama_lengkap }}</td>
            <td>{{ $row->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
            <td>{{ $row->golongan_darah }}</td>
            <td>
                <a href="{{ url('/siswa/edit/'. $row->id)}}">Edit</a>
                <form action="{{ url('/siswa', $row->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
                
        </tr>   
        @endforeach
    </tbody>
</table>

</body>
</html>
