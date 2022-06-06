<div class="modal fade" id="abc<?= $pembelian->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content bg-light">
        
        <div class="modal-header">
            <h2 class="modal-title fw-bold text-center" id="exampleModalLabel">DETAIL PRODUK</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body row">

            <div class="form-group mt-3">
                <div class="d-flex justify-content-center">
                    <label class="mx-4 w-25" >Jumlah</label>
                    <input type="text" class="form-control mx-4"  value="{{$pembelian->jumlah}}" autofocus disabled>
                </div>
            </div>
            
            <div class="form-group mt-3">
                <div class="d-flex justify-content-center">
                    <label class="mx-4 w-25" >Harga </label>
                    <input type="text" class="form-control mx-4"  value="{{$pembelian->harga}}" autofocus disabled>
                </div>
            </div>

            <div class="form-group mt-3">
                <div class="d-flex justify-content-center">
                    <label class="mx-4 w-25">Deskripsi</label>
                    <textarea name="alasan" class="form-control mx-4" cols="30" rows="10" value="{{ $pembelian->deskripsi }}" autofocus autocomplete="off" disabled>{{ $pembelian->deskripsi }}</textarea>
                </div>
            </div>

            <div class="form-group mt-3">
                <div class="d-flex justify-content-center">
                    <label class="mx-4 w-25">Status</label>
                    <textarea name="status" class="form-control mx-4" cols="30" rows="10" value="{{ $pembelian->status }}" autofocus autocomplete="off" disabled>{{ $pembelian->deskripsi }}</textarea>
                </div>
            </div>

            
        </div>
        <div class="modal-footer">
        <button style="width: 100%" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>

    </div>
    </div>
</div>
