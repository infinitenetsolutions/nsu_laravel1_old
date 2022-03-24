<!DOCTYPE html>
<html>


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   
    <title>
    Best University In Jharkhand With All Courses And Placements
    </title>
 

    <!-- Bootstrap core CSS -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Montserrat:200,300,400,500,600,700|Open+Sans:300,400,600,700,800" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/full-slider.css') }}" rel="stylesheet" />
    <!-- Custom styling CSS -->
    <link href="{{ asset('css/default.css') }}" type="text/css" rel="stylesheet" media="screen" />
    <link href="{{ asset('css/nivo-slider.css') }}" type="text/css" rel="stylesheet" media="screen" />
    <link href="{{ asset('css/animate.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/colorbox.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/owl.theme.default.min.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-responsive-tabs.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/inner.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/responsive.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/responsive2.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/Print.css') }}" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/footer.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
   
</head>

<body class="landing_page" id="page-top">

    @include('include.header1')
    {{ $body ?? '' }}

    @include('include.footer')

    <!-- Bootstrap core JavaScript -->
    
    <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/popper/popper.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Plugin JavaScript -->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('js/jquery.bootstrap-responsive-tabs.min.js')}}"></script>
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/wow.js')}}"></script>
    <script src="{{ asset('js/jquery.colorbox-min.js')}}"></script>
    <script src="{{ asset('js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{ asset('js/home-index.js')}}"></script>


    <script>
        $(document).ready(function() {
            // getting the slider data

            if (window.screen.width > 1200) {

                // getting the menu for infrastructure menu
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    document.getElementById("infrastructure_menu").innerHTML = this.responseText;
                }
                xmlhttp.open("GET", "{{ route('ajax.infrastructure') }}", true);
                xmlhttp.send();

                // getting the menu for placement menu
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    document.getElementById("placement_menu").innerHTML = this.responseText;
                }
                xmlhttp.open("GET", "{{ route('ajax.placement') }}", true);
                xmlhttp.send();

                // getting the menu for student menu
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    document.getElementById("student_menu").innerHTML = this.responseText;
                }
                xmlhttp.open("GET", "{{ route('ajax.student') }}", true);
                xmlhttp.send();

                // getting the menu for gallery menu
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    document.getElementById("gallery_menu").innerHTML = this.responseText;
                }
                xmlhttp.open("GET", "{{ route('ajax.gallery') }}", true);
                xmlhttp.send();

            }
           

        });
    </script>

    <!--LeadSquared Tracking Code End-->
</body>


</html>