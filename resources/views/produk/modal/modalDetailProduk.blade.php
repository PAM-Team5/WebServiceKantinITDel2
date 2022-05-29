<div class="modal fade" id="abc<?= $product->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content bg-light">
        
        <div class="modal-header">
            <h2 class="modal-title fw-bold text-center" id="exampleModalLabel">DETAIL PRODUK</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>


        <div class="modal-body row">

            <div class="form-group mt-3">
                <div class="d-flex justify-content-center">
                    <label class="mx-4 w-25" >Nama Produk</label>
                    <input type="text" class="form-control mx-4"  value="{{$product->nama}}" autofocus disabled>
                </div>
            </div>


            <div class="form-group mt-3">
                <div class="d-flex justify-content-center">
                    <label class="mx-4 w-25" >Kategori</label>
                    <input type="text" class="form-control mx-4"  value="{{$product->kategori}}" autofocus disabled>
                </div>
            </div>

            <div class="form-group mt-3">
                <div class="d-flex justify-content-center">
                    <label class="mx-4 w-25" >Jumlah</label>
                    <input type="text" class="form-control mx-4"  value="{{$product->jumlah}}" autofocus disabled>
                </div>
            </div>

            
            <div class="form-group mt-3">
                <div class="d-flex justify-content-center">
                    <label class="mx-4 w-25" >Harga Satuan</label>
                    <input type="text" class="form-control mx-4"  value="{{$product->hargaPcs}}" autofocus disabled>
                </div>
            </div>

            <div class="form-group mt-3">
                <div class="d-flex justify-content-center">
                    <label class="mx-4 w-25">Gambar</label>
                    <img src="/foto/product/{{$product->gambar}}" alt="" class="mr-5" width="200">
                    <img src="" alt="" class="ml-5" width="450" style="visibility:hidden">
                </div>
            </div>

            <div class="form-group mt-3">
                <div class="d-flex justify-content-center">
                    <label class="mx-4 w-25">Deskripsi</label>
                    <textarea name="alasan" class="form-control mx-4" cols="30" rows="10" value="{{ $product-> deskripsi }}" autofocus autocomplete="off" disabled>{{ $product -> deskripsi }}</textarea>
                </div>
            </div>



        </div>

        <div class="modal-footer">
        <button style="width: 100%" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>

    </div>
    </div>
</div>
