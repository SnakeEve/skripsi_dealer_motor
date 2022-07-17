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
                            <h3 class="dropdown-item-title">
                                Sparepart 1
                            </h3>
                            <p class="text-md text-muted">Rp. 50.000</p>
                        </div>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <div class="media">
                        <img src="../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-square mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Sparepart 2
                            </h3>
                            <p class="text-md text-muted">Rp. 150.000</p>
                        </div>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <div class="media">
                        <img src="../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-square mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Sparepart 3
                            </h3>
                            <p class="text-md text-muted">Rp. 250.000</p>
                        </div>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">Checkout</a>
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