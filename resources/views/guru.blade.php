<h2>Data Guru</h2>
<a href="{{ url('/guru/create') }}">Tambah Guru</a>
<table border="1">
    <tr>
        <th>NIP</th><th>Nama</th><th>JK</th><th>Alamat</th><th>Aksi</th>
    </tr>
    @foreach($guru as $g)
    <tr>
        <td>{{ $g->nip }}</td>
        <td>{{ $g->nama_guru }}</td>
        <td>{{ $g->jenis_kelamin }}</td>
        <td>{{ $g->alamat }}</td>
        <td>
                <a href="{{ url('/guru/edit/'. $g->id)}}">Edit</a>
                <form action="{{ url('/guru', $g->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
        </td>
    </tr>
    @endforeach
</table>
