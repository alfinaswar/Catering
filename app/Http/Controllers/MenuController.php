<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\KategoriMakanan;
use App\Models\Makanan;
use App\Models\PaketMakanan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function allmenu()
    {
        $paket = PaketMakanan::get();
        $kategori = KategoriMakanan::all();
        $makanan = Makanan::with('kategorimakan')->get();
        // dd($makanan);
        return view('menu-catering.all-menu', compact('kategori', 'makanan', 'paket'));
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
        $getLatest = User::latest()->first()->id + 1;
        $data = $request->all();
        $data['idUser'] = $getLatest;
        $customer = Customer::create($data);

        $generatePassword = now()->format('dmY');
        $input['name'] = $request->nama;
        $input['email'] = $request->email;
        $input['password'] = Hash::make($generatePassword);
        $input['role'] = 'customer';

        $user = User::create($input);
        $user->assignRole('2');

        return redirect()->route('login');
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
