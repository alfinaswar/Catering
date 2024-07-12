<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $makanan =  Makanan::all();
        return view('makanan.index',compact('makanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('makanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $data = $request->all();
   if($request->hasFile('gambar')){
    $gambar = $request->file('gambar');
    $gambar->storeAs('public/gambar', $gambar->hashName());
    $data['gambar'] = $gambar->hashName();
   }else{
    $data['gambar'] = null;
   }
    Makanan::create($data);

    return redirect()->route('makanan.index')->with('status', 'Makanan berhasil ditambahkan!');
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
    public function edit(Makanan $makanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Makanan $makanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Makanan $makanan)
    {
        //
    }
}
