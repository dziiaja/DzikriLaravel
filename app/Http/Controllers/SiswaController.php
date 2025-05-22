<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Siswa;



class SiswaController extends Controller
{
    function index() {
        $nama = "Dzikri";
        $jenis_kelamin = "Laki-Laki";
        $alamat = "Jl.Cipamokolan No 88 Kota Bandung";
        $lahir = "Bogor 20 Januari 2008";
        return view ('controller', compact('nama', 'jk', 'alamat', 'lahir'));
    }

    function index1() {
        $namaProduk = "Headphone Wireless";
        $kategori = "Elektronik";
        $harga = 299000;
        $stok = 25;
        return view('produk', compact('namaProduk', 'kategori', 'harga', 'stok'));
    }
    
    function index2() {
        $judul = "Laskar Pelangi";
        $penulis = "Andrea Hirata";
        $tahun = 2005;
        $penerbit = "Bentang Pustaka";
        return view('buku', compact('judul', 'penulis', 'tahun', 'penerbit'));
    }
    
    function index4() {
        $siswa = DB::table('t_siswa')->get();
        return view ('belajar', compact('siswa'));
    }

    public function create() {
        return view('siswa.form');
    }

    public function store(Request $request) {
        $request->validate([
            'nis' => 'required|numeric',
            'nama_lengkap' => 'required|string',
            'jenis_kelamin' => 'required',
            'golongan_darah' => 'required',
        ]);
        $input = $request->all();
        // unset($input['_token']);
        // $status = DB::table('t_siswa')
        // ->insert($input);

        $status = Siswa::create($input);
        if ($status) {
            return redirect('/siswa')->with('success','Data Berhasil di tambahkan');
        } else {
            return redirect('/siswa')->with('error', 'Data Gagal ditambahkan');
        }
    }

    function edit(Request $request, $id) {
        $siswa = DB::table('t_siswa')->find($id);
        return view('siswa.form', compact('siswa'));
    }

    function update(Request $request, $id){
        $request->validate([
            'nis' => 'required|numeric',
            'nama_lengkap' => 'required|string',
            'jenis_kelamin' => 'required',
            'golongan_darah' => 'required',
        ]);

        $input = $request->all();
        // unset($input['_token']);
        // unset($input['_method']);
        // $status = DB::table('t_siswa')->where('id', $id)->update($input);
        $siswa = Siswa::find($id);
        $status = $siswa->update($input);

        if ($status) {
            return redirect('/siswa')->with('success', 'Data berhasil diubah');
        } else {
            return redirect('/siswa/edit/' . $id)->with('error', 'Data gagal diubah');
        }
    }

    function destroy($id){
        // $status =  DB::table('t_siswa')->where('id', $id)->delete();     
        $siswa = Siswa::find($id);
        $status = $siswa->delete();
        if ($status) {
            return redirect('/siswa')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect('/siswa')->with('error', 'Data Gagal dihapus');
        }
    }

    public function eloquent() {
        $data['siswa'] = Siswa::orderBy('jenis_kelamin')->get();
        return view('belajar', $data);
    }

}

