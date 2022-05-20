<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/style.css">

    <title>Hello, world!</title>
  </head>
  <body>
  @include('sweetalert::alert')

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold ml-4" style="color:blue" href="#">Kantin-Koperasi IT DEL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex justify-content-end">
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
    <h2 class="mb-5 mt-5 fw-bold">DAFTAR PRODUK</h2>

        <a href="#" class="btn btn-success mb-4" data-bs-toggle="modal" data-bs-target="#tambahProduct">Tambah Data</a>

        @include ('layouts.modalTambahProduk')
    
        <div class="table">
            <table class="table table-striped table-bordered mb-5 ">
                <thead>
                    <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Nama Produk</th>
                    <th scope="col" class="text-center">Kategori</th>
                    <th scope="col" class="text-center">Jumlah</th>
                    <th scope="col" class="text-center">Harga Satuan</th>
                    <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1 ?>
                        @foreach ($products as $product)

                    <tr>
                        <td class="text-center">{{$i}}</td>
                        <td class="text-center">{{$product -> nama}}</td>
                        <td class="text-center">{{$product -> kategori}}</td>
                        <td class="text-center">{{$product -> jumlah}}</td>
                        <td class="text-center">Rp {{$product -> hargaPcs}} / pcs</td>
                        <td class="text-center">
                            <div class="d-flex justify-content-around">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#abc<?= $product->id ?>">Detail</button>
                                &nbsp;
                                <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#def<?= $product->id ?>">Ubah</a>
                                &nbsp;
                                <a href="/produk/Hapus/{{$product->id}}" class="btn btn-danger" >Hapus</a>
                            </div>
                        </td>
                    </tr>


                    @include('layouts.modalDetailProduk')
    
                    @include('layouts.modalUbahProduk')

                    <?php $i++; ?>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>