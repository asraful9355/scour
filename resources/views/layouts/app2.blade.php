<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Admin Dashboard</title>
      <!-- Custom fonts for this template-->
      <link href="{{ asset('backend/asset/vendor/fontawesome-free/css/all.min.css'  ) }}" rel="stylesheet" type="text/css">

      <!-- font awesome cdn -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <link
         href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet">
      <link href="{{ asset('backend/asset/css/sb-admin-2.css ') }}" rel="stylesheet">

      <!-- Custom styles for this template-->
      <link href="backend/vendor/datatables/dataTables.bootstrap4.min.css ') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('backend/asset/patient/css/jquery-ui.min.css ') }}">
      <link rel="stylesheet" href="{{ asset('backend/asset/patient/css/bootstrap-datepicker.min.css ') }}">
      <link rel="stylesheet" href="{{ asset('backend/asset/css/select2.min.css ') }}">
      <link rel="stylesheet" href="{{ asset('backend/asset/toastr/toastr.min.css ') }}">
      <link rel="stylesheet" href="{{ asset('backend/asset/css/bootstrap4-toggle.min.css ') }}">
      <link rel="stylesheet" href="{{ asset('backend/asset/summernote/summernote-bs4.css ') }}">
      <link rel="stylesheet" href="{{ asset('backend/asset/timepicker/jquery.timepicker.min.css ') }}">
      <link rel="stylesheet" href="{{ asset('backend/asset/css/prescription.css ') }}">
      <link rel="stylesheet" href="{{ asset('backend/asset/css/style.css ') }}">
      <link rel="stylesheet" href="{{ asset('backend/asset/css/spacing.css ') }}">
      <link rel="stylesheet" href="{{ asset('backend/asset/iconpicker/fontawesome-iconpicker.min.css ') }}">
      <!-- Bootstrap core JavaScript-->
      <script src="{{ asset('backend/asset/vendor/jquery/jquery.min.js ')}}"></script>
      <script src="{{ asset('backend/asset/timepicker/jquery.timepicker.min.js ')}}"></script>
      <link rel="stylesheet" type="text/css" href="{{ asset('backend/asset/user/css/flaticon.min.css ')}}">
      <style>
         .fade.in {
         opacity: 1 !important;
         }
      </style>
       <!-- Sweetalert css-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.8/sweetalert2.css">
      <!-- Toastr css -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
   </head>
   <body id="page-top" class="body_bg">
      <!-- Page Wrapper -->
      <div id="wrapper">
         @include('backend.admin.body.sidebar')
         <!-- Content Wrapper -->
         <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
               @include('backend.admin.body.header')
               <!-- Begin Page Content -->
               @yield('admin')
               <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
         </div>
         <!-- End of Content Wrapper -->
      </div>
      <!-- End of Page Wrapper -->
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>
      <script src="{{ asset('backend/asset/vendor/bootstrap/js/bootstrap.bundle.min.js ') }}"></script>
      <script src="{{ asset('backend/asset/vendor/jquery-easing/jquery.easing.min.js ') }}"></script>
      <script src="{{ asset('backend/asset/js/bootstrap4-toggle.min.js ') }}"></script>
      <script src="{{ asset('backend/asset/js/sb-admin-2.min.js ') }}"></script>
      <script src="{{ asset('backend/asset/vendor/chart.js/Chart.min.js ') }}"></script>
      <script src="{{ asset('backend/asset/js/demo/chart-area-demo.js ') }}"></script>
      <script src="{{ asset('backend/asset/js/demo/chart-pie-demo.js ') }}"></script>
      <script src="{{ asset('backend/asset/vendor/datatables/jquery.dataTables.min.js ') }}"></script>
      <script src="{{ asset('backend/asset/vendor/datatables/dataTables.bootstrap4.min.js ') }}"></script>
      <script src="{{ asset('backend/asset/js/demo/datatables-demo.js ') }}"></script>
      <script src="{{ asset('backend/asset/js/jquery.PrintArea.js ') }}"></script>
      <script src="{{ asset('backend/asset/js/select2.min.js ') }}"></script>
      <script src="{{ asset('backend/asset/toastr/toastr.min.js ') }}"></script>
      <script src="{{ asset('backend/asset/summernote/summernote-bs4.js ') }}"></script>
      <!-- Toastr js -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

      <script src="{{ asset('backend/asset/iconpicker/fontawesome-iconpicker.min.js ') }}"></script>
      <script></script>
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
                     url: "https://demo.websolutionus.com/backend/admin/view-order-notify",
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
                     url: "https://demo.websolutionus.com/backend/admin/view-message-notify",
                     success: function (response) {
                         $("#newMessageNotify").text('')
                     },
                     error: function(err) {
                         console.log(err);
                     }
                 });
             }


      </script>

    <!-- all toastr message show  Update-->
    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
            case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

            case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

            case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

            case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
        }
        @endif
    </script>


    <!-- all toastr message show  old-->
    <script type="text/javascript">
        @if(Session::has('success'))
          toastr.success("{{Session::get('success')}}");
        @endif
        @if(Session::has('info'))
          toastr.info("{{Session::get('info')}}");
        @endif
        @if(Session::has('warning'))
          toastr.warning("{{Session::get('warning')}}");
        @endif
        @if(Session::has('error'))
          toastr.info("{{Session::get('error')}}");
        @endif
        @if(Session::has('danger'))
          toastr.danger("{{Session::get('danger')}}");
        @endif
    </script>


<!-- sweetalerat link -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- sweetalerat delete data -->
<script type="text/javascript">
  $(function(){
      $(document).on('click','#deleteo',function(e){
        e.preventDefault();
        var link = $(this).attr("href");

        Swal.fire({
        title: 'Are you sure?',
        text: "Delete This Data!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
      if (result.isConfirmed) {
          window.location.href = link
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        }
      })
    });
  });
</script>

<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
   </body>
</html>
