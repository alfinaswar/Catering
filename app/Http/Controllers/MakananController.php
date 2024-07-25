<?php

namespace App\Http\Controllers;

use App\Models\KategoriMakanan;
use App\Models\Makanan;
use App\Models\PaketMakanan;
use App\Models\User;
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

    public function paket()
    {
        $minuman = makanan::where(
            'kategori', 1
        )->get();
        $makananringan = makanan::where(
            'kategori', 2
        )->get();
        $kue = makanan::where(
            'kategori', 3
        )->get();
        $buah = makanan::where(
            'kategori', 4
        )->get();
        return view('makanan.paket', compact('minuman', 'kue', 'buah', 'makananringan'));
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

    public function storepaket(Request $request)
    {
        $data = $request->all();
        PaketMakanan::create($data);

        return redirect()->route('makanan.show')->with('status', 'Makanan berhasil ditambahkan!');
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
        $paket = PaketMakanan::get();
        return view('makanan.show', compact('paket'));
    }

    public function detailpaket(Makanan $makanan, $id)
    {
        $paket = PaketMakanan::find($id);
        $user = User::with('customer')->find(auth()->user()->id);
        return view('makanan.paket-show', compact('paket', 'user'));
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

    public function destroyPaket(Request $request, $id)
    {
        $paket = PaketMakanan::find($id);
        if (!$paket) {
            return response()->json(['message' => 'paket tidak ditemukan'], 404);
        }
        $paket->delete();

        return redirect()->back()->with('status', 'Kategori Makanan berhasil diupdate!');
    }

    public function destroytrx(Request $request, $id)
    {
        $Kategori = Makanan::find($id);
        if (!$Kategori) {
            return response()->json(['message' => 'fasilitas tidak ditemukan'], 404);
        }
        $Kategori->delete();

        return redirect()->route('makanan.index')->with('status', 'Kategori Makanan berhasil diupdate!');
    }
}
