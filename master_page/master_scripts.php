<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js" type="text/javascript"></script>

<script type="text/javascript">
    $.fn.hasAttr = function(name) {  
        return this.attr(name) !== undefined;
    };

    var href = document.location.href;
    var lastPathSegment = href.substr(href.lastIndexOf('/') + 1);

    $(document).ready(function() {
        $('.sidebar .nav-link').each(function(i, obj) {
            if($(obj).attr('href') == lastPathSegment) {
                $(this).addClass('active');
            }
        });

        $(".modal").on("shown.bs.modal", function () {
            if ($(".modal-backdrop").length > 1) {
                $(".modal-backdrop").not(':first').remove();
            }
        });

        $("#btnLogout").on( "click", function() {
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

        $("#btnProfile").on( "click", function() {
            $('#modal-user-profile').modal("show"); 
        });

    });

</script>