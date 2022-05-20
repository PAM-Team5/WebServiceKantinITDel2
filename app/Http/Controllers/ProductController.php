<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAPI()
    {
        $products = Product::all();
        return response()->json($products);
    }


    public function index()
    {
        $products = Product::paginate(10);
        return view('produk.index', ['products'=>$products]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create data
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storeAPI(Request $request)
    {
        $products = new Product;
        $products -> nama = $request->input('nama');
        $products -> hargaPcs = $request->input('hargaPcs');
        $products -> kategori = $request->input('kategori');
        $products -> jumlah = $request->input('jumlah');
        $products -> status = $request->input('status');
        $products -> gambar = $request->input('gambar');
        $products -> deskripsi = $request->input('deskripsi');
        $products -> save();
        return response()->json($products);
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $foto = $request->file('gambar');
        $NamaFoto = time().'.'.$foto->extension();
        $foto->move(public_path('foto/product'), $NamaFoto);

        Product::create([
            'nama' => $request->nama,
            'hargaPcs' => $request->hargaPcs,
            'kategori' => $request->kategori,
            'jumlah' => $request->jumlah,
            'status' => $request->status,
            'gambar' => $NamaFoto,
            'deskripsi' => $request->deskripsi,
        ]);


        return redirect(route('product'))->with('success','Data Product berhasil dibuat !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function updateAPI(Request $request, $id)
    {
        $products = Product::where(['id'=>$id])->first();
        $products -> nama = $request->input('nama');
        $products -> hargaPcs = $request->input('hargaPcs');
        $products -> kategori = $request->input('kategori');
        $products -> jumlah = $request->input('jumlah');
        $products -> status = $request->input('status');
        $products -> gambar = $request->input('gambar');
        $products -> deskripsi = $request->input('deskripsi');
        $products -> save();
        return response()->json($products);
    }

    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        $products -> nama = $request->nama;
        $products -> hargaPcs = $request->hargaPcs;
        $products -> kategori = $request->kategori;
        $products -> jumlah = $request->jumlah;
        $products -> status = $request->status;
        $products -> deskripsi = $request->deskripsi;
        $products -> save();
        return redirect(route('product'))->with('success','Data Product berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroyAPI(Request $request, $id)
    {
        $products = Product::where(['id'=>$id])->first();
        $products->delete();
        return response()->json($products); 
    }

    public function destroy(Request $request, $id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect(route('product'))->with('success','Data Product berhasil dihapus !');
    }
}
