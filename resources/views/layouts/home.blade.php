<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tar'Zaka</title>
    {{-- bootstrap cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- plugins:css -->
    <link rel="stylesheet" href=" {{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('assets/vendors/css/vendor.bundle.base.css') }} ">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href=" {{ asset('assets/vendors/jvectormap/jquery-jvectormap.css') }} ">
    <link rel="stylesheet" href=" {{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.css') }} ">
    <link rel="stylesheet" href=" {{ 'assets/vendors/owl-carousel-2/owl.theme.default.min.css' }} ">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href=" {{ asset('assets/css/style.css') }} ">
    <!-- End layout styles -->
    <link rel="shortcut icon" href=" {{ asset('assets/images/TARZAKA.png') }} " />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <x-sidebar />
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <x-navbar />

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">

                    @yield('content')
                           <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                        bootstrapdash.com 2020</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> built by <a
                            href="#">Kaboré Ismaël Yves</a> from Fil rouge Project</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src=" {{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src=" {{ asset('assets/vendors/chart.js/Chart.min.js') }} "></script>
    <script src=" {{ asset('assets/vendors/progressbar.js/progressbar.min.js') }} "></script>
    <script src=" {{ asset('assets/vendors/jvectormap/jquery-jvectormap.min.js') }} "></script>
    <script src=" {{ asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }} "></script>
    <script src=" {{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.js') }} "></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src=" {{ asset('assets/js/off-canvas.js') }} "></script>
    <script src=" {{ asset('assets/js/hoverable-collapse.js') }} "></script>
    <script src=" {{ asset('assets/js/settings.js') }} "></script>

    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src=" {{ asset('assets/js/dashboard.js') }} "></script>
    <!-- End custom js for this page -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
