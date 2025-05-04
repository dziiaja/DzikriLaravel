<h1>Form Siswa</h1>
@if ($errors-> any())
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
<form action="{{ url('siswa') }}" method="POST">
    @csrf
    Nama kelas : <input type="text" name="nama_kelas"><br>
    Lokasi Ruangan : <input type="text" name="lokasi_ruangan"><br>
    Nama Wali Kelas : <input type="text" name="nama_wali_kelas"><br>
    Jurusan : <br>
    <label for="RPL"><input type="radio" name="jurusan" id="RPL" value="RPL">Rekayasa Perangkat Lunak</label><br>
    <label for="DKV"><input type="radio" name="jurusan" id="DKV" value="DKV">Desain Komunikasi Visual</label><br>
    <label for="TJK"><input type="radio" name="jurusan" id="TJK" value="TJK">Tehnik Komputer Dan Jaringan </label><br>
    <label for="TITL"><input type="radio" name="jurusan" id="TILT" value="TITL">Tehnik Instalasi Tenaga Listrik</label><br>
    <input type="submit" value="Simpan">
</form>
