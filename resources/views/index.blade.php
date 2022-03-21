<x-layout>

    @slot('body')
        @include('include.slider')

        <!-- Study Section -->
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
        @include('include.infrastructure_image')
        <!-- Student life Section -->
        <section class="home-sec3 mydiv">
            <div class="container mb-5">
                <div class="row    ">
                    <div class="col-12 mt-15  ">
                        <h2 class="wow fadeInDown ">Student <span>Life</span></h2>
                        <div class="student-home">
                            <div class="row">



                                <div class="col-12 col-sm-12 col-md-4 pro">
                                    <span><img
                                            src="{{ $url . 'infrastructure/' . $infrastructure[0]->image_name }}"></span>
                                    <div class="stu-btn"><a
                                            href="{{ route('infrastructure', $infrastructure[0]->title) }}">{{ $infrastructure[0]->sub_title }}</a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-5 pro1">
                                    <div class="stu-span1 ">
                                        <span><img
                                                src="{{ $url . 'infrastructure/' . $infrastructure[13]->image_name1 }}"></span>
                                        <div class="stu-btn"><a
                                                href="{{ route('infrastructure', $infrastructure[13]->title) }}">{{ $infrastructure[13]->sub_title }}</a>
                                        </div>
                                    </div>

                                    <div class="stu-span">
                                        <span><img
                                                src="{{ $url . 'infrastructure/' . $infrastructure[6]->image_name1 }}"></span>
                                        <div class="stu-btn"><a
                                                href="{{ route('infrastructure', $infrastructure[6]->title) }}">{{ $infrastructure[6]->sub_title }}</a>
                                        </div>
                                    </div>

                                    <div class="stu-span2">
                                        <span><img
                                                src="{{ $url . 'infrastructure/' . $infrastructure[12]->image_name1 }}"></span>
                                        <div class="stu-btn"><a
                                                href="{{ route('infrastructure', $infrastructure[12]->title) }}">{{ $infrastructure[12]->sub_title }}</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-3 ">
                                    <div class="stu-span1 mb-1">
                                        <span><img
                                                src="{{ $url . 'infrastructure/' . $infrastructure[5]->image_name1 }}"></span>
                                        <div class="stu-btn"><a
                                                href="{{ route('infrastructure', $infrastructure[5]->title) }}">{{ $infrastructure[5]->sub_title }}</a>
                                        </div>
                                    </div>
                                    <div class="stu-span1">
                                        <span><img
                                                src="{{ $url . 'infrastructure/' . $infrastructure[10]->image_name }}"></span>
                                        <div class="stu-btn"><a
                                                href="{{ route('infrastructure', $infrastructure[10]->title) }}">{{ $infrastructure[10]->sub_title }}</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!--end Student life Section -->
        <!-- Research Spotlight Section -->
        <!-- <section class="home-sec4 mydiv">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                                                                            <div class="home-sec4-colm1">
                                                                                <h2 class="wow fadeInDown">RESEARCH <span>SPOTLIGHT</span></h2>
                                                                                <h3 class="wow fadeInUp"><b>1260</b> management case-studies covering domains like Strategy,
                                                                                    Marketing, Economics & Finance and others, bought across <b>99</b> countries.</h3>
                                                                                <ul>
                                                                                    <li class="wow fadeInUp"><a href="research.html">International Research</a></li>
                                                                                    <li class="wow fadeInUp"><a href="research.html">Indian Research</a></li>
                                                                                    <li class="wow fadeInUp"><a href="research.html">Patent</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                                                                            <div class="home-sec4-colm2">
                                                                                <ul>
                                                                                    <li class="wow fadeInDown">
                                                                                        <h3>15000</h3>
                                                                                        <p>Research Publications</p>
                                                                                    </li>
                                                                                    <li class="wow fadeInDown">
                                                                                        <h3>500</h3>
                                                                                        <p>Books in diverse area</p>
                                                                                    </li>
                                                                                    <li class="wow fadeInDown">
                                                                                        <h3>300</h3>
                                                                                        <p>Govt. Funded Research Projects </p>
                                                                                    </li>
                                                                                    <li class="wow fadeInDown">
                                                                                        <h3>100+</h3>
                                                                                        <p>Patents Filed by Brilliant Students </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                                                                            <div class="home-sec4-colm3">
                                                                                <div class="owl-carousel owl-carousel4 owl-theme">
                                                                                    <div class="item">
                                                                                        <ul>
                                                                                            <li class="wow fadeInDown"><span><img src="{{ asset('images/research.jpg') }}"></span>
                                                                                                <h4>Resonance Raman and Electronic...</h4>
                                                                                            </li>
                                                                                            <li class="wow fadeInUp"><span><img src="images/research2.jpg"></span>
                                                                                                <h4>Hydrogen peroxide vapor sensor...</h4>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="item">
                                                                                        <ul>
                                                                                            <li class="wow fadeInDown"><span><img src="images/research3.jpg"></span>
                                                                                                <h4>Resonance Raman and Electronic...</h4>
                                                                                            </li>
                                                                                            <li class="wow fadeInUp"><span><img src="images/research4.jpg"></span>
                                                                                                <h4>Hydrogen peroxide vapor sensor...</h4>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <abbr class="all-research-btn"><a href="research.html">View All Research <img
                                                                                        src="images/arrow-icon.png"></a></abbr>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section> -->

        <section class="p-3 mydiv">
            <div class="container">
                <div class="row ">
                    <div class="col-md-4">
                        <h2 class="wow fadeInDown text-uppercase">
                            <span class="border-bottom mb-1 text-dark">Notice</span> <span
                                class="text-white ">Board</span>
                        </h2>
                        <div class="double-line-bottom-theme-colored-2"></div>
                        <marquee onMouseOver="this.stop()" onMouseOut="this.start()" class="bg-university"
                            behavior="scroll" direction="up" style="height: 360px; padding: 10px">
                            @foreach ($noticeboard as $event)
                                <article>
                                    <div class="event-small media sm-maxwidth400 mt-0 mb-0 pt-0 pb-15">
                                        <div class="event-date text-center">
                                            <ul class="text-white">
                                                <li class="font-18 font-weight-700 border-bottom">
                                                    {{ explode('-', $event->timing)[2] }}
                                                </li>

                                                <li class="font-14 text-center text-uppercase mt-1">
                                                    {{ date_format(date_create($event->timing), 'M') }}
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="{{ route('noticeboard', $event->id) }}">
                                            <div class="event-content ">
                                                <h5 class="media-heading font-16 font-weight-600 "><a
                                                        href="{{ route('noticeboard', $event->id) }}">
                                                        {{ $event->name }}</a></h5>
                                                <span class="mr-10 text-white"><i
                                                        class="fa fa-clock-o text-theme-colored2"></i>
                                                    {{ $event->created_at }}
                                                    &nbsp; &nbsp;

                                                    <span class="text-white"> <i
                                                            class="fa fa-map-marker text-theme-colored2"></i>
                                                        {{ $event->title }}</span>
                                            </div>
                                        </a>
                                    </div>
                                </article>
                            @endforeach
                        </marquee>
                    </div>

                    <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                        <h2 class="wow fadeInDown text-uppercase">
                            <span class="border-bottom mb-1 text-dark">University</span> <span
                                class="text-white ">Tour</span>
                        </h2>
                        <div class="double-line-bottom-theme-colored-2"></div>
                        <div class="effect-wrapper">
                            <div class="thumb" style=" background: black; ">
                                <img class="img-fullwidth"
                                    src="https://nsuniv.ac.in/nsu_laravel/public/images/about/tour.jpeg" alt="project"
                                    style="opacity: 0.6;">
                            </div>
                            <div class="video-button"></div>
                            <a class="hover-link" data-lightbox-gallery="youtube-video"
                                href="https://www.youtube.com/embed/phWNqyfCgzI" title="Youtube Video">Youtube
                                Video</a>
                        </div>



                    </div>
                </div>

            </div>
            </div>
        </section>

        <section class="home-sec5 mydiv">
            <div class="container">

                <h2 class="wow fadeInDown">
                    Student <span>Gallery</span></h2>
                <abbr class="all-research-btn2 wow fadeInDown">
                    <a href="{{ route('image-gallery') }}">View All
                        <img src="images/arrow-icon.png" class="view_arrow_img"></a></abbr>
                <div class="home-sec5-content">
                    <div class="row">
                        @foreach ($gallery as $title)
                            <?php $image = DB::table('gallery_tbl')
                                ->where('title', $title->title)
                                ->first();
                            
                            ?>
                            <a href="{{ route('image_gallery_details', $title->title) }}"
                                class="col-sm-4 pro3 wow mt-2 fadeInDown">
                                <div id="homestudentwork1_rptrlower_ctl00_divcolumn" class="home-sec5-colm1">
                                    <span>
                                        <img src="{{ $url . 'gallery/' . $image->image_name }}" /></span>
                                    <h4>
                                        {{ $image->title }}
                                    </h4>
                                </div>
                            </a>
                        @endforeach

                    </div>
                </div>


            </div>

        </section>

        <!-- head of department -->
        <section class="scholarship-scheme-sec5 ">
            <div class="container">
                <h2 class="text-uppercase text-dark carousel-inner title wow fadeInDown ">Head of <span
                        class="text-warning">University </span>
                </h2>
                <span class="line-bottom carousel-inner ml-5 pl-5 text-warning "> &nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <ul class="row">
                    @foreach ($hou as $university_head)
                        <div class="col-md-3 ">
                            <div class="team-members maxwidth400 mb-30">
                                <div class="team-thumb">
                                    <img height="140px" src="{{ $url . 'teacher/' . $university_head->image_name }}"
                                        alt="" class="img-fluid teachers">
                                </div>
                                <div class="team-bottom-part bg-silver-deep  p-2 bg-white">
                                    <h4
                                        class="text-uppercase font-raleway text-theme-colored title-border font-weight-600 line-bottom-center m-0">
                                        {{ substr($university_head->name, 0, 20) }} <span
                                            class="text-gray font-13 p-2 ">-
                                            <br>
                                            {{ $university_head->designation }}</span>
                                    </h4>
                                    <p class="font-13 text-justify">
                                        <?php echo substr($university_head->description, 0, 120); ?>.. <a
                                            href="{{ route('faculty-details', $university_head->id) }}"
                                            class="text-danger font-13">
                                            View details</a>
                                    </p>
                                    <?php $social_media = DB::table('social')
                                        ->where('teacher_id', $university_head->id)
                                        ->get(); ?>
                                    <div class="text-center">
                                        <ul class="styled-icons1  icon-theme-colored2 d-flex ">
                                            @foreach ($social_media as $social)
                                                <li class="ml-2 mb-2  rounded-circle border "><a
                                                        class="text-white font-13 p-0 text-center rounded-circle"
                                                        target="_blank" class="text-center"
                                                        href="{{ $social->link }}"><i
                                                            class="fa fa-{{ $social->social }}"></i></a></li>
                                            @endforeach

                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </ul>
            </div>
        </section>
        <!-- //head of department -->


        <section class="home-sec6 mydiv">
            <div class="container">

                <ul class="nav nav-tabs responsive-tabs">
                    <!--  <li class="active"><a href="#news"> News</a></li>-->
                    <li class="active"><a href="#events">Events</a></li>
                    <li><a href="#media-coverage">Media Coverage</a></li>
                </ul>
              
                <div class="tab-content myTabContent">
                  
                    <h4 class="collapsible_heading open">Events <i class="lnr fas fa-calendar-alt "></i></h4>
                    <div class="tab-pane active" id="events">
                      
                        <ul class="row">
                            @foreach ($events as $event)
                                <li class="col-12 col-md-4 col-lg-4 col-xl-4">
                                    <a href="{{ route('event', $event->id) }}">
                                        <div class="happening-colm-color layer-overlay testimonial "
                                            style="background-image: url('{{ $url . 'event/' . $event->images }}');     background-attachment: inherit;                                            ">
                                            <div class="happ-content">
                                                <a class="d-flex carousel-inner "
                                                    href="{{ route('event', $event->id) }}">
                                                    <span class="carousel-inner">Events</span>

                                                    <span class="ml-2 font-weight-bold carousel-inner"><i
                                                            class="fas fa-calendar text-theme-colored2"></i>
                                                        {{ explode('-', $event->timing)[2] }}
                                                        {{ date_format(date_create($event->timing), 'M - Y') }} </span>
                                                </a>


                                                <h5 class=" carousel-inner font-16 font-weight-600 mb-5"><a
                                                        class="text-white" href="{{ route('event', $event->id) }}">
                                                        {{ $event->name }}</a></h5>
                                                <a class="d-flex carousel-inner "
                                                    href="{{ route('event', $event->id) }}">
                                                    <div class="event-content d-flex ">

                                                        <span class="mr-2"><i
                                                                class="fa fa-clock-o text-theme-colored2"></i>
                                                            {{ $event->start }}
                                                            pm - {{ $event->end }} pm</span>
                                                        <span> <i class="fa fa-map-marker text-theme-colored2"></i>
                                                            {{ $event->title }}</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <h4 class="collapsible_heading">Media Coverage <i class="fas fa-newspaper lnr lnr-chevron-down"></i>
                    </h4>
                    <div class="tab-pane tab-pane-events " id="media-coverage">
                        <ul class="row">

                            @foreach ($news as $latest)
                                <li class="col-12 col-md-4 col-lg-4 col-xl-4"><a
                                        href="media-coverage42b9.html?Media=Media">
                                        <div id="homeevent1_repmedia_ctl00_divtop" class="happening-colm-color"
                                            style="background-color: #df{{ $latest->id }}429;">
                                            <div class="happ-content">
                                                <ol>
                                                    <li>
                                                        {{ substr(explode('-', $latest->updated_at)[2], 0, 2) }}
                                                        {{ date_format(date_create($latest->updated_at), 'M - Y') }}
                                                    </li>
                                                    <li>
                                                        {{ $latest->title }}</li>
                                                </ol>
                                                <h3>
                                                    <p class="text-white text-justify hover "><?php echo substr($latest->massage, 0, 160); ?>..<a
                                                        class="btn btn-sm text-dark "
                                                        href="{{ route('news', ['id' => $latest->id]) }}"> View
                                                        Details</a></p>
                                                </h3>

                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach


                        </ul>
                    </div>
                </div>


                &nbsp;



            </div>


        </section>
        <!--end Media Work -->
        <!-- Testimonials Section -->

        <!-- Footer -->
        @include('include.testimonial')

        <div class="mt-1 mb-1 p-0 m-0  wow fadeInDown">
            <div class="col-md-12"> <iframe width="100%" style="max-height:400px; min-height:400px"
                    src="https://www.youtube.com/embed/phWNqyfCgzI" allowfullscreen=""></iframe></div>
        </div>

        @include('include.search')

        @include('include.subscribe')
        @include('include.open')
    @endslot

</x-layout>
<!-- testimonial css -->
