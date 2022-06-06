<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function indexAPI()
    {
        $pembelians = Pembelian::all();
        return response()->json($pembelians);
    }

     public function index()
    {
        $pembelians = Pembelian::paginate(10);
        return view('pembelian.index', ['pembelians'=>$pembelians]);
    }

    public function storeAPI(Request $request)
    {
        $pembelians = new Pembelian();
        $pembelians -> jumlah = $request->input('jumlah');
        $pembelians -> status = $request->input('status');
        $pembelians -> save();
        return response()->json($pembelians);
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $foto = $request->file('gambar');
        $NamaFoto = time().'.'.$foto->extension();
        $foto->move(public_path('foto/product'), $NamaFoto);

        Pembelian::create([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'jumlah' => $request->jumlah,
            'status' => $request->status,
            'hargaPcs' => $request->hargaPcs,
            'gambar' => $NamaFoto,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect(route('beli'))->with('success','Data Pembelian berhasil dibuat !');
    }

    public function updateAPI(Request $request, $id)
    {
        $pembelians = Pembelian::where(['id'=>$id])->first();
        $pembelians -> status = $request->input('status');
        $pembelians -> save();
        return response()->json($pembelians);
    }

    public function update(Request $request, $id)
    {
        $pembelians = Pembelian::find($id);
        $pembelians -> nama = $request->nama;
        $pembelians -> hargaPcs = $request->hargaPcs;
        $pembelians -> kategori = $request->kategori;
        $pembelians -> jumlah = $request->jumlah;
        $pembelians -> status = $request->status;
        $pembelians -> deskripsi = $request->deskripsi;
        $pembelians -> save();
        return redirect(route('beli'))->with('success','Data Pembelian berhasil diubah !');
    }
    
    public function destroyAPI(Request $request, $id)
    {
        $pembelians = Pembelian::where(['id'=>$id])->first();
        $pembelians->delete();
        return response()->json($pembelians); 
    }

    public function destroy(Request $request, $id)
    {
        $pembelians = Pembelian::find($id);
        $pembelians->delete();
        return redirect(route('beli'))->with('success','Data Pembelian berhasil dihapus !');
    }
}
