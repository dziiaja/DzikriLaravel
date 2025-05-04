<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    function index() {
        $nama = "Dzikri";
        $jk = "Laki-Laki";
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
        unset($input['_token']);
        $status = DB::table('t_siswa')
        ->insert($input);
        if ($status) {
            return redirect('/siswa')->with('success','Data Berhasil di tambahkan');
        } else {
            return redirect('/siswa')->with('error', 'Data Gagal ditambahkan');
        }
    }
}

