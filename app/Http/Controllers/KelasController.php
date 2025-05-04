<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    function index5() {
        $kelas = DB::table('t_tugas')->get();   
        return view ('index1', compact('kelas'));
    }

    public function index6() {
        $kelas = DB::table('t_tugas')
                ->where('nama_wali_kelas', 'like', 'A%')
                ->get();
        return view('index1', compact('kelas'));
    }
    
    public function index7() {
        $kelas = DB::table('t_tugas')
                ->select('nama_kelas', 'jurusan')
                ->get();
        return view('index1', compact('kelas'));
    }
    
    public function index8() {
        $kelas = DB::table('t_tugas')
                ->where('jurusan', 'like', 'RPL%')
                ->get();   
        return view('index1', compact('kelas'));
    }

    public function create() {
        return view('kelas.form');
    }

    public function store(Request $request) {
        $request->validate([
            'nama_kelas' => 'required|string',
            'jurusan' => 'required|string',
            'lokasi_ruangan' => 'required|string',
            'nama_wali_kelas' => 'required|string',
        ]);
        $input = $request->all();
        unset($input['_token']);
        $status = DB::table('t_tugas')
        ->insert($input);
        if ($status) {
            return redirect('/kelas')->with('success','Data Berhasil di tambahkan');
        } else {
            return redirect('/kelas')->with('error', 'Data Gagal ditambahkan');
        }
    }
}
