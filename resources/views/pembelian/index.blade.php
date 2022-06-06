<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, materialpro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, materialpro admin lite design, materialpro admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Material Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin Kantin IT Del</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- chartist CSS -->
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="navbar-brand ms-4" href="index.html">
                      <h3 class="text-light">Kantin Del</h3>
                    </a>
                    <a class="nav-toggler waves-effect waves-light text-white d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-lg-none d-md-block ">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white "
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <li class="nav-item search-box">
                            <a class="nav-link text-muted" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search" style="display: none;">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{asset('admin')}}" aria-expanded="false"><i class="mdi me-2 mdi-gauge"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{asset('produk')}}" aria-expanded="false"><i class="mdi me-2 mdi-table"></i><span
                                    class="hide-menu">Product</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{asset('pemesanan')}}" aria-expanded="false"><i class="mdi me-2 mdi-table"></i><span
                                    class="hide-menu">Pemesanan</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{asset('pembelian')}}" aria-expanded="false"><i class="mdi me-2 mdi-table"></i><span
                                    class="hide-menu">Pembayaran</span></a></li>
                        
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Data Pembayaran</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{asset('admin')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <h2 class="mb-5 mt-5 fw-bold">DAFTAR PEMBAYARAN</h2>

                    <a href="#" class="btn btn-success mb-4" data-bs-toggle="modal" data-bs-target="#tambahPemesanan">Tambah Data</a>

                    @include ('pembelian.modal.modalTambahProduk')
                
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
                                @foreach ($pembelians as $pembelian)

                                <tr>
                                    <td class="text-center">{{$i}}</td>
                                    <td class="text-center">{{$pembelian -> jumlah}}</td>
                                    <td class="text-center">Rp {{$pembelian -> harga}}</td>
                                    <td class="text-center">{{$pembelian -> status}}</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-around">
                                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#abc<?= $pembelian->id ?>">Detail</button>
                                            &nbsp;
                                            <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#def<?= $pembelian->id ?>">Ubah</a>
                                            &nbsp;
                                            <a href="/pemesanan/Hapus/{{$pembelian->id}}" class="btn btn-danger" >Hapus</a>
                                        </div>
                                    </td>
                                </tr>


                                @include('pembelian.modal.modalDetailProduk')
                
                                @include('pembelian.modal.modalUbahProduk')

                                <?php $i++; ?>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="../assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../assets/plugins/d3/d3.min.js"></script>
    <script src="../assets/plugins/c3-master/c3.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/pages/dashboards/dashboard1.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>