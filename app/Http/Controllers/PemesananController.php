<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function indexAPI()
    {
        $pembayarans = Pembayaran::all();
        return response()->json($pembayarans);
    }

    public function index()
    {
        $pembayarans = Pembayaran::paginate(10);
        return view('pembayaran.index', ['pembayarans'=>$pembayarans]);
    }

    public function storeAPI(Request $request)
    {
        $pembayarans = new Pembayaran();
        $pembayarans -> nama = $request->input('nama');
        $pembayarans -> kategori = $request->input('kategori');
        $pembayarans -> jumlah = $request->input('jumlah');
        $pembayarans -> status = $request->input('status');
        $pembayarans -> hargaPcs = $request->input('hargaPcs');
        $pembayarans -> gambar = $request->input('gambar');
        $pembayarans -> deskripsi = $request->input('deskripsi');
        $pembayarans -> ID_Product = $request->input('ID_Product');
        $pembayarans -> ID_User = $request->input('ID_User');
        $pembayarans -> save();
        return response()->json($pembayarans);
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $foto = $request->file('gambar');
        $NamaFoto = time().'.'.$foto->extension();
        $foto->move(public_path('foto/product'), $NamaFoto);

        Pembayaran::create([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'jumlah' => $request->jumlah,
            'status' => $request->status,
            'hargaPcs' => $request->hargaPcs,
            'gambar' => $NamaFoto,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect(route('pesan'))->with('success','Data Pembayaran berhasil dibuat !');
    }

    public function updateAPI(Request $request, $id)
    {
        $pembayarans = Pembayaran::where(['id'=>$id])->first();
        $pembayarans -> nama = $request->input('nama');
        $pembayarans -> kategori = $request->input('kategori');
        $pembayarans -> jumlah = $request->input('jumlah');
        $pembayarans -> status = $request->input('status');
        $pembayarans -> hargaPcs = $request->input('hargaPcs');
        $pembayarans -> gambar = $request->input('gambar');
        $pembayarans -> deskripsi = $request->input('deskripsi');
        $pembayarans -> ID_Product = $request->input('ID_Product');
        $pembayarans -> ID_User = $request->input('ID_User');
        $pembayarans -> save();
        return response()->json($pembayarans);
    }

    public function update(Request $request, $id)
    {
        $pembayarans = Pembayaran::find($id);
        $pembayarans -> nama = $request->nama;
        $pembayarans -> hargaPcs = $request->hargaPcs;
        $pembayarans -> kategori = $request->kategori;
        $pembayarans -> jumlah = $request->jumlah;
        $pembayarans -> status = $request->status;
        $pembayarans -> deskripsi = $request->deskripsi;
        $pembayarans -> save();
        return redirect(route('pesan'))->with('success','Data Pembayaran berhasil diubah !');
    }
    
    public function destroyAPI(Request $request, $id)
    {
        $pembayarans = Pembayaran::where(['id'=>$id])->first();
        $pembayarans->delete();
        return response()->json($pembayarans); 
    }

    public function destroy(Request $request, $id)
    {
        $pembayarans = Pembayaran::find($id);
        $pembayarans->delete();
        return redirect(route('pesan'))->with('success','Data Pembayaran berhasil dihapus !');
    }
}
