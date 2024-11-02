<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return Mahasiswa::all();  // Mengambil semua data mahasiswa
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|unique:mahasiswas',
            'jurusan' => 'required',
        ]);

        return Mahasiswa::create($request->all());  // Menyimpan data baru
    }

    public function show($id)
    {
        return Mahasiswa::findOrFail($id);  // Mengambil data berdasarkan ID
    }

    public function update(Request $request, $id)
    {
        // $mahasiswa = Mahasiswa::findOrFail($id);
        // $mahasiswa->update($request->all());
        // return $mahasiswa;

        $validatedData = $request->validate([
            'nama' => 'required|string',
            'nim' => 'required|string|unique:mahasiswas,nim,'.$id,
            'jurusan' => 'required|string'
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($validatedData);

        return response()->json([
            'message' => 'Data mahasiswa berhasil diperbarui',
            'data' => $mahasiswa
        ]);
    }

    public function destroy($id)
    {
        Mahasiswa::destroy($id);  // Menghapus data
        return response()->json(['message' => 'Deleted']);
    }
}
