<!doctype html>
<html lang="en">

    <head> 
       <!-- Required meta tags -->
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Admin</title>
    <!-- plugins:css -->


<!-- plugins:css -->
<link rel="stylesheet" href="{{ asset('Backend/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('Backend/assets/vendors/css/vendor.bundle.base.css') }}">
<link rel="stylesheet" href="{{ asset('Backend/assets/vendors/jvectormap/jquery-jvectormap.css') }}">
<link rel="stylesheet" href="{{ asset('Backend/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
<link rel="stylesheet" href="{{ asset('Backend/assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('Backend/assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('Backend/assets/css/style.css') }}">
<link rel="shortcut icon" href="{{ asset('Backend/assets/images/house.png') }}" />

    <!-- Profile Edits CSS -->
    <link rel="stylesheet" href="{{ asset('Backend/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Backend/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('Backend/assets/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Backend/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Backend/assets/css/style.css') }}">
    <!-- End layout styles -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>   
    
    <!-- Toaster Message -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >


    {{-- Catehory CSS --}}
      <link rel="shortcut icon" href="{{ asset('Backend/assets/images/favicon.png')}}"/>
    
        <!-------------------- FontAwesome  ----------------------->
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" /> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>

    @php
        $userData = Auth::user();
    @endphp

    <body >
    

        <!-- Begin page -->
        <div class="container-scroller">
 
           

            <!-- ========== Left Sidebar Start ========== -->
            @include('Backend.admin.partials.sidebar')
            <!-- ========== Left Sidebar END ========== -->

            
            <!-- ============================================================== -->
            <!-- Main Content - Yeald Admin -->
            <!-- ============================================================== -->
            <div class="container-fluid page-body-wrapper">

                <div class="main-panel">
                     <!-- ========== Header Nav ========== -->
                    @include('Backend.admin.partials.nav')

                    <div class="content-wrapper">

                        @yield('admin')
                     <!-- End Page-content -->
                    </div>

                     @include('Backend.admin.partials.footer')
                </div>
                
            </div>
            <!-- ============================================================== -->
            <!-- Main Content - Yeald Admin  END-->
            <!-- ============================================================== -->

        </div>
        <!-- END layout-wrapper -->





            <!-- Scripts-->
<!-- container-scroller -->
<script src="{{ asset('Backend/assets/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('Backend/assets/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('Backend/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
<script src="{{ asset('Backend/assets/vendors/jvectormap/jquery-jvectormap.min.j') }}s"></script>
<script src="{{ asset('Backend/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('Backend/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
<script src="{{ asset('Backend/assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('Backend/assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('Backend/assets/js/misc.js') }}"></script>
<script src="{{ asset('Backend/assets/js/settings.js') }}"></script>
<script src="{{ asset('Backend/assets/js/todolist.js') }}"></script>
<script src="{{ asset('Backend/assets/js/dashboard.js') }}"></script>
<!-- End custom js for this page -->
<!-- Profile Edit JS Start-->
<script src="{{ asset('Backend//assets/vendors/select2/select2.min.js')}}"></script>
<script src="{{ asset('Backend//assets/vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
<script src="{{ asset('Backend//assets/js/file-upload.js')}}"></script>
<script src="{{ asset('Backend//assets/js/typeahead.js')}}"></script>
<script src="{{ asset('Backend//assets/js/select2.js')}}"></script>
    <!-- Profile Edit JS End-->

    {{-- sweetalert2  --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('Backend/assets/js/code.js') }}"></script>  
    {{-- End sweetalert2  --}}

    <!-- endinject -->
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
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


    </body>
                                            	    1
</html>