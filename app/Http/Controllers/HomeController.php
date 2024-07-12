<?php

namespace App\Http\Controllers;

use App\Models\KategoriMakanan;
use App\Models\Makanan;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): View
    {
        return view('home');
    }

    public function allmenu()
    {
        $kategori = KategoriMakanan::all();
        $makanan = Makanan::with('kategorimakan')->get();
        // dd($makanan);
        return view('menu-catering.all-menu', compact('kategori', 'makanan'));
    }
}
