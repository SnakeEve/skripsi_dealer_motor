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
                        <h1>Client Service Form</h1>
                        </div>
                        <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Client Service Form</li>
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
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <!-- <div class="form-group">
                                                <label>Staff</label>
                                                <select class="form-control" id="detail_staff_select">
                                                    <option>---option---</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Client</label>
                                                <select class="form-control" id="detail_client_select">
                                                    <option>---option---</option>
                                                </select>
                                            </div> -->
                                            <div class="form-group">
                                                <label>Client ID</label>
                                                <input type="text" class="form-control" id="modal_transaction_client_id" value="1" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Client Name</label>
                                                <input type="text" class="form-control" id="modal_transaction_client_name" value="Andi" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="text" class="form-control" id="modal_transaction_date">
                                            </div>
                                            <div class="form-group">
                                                <label>Vehicle</label>
                                                <select class="form-control" id="detail_vehicle_select">
                                                    <option>---option---</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="map-responsive">
                                                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <label>Latitude</label>
                                                        <input type="text" class="form-control" id="modal_transaction_latitude">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <label>Longitude</label>
                                                        <input type="text" class="form-control" id="modal_transaction_latitude">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group">
                                                <label>Service Cost</label>
                                                <input type="text" class="form-control" id="modal_vehicle_name" >
                                            </div> -->
                                        </div>
                                    </div>
                                    <!-- <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <label class="float-left">Spareparts</label>
                                                    <button id="add_sparepart" class="float-right btn btn-sm btn-primary">+</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <table id="data_detail_form" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Type</th>
                                                        <th>Brand</th>
                                                        <th>Qty</th>
                                                        <th>Price</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody></tbody>
                                                    <tfoot>
                                                        <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        </tr>
                                                    </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="card-footer">
                                    <div class="float-right">
                                        <button type="button" class="btn btn-primary" id="btnSubmitBooking">Submit Booking</button>
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