<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaApiController extends Controller
{
    public function index() {
        $data = DB::table('t_siswa')->get();
        return response()->json($data);
    }

    public function store(Request $request) {
        $request->validate([
            'nis' => 'required|numeric',
            'nama_lengkap' => 'required|string',
            'jenis_kelamin' => 'required',
            'golongan_darah' => 'required',
        ]);

        $status = DB::table('t_siswa')->insert($request->only(['nis', 'nama_lengkap', 'jenis_kelamin', 'golongan_darah']));
        
        return response()->json([
            'success' => $status,
            'message' => $status ? 'Data berhasil disimpan' : 'Data gagal disimpan'
        ], $status ? 201 : 400);
    }

    public function patchupdate(Request $request, $id) {
        $request->validate([
            'nis' => 'sometimes|numeric',
            'nama_lengkap' => 'sometimes|string',
            'jenis_kelamin' => 'sometimes',
            'golongan_darah' => 'sometimes'
        ]);

        $data = $request->only(['nis', 'nama_lengkap', 'jenis_kelamin', 'golongan_darah']);
        $data = array_filter($data); // filter data yang kosong/null

        if (empty($data)) {
            return response()->json([
                'success' => false,
                'message' => 'Tidak ada data yang diberikan untuk diperbarui'
            ], 400);
        }

        $status = DB::table('t_siswa')->where('id', $id)->update($data);

        return response()->json([
            'success' => $status ? true : false,
            'message' => $status ? 'Data sebagian berhasil diperbarui (PATCH)' : 'Gagal update data'
        ], $status ? 200 : 400);  
    }

    public function putupdate(Request $request, $id) {
        $request->validate([
            'nis' => 'required|numeric',
            'nama_lengkap' => 'required|string',
            'jenis_kelamin' => 'required',
            'golongan_darah' => 'required',
        ]);

        $status = DB::table('t_siswa')->where('id', $id)->update($request->only(['nis', 'nama_lengkap', 'jenis_kelamin', 'golongan_darah']));

        return response()->json([
            'success' => $status ? true : false,
            'message' => $status ? 'Seluruh data berhasil diperbarui (PUT)' : 'Gagal update data'
        ], $status ? 200 : 400);
    }

    public function destroy($id) {
        $status = DB::table('t_siswa')->where('id', $id)->delete();

        return response()->json([
            'success' => $status ? true : false,
            'message' => $status ? 'Data berhasil dihapus' : 'Gagal hapus data'
        ], $status ? 200 : 400);
    }
}
