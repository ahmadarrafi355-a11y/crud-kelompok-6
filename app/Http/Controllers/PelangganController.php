<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggans = Pelanggan::all();

        return view('pelanggan.index', compact('pelanggans'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $validated = $request->validate([
        'kode_pelanggan' => 'required|unique:pelanggans',
        'nama' => 'required',
        'kategori' => 'required',
        'email' => 'required|email',
        'tanggal_daftar' => 'required|date',
        'alamat' => 'required',
        'keterangan' => 'nullable',
    ]);

    Pelanggan::create($validated);

    return redirect()->route('pelanggan.index')
        ->with('success', 'Data pelanggan berhasil ditambahkan!');
}

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $pelanggan = Pelanggan::findOrFail($id);

    return view('pelanggan.edit', compact('pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     */
 public function update(Request $request, string $id)
{
    $pelanggan = Pelanggan::findOrFail($id);

    $validated = $request->validate([
        'kode_pelanggan' => 'required|unique:pelanggans,kode_pelanggan,' . $id,
        'nama' => 'required',
        'kategori' => 'required',
        'email' => 'required|email',
        'tanggal_daftar' => 'required|date',
        'alamat' => 'required',
        'keterangan' => 'nullable',
    ]);

    $pelanggan->update($validated);

    return redirect()->route('pelanggan.index')
        ->with('success', 'Data pelanggan berhasil diperbarui!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $pelanggan = Pelanggan::findOrFail($id);

    $pelanggan->delete();

    return redirect()->route('pelanggan.index')
        ->with('success', 'Data pelanggan berhasil dihapus!');
}
}