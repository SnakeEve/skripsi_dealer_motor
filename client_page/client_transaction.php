<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "master_page/master_header.php"; ?>
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <style>
        .map-responsive{
            overflow:hidden;
            padding-bottom:50%;
            position:relative;
            height:0;
        }
        .map-responsive iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php include "master_page/master_navbar.php"; ?>

        <div class="content-wrapper m-0">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        <h1>Halaman Penjualan</h1>
                        </div>
                        <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Halaman Penjualan</li>
                        </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
        
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="container px-4 px-lg-5 mt-5">
                                        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                                            <div class="col mb-5">
                                                <div class="card h-100">
                                                    <!-- Product image-->
                                                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="...">
                                                    <!-- Product details-->
                                                    <div class="card-body p-4">
                                                        <div class="text-center">
                                                            <!-- Product name-->
                                                            <h5 class="fw-bolder">Sparepart 1</h5>
                                                            <!-- Product reviews-->
                                                            <div class="d-flex justify-content-center small text-warning mb-2">
                                                                <div class="bi-star-fill"></div>
                                                                <div class="bi-star-fill"></div>
                                                                <div class="bi-star-fill"></div>
                                                                <div class="bi-star-fill"></div>
                                                                <div class="bi-star-fill"></div>
                                                            </div>
                                                            <!-- Product price-->
                                                            Rp. 50.000,00
                                                        </div>
                                                    </div>
                                                    <!-- Product actions-->
                                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <input type="number" class="form-control" min=0 max=999>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                <button type="button" class="btn btn-outline-dark mt-auto">Detail Barang</button>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                <button type="button" class="btn btn-outline-dark mt-auto">
                                                                    <!-- <i class="fa fa-cart-plus"></i>  -->
                                                                    Tambah ke cart
                                                                </button>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-5">
                                                <div class="card h-100">
                                                    <!-- Sale badge-->
                                                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                                    <!-- Product image-->
                                                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="...">
                                                    <!-- Product details-->
                                                    <div class="card-body p-4">
                                                        <div class="text-center">
                                                            <!-- Product name-->
                                                            <h5 class="fw-bolder">Popular Item</h5>
                                                            <!-- Product reviews-->
                                                            <div class="d-flex justify-content-center small text-warning mb-2">
                                                                <div class="bi-star-fill"></div>
                                                                <div class="bi-star-fill"></div>
                                                                <div class="bi-star-fill"></div>
                                                                <div class="bi-star-fill"></div>
                                                                <div class="bi-star-fill"></div>
                                                            </div>
                                                            <!-- Product price-->
                                                            Rp. 50.000,00
                                                        </div>
                                                    </div>
                                                    <!-- Product actions-->
                                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <input type="number" class="form-control" min=0 max=999>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                <button type="button" class="btn btn-outline-dark mt-auto">Detail Barang</button>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                <button type="button" class="btn btn-outline-dark mt-auto">
                                                                    <!-- <i class="fa fa-cart-plus"></i>  -->
                                                                    Tambah ke cart
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-5">
                                                <div class="card h-100">
                                                    <!-- Product image-->
                                                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="...">
                                                    <!-- Product details-->
                                                    <div class="card-body p-4">
                                                        <div class="text-center">
                                                            <!-- Product name-->
                                                            <h5 class="fw-bolder">Sparepart 1</h5>
                                                            <!-- Product reviews-->
                                                            <div class="d-flex justify-content-center small text-warning mb-2">
                                                                <div class="bi-star-fill"></div>
                                                                <div class="bi-star-fill"></div>
                                                                <div class="bi-star-fill"></div>
                                                                <div class="bi-star-fill"></div>
                                                                <div class="bi-star-fill"></div>
                                                            </div>
                                                            <!-- Product price-->
                                                            Rp. 50.000,00
                                                        </div>
                                                    </div>
                                                    <!-- Product actions-->
                                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <input type="number" class="form-control" min=0 max=999>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                <button type="button" class="btn btn-outline-dark mt-auto">Detail Barang</button>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                <button type="button" class="btn btn-outline-dark mt-auto">
                                                                    <!-- <i class="fa fa-cart-plus"></i>  -->
                                                                    Tambah ke cart
                                                                </button>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mb-5">
                                                <div class="card h-100">
                                                    <!-- Sale badge-->
                                                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Diskon</div>
                                                    <!-- Product image-->
                                                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="...">
                                                    <!-- Product details-->
                                                    <div class="card-body p-4">
                                                        <div class="text-center">
                                                            <!-- Product name-->
                                                            <h5 class="fw-bolder">Popular Item</h5>
                                                            <!-- Product reviews-->
                                                            <div class="d-flex justify-content-center small text-warning mb-2">
                                                                <div class="bi-star-fill"></div>
                                                                <div class="bi-star-fill"></div>
                                                                <div class="bi-star-fill"></div>
                                                                <div class="bi-star-fill"></div>
                                                                <div class="bi-star-fill"></div>
                                                            </div>
                                                            <!-- Product price-->
                                                            Rp. 50.000,00
                                                        </div>
                                                    </div>
                                                    <!-- Product actions-->
                                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <input type="number" class="form-control" min=0 max=999>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                <button type="button" class="btn btn-outline-dark mt-auto">Detail Barang</button>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                <button type="button" class="btn btn-outline-dark mt-auto">
                                                                    <!-- <i class="fa fa-cart-plus"></i>  -->
                                                                    Tambah ke cart
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content -->

        <?php include "master_page/master_footer.php"; ?>
    </div>

</body>