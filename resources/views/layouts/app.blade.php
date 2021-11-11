<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        Gear Me -
        @yield('title')
    </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <link href="{{ asset('css/plugins/animation.css')}}" rel="stylesheet">
    <link href="{{ asset('css/plugins/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/plugins/date-picker.css')}}" rel="stylesheet">
    <link href="{{ asset('css/plugins/ion.rangeSlider.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/plugins/dropzone.css')}}" rel="stylesheet">
    <link href="{{ asset('css/plugins/select2.css')}}" rel="stylesheet">
    <link href="{{ asset('css/plugins/slick.css')}}" rel="stylesheet">
    <link href="{{ asset('css/plugins/slick-theme.css')}}" rel="stylesheet">
    <link href="{{ asset('css/plugins/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{ asset('css/plugins/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('css/plugins/icofont.css')}}" rel="stylesheet">
    <link href="{{ asset('css/plugins/light-box.css')}}" rel="stylesheet">
    <link href="{{ asset('css/plugins/line-icon.css')}}" rel="stylesheet">
    <link href="{{ asset('css/plugins/themify.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
 
		
    <!-- Custom Color Option -->
    <link href="{{ asset('css/colors.css') }}" rel="stylesheet">
    <style>
        .sidebar {
                height: 100%;
                width: 20%;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: #808080;
                overflow-x: hidden;
                padding-top: 16px;
            }

            .sidebar a {
                padding: 6px 8px 6px 16px;
                text-decoration: none;
                font-size: 20px;
                color: #fff;
                display: block;
            }

            .sidebar a:hover {
                color: #f1f1f1;
            }
    </style>
    @yield('extra-css')


   
</head>
<body class="blue-skin">

        <!-- <div id="preloader"><div class="preloader"><span></span><span></span></div></div> -->

            <div id="main-wrapper">
                @include('layouts.header')
                    <section>
                        @yield('content')
                    </section>
                
                @include('layouts.footer')

                <a id="back2Top" class="top-scroll" title="Back to top" href="#">
                    <i class="ti-arrow-up"></i>
                </a>

            </div>

   
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/rangeslider.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/slider-bg.js') }}"></script>
    <script src="{{ asset('js/lightbox.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<!-- <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">

        $('.show_confirm').click(function(event) {
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                form.submit();
                }
            });
        });
    
    </script>
   

    @yield('extra-script')

</body>

<!-- Mirrored from themezhub.net/resido-live-02/resido/home-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Oct 2021 06:18:07 GMT -->
</html>