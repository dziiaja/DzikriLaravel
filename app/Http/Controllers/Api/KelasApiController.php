<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasApiController extends Controller
{
    public function index() {
        $data = DB::table('t_tugas')->get();
        return response()->json($data);
    }

    public function store(Request $request) {
        $request->validate([
            'nama_kelas' => 'required|string',
            'jurusan' => 'required|string',
            'lokasi_ruangan' => 'required|string',
            'nama_wali_kelas' => 'required|string',
        ]);

        $status = DB::table('t_tugas')->insert($request->only(['nama_kelas', 'jurusan', 'lokasi_ruangan', 'nama_wali_kelas']));
        
        return response()->json([
            'success' => $status,
            'message' => $status ? 'Data berhasil disimpan' : 'Data gagal disimpan'
        ], $status ? 201 : 400);
    }

    public function patchupdate(Request $request, $id) {
        $request->validate([
            'nama_kelas' => 'sometimes|string',
            'jurusan' => 'sometimes|string',
            'lokasi_ruangan' => 'sometimes|string',
            'nama_wali_kelas' => 'sometimes|string',
        ]);        

        $data = $request->only(['nama_kelas', 'jurusan', 'lokasi_ruangan', 'nama_wali_kelas']);
        $data = array_filter($data); // filter data yang kosong/null

        if (empty($data)) {
            return response()->json([
                'success' => false,
                'message' => 'Tidak ada data yang diberikan untuk diperbarui'
            ], 400);
        }

        $status = DB::table('t_tugas')->where('id', $id)->update($data);

        return response()->json([
            'success' => $status ? true : false,
            'message' => $status ? 'Data sebagian berhasil diperbarui (PATCH)' : 'Gagal update data'
        ], $status ? 200 : 400);  
    }

    public function putupdate(Request $request, $id) {
        $request->validate([
            'nama_kelas' => 'required|string',
            'jurusan' => 'required|string',
            'lokasi_ruangan' => 'required|string',
            'nama_wali_kelas' => 'required|string',
        ]);

        $status = DB::table('t_tugas')->where('id', $id)->update($request->only(['nama_kelas', 'jurusan', 'lokasi_ruangan', 'nama_wali_kelas']));

        return response()->json([
            'success' => $status ? true : false,
            'message' => $status ? 'Seluruh data berhasil diperbarui (PUT)' : 'Gagal update data'
        ], $status ? 200 : 400);
    }

    public function destroy($id) {
        $status = DB::table('t_tugas')->where('id', $id)->delete();

        return response()->json([
            'success' => $status ? true : false,
            'message' => $status ? 'Data berhasil dihapus' : 'Gagal hapus data'
        ], $status ? 200 : 400);
    }
}
