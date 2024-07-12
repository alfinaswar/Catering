<?php

namespace App\Http\Controllers;

use App\Models\KategoriMakanan;
use App\Models\Makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $makanan = Makanan::all();
        return view('makanan.index', compact('makanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = KategoriMakanan::all();
        return view('makanan.create', compact('kategori'));
    }

    public function kategori()
    {
        $kategori = KategoriMakanan::all();
        return view('makanan.create-kategori-makanan', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/gambar', $gambar->hashName());
            $data['gambar'] = $gambar->hashName();
        } else {
            $data['gambar'] = null;
        }
        Makanan::create($data);

        return redirect()->route('makanan.index')->with('status', 'Makanan berhasil ditambahkan!');
    }

    public function storeKategori(Request $request)
    {
        $data = $request->all();
        KategoriMakanan::create($data);

        return redirect()->route('makanan.kategori')->with('status', 'Kategori Makanan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Makanan $makanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Makanan $makanan, $id)
    {
        $data = Makanan::find($id);
        $kategori = KategoriMakanan::all();
        return view('makanan.edit-makanan', compact('kategori', 'data'));
    }

    public function editKategori($id)
    {
        $data = KategoriMakanan::find($id);
        $kategori = KategoriMakanan::all();
        return view('makanan.edit-kategori-makanan', compact('kategori', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $makanan = Makanan::find($id);
        if (!$makanan) {
            return response()->json(['message' => 'makanan tidak ditemukan'], 404);
        }
        $data = $request->all();
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/gambar', $gambar->hashName());
            $data['gambar'] = $gambar->hashName();
        }
        $makanan->update($data);

        return redirect()->route('makanan.index')->with('status', 'Makanan berhasil diupdate!');
    }

    public function updateKategori(Request $request, $id)
    {
        $Kategori = KategoriMakanan::find($id);
        if (!$Kategori) {
            return response()->json(['message' => 'data tidak ditemukan'], 404);
        }
        $Kategori->kategori = $request->kategori;
        $Kategori->save();

        return redirect()->route('makanan.kategori')->with('status', 'Kategori Makanan berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyKategori(Request $request, $id)
    {
        $Kategori = KategoriMakanan::find($id);
        if (!$Kategori) {
            return response()->json(['message' => 'fasilitas tidak ditemukan'], 404);
        }
        $Kategori->delete();

        return redirect()->route('makanan.kategori')->with('status', 'Kategori Makanan berhasil diupdate!');
    }

    public function destroy(Request $request, $id)
    {
        $Kategori = Makanan::find($id);
        if (!$Kategori) {
            return response()->json(['message' => 'fasilitas tidak ditemukan'], 404);
        }
        $Kategori->delete();

        return redirect()->route('makanan.index')->with('status', 'Kategori Makanan berhasil diupdate!');
    }
}
