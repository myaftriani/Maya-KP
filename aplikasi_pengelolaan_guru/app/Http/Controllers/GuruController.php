<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{

    public function index()
    {
        // dd("ini route guru");
        $data['guru'] = Guru::all();

        return view('guru.index', $data);
    }

    public function create()
    {
        $data['guru'] = Guru::pluck('id');
        return view('guru.create', $data);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:150',
            'nip' => 'required|max:20',
            'mapel' => 'required|max:255',
            'jenis_kelamin' => 'required|max:10',
            'tgl_lahir' => 'required|max:255',
            'alamat' => 'required|max:255',
            'no_telp' => 'required|max:20',
            'email' => 'required|max:50',
        ]);
      
        Guru::create($validated);

        $notification = [
            'message' => "Data guru berhasil ditambahkan",
            'alert-type' => 'success'
        ];

        return redirect()->route('guru.index')->with($notification);
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $guru = Guru::findOrFail($id);
        return view('guru.edit', compact('guru'));
    }

    public function update(Request $request, string $id)
    {
        $guru = Guru::findOrFail($id);

        $validate = $request->validate([
            'nama' => 'required|max:150',
            'nip' => 'required|max:20',
            'mapel' => 'required|max:255',
            'jenis_kelamin' => 'required|max:10',
            'tgl_lahir' => 'required|max:255',
            'alamat' => 'required|max:255',
            'no_telp' => 'required|max:20',
            'email' => 'required|max:50',
        ]);

        Guru::where('id', $id)->update($validate);

        $notificaton = array(
            'message' => 'Data guru berhasil diperbaharui',
            'alert-type' => 'success'
        );

        return redirect()->route('guru.index')->with($notificaton);
    }
    
    public function destroy($id)
{
    $guru = Guru::findOrFail($id);
    $guru->delete();

    return redirect()->route('guru.index')->with('success', 'Data guru berhasil dihapus.');
}
}