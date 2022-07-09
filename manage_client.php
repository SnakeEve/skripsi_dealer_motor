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
              <h1>Client</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Client</li>
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
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Action</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
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
  <div class="modal fade" id="modal-form" aria-modal="true" role="dialog">
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

  <!-- MASTER SCRIPTS -->
  <?php include "master_page/master_scripts.php"; ?>
  <!-- CURRENT PAGE SCRIPTS -->
  <?php include "master_page/master_optional_scripts.php"; ?>

  <script type="text/javascript">
    let datatable;

    $( document ).ready(function() {
      const protocol = window.location.protocol;
      const environment = window.location.host;
      const url_local_root = protocol + "//" + environment ;
      
      datatable = $('#example1').DataTable({
        language: {
          processing: "<span class='spinner-border spinner-border-sm'></span>"
        },
        contentType: "application/json; charset=utf-8",
        destroy: true,
        cache: true,
        scrollCollapse: true,
        deferRender: true,
        paging: true,
        lengthChange: true,
        searching: true,
        ordering: true,
        info: true,
        autoWidth: false,
        responsive: true,
        ajax: {
          "url": "mock/MOCK_DATA_CLIENT.json",
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
            "data": "ID",
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
          {"data": "ID"},
          {"data": "Name"},
          {"data": "Phone"},
          {"data": "Email"},
          {"data": "CreatedDate"},
          {"data": "Status"}
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
        order: [1, 'asc']
      });

      let buttons = '<div class="btn-group">'+
                      '<button type="button" class="btn btn-flat btn-primary" id="btn_new">New</button>'+
                    '</div>';
      $(buttons).appendTo('#example1_wrapper .col-md-6:eq(0)');

      $("#btn_new").on( "click", function() {
        $('#modal-form').modal("show"); 
      });

      $("#example1 tbody").on( "click", ".button_update", function() {
        $('#modal-form').modal("show"); 
      });

      $("#example1 tbody").on( "click", ".button_delete", function() {
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
      
    });
  </script>
</body>
</html>