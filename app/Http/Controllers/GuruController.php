<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Guru;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::all();
        return view('guru', compact('guru'));
    }

    public function create()
    {
        return view('guru.form');
    }

    public function store(Request $request)
    {
        $rule = [
            'nip' => 'required|numeric',
            'nama_guru' => 'required|string',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ];

        $this->validate($request, $rule);

        $input = $request->all();

        $guru = new Guru;
        $guru->nip = $input['nip'];
        $guru->nama_guru = $input['nama_guru'];
        $guru->jenis_kelamin = $input['jenis_kelamin'];
        $guru->alamat = $input['alamat'];
        $status = $guru->save();

        if ($status) {
            return redirect('/guru')->with('success', 'Data guru berhasil ditambahkan');
        } else {
            return redirect('/guru/create')->with('error', 'Data guru gagal ditambahkan');
        }
    }


    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        return view('guru.form', compact('guru'));
    }

    public function update(Request $request, $id)
    {
        $rule = [
            'nip' => 'required|numeric',
            'nama_guru' => 'required|string',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ];

        $this->validate($request, $rule);

        $input = $request->all();

        $guru = \App\Models\Guru::find($id);
        $guru->nip = $input['nip'];
        $guru->nama_guru = $input['nama_guru'];
        $guru->jenis_kelamin = $input['jenis_kelamin'];
        $guru->alamat = $input['alamat'];
        $status = $guru->update();

        if ($status) {
            return redirect('/guru')->with('success', 'Data guru berhasil diubah');
        } else {
            return redirect('/guru/' . $id . '/edit')->with('error', 'Data guru gagal diubah');
        }
    }


    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->delete();
        return redirect('/guru')->with('success', 'Data guru berhasil dihapus');
    }
}

