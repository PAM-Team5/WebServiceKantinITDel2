<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PemesananController extends Controller
{
    public function indexAPI()
    {
        $pemesanan = Pemesanan::all();
        if($pemesanan) {
            return response()->json([
                'success' => 1,
                "message" => "Pemesanan berhasil",
                'pemesanan' => $pemesanan
            ]);
        }else {
            return $this->error('Pemesanan gagal');
        }

    }

    public function index()
    {
        $pemesanan = Pemesanan::paginate(10);
        return view('pembayaran.index', ['pembayarans'=>$pemesanan]);
    }

    public function storeAPI(Request $request)
    {

        $validasi = Validator::make($request->all(), [
            'nama' => 'required',
            'kategori' => 'required',
            'jumlah' => 'required',
            'status' => 'required',
            'hargaPcs' => 'required',
            'gambar' => 'required',
            'deskripsi' => 'required',
            'ID_Product' => 'required',
            'ID_User' => 'required',
            'role' => 'required',
            'harga' => 'required'
        ]);

        if($validasi->fails()) {
            $val = $validasi->errors()->all();
            return $this->error($val[0]);
        }

        $pemesanan = Pemesanan::create($request->all());

        if($pemesanan) {

            return response()->json([
                'success' => 1,
                "message" => "Pemesanan berhasil",
                'pembayarans'=>$pemesanan
            ]);
        }

        return $this->error('Pemesanan gagal');

    }

 
    

    public function error($pesan) {
        return response()->json([
            'success' => 0,
            "message" => $pesan
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $foto = $request->file('gambar');
        $NamaFoto = time().'.'.$foto->extension();
        $foto->move(public_path('foto/product'), $NamaFoto);

        Pemesanan::create([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'jumlah' => $request->jumlah,
            'status' => $request->status,
            'hargaPcs' => $request->hargaPcs,
            'gambar' => $NamaFoto,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
        ]);

        return redirect(route('pesan'))->with('success','Data Pembayaran berhasil dibuat !');
    }

    public function updateAPI(Request $request, $id)
    {
        $pemesanan = Pemesanan::where(['id'=>$id])->first();
        $pemesanan -> jumlah = $request->input('jumlah');
        $pemesanan -> harga = $request->input('harga');
        $pemesanan -> status = $request->input('status');
        $pemesanan -> save();
        return response()->json($pemesanan);
    }

    public function updateJumlahAPI(Request $request, $id)
    {
        $pemesanan = Pemesanan::where(['id'=>$id])->first();
        $pemesanan -> jumlah = $request->input('jumlah');
        $pemesanan -> harga = $request->input('harga');
        $pemesanan -> save();
        return response()->json($pemesanan);
    }

    public function updatePembelianAPI(Request $request, $id)
    {
        $pemesanan = Pemesanan::where(['id'=>$id])->first();
        $pemesanan -> status = $request->input('status');
        $pemesanan -> ID_Pembelian = $request->input('ID_Pembelian');
        $pemesanan -> save();
        return response()->json($pemesanan);
    }

    public function update(Request $request, $id)
    {
        $pemesanan = Pemesanan::find($id);
        $pemesanan -> nama = $request->nama;
        $pemesanan -> hargaPcs = $request->hargaPcs;
        $pemesanan -> kategori = $request->kategori;
        $pemesanan -> jumlah = $request->jumlah;
        $pemesanan -> status = $request->status;
        $pemesanan -> deskripsi = $request->deskripsi;
        $pemesanan -> save();
        return redirect(route('pesan'))->with('success','Data Pembayaran berhasil diubah !');
    }
    
    public function destroyAPI(Request $request, $id)
    {
        $pemesanan = Pemesanan::where(['id'=>$id])->first();
        $pemesanan->delete();
        return response()->json($pemesanan); 
    }

    public function destroy(Request $request, $id)
    {
        $pemesanan = Pemesanan::find($id);
        $pemesanan->delete();
        return redirect(route('pesan'))->with('success','Data Pembayaran berhasil dihapus !');
    }
}
