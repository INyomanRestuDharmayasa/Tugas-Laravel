<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Menampilkan semua data mahasiswa
    public function index()
    {
        $mahasiswa = Mahasiswa::orderBy('id', 'desc')->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('mahasiswa.create');
    }

    // Menyimpan data baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswas,nim|min:4',
            'nama' => 'required',
            'prodi' => 'required'
        ]);

        Mahasiswa::create($request->only('nim','nama','prodi'));

        return redirect()->route('mahasiswa.index')->with('success','Mahasiswa disimpan.');
    }

    // Menampilkan form edit data
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    // Update data mahasiswa
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nim' => 'required|min:4|unique:mahasiswas,nim,'.$mahasiswa->id,
            'nama' => 'required',
            'prodi' => 'required'
        ]);

        $mahasiswa->update($request->only('nim','nama','prodi'));

        return redirect()->route('mahasiswa.index')->with('success','Mahasiswa diperbarui.');
    }

    // Hapus data mahasiswa
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success','Mahasiswa dihapus.');
    }
}
