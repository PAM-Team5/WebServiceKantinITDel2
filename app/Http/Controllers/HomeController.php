<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Models\Pemesanan;
use App\Models\Product;
use Illuminate\Http\Request;

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
    public function index()
    {
         $product = Product::count();
        $pembayaran = Pemesanan::count();
        $pembelian = Pembelian::count();
        return view('admin', compact('product', 'pembayaran', 'pembelian'));
    }
}
