<h2>{{ isset($guru) ? 'Edit Guru' : 'Tambah Guru' }}</h2>
<form action="{{ isset($guru) ? url('/guru/' . $guru->id) : url('/guru') }}" method="POST">
    @csrf
    @if(isset($guru))
        @method('PUT')
    @endif
    <label>NIP:</label>
    <input type="text" name="nip" value="{{ old('nip', $guru->nip ?? '') }}"><br>

    <label>Nama:</label>
    <input type="text" name="nama_guru" value="{{ old('nama_guru', $guru->nama_guru ?? '') }}"><br>

    <label>Jenis Kelamin:</label>
    <select name="jenis_kelamin">
        <option value="L" {{ (old('jenis_kelamin', $guru->jenis_kelamin ?? '') == 'L') ? 'selected' : '' }}>Laki-laki</option>
        <option value="P" {{ (old('jenis_kelamin', $guru->jenis_kelamin ?? '') == 'P') ? 'selected' : '' }}>Perempuan</option>
    </select><br>

    <label>Alamat:</label>
    <textarea name="alamat">{{ old('alamat', $guru->alamat ?? '') }}</textarea><br>

    <button type="submit">Simpan</button>
</form>
