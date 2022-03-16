<x-layout1>
    @slot('title', 'Appointment Letter')
    @slot('body')
        <style>
            iframe html body img {
                width: 100% !important;
            }

        </style>
        <!-- Start main-content -->
        <section class="inner-page">
            <div class="inner-hadding">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="{{ route('index') }}">Home</a>
                        <a href="">Placement</a>
                        <a href=""> Recruiters</a>
                    </div>
                </div>
                <div class="container">
                    <div class="top-menu-sec">
                        <ul>
                            <h4>Placement </h4>
                            <li><a href="{{ route('index') }}">Home</a>
                            </li>
                            <li><a href="{{ route('placement-contact') }}"> Recruiters</a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-3 ">
                        <h2> Recruiters</h2>
                        <a class="row p-2" href="{{ route('index') }}">

                            <img class="logo-sm" src="{{ asset('/images/logo.png') }}" alt="">
                            <p class="tag_line_bold mt-1 ">Netaji Subhas University</p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Section: Team -->
            <section id="team" class="bg-silver-deep">
                <div class="container">
                    <div class="row mtli-row-clearfix">
                        @foreach ($data as $appointment)
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
                                    <div class="team-thumb">
                                        <img height="300px" class="img-fullwidth" alt=""
                                            src="{{ $url . 'appointment/' . $appointment->image_name }} ">
                                        <div class="team-overlay"></div>

                                    </div>
                                    <div class="team-details">
                                        <div class="gallery-item photo">
                                            <div class="thumb">

                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div
                                                            class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a class="popup-youtube" target="blank"
                                                                href="{{ $url . 'appointment/' . $appointment->image_name1 }}"><i
                                                                    class="fa fa-image"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">
                                            {{ $appointment->title }}</h4>
                                        <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">
                                            {{ $appointment->sub_title }}
                                        </h6>
                                        <a target="_blank" href="{{ $url . 'appointment/' . $appointment->image_name2 }}"
                                            class="hidden-md text-danger"><i class="fa fa-download" aria-hidden="true"></i>
                                            Appointment-Letter</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class=" p-5"> {{ $data->links() }} </div>

                </div>

            </section>



            <!-- Divider: Clients -->
            {{-- @include('include.requiters') --}}
        </section> <!-- end main-content -->

        <section class=" p-5 bg-black mydiv">
            <div class="container">
                <div class="top-home-sec1 row">

                    <div class="col-12 col-md-12">
                        <h2>
                            Study at NSU</h2>
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                        <p class="wow fadeInUp text-justify">
                            Netaji Subhas University is the first premier and one of the best University in Jharkhand,
                            with a venerable legacy, highest academic standards, diverse educational programmes,
                            distinguished faculty, illustrious alumni, varied co-curricular activities and modern
                        </p>

                    </div>
                    <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                        <ul>
                            <li>
                                <h3 class="wow fadeInDown">38+</h3>
                                <span class="wow fadeInUp">Courses</span>
                            </li>
                            <li>
                                <h3 class="wow fadeInDown">15000+</h3>
                                <span class="wow fadeInUp"> Student </span>
                            </li>
                            <li>
                                <h3 class="wow fadeInDown">100+</h3>
                                <span class="wow fadeInUp">Quilified Teachers</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
        <br>
     
    @endslot

</x-layout1>
