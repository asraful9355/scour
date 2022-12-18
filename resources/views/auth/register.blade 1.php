<!DOCTYPE html>
    <html lang="en">


<!-- Mirrored from demo.websolutionus.com/findestate/admin/login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Nov 2022 14:52:28 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


        <title>Register</title>


    <!-- Custom fonts for this template-->
    <link href="{{ asset('backend/asset/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">


    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">



            <link href="{{ asset('backend/asset/css/sb-admin-2.css') }}" rel="stylesheet">


    <!-- Custom styles for this template-->
    <link href="{{ asset('backend/backend/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/patient/css/jquery-ui.min.html') }}">
    <link rel="stylesheet" href="{{ asset('backend/patient/css/bootstrap-datepicker.min.html') }}">
    <link rel="stylesheet" href="{{ asset('backend/asset/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/asset/css/bootstrap4-toggle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/asset/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/asset/timepicker/jquery.timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/asset/css/prescription.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/asset/css/spacing.css') }}">




    <link rel="stylesheet" href="{{ asset('backend/asset/iconpicker/fontawesome-iconpicker.min.css') }}">



    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('backend/asset/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/asset/timepicker/jquery.timepicker.min.js') }}"></script>





    <link rel="stylesheet" type="text/css" href="{{ asset('backend/user/css/flaticon.min.html') }}">

<style>
    .fade.in {
        opacity: 1 !important;
    }
</style>



</head>
<body id="page-top" class="body_bg">
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg mt_100">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image" style="background-image:url({{ asset('backend//uploads/website-images/login-2021-10-12-09-34-01-8223.jpg') }});"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Admin Register</h1>
                                </div>
                                <form method="POST" action="{{ route('register') }}" class="login-form">
                                    @csrf
                                     <div class="form-group">
                                        <input type="name" name="name" class="form-control form-control-user"
                                            id="name" aria-describedby="name"
                                            placeholder="Name">
                                    </div>
                                     <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user"
                                            id="email" aria-describedby="email"
                                            placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password_confirmation" name="password_confirmation" class="form-control form-control-user"
                                            id="password_confirmation" placeholder="Confirmation Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        {{ __('Register') }}
                                    </button>
                                    <hr>
                                </form>
                                <div class="text-center">
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('login') }}">  {{ __('Already registered?') }}</a>
                                   @endif
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
</body>

<script>
    (function($) {
    "use strict";
    $(document).ready(function () {
        $("#adminLoginBtn").on('click',function(e) {
            e.preventDefault();

            $.ajax({
                url: "https://demo.websolutionus.com/findestate/admin/login",
                type:"post",
                data:$('#adminLoginForm').serialize(),
                success:function(response){
                    if(response.success){
                        window.location.href = "login.html";
                        toastr.success(response.success)
                    }
                    if(response.error){
                        toastr.error(response.error)

                    }
                },
                error:function(response){
                    if(response.responseJSON.errors.email)toastr.error(response.responseJSON.errors.email[0])
                    if(response.responseJSON.errors.password)toastr.error(response.responseJSON.errors.password[0])

                }

            });


        })

        $(document).on('keyup', '#exampleInputEmail, #exampleInputPassword', function (e) {
            if(e.keyCode == 13){
                e.preventDefault();

                $.ajax({
                    url: "https://demo.websolutionus.com/findestate/admin/login",
                    type:"post",
                    data:$('#adminLoginForm').serialize(),
                    success:function(response){
                        if(response.success){
                            window.location.href = "login.html";
                            toastr.success(response.success)
                        }
                        if(response.error){
                            toastr.error(response.error)

                        }
                    },
                    error:function(response){
                        if(response.responseJSON.errors.email)toastr.error(response.responseJSON.errors.email[0])
                        if(response.responseJSON.errors.password)toastr.error(response.responseJSON.errors.password[0])

                    }

                });

            }

        })
    });

    })(jQuery);
</script>
<!-- Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Item Delete Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <h5>Are You Sure ?</h5>
            </div>
            <div class="modal-footer">
                <form id="deleteForm" action="#" method="POST">
                    <input type="hidden" name="_token" value="4VPXN3HeCGcJ2rZCJvsDOsvHjuXXnf1D4SbZAgbF">                    <input type="hidden" name="_method" value="DELETE">                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-primary">Yes</button>
                </form>

            </div>
        </div>
    </div>
</div>



    <script src="{{ asset('backend/asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/asset/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('backend/asset/js/bootstrap4-toggle.min.js') }}"></script>

        <script src="{{ asset('backend/asset/js/sb-admin-2.min.js') }}"></script>

    <script src="{{ asset('backend/asset/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('backend/asset/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('backend/asset/js/demo/chart-pie-demo.js') }}"></script>
    <script src="{{ asset('backend/asset/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/asset/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/asset/js/demo/datatables-demo.js') }}"></script>
    <script src="{{ asset('backend/asset/js/jquery.PrintArea.js') }}"></script>
    <script src="{{ asset('backend/asset/js/select2.min.js') }}"></script>
    <script src="{{ asset('backend/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('backend/asset/summernote/summernote-bs4.js') }}"></script>

    <script src="{{ asset('backend/asset/iconpicker/fontawesome-iconpicker.min.js') }}"></script>

<script>
    </script>


