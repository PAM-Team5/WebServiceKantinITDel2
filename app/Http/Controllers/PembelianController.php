<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index()
    {
        $pembelians = Pembelian::all();
        return response()->json($pembelians);
    }

    public function storeAPI(Request $request)
    {
        $pembelians = new Pembelian();
        $pembelians -> nama = $request->input('nama');
        $pembelians -> jenis = $request->input('jenis');
        $pembelians -> kategori = $request->input('kategori');
        $pembelians -> jumlah = $request->input('jumlah');
        $pembelians -> status = $request->input('status');
        $pembelians -> harga = $request->input('harga');
        $pembelians -> gambar = $request->input('gambar');
        $pembelians -> deskripsi = $request->input('deskripsi');
        $pembelians -> ID_Product = $request->input('ID_Product');
        $pembelians -> ID_User = $request->input('ID_User');
        $pembelians -> save();
        return response()->json($pembelians);
    }

    public function updateAPI(Request $request, $id)
    {
        $pembelians = Pembelian::where(['id'=>$id])->first();
        $pembelians -> nama = $request->input('nama');
        $pembelians -> jenis = $request->input('jenis');
        $pembelians -> kategori = $request->input('kategori');
        $pembelians -> jumlah = $request->input('jumlah');
        $pembelians -> status = $request->input('status');
        $pembelians -> harga = $request->input('harga');
        $pembelians -> gambar = $request->input('gambar');
        $pembelians -> deskripsi = $request->input('deskripsi');
        $pembelians -> ID_Product = $request->input('ID_Product');
        $pembelians -> ID_User = $request->input('ID_User');
        $pembelians -> save();
        return response()->json($pembelians);
    }
    
    public function destroyAPI(Request $request, $id)
    {
        $pembelians = Pembelian::where(['id'=>$id])->first();
        $pembelians->delete();
        return response()->json($pembelians); 
    }
}
