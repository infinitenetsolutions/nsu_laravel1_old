<!DOCTYPE html>
<html>

<!-- Mirrored from www.amity.edu/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Feb 2022 10:57:53 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Amity University provides world-class education in diverse streams including engineering, management, medical and others. Visit our campus to know more." />
    <meta name="keywords" content="Universities in delhi ncr, best university in noida, noida university, private universities in delhi ncr, best universities in delhi ncr, Amity University" />
    <title>
    Best University In Jharkhand With All Courses And Placements
    </title>
    <meta name="facebook-domain-verification" content="398kjnpl8e7fz5txzlogujyrwlgzri" />

    <!-- Bootstrap core CSS -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Montserrat:200,300,400,500,600,700|Open+Sans:300,400,600,700,800" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/full-slider.css') }}" rel="stylesheet" />
    <!-- Custom styling CSS -->
    <link href="{{ asset('css/default.css') }}" type="text/css" rel="stylesheet" media="screen" />
    <link href="{{ asset('css/nivo-slider.css') }}" type="text/css" rel="stylesheet" media="screen" />
    <link href="{{ asset('css/animate.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/owl.carousel.min.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/colorbox.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/owl.theme.default.min.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-responsive-tabs.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/inner.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/responsive.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/responsive2.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/ajax_stylesheet.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/dynamic_home.css') }}" type="text/css" rel="stylesheet" />
    <link href="../cdn.linearicons.com/free/1.0.0/icon-font.min.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/Print.css') }}" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/footer.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <script type="text/javascript">
        $(document).ready(function() {
            $('#txtsearch').keyup(function() {
                GetGraduateCourse();
            });

            $('html').click(function() {
                $("#courselist").attr("style", "display:none");
            });
        });

        function graduate(e) {
            //console.log(e.text());
            $("#txtsearch").val(e.text())
            $("#courselist").attr("style", "display:none");
        }

        function SearchTerm() {
            return jQuery.trim($("[id*=txtsearch]").val());
        };

        var row;

        function OnSuccess(response) {
            var row = 0;
            var xmlDoc = $.parseXML(response.d);
            var xml = $(xmlDoc);
            var customers = xml.find("Customers");
            // alert(customers.length);
            if (customers.length > 0) {
                $("#courselist").removeAttr("style");
                $('#courselist li').remove();
                $.each(customers, function() {
                    row = row + 1;
                    var list = $("#courselist");
                    //list.append('<li onClick="graduate($(this))" id="' + row + '" >' + $(this).find("CourseFullname").text() + '</li>');

                    list.append('<li onClick="graduate($(this))" id="' + row + '" >' + $(this).find("CourseFullname").text() + '</li>');
                });
            } else {
                $('#courselist li').remove();
                $("#courselist").removeAttr("style");
                var list = $("#courselist");
                list.append('<li id="' + row + '" >There are no course found. </li>');
            }
        };
    </script>



    <script type="text/javascript">
        $(document).ready(function() {
            $('#txtsearchpg').keyup(function() {
                GetPostGraduateCourse();
            });
            //$('#openhouse').modal('show');


            $('html').click(function() {
                $("#postcourselist").attr("style", "display:none");
            });
        });

        function postgraduate(e) {
            //console.log(e.text());
            $("#txtsearchpg").val(e.text())
            $("#postcourselist").attr("style", "display:none");
        }

        function SearchTermPost() {
            return jQuery.trim($("[id*=txtsearchpg]").val());
        };


        var row;

        function OnSuccessPost(response) {
            var row = 0;
            var xmlDoc = $.parseXML(response.d);
            var xml = $(xmlDoc);
            var customers = xml.find("Customers");
            if (customers.length > 0) {
                $("#postcourselist").removeAttr("style");
                $('#postcourselist li').remove();
                $.each(customers, function() {
                    row = row + 1;
                    var list = $("#postcourselist");
                    list.append('<li onClick="postgraduate($(this))" id="' + row + '" >' + $(this).find("CourseFullname").text() + '</li>');
                });
            } else {
                $('#postcourselist li').remove();
                $("#postcourselist").removeAttr("style");
                var list = $("#postcourselist");
                list.append('<li id="' + row + '" >There are no course found. </li>');
            }
        };
    </script>

    <!-- Google Tag Manager -->


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




    <!--LeadSquared Tracking Code End-->
</body>


</html>