<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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

        return response()->json([
            'success' => 1,
            "message" => "Get Produk berhasil",
            'products' => $products
        ]);
    }

    // public function indexLamaAPI()
    // {
    //     $products = Product::all();
    //     return response()->json($products);
    // }

    public function indexAPIMakananKoperasi()
    {
        $products = Product::where('kategori','makanan')->where('role','admin-koperasi')->get();
        return response()->json($products);
    }

    public function indexAPIMakananKantin()
    {
        $products = Product::where('kategori','makanan')->where('role','admin-kantin')->get();
        return response()->json($products);
    }

    public function indexAPIMinumanKoperasi()
    {
        $products = Product::where('kategori','minuman')->where('role','admin-koperasi')->get();
        return response()->json($products);
    }


    public function indexAPIMinumanKantin()
    {
        $products = Product::where('kategori','minuman')->where('role','admin-kantin')->get();
        return response()->json($products);
    }

    public function indexAPIRuanganKoperasi()
    {
        $products = Product::where('kategori','ruangan')->where('role','admin-koperasi')->get();
        return response()->json($products);
    }

    public function indexAPIRuanganKantin()
    {
        $products = Product::where('kategori','ruangan')->where('role','admin-kantin')->get();
        return response()->json($products);
    }

    public function indexAPIPulsaKoperasi()
    {
        $products = Product::where('kategori','pulsa')->where('role','admin-koperasi')->get();
        return response()->json($products);
    }

    public function indexAPIPulsaKantin()
    {
        $products = Product::where('kategori','pulsa')->where('role','admin-kantin')->get();
        return response()->json($products);
    }

    public function indexAPIBarangKoperasi()
    {
        $products = Product::where('kategori','barang')->where('role','admin-koperasi')->get();
        return response()->json($products);
    }

    public function indexAPIBarangKantin()
    {
        $products = Product::where('kategori','barang')->where('role','admin-kantin')->get();
        return response()->json($products);
    }


    public function index()
    {
        $products = Product::simplePaginate(10);
        return view('produk.index', ['products'=>$products]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create data laravel
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storeAPI(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'gambar' => 'required|image:jpeg,png,jpg,gif,svg|max:2048'
         ]);

        // $foto = $request->file('gambar');
        // $path = $foto->store('product', 'public');


        $products = new Product;
        $products -> nama = $request->input('nama');
        $products -> hargaPcs = $request->input('hargaPcs');
        $products -> kategori = $request->input('kategori');
        $products -> jumlah = $request->input('jumlah');
        $products -> status = $request->input('status');
        //$products -> gambar = basename($path);
        $products -> gambar = $request->input('gambar');
        $products -> deskripsi = $request->input('deskripsi');
        $products -> role = $request->input('role');
        $products -> save();
        return response()->json($products);
        
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $foto = $request->file('gambar');
        
        $path = $foto->store('product', 'public');
        
        $foto->move(public_path('foto/product'), $path);


        Product::create([
            'nama' => $request->nama,
            'hargaPcs' => $request->hargaPcs,
            'kategori' => $request->kategori,
            'jumlah' => $request->jumlah,
            'status' => $request->status,
            'gambar' => basename($path),
            'role' => $request->role,
            'deskripsi' => $request->deskripsi
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


        // $foto = $request->file('gambar');
        // $path = $foto->store('product', 'public');

        $products = Product::where(['id'=>$id])->first();
        $products -> nama = $request->input('nama');
        $products -> hargaPcs = $request->input('hargaPcs');
        $products -> kategori = $request->input('kategori');
        $products -> jumlah = $request->input('jumlah');
        $products -> status = $request->input('status');
        //$products -> gambar = basename($path);
        $products -> gambar = $request->input('gambar');
        $products -> deskripsi = $request->input('deskripsi');
        $products -> save();
        return response()->json($products);
    }

    public function updateJumlahAPI(Request $request, $id)
    {

        $products = Product::where(['id'=>$id])->first();
        $products -> jumlah = $request->input('jumlah');
        $products -> save();
        return response()->json($products);
    }

    public function updateStatusAPI(Request $request, $id)
    {


        $products = Product::where(['id'=>$id])->first();
        $products -> status = $request->input('status');
        $products -> save();
        return response()->json($products);
    }

    public function update(Request $request, $id)
    {
        $foto = $request->file('gambar');
        
        $path = $foto->store('product', 'public');
        
        $foto->move(public_path('foto/product'), $path);

        $products = Product::find($id);
        $products -> nama = $request->nama;
        $products -> hargaPcs = $request->hargaPcs;
        $products -> kategori = $request->kategori;
        $products -> jumlah = $request->jumlah;
        $products -> status = $request->status;
        $products -> gambar = basename($path);
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
