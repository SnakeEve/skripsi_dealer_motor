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
              <h1>Sparepart Stock</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Sparepart Stock</li>
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
                        <th>Action</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Brand</th>
                        <th>Created Date</th>
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
  <div class="modal fade" id="modal-form" aria-modal="true" role="dialog" style="z-index: 1100;">
    <div class="modal-dialog modal-lg">
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
                    <label>Type</label>
                    <select class="form-control" id="sparepart_type_select">
                      <option>---option---</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Brand</label>
                    <select class="form-control" id="sparepart_brand_select">
                      <option>---option---</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Starting Price</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>Quantity</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
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
  <div class="modal fade" id="modal-datatable" aria-modal="true" role="dialog" style="z-index: 1050">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Datatable</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card-body">
            <table id="data_detail" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Action</th>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Brand</th>
                  <th>Created Date</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
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

      $('#sparepart_type_select').select2({
        ajax: {
          url: 'mock/MOCK_DATA_SPAREPART_TYPE.json',
          theme: 'bootstrap4',
          delay: 250,
          dataType: 'json',
          // data: function (params) {
            // var query = {
            //   search: params.term,
            //   type: 'public'
            // }

            // Query parameters will be ?search=[term]&type=public
            // return query;
          // }
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

      $('#sparepart_brand_select').select2({
        ajax: {
          url: 'mock/MOCK_DATA_SPAREPART_BRAND.json',
          theme: 'bootstrap4',
          delay: 250,
          dataType: 'json',
          // data: function (params) {
            // var query = {
            //   search: params.term,
            //   type: 'public'
            // }

            // Query parameters will be ?search=[term]&type=public
            // return query;
          // }
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
          "url": "mock/MOCK_DATA_SPAREPART.json",
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
            "data": "id",
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
          {"data": "id"},
          {"data": "name"},
          {"data": "type"},
          {"data": "brand"},
          {"data": "created_date"},
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
        paging: true,
        lengthChange: true,
        searching: true,
        ordering: true,
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
          {
            "data": "id",
            "width": "90px",
            "orderable": false,
            "render": function (data, type, row) {
              var button_string = "";
              button_string += '<div class="btn-group flex-wrap">';
              button_string += '<button type="button" class="btn btn-info btn-sm button_update" data-toggle="tooltip" title="Update" ><i class="fa fa-edit"></i></button> ';
              button_string += '<button type="button" class="btn btn-danger btn-sm button_delete" data-toggle="tooltip" title="Hapus" ><i class="fa fa-trash"></i></button> ';
              button_string += '</div>';
              return button_string;
            }
          },
          {"data": "id"},
          {"data": "name"},
          {"data": "type"},
          {"data": "brand"},
          {"data": "created_date"},
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
          let buttons = '<div class="btn-group">'+
                          '<button type="button" class="btn btn-flat btn-primary" id="btn_new">New</button>'+
                        '</div>';

          let button_target_name = $(settings.nTable).attr("id");
          button_target_name = "#"+button_target_name+"_length";

          // $(settings.nTable).find("th:first-child").empty().append(buttons);
          $(settings.nTable).closest(".col-sm-12").css("overflow", "auto"); 

          $(buttons).appendTo(button_target_name);

          $("#btn_new").on( "click", function() {
            $('#modal-form').modal("show"); 
          });
        }
      });

    }
  </script>
</body>
</html>