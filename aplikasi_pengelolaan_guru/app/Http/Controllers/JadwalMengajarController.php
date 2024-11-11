<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\JadwalMengajar; 
use Illuminate\Http\Request;

class JadwalMengajarController extends Controller

{
    public function index()
    {
        $data['jadwal_mengajar'] = JadwalMengajar::all();
        return view('jadwal.index', $data);
    }

    public function create()
    {
        $jadwal_mengajar = Guru::all();
        return view('jadwal.create', compact('jadwal_mengajar'));
    }


    public function store(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'id_guru' => 'required|exists:guru,id',
        'hari' => 'required|string|max:255',
        'waktu' => 'required|string|max:255',
        'kelas' => 'required|string|max:255',
        'mata_pelajaran' => 'required|string|max:255',
    ]);

    // Menyimpan data ke database
    JadwalMengajar::create($validatedData);
    
    $notification = [
        'message' => "Data jadwal berhasil ditambahkan",
        'alert-type' => 'success'
    ];

    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('jadwal.index')->with($notification);
}
    
    public function edit(string $id)
    {
        
        $jadwal_mengajar = JadwalMengajar::findOrFail($id);

        return view('jadwal.edit', compact('jadwal_mengajar')); 
    }

    public function update(Request $request, string $id)
    {
        
        $jadwal_mengajar = JadwalMengajar::findOrFail($id);

        $validatedData = $request->validate([
            'id_guru' => 'required|exists:guru,id',
            'hari' => 'required|string|max:255',
            'waktu' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'mata_pelajaran' => 'required|string|max:255',
        ]);
    
        JadwalMengajar::where('id', $id)->update($validatedData);

        $notificaton = array(
            'message' => 'Data jadwal berhasil diperbaharui',
            'alert-type' => 'success'
        );

        return redirect()->route('jadwal.index')->with($notificaton);
    }

    public function destroy(string $id)
    {
        
        JadwalMengajar::findOrFail($id)->delete();

        
        $notification = [
            'message' => 'Data jadwal berhasil dihapus',
            'alert-type' => 'success'
        ];

        return redirect()->route('jadwal.index')->with($notification);
    }
}