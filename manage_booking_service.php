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

    <?php include "master_page/master_sidebar.php"; ?>

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Booking Service</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Booking Service</li>
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
                        <th>ID Pelanggan</th>
                        <th>Nama</th>
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

  <!-- MODAL DATATABLE -->
  <div class="modal fade" id="modal-datatable" aria-modal="true" role="dialog" style="z-index: 1050">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Detail</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body" style="max-height: 2000px; overflow: auto;">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>ID Pelanggan</label>
                  <input type="text" class="form-control"id="modal_client_id" value="123151355135" readonly>
                </div>
                <div class="form-group">
                  <label>Nama Pelanggan</label>
                  <input type="text" class="form-control" id="modal_client_name" value="Axel" readonly>
                </div>
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="text" class="form-control" id="modal_transaction_date" value="1 July 2022 15:30:45" readonly>
                </div>
                <div class="form-group">
                  <label>ID Kendaraan</label>
                  <input type="text" class="form-control"id="modal_vehicle_id" value="ASD_123" readonly>
                </div>
                <div class="form-group">
                  <label>Nama Kendaraan</label>
                  <input type="text" class="form-control" id="modal_vehicle_name" value="Vario" readonly>
                </div>
                <div class="form-group">
                  <label>Biaya Service</label>
                  <input type="text" class="form-control" id="modal_vehicle_name" value="1500000" readonly>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label>Spareparts</label>
                <table id="data_detail" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>Tipe</th>
                      <th>Brand</th>
                      <th>Qty</th>
                      <th>Harga</th>
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
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <div class="btn-group">
            <button type="button" class="btn btn-danger" id="btnRejectBooking">Reject Booking</button>
            <button type="button" class="btn btn-warning" id="btnRescheduleBooking">Reschedule Booking</button>
            <button type="button" class="btn btn-primary" id="btnApproveBooking">Approve Booking</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ./MODAL DATATABLE -->

  <!-- MODAL DETAIL -->
  <div class="modal fade" id="modal-form" aria-modal="true" role="dialog" style="z-index: 1050">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Form</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body" style="max-height: 2000px; overflow: auto;">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                  <label>Staff</label>
                  <select class="form-control" id="detail_staff_select">
                    <option>---option---</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pelanggan</label>
                  <select class="form-control" id="detail_client_select">
                    <option>---option---</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="text" class="form-control" id="modal_transaction_date">
                </div>
                <div class="form-group">
                  <label>Kendaraan</label>
                  <select class="form-control" id="detail_vehicle_select">
                    <option>---option---</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Biaya Service</label>
                  <input type="text" class="form-control" id="modal_vehicle_name">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label class="float-left">Daftar Sparepart</label>
                    <button id="add_sparepart" class="float-right btn btn-sm btn-primary">+</button>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <table id="data_detail_form" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nama</th>
                          <th>Tipe</th>
                          <th>Brand</th>
                          <th>Qty</th>
                          <th>Harga</th>
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
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <div class="btn-group">
            <button type="button" class="btn btn-primary" id="btnSubmitBooking">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ./MODAL DETAIL -->

  <!-- MODAL SPAREPART -->
  <div class="modal fade" id="modal-sparepart-form" aria-modal="true" role="dialog" style="z-index: 1050">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Form</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body" style="max-height: 2000px; overflow: auto;">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Sparepart</label>
                  <select class="form-control" id="sparepart_select">
                    <option>---option---</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Kuantitas</label>
                  <input type="number" class="form-control" id="modal_client_name" min="0">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <div class="btn-group">
            <button type="button" class="btn btn-primary" id="btnSubmitSparepart">Add</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ./MODAL SPAREPART -->

  <!-- MASTER SCRIPTS -->
  <?php include "master_page/master_scripts.php"; ?>
  <!-- CURRENT PAGE SCRIPTS -->
  <?php include "master_page/master_optional_scripts.php"; ?>

  <script type="text/javascript">
    let datatable_main;
    let datatable_detail;
    let datatable_detail_form;

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

      $("#btnApproveBooking").on( "click", function() {
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

      $("#btnRescheduleBooking").on( "click", function() {
        let flatpickrInstance;
        Swal.fire({
          title: 'Masukkan tanggal reschedule',
          html: '<input class="swal2-input" id="reschedule-date">',
          stopKeydownPropagation: false,
          showLoaderOnConfirm: true,
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Simpan',
          cancelButtonText: 'Batal',
          preConfirm: () => {
            if (flatpickrInstance.selectedDates[0] < new Date()) {
              Swal.showValidationMessage(`Tidak bisa memilih waktu lampau`)
            }
          },
          willOpen: () => {
            flatpickrInstance = flatpickr(
              Swal.getPopup().querySelector('#reschedule-date')
            )
          }
        }).then((result) => {
          console.log(result);
        });

      });

      $("#btnRejectBooking").on( "click", function() {
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

      $("#btnSubmitBooking").on( "click", function() {
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
          "url": "mock/MOCK_DATA_TRANSACTION.json",
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
          {"data": "c_id"},
          {"data": "c_name"},
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

      let buttons = '<div class="btn-group">'+
                      '<button type="button" class="btn btn-flat btn-primary" id="btn_new">New</button>'+
                    '</div>';
      $(buttons).appendTo('#main_datatable_wrapper .col-md-6:eq(0)');

      $("#btn_new").on( "click", function() {
        $('#modal-form').modal("show");
        call_datatable_detail_form();
      });

      $("#add_sparepart").on( "click", function() {
        $('#modal-sparepart-form').modal("show");
      });

      $('#sparepart_select').select2({
        ajax: {
          url: 'mock/MOCK_DATA_SPAREPART.json',
          theme: 'bootstrap4',
          delay: 250,
          dataType: 'json',
          processResults: function (data) {
            let return_object = [];
            $.each(data, function( index, value ) {
              return_object.push({id: value.id, text: value.name});
            });

            return {
              results: return_object
            };
          }
        }
        
      });

      $("#btnSubmitSparepart").on( "click", function() {
        alert("Adding sparepart, pushing content to datatable_detail_form")
      });

      $("#main_datatable tbody").on( "click", ".button_detail", function() {
        $('#modal-datatable').modal("show"); 
        call_datatable_detail(123);
      });

      $('#detail_staff_select').select2({
        ajax: {
          url: 'mock/MOCK_DATA_STAFF.json',
          theme: 'bootstrap4',
          delay: 250,
          dataType: 'json',
          processResults: function (data) {
            let return_object = [];
            $.each(data, function( index, value ) {
              return_object.push({id: value.ID, text: value.ID+" - "+value.Name});
            });

            return {
              results: return_object
            };
          }
        }
        
      });

      $('#detail_client_select').select2({
        ajax: {
          url: 'mock/MOCK_DATA_CLIENT.json',
          theme: 'bootstrap4',
          delay: 250,
          dataType: 'json',
          processResults: function (data) {
            let return_object = [];
            $.each(data, function( index, value ) {
              return_object.push({id: value.ID, text: value.ID+" - "+value.Name});
            });

            return {
              results: return_object
            };
          }
        }
        
      });

      $('#detail_vehicle_select').select2({
        ajax: {
          url: 'mock/MOCK_DATA_VEHICLE.json',
          theme: 'bootstrap4',
          delay: 250,
          dataType: 'json',
          processResults: function (data) {
            let return_object = [];
            $.each(data, function( index, value ) {
              return_object.push({id: value.id, text: value.id+" - "+value.name});
            });

            return {
              results: return_object
            };
          }
        }
        
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
          "url": "mock/MOCK_DATA_SPAREPART.json", //take the id, put it into the GET param
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
          {"data": "id"},
          {"data": "name"},
          {"data": "type"},
          {"data": "brand"},
          {
            "data": "id",
            "render": function (data, type, row) {
              return Math.floor(Math.random() * 101);
            }
          },
          {
            "data": "id",
            "render": function (data, type, row) {
              return Math.floor(Math.random() * 10001);
            }
          }
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

    function call_datatable_detail_form(){
      datatable_detail_form = $('#data_detail_form').DataTable({
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
        columnDefs: [
          {
            targets: ['_all'],
            // searchable: true,
            // sortable: true,
            // visible: true,
            defaultContent: ""
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