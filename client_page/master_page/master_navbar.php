<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light m-0">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <h3>Dealer Motor Customer</h3>
        </li>
    </ul> 

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                <i class="fa fa-shopping-cart"></i>
                <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
                <a href="#" class="dropdown-item">
                    <div class="media">
                        <img src="../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-square">
                        <div class="media-body">
                            <div class="float-left">
                                <h3 class="dropdown-item-title">
                                    Sparepart 1
                                </h3>
                                <p class="text-md text-muted">Rp. 50.000</p>
                            </div>
                            <div class="float-right">
                                <i class="fas fa-window-close"></i>
                            </div>
                            
                        </div>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <div class="media">
                        <img src="../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-square mr-3">
                        <div class="media-body">
                            <div class="float-left">
                                <h3 class="dropdown-item-title">
                                    Sparepart 2
                                </h3>
                                <p class="text-md text-muted">Rp. 150.000</p>
                            </div>
                            <div class="float-right">
                                <i class="fas fa-window-close"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <div class="media">
                        <img src="../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-square mr-3">
                        <div class="media-body">
                            <div class="float-left">
                                <h3 class="dropdown-item-title">
                                    Sparepart 3
                                </h3>
                                <p class="text-md text-muted">Rp. 250.000</p>
                            </div>
                            <div class="float-right">
                                <i class="fas fa-window-close"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a id="btnCheckout" class="dropdown-item dropdown-footer">Checkout</a>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item dropdown-footer" id="btnProfile">Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item dropdown-footer" id="btnLogout">Logout</a>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- MODAL -->
<div class="modal fade" id="modal-user-profile" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        <div class="modal-body">
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>Old Password</label>
                            <input type="password" class="form-control" >
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" class="form-control" >
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
</div>
<!-- ./MODAL -->

<!-- MODAL -->
<div class="modal fade" id="modal-cart-checkout" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Checkout Form</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        <div class="modal-body">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 order-md-2 mb-4">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Shopping Cart</span>
                                <span class="badge badge-secondary badge-pill">3</span>
                            </h4>
                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Sparepart 1</h6>
                                        <small class="text-muted">Honda</small>
                                    </div>
                                    <span class="text-muted">Rp. 50.000,00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Sparepart 2</h6>
                                        <small class="text-muted">Honda</small>
                                    </div>
                                    <span class="text-muted">Rp. 150.000,00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Sparepart 3</h6>
                                        <small class="text-muted">Yamaha</small>
                                    </div>
                                    <span class="text-muted">Rp. 250.000,00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                <span>Total</span>
                                <strong>Rp. 450.000,00</strong>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-8 order-md-1">
                            <h4 class="mb-3">Pengiriman Tagihan</h4>
                            <form class="needs-validation" novalidate="">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName">Nama Depan</label>
                                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                                        <div class="invalid-feedback">
                                            Nama Depan harus diisi.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lastName">Nama Belakang</label>
                                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                                        <div class="invalid-feedback">
                                            Nama Belakang harus diisi.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="email@email.com">
                                    <div class="invalid-feedback">
                                        Masukkan email yang valid.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="address">Alamat</label>
                                    <input type="text" class="form-control" id="address" placeholder="Jalan Imam Bonjol" required="">
                                    <div class="invalid-feedback">
                                        Masukkan alamat yang valid.
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5 mb-3">
                                        <label for="country">Provinsi</label>
                                        <select class="custom-select d-block w-100" id="country" required="">
                                            <option value="">---option---</option>
                                            <option>Banten</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Masukkan provinsi yang valid.
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="state">Kota</label>
                                        <select class="custom-select d-block w-100" id="state" required="">
                                            <option value="">---option---</option>
                                            <option>Tangerang</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Masukkan kota yang valid.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="zip">Kode Pos</label>
                                        <input type="text" class="form-control" id="zip" placeholder="" required="">
                                        <div class="invalid-feedback">
                                            Masukkan kode pos yang valid.
                                        </div>
                                    </div>
                                </div>

                                <hr class="mb-4">

                                <h4 class="mb-3">Payment</h4>

                                <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                                    <label class="custom-control-label" for="credit">Credit card</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                    <label class="custom-control-label" for="debit">Debit card</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                    <label class="custom-control-label" for="paypal">Paypal</label>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-name">Nama Tercantum</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                                    <small class="text-muted">Nama lengkap yang tertera pada kartu</small>
                                    <div class="invalid-feedback">
                                        Masukkan nama yang valid.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cc-number">Nomor Kartu Kredit</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                                    <div class="invalid-feedback">
                                        Masukkan nomor kartu kredit yang valid.
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">Masa Berakhir</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                                    <div class="invalid-feedback">
                                        Masukkan masa berakhir yang valid.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">CVV</label>
                                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                                    <div class="invalid-feedback">
                                        Masukkan CVV yang valid.
                                    </div>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
</div>
<!-- ./MODAL -->