<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        $pembayarans = Pembayaran::all();
        return response()->json($pembayarans);
    }

    public function storeAPI(Request $request)
    {
        $pembayarans = new Pembayaran();
        $pembayarans -> nama = $request->input('nama');
        $pembayarans -> jenis = $request->input('jenis');
        $pembayarans -> kategori = $request->input('kategori');
        $pembayarans -> jumlah = $request->input('jumlah');
        $pembayarans -> status = $request->input('status');
        $pembayarans -> harga = $request->input('harga');
        $pembayarans -> gambar = $request->input('gambar');
        $pembayarans -> deskripsi = $request->input('deskripsi');
        $pembayarans -> ID_Product = $request->input('ID_Product');
        $pembayarans -> ID_User = $request->input('ID_User');
        $pembayarans -> save();
        return response()->json($pembayarans);
    }

    public function updateAPI(Request $request, $id)
    {
        $pembayarans = Pembayaran::where(['id'=>$id])->first();
        $pembayarans -> nama = $request->input('nama');
        $pembayarans -> jenis = $request->input('jenis');
        $pembayarans -> kategori = $request->input('kategori');
        $pembayarans -> jumlah = $request->input('jumlah');
        $pembayarans -> status = $request->input('status');
        $pembayarans -> harga = $request->input('harga');
        $pembayarans -> gambar = $request->input('gambar');
        $pembayarans -> deskripsi = $request->input('deskripsi');
        $pembayarans -> ID_Product = $request->input('ID_Product');
        $pembayarans -> ID_User = $request->input('ID_User');
        $pembayarans -> save();
        return response()->json($pembayarans);
    }
    
    public function destroyAPI(Request $request, $id)
    {
        $pembayarans = Pembayaran::where(['id'=>$id])->first();
        $pembayarans->delete();
        return response()->json($pembayarans); 
    }
}
