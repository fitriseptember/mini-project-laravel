<?php

namespace App\Http\Controllers;

use App\Models\Handphone;
use Illuminate\Http\Request;

class HandphoneController extends Controller
{
    // Menampilkan daftar semua handphone
    public function index() {
        // Mengambil semua data handphone dari database
        $handphones = Handphone::all();
        // Mengirim data ke view 'handphones.index'
        return view('handphones.index', compact('handphones'));
    }

    // Menampilkan form untuk membuat handphone baru
    public function create() {
        // Mengembalikan view 'handphones.create' yang berisi form pembuatan handphone baru
        return view('handphones.create');
    }

    // Menyimpan handphone baru ke database
    public function store(Request $request) {
        // Validasi data yang diterima dari form
        $request->validate([
            'brand' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|integer|min:0',
            'deskripsi' => 'nullable|string',
        ]);

        // Membuat handphone baru menggunakan data yang sudah divalidasi
        Handphone::create($request->all());

        // Mengarahkan kembali ke halaman index dengan pesan sukses
        return redirect()->route('handphones.index')->with('success', 'Handphone berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit handphone yang sudah ada
    public function edit($id) {
        // Mencari handphone berdasarkan ID yang diberikan
        $handphone = Handphone::findOrFail($id);
        // Mengembalikan view 'handphones.edit' dengan data handphone yang akan diedit
        return view('handphones.edit', compact('handphone'));
    }

    // Memperbarui data handphone yang ada di database
    public function update(Request $request, $id) {
        // Validasi data yang diterima dari form
        $request->validate([
            'brand' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|integer|min:0',
            'deskripsi' => 'nullable|string',
        ]);

        // Mencari handphone berdasarkan ID yang diberikan
        $handphone = Handphone::findOrFail($id);
        // Memperbarui data handphone dengan data yang sudah divalidasi
        $handphone->update($request->all());

        // Mengarahkan kembali ke halaman index dengan pesan sukses
        return redirect()->route('handphones.index')->with('success', 'Handphone berhasil diperbarui.');
    }

    // Menghapus handphone dari database
    public function destroy($id) {
        // Menghapus handphone berdasarkan ID yang diberikan
        Handphone::destroy($id);
        // Mengarahkan kembali ke halaman index dengan pesan sukses
        return redirect()->route('handphones.index')->with('success', 'Handphone berhasil dihapus.');
    }
}
