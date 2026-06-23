<?php

namespace App\Http\Controllers;

use App\Models\PencariKerja;
use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        $listPendidikan = Pendidikan::all();
        return view('pendaftaran', compact('listPendidikan'));
    }

    // Memproses Data Form
    public function store(Request $request)
    {
        // Validasi ala Laravel 13
        $validated = $request->validate([
            'nik' => 'required|numeric|digits:16|unique:pencari_kerjas,nik',
            'nama' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
            'email' => 'required|email|unique:pencari_kerjas,email',
            'pendidikan_id' => 'required|exists:pendidikans,id',
            'status_kerja' => 'required|string',
            'pas_photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Handle Upload Pas Photo ke folder public/pas-photos
        if ($request->hasFile('pas_photo')) {
            $path = $request->file('pas_photo')->store('pas-photos', 'public');
            $validated['pas_photo'] = $path;
        }

        // Tambah tanggal daftar otomatis
        $validated['tanggal_daftar'] = now();

        // Simpan ke Database
        PencariKerja::create($validated);

        return redirect()->back()->with('success', 'Pendaftaran berhasil! Data Anda telah tersimpan di Teman Naker.');
    }
}
