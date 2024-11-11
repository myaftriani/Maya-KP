<?php

namespace App\Http\Controllers;

use App\Models\PresensiGuru;
use Illuminate\Http\Request;

class PresensiGuruController extends Controller
{
    public function index()
    {
        $data["presensi"] = PresensiGuru::all();
        return view('presensi.index', $data);
    }

    public function create()
    {
        return view('presensi.create');
    }

    public function store(Request $request)
    {
        // Sesuaikan nama field di validasi dengan id_guru
        $validatedData = $request->validate([
            'id_guru' => 'required|exists:guru,id',  // Sesuaikan nama field dengan form
            'tgl_absen' => 'required|date',
            'status_kehadiran' => 'required|string',
            'keterangan' => 'nullable|string',
        ]);

        // Simpan ke database
        PresensiGuru::create($validatedData);

        $notification = [
            'message' => "Data presensi berhasil ditambahkan",
            'alert-type' => 'success'
        ];

        return redirect()->route('presensi.index')->with($notification);
    }

    public function edit(string $id)
    {
        $presensi = PresensiGuru::findOrFail($id);
        return view('presensi.edit', compact('presensi'));
    }

    public function update(Request $request, string $id)
    {
        $presensi = PresensiGuru::findOrFail($id);

        // Sesuaikan nama field di validasi dengan id_guru
        $validated = $request->validate([
            'id_guru' => 'required|exists:guru,id',  // Sesuaikan nama field dengan form
            'tgl_absen' => 'required|date',
            'status_kehadiran' => 'required|string|in:Hadir,Tidak Hadir,Izin,Sakit',
            'keterangan' => 'nullable|string|max:255',
        ]);

        $presensi->update($validated);

        $notification = [
            'message' => 'Data presensi berhasil diperbaharui',
            'alert-type' => 'success'
        ];

        return redirect()->route('presensi.index')->with($notification);
    }

    public function destroy(string $id)
    {
        PresensiGuru::findOrFail($id)->delete();

        $notification = [
            'message' => 'Data presensi Guru telah berhasil dihapus',
            'alert-type' => 'success'
        ];

        return redirect()->route('presensi.index')->with($notification);
    }
}
