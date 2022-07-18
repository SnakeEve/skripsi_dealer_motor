<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "master_page/master_header.php"; ?>
</head>

<body class="hold-transition">
  <div class="wrapper">
    <?php include "master_page/master_navbar.php"; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper m-0">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="../image/carousel/349472.jpg" alt="First slide" style="height: 668px;">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../image/carousel/1880015.jpg" alt="Second slide" style="height: 668px;">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../image/carousel/1880018.jpg" alt="Third slide" style="height: 668px;">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>Order Transaksi</h3>
                  <br>
                  <p></p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="client_transaction.php" class="small-box-footer">Buka Halaman <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>Order Service</h3>
                  <br>
                  <p></p>
                </div>
                <div class="icon">
                  <i class="ion ion-gear-b"></i>
                </div>
                <a href="client_service.php" class="small-box-footer">Buka Halaman <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>Retur Order</h3>
                  <br>
                  <p></p>
                </div>
                <div class="icon">
                  <i class="ion ion-arrow-return-left"></i>
                </div>
                <a href="client_return_order.php" class="small-box-footer">Buka Halaman <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>Riwayat Transaksi</h3>
                  <br>
                  <p></p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="client_transaction_history.php" class="small-box-footer">Buka Halaman <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php include "master_page/master_footer.php"; ?>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <?php include "master_page/master_scripts.php"; ?>

  <!-- OPTIONAL SCRIPTS -->
  <script src="plugins/chart.js/Chart.min.js" type="text/javascript"></script>
  <script src="dist/js/pages/dashboard3.js" type="text/javascript"></script>
</body>

</html>
