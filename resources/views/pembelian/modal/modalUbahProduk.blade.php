<div class="modal fade" id="def<?= $pembelian->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content bg-light">
        
    

        <form enctype="multipart/form-data" action="/pemesanan/Kirim/{{$pembelian->id}}" method="post">
                {{ csrf_field() }}

        <div class="modal-header">
            <h2 class="modal-title fw-bold text-center" id="exampleModalLabel">DETAIL PRODUK</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>


        <div class="modal-body row">

            <div class="form-group mt-3">
                <div class="d-flex justify-content-center">
                    <label class="mx-4 w-25" >Nama Produk</label>
                    <input type="text" class="form-control mx-4"  name="nama" value="{{$pembelian->nama}}" autofocus>
                </div>
            </div>


            <div class="form-group mt-3">
                <div class="d-flex justify-content-center">
                    <label class="mx-4 w-25" >Status</label>
                    <select class="form-control custom-select mx-4" name="status" id="status">
                        @if($pembelian->status=='tersedia')
                        <option value="{{$pembelian->status}}">Tersedia</option>
                        <option value="habis">Habis</option>
                        @endif
                        @if($pembelian->status=='habis')
                        <option value="{{$pembelian->status}}">Habis</option>
                        <option value="tersedia">Tersedia</option>
                        @endif
                    </select>
                </div>
            </div>

            <div class="form-group mt-3">
                <div class="d-flex justify-content-center">
                    <label class="mx-4 w-25" >Kategori</label>
                    <select class="form-control custom-select mx-4" name="kategori" id="kategori">
                        <option value="{{$pembelian->kategori}}">{{$pembelian->kategori}} (ganti kategori)</option>
                        <option value="makanan">Makanan</option>
                        <option value="minuman">Minuman</option>
                        <option value="barang">Barang</option>
                        <option value="pulsa">Pulsa</option>
                        <option value="ruangan">Ruangan</option>
                    </select>
                </div>
            </div>

            <div class="form-group mt-3">
                <div class="d-flex justify-content-center">
                    <label class="mx-4 w-25" >Jumlah</label>
                    <input type="text" class="form-control mx-4"  name="jumlah" value="{{$pembelian->jumlah}}" autofocus>
                </div>
            </div>

            
            <div class="form-group mt-3">
                <div class="d-flex justify-content-center">
                    <label class="mx-4 w-25" >Harga Satuan</label>
                    <input type="number" class="form-control mx-4"  name="hargaPcs" value="{{$pembelian->hargaPcs}}" autofocus>
                </div>
            </div>

            <div class="form-group mt-3">
                <div class="d-flex justify-content-center">
                    <label class="mx-4 w-25" >Gambar</label>
                    <input type="file" name="gambar" class="form-control mx-4" value="{{$pembelian->gambar}}" autofocus autocomplete="off">
                </div>
                <div class="d-flex justify-content-start mt-3">
                    <img src="/foto/product/{{$pembelian->gambar}}" alt="" class="mr-5" width="200" style="margin-left: 270px">
                </div>
            </div>


            <div class="form-group mt-3">
                <div class="d-flex justify-content-center">
                    <label class="mx-4 w-25">Deskripsi</label>
                    <textarea class="form-control mx-4" name="deskripsi" cols="30" rows="10" autofocus autocomplete="off">{{ $pembelian -> deskripsi }}</textarea>
                </div>
            </div>


        </div>


        <div class="modal-footer d-flex justify-content-center">
            <button style="width: 40%" data-bs-dismiss="modal" class="btn btn-secondary mx-3">Batal</button>

            <button style="width: 40%" type="submit" class="btn btn-success mx-3">Kirim</button>
        </div>

        </form>

    </div>
    </div>
</div>
