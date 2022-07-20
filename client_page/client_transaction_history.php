<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "master_page/master_header.php"; ?>
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
              <h1>Laporan Transaksi</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Laporan Transaksi</li>
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
                <!-- 
                  <div class="card-header">
                    <h3 class="card-title">DataTable with default features</h3>
                  </div> 
                -->
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="main_datatable" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Menu</th>
                        <th>ID</th>
                        <!-- <th>ID Pelanggan</th>
                        <th>Nama</th> -->
                        <th>Tanggal</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
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
  <!-- ./wrapper -->

  <!-- MODAL -->
  <div class="modal fade" id="modal-datatable" aria-modal="true" role="dialog" style="z-index: 1050">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Datatable</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body" style="max-height: 750px; overflow: auto;">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>ID Transaksi</label>
                    <input type="text" class="form-control"id="modal_client_id" value="TX-001" readonly>
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="text" class="form-control" id="modal_transaction_date" value="1 July 2022 15:30:45" readonly>
                </div>
                <div class="form-group">
                    <label>Notes</label>
                    <textarea class="form-control" id="modal_notes" placeholder="Isi notes retur disini" readonly>notes ASD</textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label>Daftar Barang</label>
                <table id="data_detail" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <!-- <th>Action</th> -->
                      <th>ID</th>
                      <th>Item Type</th>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody></tbody>
                  <tfoot>
                    <tr>
                      <!-- <th></th> -->
                      <th></th>
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
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <div class="btn-group">
            <!-- <button type="button" class="btn btn-primary" id="btnSubmitReturn">Submit Return</button> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ./MODAL -->

  <!-- MASTER SCRIPTS -->
  <?php include "master_page/master_scripts.php"; ?>
  <!-- CURRENT PAGE SCRIPTS -->
  <?php include "master_page/master_optional_scripts.php"; ?>

  <script type="text/javascript">
    let datatable_main;
    let datatable_detail;

    $( document ).ready(function() {
      const protocol = window.location.protocol;
      const environment = window.location.host;
      const url_local_root = protocol + "//" + environment ;

      $("#data_detail tbody").on( "click", ".button_update", function() {
        $('#modal-form').modal("show"); 
      });

      $("#data_detail tbody").on( "click", ".button_delete", function() {
        Swal.fire({
          title: 'Apakah Anda yakin?',
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Simpan',
          cancelButtonText: 'Batal'
        }).then((result) => {
          if (result.value) {
            alert("hit delete api")
          }
          else{
            // alert("cancel")
          }
        });
      });

      $("#btnSubmitReturn").on( "click", function() {
        Swal.fire({
          title: 'Apakah Anda yakin?',
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Simpan',
          cancelButtonText: 'Batal'
        }).then((result) => {
          if (result.value) {
            alert("hit delete api")
          }
          else{
            // alert("cancel")
          }
        });
      });

      datatable_main = $('#main_datatable').DataTable({
        language: {
          processing: "<span class='spinner-border spinner-border-sm'></span>"
        },
        contentType: "application/json; charset=utf-8",
        destroy: true,
        cache: true,
        deferRender: true,
        paging: true,
        lengthChange: true,
        searching: true,
        ordering: true,
        info: true,
        autoWidth: false,
        responsive: true,
        ajax: {
          "url": "../mock/MOCK_DATA_TRANSACTION.json",
          "type": "GET",
          "headers": {
            'Content-Type': 'application/json'
          },
          "dataSrc": function ( value ) {
            if (value === null) {
                return [];
            }
            return value;
          }
        },
        columns: [
          {
            "data": "tx_id",
            "width": "90px",
            "orderable": false,
            "render": function (data, type, row) {
              var button_string = "";
              button_string += '<div class="btn-group flex-wrap">';
              button_string += '<button type="button" class="btn btn-info btn-sm button_detail" data-toggle="tooltip" title="Update" ><i class="fa fa-table"></i></button> ';
              button_string += '</div>';
              return button_string;
            }
          },
          {"data": "tx_id"},
          // {"data": "c_id"},
          // {"data": "c_name"},
          {
            "data": "id",
            "render": function (data, type, row) {
              return "1-July-2022 15:30:45";
            }
          },
          {"data": "is_active"}
        ],
        columnDefs: [
          {
            targets: ['_all'],
            // searchable: true,
            // sortable: true,
            // visible: true,
            defaultContent: ""
          }
        ],
        order: [1, 'asc'],
        initComplete: function( settings, json ) {
          $(settings.nTable).closest(".col-sm-12").css("overflow", "auto");
        }
      });
      
      $("#main_datatable tbody").on( "click", ".button_detail", function() {
        $('#modal-datatable').modal("show"); 
        call_datatable_detail(123);
      });

    });

    function call_datatable_detail(id) {
      datatable_detail = $('#data_detail').DataTable({
        language: {
          processing: "<span class='spinner-border spinner-border-sm'></span>"
        },
        contentType: "application/json; charset=utf-8",
        destroy: true,
        cache: true,
        deferRender: true,
        paging: false,
        lengthChange: true,
        searching: false,
        ordering: false,
        info: true,
        autoWidth: false,
        responsive: true,
        ajax: {
          "url": "../mock/MOCK_DATA_TRANSACTION_DETAIL.json", //take the id, put it into the GET param
          "type": "GET",
          "headers": {
            'Content-Type': 'application/json'
          },
          "dataSrc": function ( value ) {
            if (value === null) {
                return [];
            }
            return value;
          }
        },
        columns: [
          // {
          //   "data": "tx_id",
          //   "width": "90px",
          //   "orderable": false,
          //   "render": function (data, type, row) {
          //     var button_string = "";
          //     button_string += '<div class="btn-group flex-wrap">';
          //     // button_string += '<button type="button" class="btn btn-info btn-sm button_update" data-toggle="tooltip" title="Update" ><i class="fa fa-edit"></i></button> ';
          //     // button_string += '<button type="button" class="btn btn-danger btn-sm button_delete" data-toggle="tooltip" title="Hapus" ><i class="fa fa-trash"></i></button> ';
          //     button_string += '</div>';
          //     return button_string;
          //   }
          // },
          {"data": "tx_id"},
          {"data": "type"},
          {"data": "id"},
          {"data": "name"},
          {
            "data": "quantity",
            "render": function (data, type, row) {
              // var input_string = "";
              // input_string += '<div class="form-group">';
              // input_string += '<input type="number" class="form-control modal_transaction_return_quantity_number" value="'+data+'" max="'+data+'" min="0" >';
              // input_string += '</div>';
              // return input_string;

              return data;
            }
          },
          {"data": "price"},
          {"data": "is_active"}
        ],
        columnDefs: [
          {
            targets: ['_all'],
            // searchable: true,
            // sortable: true,
            // visible: true,
            defaultContent: ""
          },
          {
            targets: [2,3],
            // searchable: true,
            // sortable: true,
            visible: false
            // defaultContent: ""
          }
        ],
        order: [2, 'asc'],
        initComplete: function( settings, json ) {
          $(settings.nTable).closest(".col-sm-12").css("overflow", "auto");
        },
        footerCallback: function (row, data, start, end, display) {
          let api = this.api();
          
          let intVal = function (i) {
              return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
          };

          let qtyTotal = api.column(4).data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
          let priceTotal = api.column(5).data()
                          .reduce( function (a, b) {
                              return intVal(a) + intVal(b);
                          }, 0 );
          $( api.column(4).footer() ).html(qtyTotal);
          $( api.column(5).footer() ).html(priceTotal);
        }
      });

    }
  </script>
</body>
</html>