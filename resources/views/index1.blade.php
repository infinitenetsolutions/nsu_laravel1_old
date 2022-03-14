<x-layout>

    @slot('body')
        @include('include.slider')
        <style>
            .home-sec4 {
                padding: 30px 0 !important;
            }

            .home-sec4,
            .home-sec6 {
                min-height: auto !important;
            }

        </style>
        <style>
            .box-hover-effect .effect-wrapper {
                position: relative;
                overflow: hidden;
                margin: 0;
                width: 100%;
            }

            .box-hover-effect:hover .effect-wrapper .thumb {
                -webkit-transform: scale(1.05);
                -ms-transform: scale(1.05);
                -o-transform: scale(1.05);
                transform: scale(1.05);
            }

            .about-video:hover .thumb {
                -webkit-transform: scale(1) !important;
                -ms-transform: scale(1) !important;
                -o-transform: scale(1) !important;
                transform: scale(1) !important;
            }

            .box-hover-effect .effect-wrapper .thumb {
                position: relative;
                overflow: hidden;
                backface-visibility: hidden;
                -webkit-transform: scale(1);
                -ms-transform: scale(1);
                -o-transform: scale(1);
                transform: scale(1);
                -webkit-transition: all 0.4s ease;
                -o-transition: all 0.4s ease;
                transition: all 0.4s ease;
            }

            .effect-wrapper:hover .video-button {
                background-color: rgba(239, 88, 97, 0.9);
            }

            .effect-wrapper:hover .video-button {
                width: 65px;
                height: 65px;
                box-shadow: 1px 1px 20px rgb(0 0 0 / 30%);
            }

            .effect-wrapper .video-button {
                z-index: 11;
                position: absolute;
                top: 50%;
                left: 50%;
                background: rgba(255, 255, 255, 0.8);
                width: 60px;
                height: 60px;
                border-radius: 100%;
                -webkit-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                box-shadow: 0 10px 30px rgb(0 0 0 / 30%);
                -webkit-transition: all 200ms ease;
                -o-transition: all 200ms ease;
                transition: all 200ms ease;
            }

            .effect-wrapper:hover .video-button:before {
                border-left: 10px solid #fff;
            }

            .effect-wrapper .video-button:before {
                content: '';
                position: absolute;
                top: 50%;
                left: 50%;
                display: block;
                width: 0;
                height: 0;
                border-top: 10px solid transparent;
                border-right: 10px solid transparent;
                border-bottom: 10px solid transparent;
                border-left: 10px solid #666;
                -webkit-transform: translate(-15%, -50%);
                transform: translate(-15%, -50%);
                -webkit-transition: all 200ms ease;
                -o-transition: all 200ms ease;
                transition: all 200ms ease;
            }

            .effect-wrapper .hover-link {
                bottom: 0;
                display: block;
                left: 0;
                position: absolute;
                right: 0;
                top: 0;
                background: none !important;
                color: transparent !important;
                z-index: 11;
            }

        </style>
        <!-- Study Section -->
        <section class="home-sec1 mydiv">
            <div class="container">
                <div class="top-home-sec1 row">

                    <div class="col-12 col-md-12">
                        <h2>
                            Study at Amity</h2>
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                        <p class="wow fadeInUp">Amity sets the benchmarks of the global education with a system that
                            matches
                            the best of practices, theories, resources and standards all over the world</p>

                    </div>
                    <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                        <ul>
                            <li>
                                <h3 class="wow fadeInDown">9</h3>
                                <span class="wow fadeInUp">Universities</span>
                            </li>
                            <li>
                                <h3 class="wow fadeInDown">150+</h3>
                                <span class="wow fadeInUp">Institution & Centers</span>
                            </li>
                            <li>
                                <h3 class="wow fadeInDown">300+</h3>
                                <span class="wow fadeInUp">Programmes</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
        <section class="home-sec2 mydiv">
            <div class="container-fluid">

                <div class="row slider-wrapper">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000"
                        data-pause="false">
                        <div class="carousel-inner" role="listbox">


                            <div id="figurebanner1_repfigurebanner_ctl00_divfigure" class="carousel-item active">
                                <img class="img-fluid" src="backoffice/uploads/HomeBanner/1fblg_noida-cam-img.jpg"
                                    alt="1fblg_noida-cam-img.jpg">
                                <div class="banner_text"></div>
                            </div>

                            <div id="figurebanner1_repfigurebanner_ctl01_divfigure" class="carousel-item">
                                <img class="img-fluid" src="backoffice/uploads/HomeBanner/2fblg_lucknow.jpg"
                                    alt="2fblg_lucknow.jpg">
                                <div class="banner_text"></div>
                            </div>

                            <div id="figurebanner1_repfigurebanner_ctl02_divfigure" class="carousel-item">
                                <img class="img-fluid" src="backoffice/uploads/HomeBanner/3fblg_jaipur.jpg"
                                    alt="3fblg_jaipur.jpg">
                                <div class="banner_text"></div>
                            </div>

                            <div id="figurebanner1_repfigurebanner_ctl03_divfigure" class="carousel-item">
                                <img class="img-fluid" src="backoffice/uploads/HomeBanner/4fblg_gurgaon.jpg"
                                    alt="4fblg_gurgaon.jpg">
                                <div class="banner_text"></div>
                            </div>

                            <div id="figurebanner1_repfigurebanner_ctl04_divfigure" class="carousel-item">
                                <img class="img-fluid" src="backoffice/uploads/HomeBanner/5fblg_gwalior.jpg"
                                    alt="5fblg_gwalior.jpg">
                                <div class="banner_text"></div>
                            </div>

                            <div id="figurebanner1_repfigurebanner_ctl05_divfigure" class="carousel-item">
                                <img class="img-fluid" src="backoffice/uploads/HomeBanner/6fblg_mumbai.jpg"
                                    alt="6fblg_mumbai.jpg">
                                <div class="banner_text">Mumbai Campus</div>
                            </div>

                            <div id="figurebanner1_repfigurebanner_ctl06_divfigure" class="carousel-item">
                                <img class="img-fluid" src="backoffice/uploads/HomeBanner/7fblg_grnoida.jpg"
                                    alt="7fblg_grnoida.jpg">
                                <div class="banner_text">Greater Noida Campus : 21 Acres</div>
                            </div>

                            <div id="figurebanner1_repfigurebanner_ctl07_divfigure" class="carousel-item">
                                <img class="img-fluid" src="backoffice/uploads/HomeBanner/8fblg_raipur.jpg"
                                    alt="8fblg_raipur.jpg">
                                <div class="banner_text"></div>
                            </div>

                            <div id="figurebanner1_repfigurebanner_ctl08_divfigure" class="carousel-item">
                                <img class="img-fluid" src="backoffice/uploads/HomeBanner/10fblg_ranchi.jpg"
                                    alt="10fblg_ranchi.jpg">
                                <div class="banner_text"></div>
                            </div>

                            <div id="figurebanner1_repfigurebanner_ctl09_divfigure" class="carousel-item">
                                <img class="img-fluid" src="backoffice/uploads/HomeBanner/11fblg_patna.jpg"
                                    alt="11fblg_patna.jpg">
                                <div class="banner_text"></div>
                            </div>

                            <div id="figurebanner1_repfigurebanner_ctl10_divfigure" class="carousel-item">
                                <img class="img-fluid" src="backoffice/uploads/HomeBanner/12fblg_9fblg_kolkata.jpg"
                                    alt="12fblg_9fblg_kolkata.jpg">
                                <div class="banner_text"></div>
                            </div>



                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span> </a><a class="carousel-control-next"
                                href="#carouselExampleIndicators" role="button" data-slide="next"><span
                                    class="carousel-control-next-icon" aria-hidden="true">
                                </span><span class="sr-only">Next</span> </a>
                        </div>
                        <div class="home_slider_text">
                            <div class="why_box">
                                <div class="home-why-amity">
                                    <div class="why-amity-left">


                                        <h2 class="wow fadeInDown">
                                            WHY AMITY</h2>
                                        <h3 class="wow fadeInUp">
                                            Grooming leaders who are not only thorough professionals but also good human
                                            beings
                                            with values.</h3>
                                        <div class="text_why-main">
                                            <div class="text_why">
                                                <h4 class="wow fadeInDown">
                                                    This is why we are<br>
                                                    consistently ranked</h4>
                                                <div class="text_why2 wow fadeInUp">
                                                    no.1</div>
                                            </div>
                                        </div>

                                        <a href="about-university.html" class="wow fadeInUp"><span>Read More About
                                                Amity</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="why_box2">
                                <div class="owl-carousel owl-carousel1 owl-theme">
                                    <div class="item">
                                        <ul>
                                            <li>
                                                <h3>
                                                    27 Years'
                                                </h3>
                                                <p>
                                                    of Education Experience</p>
                                            </li>
                                            <li>
                                                <h3>
                                                    24 Years'
                                                </h3>
                                                <p>
                                                    of Management Education Experience</p>
                                            </li>
                                            <li>
                                                <h3>
                                                    150,000
                                                </h3>
                                                <p>
                                                    Students</p>
                                            </li>
                                            <li>
                                                <h3>
                                                    6000
                                                </h3>
                                                <p>
                                                    Faculties</p>
                                            </li>
                                            <li>
                                                <h3>
                                                    15000</h3>
                                                <p>
                                                    paper published</p>
                                            </li>
                                            <li>
                                                <h3>
                                                    5000
                                                </h3>
                                                <p>
                                                    Books Authored</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item">
                                        <ul>
                                            <li>
                                                <h3>
                                                    1200
                                                </h3>
                                                <p>
                                                    acres of Campuses</p>
                                            </li>
                                            <li>
                                                <h3>
                                                    9
                                                </h3>
                                                <p>
                                                    Universities</p>
                                            </li>
                                            <li>
                                                <h3>
                                                    14
                                                </h3>
                                                <p>
                                                    International / overseas Campuses across
                                                </p>
                                            </li>
                                            <li>
                                                <h3>
                                                    13
                                                </h3>
                                                <p>
                                                    B.Schools in India</p>
                                            </li>
                                            <li>
                                                <h3>
                                                    26
                                                </h3>
                                                <p>
                                                    Schools &amp; Pre-Schools</p>
                                            </li>
                                            <li>
                                                <h3>
                                                    300+
                                                </h3>
                                                <p>
                                                    Programmes</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item">
                                        <ul>
                                            <li>
                                                <h3>
                                                    150+
                                                </h3>
                                                <p>
                                                    Institution & Centers
                                                </p>
                                            </li>
                                            <li>
                                                <h3>
                                                    25,000
                                                </h3>
                                                <p>
                                                    Students on Scholarship</p>
                                            </li>
                                            <li>
                                                <h3>
                                                    27,000
                                                </h3>
                                                <p>
                                                    On-Campus Placement in Last year
                                                </p>
                                            </li>
                                            <li>
                                                <h3>
                                                    1100
                                                </h3>
                                                <p>
                                                    Patents by Faculty</p>
                                            </li>
                                            <li>
                                                <h3>
                                                    2500
                                                </h3>
                                                <p>
                                                    Case Studies
                                                </p>
                                            </li>
                                            <li>
                                                <h3>
                                                    300
                                                </h3>
                                                <p>
                                                    Government Funded Research Projects</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item">
                                        <ul>
                                            <li>
                                                <h3>
                                                    150
                                                </h3>
                                                <p>
                                                    Global universities as Research partner
                                                </p>
                                            </li>
                                            <li>
                                                <h3>
                                                    150+
                                                </h3>
                                                <p>
                                                    Institution & Centers
                                                </p>
                                            </li>
                                            <li>
                                                <h3>
                                                    300+
                                                </h3>
                                                <p>
                                                    Labs in various disciplines.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
        </section>
        <!--end Why Amity Section -->
        <!-- Student life Section -->
        <section class="home-sec3 mydiv">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="wow fadeInDown">Student <span>Life</span></h2>
                        <div class="student-home">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4 pro">
                                    <span><img src="images/home-stu-life-img1.png"></span>
                                    <div class="stu-btn"><a href="infra-study.html">Study</a></div>
                                </div>

                                <div class="col-12 col-md-5 pro1">
                                    <div class="stu-span1">
                                        <span><img src="images/home-stu-life-img2.png"></span>
                                        <div class="stu-btn"><a href="infra-auditorium.html">Learn</a></div>
                                    </div>

                                    <div class="stu-span">
                                        <span><img src="images/home-stu-life-img4.png"></span>
                                        <div class="stu-btn"><a href="hostel.html">Hostel</a></div>
                                    </div>

                                    <div class="stu-span2">
                                        <span><img src="images/home-stu-life-img5.jpg"></span>
                                        <div class="stu-btn"><a href="infra-play-sangathan.html">Play</a></div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-3 pro2">
                                    <div class="stu-span3">
                                        <span><img src="images/home-stu-life-img3.png"></span>
                                        <div class="stu-btn"><a href="infra-more-others.html">More</a></div>
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
        <section class="home-sec4 mydiv">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                        <marquee onmouseover="this.stop()" onmouseout="this.start()" class="" behavior="scroll"
                            direction="up" style="background:#e3ae21;height: 315px; padding: 10px">

                            <li class="col-12">
                                <a href="event-detail-normal.aspx?Event=11873&amp;Events=Events">
                                    <h4> 02 Mar 2022
                                        Jaipur</h4>
                                    <p> Corporate Web Serries: “Building Skills Everyday”</p>
                                </a>
                            </li>

                        </marquee>
                    </div>

                    <div class="col-12 col-md-8 col-lg-8 col-xl-8">

                        <!-- <div class="thumb">
                        <img class="img-fullwidth" src="https://nsuniv.ac.in/nsu_laravel/public/images/about/tour.jpeg" alt="project">
                    </div> -->
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

        <!-- news -->

        <!-- //news -->
        <section class="home-sec5 mydiv">
            <div class="container">

                <h2 class="wow fadeInDown">
                    Student <span>Work</span></h2>
                <abbr class="all-research-btn2 wow fadeInDown">
                    <a href="studentworkf27c.html?student=student">View All
                        <img src="images/arrow-icon.png" class="view_arrow_img"></a></abbr>
                <div class="home-sec5-content">
                    <div class="row">

                        <div class="col-12 col-md-4 col-lg-5 col-xl-5 pro3 wow fadeInLeft">

                            <div class="home-sec5-colm">
                                <span>
                                    <img src="backoffice/Uploads/Event/1_student-achiv-img1.jpg"
                                        id="homestudentwork1_rptrUpper_ctl00_imgevent" /></span>
                                <h4>
                                    The team from Amity School of Engineering and Technology named as &ldquo;MACH-
                                    RELOADED&rdquo;
                                </h4>
                            </div>
                        </div>

                        <div class="col-12 col-md-8 col-lg-7 col-xl-7 pro4">
                            <div class="row">

                                <div id="homestudentwork1_rptrlower_ctl00_divstudent"
                                    class="col-12 col-md-6 col-lg-6 col-xl-6 pro3 wow fadeInDown">
                                    <div id="homestudentwork1_rptrlower_ctl00_divcolumn" class="home-sec5-colm1">
                                        <span>
                                            <img src="backoffice/Uploads/Event/2_student2.jpg"
                                                id="homestudentwork1_rptrlower_ctl00_imgevent" /></span>
                                        <h4>
                                            Design and Fabrication of Pneumatic Car Bumper
                                        </h4>
                                    </div>
                                </div>

                                <div id="homestudentwork1_rptrlower_ctl01_divstudent"
                                    class="col-12 col-md-6 col-lg-6 col-xl-6 pro4 wow fadeInDown">
                                    <div id="homestudentwork1_rptrlower_ctl01_divcolumn" class="home-sec5-colm2">
                                        <span>
                                            <img src="backoffice/Uploads/Event/4_student1.jpg"
                                                id="homestudentwork1_rptrlower_ctl01_imgevent" /></span>
                                        <h4>
                                            Auto. Air Inflation System In Tyre With Pressure
                                        </h4>
                                    </div>
                                </div>

                                <div id="homestudentwork1_rptrlower_ctl02_divstudent"
                                    class="col-12 col-md-6 col-lg-6 col-xl-6 pro3 margin-10 wow fadeInUp">
                                    <div id="homestudentwork1_rptrlower_ctl02_divcolumn" class="home-sec5-colm1">
                                        <span>
                                            <img src="backoffice/Uploads/Event/3_home-student-achiv-img5.jpg"
                                                id="homestudentwork1_rptrlower_ctl02_imgevent" /></span>
                                        <h4>
                                            Flight time optimization of Quadcopter Using Solar Power Energy Source
                                        </h4>
                                    </div>
                                </div>



                                <div id="homestudentwork1_rptrlower_ctl03_divstudent"
                                    class="col-12 col-md-6 col-lg-6 col-xl-6 pro4 margin-10 wow fadeInUp">
                                    <div id="homestudentwork1_rptrlower_ctl03_divcolumn" class="home-sec5-colm2">
                                        <span>
                                            <img src="backoffice/Uploads/Event/5_home-student-achiv-img2.jpg"
                                                id="homestudentwork1_rptrlower_ctl03_imgevent" /></span>
                                        <h4>
                                            ANIDERS - Animal Intrusion Detection and Repellent System
                                        </h4>
                                    </div>
                                </div>

                            </div>
                        </div>
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

        @include('include.search')

        @include('include.subscribe')
        @include('include.open')
    @endslot

</x-layout>
