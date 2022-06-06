<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function indexAPIByID($ID_User)
    {
        $pembelians = Pembelian::where(['ID_User'=>$ID_User])->get();
        return response()->json($pembelians);
    }

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
        $pembelians -> id = $request->input('id');
        $pembelians -> jumlah = $request->input('jumlah');
        $pembelians -> status = $request->input('status');
        $pembelians -> harga = $request->input('harga');
        $pembelians -> ID_User = $request->input('ID_User');
        $pembelians -> save();
        return response()->json($pembelians);
    }

    public function store(Request $request)
    {
        Pembelian::create([
            'jumlah' => $request->jumlah,
            'status' => $request->status,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi
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
        $pembelians -> jumlah = $request->jumlah;
        $pembelians -> harga = $request->harga;
        $pembelians -> deskripsi = $request->deskripsi;
        $pembelians -> status = $request->status;
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
