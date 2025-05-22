<h1>Form Siswa</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Perhatian</strong>
        <br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ !empty($kelas) ? url('/kelas/' . $kelas->id) : url('/siswa') }}" method="POST">
    @csrf
    @if (!empty($kelas))
        @method('PATCH')
    @endif
    Nama kelas : <input type="text" name="nama_kelas" value="{{ old('nama_kelas', $kelas->nama_kelas) }}"><br>
    Lokasi Ruangan : <input type="text" name="lokasi_ruangan" value="{{ old('lokasi_ruangan', $kelas->lokasi_ruangan) }}"><br>
    Nama Wali Kelas : <input type="text" name="nama_wali_kelas" value="{{ old('nama_wali_kelas', $kelas->nama_wali_kelas) }}"><br>
    Jurusan : <br>
    <label for="RPL">
        <input type="radio" name="jurusan" id="RPL" value="RPL" {{ old('jurusan', $kelas->jurusan) == 'RPL' ? 'checked' : '' }}> Rekayasa Perangkat Lunak
    </label><br>
    <label for="DKV">
        <input type="radio" name="jurusan" id="DKV" value="DKV" {{ old('jurusan', $kelas->jurusan) == 'DKV' ? 'checked' : '' }}> Desain Komunikasi Visual
    </label><br>
    <label for="TJK">
        <input type="radio" name="jurusan" id="TJK" value="TJK" {{ old('jurusan', $kelas->jurusan) == 'TJK' ? 'checked' : '' }}> Teknik Komputer Dan Jaringan
    </label><br>
    <label for="TITL">
        <input type="radio" name="jurusan" id="TILT" value="TITL" {{ old('jurusan', $kelas->jurusan) == 'TITL' ? 'checked' : '' }}> Teknik Instalasi Tenaga Listrik
    </label><br>
    <input type="submit" value="Simpan">
</form>
