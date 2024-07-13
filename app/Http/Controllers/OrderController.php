<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use App\Models\PaketMakanan;
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
        return view('order.detail',compact('detail','minuman','kue','buah','paket'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
