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
              <h1>Example</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Example</li>
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
                        <th>id</th>
                        <th>first_name</th>
                        <th>last_name</th>
                        <th>email</th>
                        <th>gender</th>
                        <th>ip_address</th>
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
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Text</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Text Disabled</label>
                    <input type="text" class="form-control" placeholder="Enter ..." disabled="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">

                  <div class="form-group">
                    <label>Textarea</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Textarea Disabled</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..." disabled=""></textarea>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Input with success</label>
                <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
              </div>
              <div class="form-group">
                <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Input with warning</label>
                <input type="text" class="form-control is-warning" id="inputWarning" placeholder="Enter ...">
              </div>
              <div class="form-group">
                <label class="col-form-label" for="inputError"><i class="far fa-times-circle"></i> Input with error</label>
                <input type="text" class="form-control is-invalid" id="inputError" placeholder="Enter ...">
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">Checkbox</label>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="radio1">
                      <label class="form-check-label">Radio</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="radio1" checked="">
                      <label class="form-check-label">Radio checked</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" disabled="">
                      <label class="form-check-label">Radio disabled</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Select</label>
                    <select class="form-control">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Select Disabled</label>
                    <select class="form-control" disabled="">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">

                  <div class="form-group">
                    <label>Select Multiple</label>
                    <select multiple="" class="form-control">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Select Multiple Disabled</label>
                    <select multiple="" class="form-control" disabled="">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Minimal</label>
                    <select class="form-control select2 select2bs4" style="width: 100%;">
                      <option selected="selected">Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Date and time:</label>
                      <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                          <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime"/>
                          <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
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
  <!-- Datatable -->
  <script src="plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js" type="text/javascript"></script>
  <!-- Select2 -->
  <script src="plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
  <!-- Bootstrap4 Duallistbox -->
  <script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js" type="text/javascript"></script>
  <!-- InputMask -->
  <script src="plugins/moment/moment.min.js" type="text/javascript"></script>
  <script src="plugins/inputmask/jquery.inputmask.min.js" type="text/javascript"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- date-range-picker -->
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap color picker -->
  <script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js" type="text/javascript"></script>
  <!-- SweetAlert2 -->
  <script src="plugins/sweetalert2/sweetalert2.min.js" type="text/javascript"></script>
  <!-- Toastr -->
  <script src="plugins/toastr/toastr.min.js" type="text/javascript"></script>

  <script type="text/javascript">
    $( document ).ready(function() {
      const protocol = window.location.protocol;
      const environment = window.location.host;
      const url_local_root = protocol + "//" + environment ;
      
      $('#example1').DataTable({
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
          "url": "mock/MOCK_DATA_EXAMPLE.json",
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
          {"data": "first_name"},
          {"data": "last_name"},
          {"data": "email"},
          {"data": "gender"},
          {"data": "ip_address"}
        ],
        columnDefs: [
          {
            targets: ['_all'],
            // searchable: true,
            // sortable: true,
            // visible: true,
            defaultContent: "",
          }
        ],
        order: [1, 'asc'],
        initComplete: function( settings, json ) {
          let buttons = '<div class="btn-group">'+
                      '<button type="button" class="btn btn-flat btn-primary" id="btn_new">New</button>'+
                      '<button type="button" class="btn btn-flat btn-success" disabled>Update</button>'+
                      '<button type="button" class="btn btn-flat btn-danger" disabled>Delete</button>'+
                    '</div>';

          let button_target_name = $(settings.nTable).attr("id");
          button_target_name = "#"+button_target_name+"_length";

          // $(settings.nTable).find("th:first-child").append(buttons);
          $(settings.nTable).closest(".col-sm-12").css("overflow", "auto");

          $(buttons).appendTo(button_target_name);

          $("#btn_new").on( "click", function() {
            $('#modal-form').modal("show"); 
          });

        }
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

      $('.select2bs4').select2({
        theme: 'bootstrap4'
      });

      $('#reservationdatetime').datetimepicker({
        icons: {
          time: 'far fa-clock'
        }
      });
      
    });
  </script>
</body>
</html>