<script type="text/javascript">
(function($) {

    "use strict";
    $(document).ready(function() {
      $('.summernote').summernote();
      $('.select2').select2();
      $('#custom-select2').select2();

        $('.custom-icon-picker').iconpicker({
                templates: {
                    popover: '<div class="iconpicker-popover popover"><div class="arrow"></div>' +
                        '<div class="popover-title"></div><div class="popover-content"></div></div>',
                    footer: '<div class="popover-footer"></div>',
                    buttons: '<button class="iconpicker-btn iconpicker-btn-cancel btn btn-default btn-sm">Cancel</button>' +
                        ' <button class="iconpicker-btn iconpicker-btn-accept btn btn-primary btn-sm">Accept</button>',
                    search: '<input type="search" class="form-control iconpicker-search" placeholder="Type to filter" />',
                    iconpicker: '<div class="iconpicker"><div class="iconpicker-items"></div></div>',
                    iconpickerItem: '<a role="button" href="javascript:;" class="iconpicker-item"><i></i></a>'
                }
            })

    //   check home section value
      $("#section_type").on('change',function(){
            var id=$(this).val();
            if(id==1)$("#section-details").addClass('d-none')
            else $("#section-details").removeClass('d-none')
        });

        // add custom video input field
        $("#addRow").on('click',function () {
            var html = '';
            html+='<div class="row" id="remove">'
            html+='<div class="col-md-9">'
            html+='<div class="form-group">'
            html+='<label for="link">Link</label>'
            html+='<input type="text" name="link[]" class="form-control" id="link">'
            html+='</div>'
            html+='</div>'
            html+='<div class="col-md-3 btn-row">'
            html+='<button type="button" id="removeRow" class="btn btn-danger">-</button>'
            html+='</div>'
            html+='</div>'
            $("#inputRow").append(html)
        });

        // remove custom video input field row
        $(document).on('click', '#removeRow', function () {
            $(this).closest('#remove').remove();
        });

        // add custom image input field for service section
        $("#addImageRow").on('click',function () {
            var html = '';
            html+='<div class="row" id="remove">';
            html+='<div class="col-md-9">';
            html+='<div class="form-group">';
            html+='<label for="">Image</label>';
            html+='<input type="file" name="image[]" class="form-control">';
            html+='</div>';
            html+='</div>';
            html+='<div class="col-md-3 btn-row">';
            html+='<button class="btn btn-danger" type="button" id="removeImageRow" >-</button>';
            html+='</div>';
            html+='</div>';
            $("#addRow").append(html)
        });

        // remove custom image input field row
        $(document).on('click', '#removeImageRow', function () {
            $(this).closest('#remove').remove();
        });

        // add custome medicine row
        $("#addMedicineRow").on('click',function () {
            var html = '';
            html+='<div class="row" id="remove">';
            html+='<div class="col-md-9">';
            html+='<div class="form-group">';
            html+='<label for="">Name</label>';
            html+='<input type="text" name="name[]" class="form-control">';
            html+='</div>';
            html+='</div>';
            html+='<div class="col-md-3 btn-row">';
            html+='<button class="btn btn-danger" type="button" id="removeImageRow" ><i class="fas fa-trash" aria-hidden="true"></i></button>';
            html+='</div>';
            html+='</div>';
            $("#medicine-row").append(html)
        });


        // add habit input field
        $("#addHabitRow").on('click',function () {
            var html = '';
            html+='<div class="row" id="remove">'
            html+='<div class="col-md-9">'
            html+='<div class="form-group">'
            html+='<label for="habit">Habit</label>'
            html+='<input type="text" name="habit[]" class="form-control" id="habit">'
            html+='</div>'
            html+='</div>'
            html+='<div class="col-md-3 btn-row">'
            html+='<button type="button" id="removeHabitRow" class="btn btn-danger">-</button>'
            html+='</div>'
            html+='</div>'
            $("#inputRow").append(html)
        });

        // remove habit input field row
        $(document).on('click', '#removeHabitRow', function () {
            $(this).closest('#remove').remove();
        });

        // add new prescribe medicine input field
        $("#addMedicineRow").on('click',function () {
            var html=$("#hiddenPrescribeRow").html();
            $("#medicineRow").append(html)
        });

        // remove prescribe medicine input field row
        $(document).on('click', '#removePrescribeRow', function () {
            $(this).closest('#delete-prescribe-row').remove();
        });




    });
	})(jQuery);

    function printPrescribe(){
        var mode = 'iframe';
            var close = mode == "popup";
            var options = {
                mode: mode,
                popClose: close
            }
            $("div.prescribe").printArea(options)
    }

    function printReport(){
        var mode = 'iframe';
            var close = mode == "popup";
            var options = {
                mode: mode,
                popClose: close
            }
            $("div.printArea").printArea(options)
    }



    // new order notification
    function newOrderNotify(){
        $.ajax({
            type: 'GET',
            url: "https://demo.websolutionus.com/findestate/admin/view-order-notify",
            success: function (response) {
                $("#newOrderNotify").text('')
            },
            error: function(err) {
                console.log(err);
            }
        });
    }

    // new message notification
    function newMessageNotify(){
        $.ajax({
            type: 'GET',
            url: "https://demo.websolutionus.com/findestate/admin/view-message-notify",
            success: function (response) {
                $("#newMessageNotify").text('')
            },
            error: function(err) {
                console.log(err);
            }
        });
    }


</script>

</body>


<!-- Mirrored from demo.websolutionus.com/findestate/admin/login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Nov 2022 14:52:42 GMT -->
</html>

