<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use App\Models\PaketMakanan;
use App\Models\Transaksi;
use App\Models\TransaksiDetail;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $minuman = Makanan::where('kategori', '=', '1')->get();
        $kue = Makanan::where('kategori', '=', '2')->get();
        $buah = Makanan::where('kategori', '=', '3')->get();
        $paket = PaketMakanan::get();
        $detail = Makanan::with('kategorimakan')->find($id);
        $user = User::with('customer')->find(auth()->user()->id);
        return view('order.detail', compact('detail', 'minuman', 'kue', 'buah', 'paket', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function cart(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $data['idtransaksi'] = 'TRX' . (Transaksi::count() + 1);
        $data['idcustomer'] = auth()->user()->id;
        $data['status'] = 0;
        $data['alamatKirim'] = $request->alamatkirim;
        if ($request->hasFile('buktibayar')) {
            $gambar = $request->file('buktibayar');
            $gambar->storeAs('public/buktibayar', $gambar->hashName());
            $data['buktibayar'] = $gambar->hashName();
        }
        $transaksi = Transaksi::create($data);
        $id_makanan = $request->idmakanan;
        $hargaMakanan = Makanan::where('id', $id_makanan)->pluck('harga')->first() * $request->jumlah ?? 1;
        $id_minuman = $request->idminuman;
        $hargaMinuman = Makanan::where('id', $id_minuman)->pluck('harga')->first();
        $id_kue = $request->idkue;
        $hargaKue = Makanan::where('id', $id_kue)->pluck('harga')->first();
        $id_buah = $request->idbuah;
        $hargaBuah = Makanan::where('id', $id_buah)->pluck('harga')->first();
        $totalharga = array_sum([$hargaKue, $hargaMakanan, $hargaMinuman, $hargaBuah]);
        $transaksidetail = TransaksiDetail::create([
            'idtransaksi' => Transaksi::latest()->first()->idtransaksi,
            'idmakanan' => $request->idmakanan,
            'idminuman' => $request->idminuman,
            'idkue' => $request->idkue,
            'idbuah' => $request->idbuah,
            'jumlah' => $request->jumlah,
            'harga' => $totalharga,
        ]);

        return redirect()->route('order.history')->with('status', 'Pembayaran berhasil disimpan!');
    }

    public function cartview(Request $request)
    {
        // $keranjang = TransaksiDetail::where('idcustomer', auth()->user()->id)->where('status', 0)->get();
        $keranjang = Transaksi::with('details')->where('idcustomer', auth()->user()->id)->where('status', 0)->get();
        // dd($keranjang);
        $makanan = Makanan::get();
        return view('order.cart', compact('keranjang', 'makanan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $totalbayar = $request->harga * $request->qty;
        $data['idtransaksi'] = 'TRX' . (Transaksi::count() + 1);
        $data['idcustomer'] = auth()->user()->id;
        $data['total'] = $totalbayar;
        $data['status'] = 1;
        $data['alamatKirim'] = $request->alamatkirim;
        if ($request->hasFile('buktibayar')) {
            $gambar = $request->file('buktibayar');
            $gambar->storeAs('public/buktibayar', $gambar->hashName());
            $data['buktibayar'] = $gambar->hashName();
        }
        $transaksi = Transaksi::create($data);
        $id_makanan = $request->idmakananhidden;
        $hargaMakanan = Makanan::where('id', $id_makanan)->pluck('harga')->first() * $request->qty ?? 1;
        $id_minuman = $request->minuman;
        $hargaMinuman = Makanan::where('id', $id_minuman)->pluck('harga')->first();
        $id_kue = $request->kue;
        $hargaKue = Makanan::where('id', $id_kue)->pluck('harga')->first();
        $id_buah = $request->buah;
        $hargaBuah = Makanan::where('id', $id_buah)->pluck('harga')->first();
        $totalharga = array_sum([$hargaKue, $hargaMakanan, $hargaMinuman, $hargaBuah]);
        $transaksidetail = TransaksiDetail::create([
            'idtransaksi' => Transaksi::latest()->first()->idtransaksi,
            'idmakanan' => $request->idmakananhidden,
            'idminuman' => $request->minuman,
            'idkue' => $request->kue,
            'idbuah' => $request->buah,
            'jumlah' => $request->qty,
            'harga' => $totalharga,
        ]);

        return redirect()->route('order.history')->with('status', 'Pembayaran berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $transaksi = Transaksi::with('customer')->latest()->get();
        // dd($transaksi);
        return view('order.show', compact('transaksi'));
    }

    public function history()
    {
        $history = Transaksi::with('customer')->where('idcustomer', '=', auth()->user()->id)->get();
        // dd($history);
        return view('order.history', compact('history'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function gantistatus(Request $request)
    {
        // dd('23');
        $idtrx = $request->idtrx;
        if ($request->hasFile('buktibayar')) {
            $gambar = $request->file('buktibayar');
            $gambar->storeAs('public/buktibayar', $gambar->hashName());
            $buktibayar = $gambar->hashName();
        } else {
            $buktibayar = null;
        }
        foreach ($idtrx as $key => $value) {
            $transaksi = Transaksi::where('idtransaksi', $value);
            if ($transaksi) {
                $transaksi->update([
                    'status' => 1,
                    'total' => $request->total,
                    'buktibayar' => $buktibayar,
                ]);
                return redirect()->route('order.history')->with('status', 'Status transaksi berhasil diupdate!');
            } else {
                return redirect()->route('order.history')->withErrors(['status' => 'Transaksi tidak ditemukan.']);
            }
        }
    }

    public function konfirmasi($id, Request $request)
    {
        $transaksi = Transaksi::where('idtransaksi', $id);
        if ($transaksi) {
            $transaksi->update([
                'status' => 2,
            ]);
            return redirect()->route('order.show')->with('status', 'Status transaksi berhasil diupdate!');
        } else {
            return redirect()->route('order.show')->withErrors(['status' => 'Transaksi tidak ditemukan.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
