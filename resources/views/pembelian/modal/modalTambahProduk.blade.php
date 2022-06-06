<div class="modal fade" id="tambahPemesanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content bg-light">
        
    

        <form enctype="multipart/form-data" action="/pembelian/Simpan" method="post">
                {{ csrf_field() }}

        <div class="modal-header">
            <h2 class="modal-title fw-bold text-center" id="exampleModalLabel">TAMBAH DATA Pembayaran</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>


        <div class="modal-body row">

            <div class="form-group mt-3">
                <div class="d-flex justify-content-center">
                    <label class="mx-4 w-25" >Jumlah</label>
                    <input type="number" class="form-control mx-4"  name="jumlah" value="{{ old('jumlah') }}" autofocus autocomplete="off">
                </div>
                @error('jumlah')
                    <div class="alert-danger mt-2 mr-2">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <div class="d-flex justify-content-center">
                    <label class="mx-4 w-25" >Harga</label>
                    <input type="number" class="form-control mx-4"  name="harga" value="{{ old('harga') }}" autofocus autocomplete="off">
                </div>
                @error('harga')
                    <div class="alert-danger mt-2 mr-2">{{$message}}</div>
                @enderror
            </div>


            <div class="form-group mt-3">
                <div class="d-flex justify-content-center">
                    <label class="mx-4 w-25">Deskripsi</label>
                    <textarea class="form-control mx-4" name="deskripsi" cols="30" rows="10" autofocus autocomplete="off">{{ old('deskripsi') }}</textarea>
                </div>
                @error('deskripsi')
                    <div class="alert-danger mt-2 mr-2">{{$message}}</div>
                @enderror
            </div>


            <input type="text" name="status" value="tersedia" style="visibility: hidden">
            @error('status')
                    <div class="alert-danger mt-2 mr-2">{{$message}}</div>
                @enderror
        </div>


        <div class="modal-footer d-flex justify-content-center">
            <button style="width: 40%" data-bs-dismiss="modal" class="btn btn-secondary mx-3">Batal</button>

            <button style="width: 40%" type="submit" class="btn btn-success mx-3">Kirim</button>
        </div>

        </form>

    </div>
    </div>
</div>
