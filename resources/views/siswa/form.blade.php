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

<form action="{{ !empty($siswa) ? url('/siswa/' . $siswa->id) : url('/siswa') }}" method="POST">
    @csrf
    
    @if (!empty($siswa))
        @method('PATCH')
    @endif

    NIS:
    <input type="text" name="nis" value="{{ old('nis', @$siswa->nis) }}"><br>

    Nama Lengkap:
    <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap', @$siswa->nama_lengkap) }}"><br>

    Jenis Kelamin:<br>
    <label for="L">
        <input type="radio" name="jenis_kelamin" id="L" value="L"
               {{ old('jenis_kelamin', @$siswa->jenis_kelamin) == 'L' ? 'checked' : '' }}>
        Laki-laki
    </label><br>
    <label for="P">
        <input type="radio" name="jenis_kelamin" id="P" value="P"
               {{ old('jenis_kelamin', @$siswa->jenis_kelamin) == 'P' ? 'checked' : '' }}>
        Perempuan
    </label><br>

    Golongan Darah:
    <select name="golongan_darah">
        <option value="">--Pilih Golongan Darah--</option>
        <option value="A" {{ old('golongan_darah', @$siswa->golongan_darah) == 'A' ? 'selected' : '' }}>A</option>
        <option value="B" {{ old('golongan_darah', @$siswa->golongan_darah) == 'B' ? 'selected' : '' }}>B</option>
        <option value="AB" {{ old('golongan_darah', @$siswa->golongan_darah) == 'AB' ? 'selected' : '' }}>AB</option>
        <option value="O" {{ old('golongan_darah', @$siswa->golongan_darah) == 'O' ? 'selected' : '' }}>O</option>
    </select><br>

    <input type="submit" value="Simpan">
</form>
