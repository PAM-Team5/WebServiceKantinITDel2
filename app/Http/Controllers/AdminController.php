<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Models\Pembayaran;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin(){
        $product = Product::count();
        $pembayaran = Pembayaran::count();
        $pembelian = Pembelian::count();
        return view('admin', compact('product', 'pembayaran', 'pembelian'));
    }

    public function logout(Request $request)
    {
       $request->session()->flush();
       Auth::logout();
       return Redirect('login');
    }

}
