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
                        <p class="wow fadeInUp">
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
        <!--end Why Amity Section -->
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
        <section class="scholarship-scheme-sec5">
            <div class="container">
                <ul class="row">
                    <li class="col-12 col-md-3 col-lg-3 col-xl-3">
                        <div class="scheme-sec5-content">
                            <span><img src="images/scholarship-d-oberoi-img1.png"></span>
                            <h4>Disha Oberoi</h4>
                            <h5>93.80% in Class XII</h5>
                            <p>100% Amity Scholarship in B.Tech. (Biotech.)</p>
                        </div>
                    </li>
                    <li class="col-12 col-md-3 col-lg-3 col-xl-3">
                        <div class="scheme-sec5-content">
                            <span><img src="images/scholarship-nam-bhushan-img1.png"></span>
                            <h4>Namrata Bhushan</h4>
                            <h5>93.50% in Class XII</h5>
                            <p>100% Amity Scholarship in B.Tech. (CSE)</p>
                        </div>
                    </li>
                    <li class="col-12 col-md-3 col-lg-3 col-xl-3">
                        <div class="scheme-sec5-content">
                            <span><img src="images/scholarship-sh-goel-img1.png"></span>
                            <h4>Shashwat Goel</h4>
                            <h5>93.40% in Class XII</h5>
                            <p>100% Amity Scholarship in B.Tech. (ECE)</p>
                        </div>
                    </li>
                    <li class="col-12 col-md-3 col-lg-3 col-xl-3">
                        <div class="scheme-sec5-content">
                            <span><img src="images/scholarship-ch-syai-img1.png"></span>
                            <h4>Charvi Syal</h4>
                            <h5>93.60% in Class XII</h5>
                            <p>100% Amity Scholarship in B.Sc. (H) Medical Biotech</p>
                        </div>
                    </li>
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
                <abbr class="all-achiv-btn">
                    <a href="event-listc0ce.html?Events=Events">View More
                        <img src="images/arrow-icon.png"></a></abbr>
                <div class="tab-content myTabContent">
                    <h4 class="collapsible_heading open">Events <span class="lnr lnr-chevron-down"></span></h4>
                    <div class="tab-pane active" id="events">
                        <ul class="row">


                            <input type="hidden" name="homeevent1$rptEvents$ctl00$hfImage"
                                id="homeevent1_rptEvents_ctl00_hfImage"
                                value="11721_266366667_2189123801241716_5079797983458635981_n.html" />
                            <input type="hidden" name="homeevent1$rptEvents$ctl00$hfEventId"
                                id="homeevent1_rptEvents_ctl00_hfEventId" value="11721" />
                            <li id="homeevent1_rptEvents_ctl00_divwithoutimg" class="col-12 col-md-4 col-lg-4 col-xl-4">


                                <a href="event-detail-normal2d6a.html?ot=1&amp;Event=11721&amp;Events=Events">
                                    <div class="happening-colm-color" style="background-color:#;">
                                        <div class="happ-content">
                                            <span>Events</span>
                                            <h3>Role of NSS Volunteers in Nation Building</h3>
                                        </div>
                                    </div>
                                </a>
                            </li>




                            <input type="hidden" name="homeevent1$rptEvents$ctl01$hfImage"
                                id="homeevent1_rptEvents_ctl01_hfImage"
                                value="11662_260444849_2171101663043930_4054563017674972022_n.html" />
                            <input type="hidden" name="homeevent1$rptEvents$ctl01$hfEventId"
                                id="homeevent1_rptEvents_ctl01_hfEventId" value="11662" />
                            <li id="homeevent1_rptEvents_ctl01_divwithoutimg" class="col-12 col-md-4 col-lg-4 col-xl-4">


                                <a href="event-detail-normal65b9.html?ot=1&amp;Event=11662&amp;Events=Events">
                                    <div class="happening-colm-color" style="background-color:#;">
                                        <div class="happ-content">
                                            <span>Events</span>
                                            <h3>IIC Calender Activity "Pitching Event for Ideas Scouted & linkage with
                                                Innovation Ambassadors for ...</p>
                                            </h3>
                                        </div>
                                    </div>
                                </a>
                            </li>




                            <input type="hidden" name="homeevent1$rptEvents$ctl02$hfImage"
                                id="homeevent1_rptEvents_ctl02_hfImage"
                                value="11661_258824051_2170199136467516_2262287588459188356_n.html" />
                            <input type="hidden" name="homeevent1$rptEvents$ctl02$hfEventId"
                                id="homeevent1_rptEvents_ctl02_hfEventId" value="11661" />
                            <li id="homeevent1_rptEvents_ctl02_divwithoutimg" class="col-12 col-md-4 col-lg-4 col-xl-4">


                                <a href="event-detail-normaldf37.html?ot=1&amp;Event=11661&amp;Events=Events">
                                    <div class="happening-colm-color" style="background-color:#;">
                                        <div class="happ-content">
                                            <span>Events</span>
                                            <h3>Innovations and Research with Machine Learning</h3>
                                        </div>
                                    </div>
                                </a>
                            </li>




                            <input type="hidden" name="homeevent1$rptEvents$ctl03$hfImage"
                                id="homeevent1_rptEvents_ctl03_hfImage"
                                value="11665_261447098_2176883079132455_5114143528537815031_n.html" />
                            <input type="hidden" name="homeevent1$rptEvents$ctl03$hfEventId"
                                id="homeevent1_rptEvents_ctl03_hfEventId" value="11665" />
                            <li id="homeevent1_rptEvents_ctl03_divwithoutimg" class="col-12 col-md-4 col-lg-4 col-xl-4">


                                <a href="event-detail-normalc31d.html?ot=1&amp;Event=11665&amp;Events=Events">
                                    <div class="happening-colm-color" style="background-color:#;">
                                        <div class="happ-content">
                                            <span>Events</span>
                                            <h3>Round Table Discussion on Hand Hygiene organised at
                                                #AmityUniversityRaipur
                                                in collaboration with ...</p>
                                            </h3>
                                        </div>
                                    </div>
                                </a>
                            </li>




                            <input type="hidden" name="homeevent1$rptEvents$ctl04$hfImage"
                                id="homeevent1_rptEvents_ctl04_hfImage"
                                value="11660_258170700_2164588150361948_7154654576420297306_n.html" />
                            <input type="hidden" name="homeevent1$rptEvents$ctl04$hfEventId"
                                id="homeevent1_rptEvents_ctl04_hfEventId" value="11660" />
                            <li id="homeevent1_rptEvents_ctl04_divwithoutimg" class="col-12 col-md-4 col-lg-4 col-xl-4">


                                <a href="event-detail-normala7f9.html?ot=1&amp;Event=11660&amp;Events=Events">
                                    <div class="happening-colm-color" style="background-color:#;">
                                        <div class="happ-content">
                                            <span>Events</span>
                                            <h3>Visit to Sparsh ek Koshish welfare foundation </h3>
                                        </div>
                                    </div>
                                </a>
                            </li>




                            <input type="hidden" name="homeevent1$rptEvents$ctl05$hfImage"
                                id="homeevent1_rptEvents_ctl05_hfImage"
                                value="11654_248411158_2149272175226879_4975506977447386671_n.html" />
                            <input type="hidden" name="homeevent1$rptEvents$ctl05$hfEventId"
                                id="homeevent1_rptEvents_ctl05_hfEventId" value="11654" />
                            <li id="homeevent1_rptEvents_ctl05_divwithoutimg" class="col-12 col-md-4 col-lg-4 col-xl-4">


                                <a href="event-detail-normal433b.html?ot=1&amp;Event=11654&amp;Events=Events">
                                    <div class="happening-colm-color" style="background-color:#;">
                                        <div class="happ-content">
                                            <span>Events</span>
                                            <h3>General Health Check-Up</h3>
                                        </div>
                                    </div>
                                </a>
                            </li>




                        </ul>
                    </div>
                    <h4 class="collapsible_heading">Media Coverage <span class="lnr lnr-chevron-down"></span></h4>
                    <div class="tab-pane" id="media-coverage">
                        <ul class="row">

                            <li class="col-12 col-md-4 col-lg-4 col-xl-4"><a href="media-coverage42b9.html?Media=Media">
                                    <div id="homeevent1_repmedia_ctl00_divtop" class="happening-colm-color"
                                        style="background-color: #df9427;">
                                        <div class="happ-content">
                                            <ol>
                                                <li>
                                                    11 Feb 2022 </li>
                                                <li>
                                                    Financial Express</li>
                                            </ol>
                                            <h3>
                                                Are you ready to ride out a financial crisis?- Article by Faculty of ABS
                                            </h3>
                                        </div>
                                    </div>
                                </a></li>

                            <li class="col-12 col-md-4 col-lg-4 col-xl-4"><a href="media-coverage42b9.html?Media=Media">
                                    <div id="homeevent1_repmedia_ctl01_divtop" class="happening-colm-color"
                                        style="background-color: #9f1f30;">
                                        <div class="happ-content">
                                            <ol>
                                                <li>
                                                    04 Feb 2022 </li>
                                                <li>
                                                    Amar Ujala</li>
                                            </ol>
                                            <h3>
                                                Amity Celebrates World Wetland Day</h3>
                                        </div>
                                    </div>
                                </a></li>

                            <li class="col-12 col-md-4 col-lg-4 col-xl-4"><a href="media-coverage42b9.html?Media=Media">
                                    <div id="homeevent1_repmedia_ctl02_divtop" class="happening-colm-color"
                                        style="background-color: #006690;">
                                        <div class="happ-content">
                                            <ol>
                                                <li>
                                                    04 Feb 2022 </li>
                                                <li>
                                                    Dainik Jagran</li>
                                            </ol>
                                            <h3>
                                                Amity Celebrates World Wetland Day</h3>
                                        </div>
                                    </div>
                                </a></li>

                            <li class="col-12 col-md-4 col-lg-4 col-xl-4"><a href="media-coverage42b9.html?Media=Media">
                                    <div id="homeevent1_repmedia_ctl03_divtop" class="happening-colm-color"
                                        style="background-color: #006690;">
                                        <div class="happ-content">
                                            <ol>
                                                <li>
                                                    04 Feb 2022 </li>
                                                <li>
                                                    Telegraph</li>
                                            </ol>
                                            <h3>
                                                Amity University Online joins hands with TCS iON for industry ready
                                                courses
                                            </h3>
                                        </div>
                                    </div>
                                </a></li>

                            <li class="col-12 col-md-4 col-lg-4 col-xl-4"><a href="media-coverage42b9.html?Media=Media">
                                    <div id="homeevent1_repmedia_ctl04_divtop" class="happening-colm-color">
                                        <div class="happ-content">
                                            <ol>
                                                <li>
                                                    02 Feb 2022 </li>
                                                <li>
                                                    Telegraph</li>
                                            </ol>
                                            <h3>
                                                Amity University Online joins hands with TCS iON for industry ready
                                                courses
                                            </h3>
                                        </div>
                                    </div>
                                </a></li>

                            <li class="col-12 col-md-4 col-lg-4 col-xl-4"><a href="media-coverage42b9.html?Media=Media">
                                    <div id="homeevent1_repmedia_ctl05_divtop" class="happening-colm-color"
                                        style="background-color: #df9427;">
                                        <div class="happ-content">
                                            <ol>
                                                <li>
                                                    02 Feb 2022 </li>
                                                <li>
                                                    Shiksha News</li>
                                            </ol>
                                            <h3>
                                                Amity University Online joins hands with TCS iON for industry ready
                                                courses
                                            </h3>
                                        </div>
                                    </div>
                                </a></li>

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

        <div class="mt-1 mb-1 p-0 m-0">
            <div class="col-md-12"> <iframe width="100%" style="max-height:400px; min-height:400px"
                    src="https://www.youtube.com/embed/phWNqyfCgzI" allowfullscreen=""></iframe></div>
        </div>

        @include('include.search')

        @include('include.subscribe')
        @include('include.open')
    @endslot

</x-layout>
<!-- testimonial css -->
