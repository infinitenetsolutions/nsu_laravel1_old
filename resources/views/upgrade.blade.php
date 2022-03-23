<x-layout1>
    @slot('body')
        <style>
            .upgrad-heading {
                background: #efeaea;
                box-shadow: 9px 5px 10px 3px #ccc;
                margin: 10px 0;
                padding: 10px;
                border-radius: 30px 0px 30px 0px;
                height: 170px;
            }

            .upgrad-heading .sub-heading {
                display: flex;
            }

            .upgrad-heading .sub-heading span img {
                width: 100px;
                border-radius: 50%;
                margin-right: 15px;
            }

            .upgrad-content h2 {
                font-size: 18px;
                padding-bottom: 0px
            }

            .upgrad-heading .sub-heading span {
                width: 100px;
            }

            .inner-section {
                margin-top: -100px;
            }

        </style>

        <section class="inner-page">

            <div class="inner-hadding">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="{{ route('index') }}">Home</a>
                        <a href="">About</a>
                        <a href="">Upgrade</a>
                    </div>
                </div>
                <div class="container">
                    <div class="top-menu-sec">
                        <ul>
                            <h4>Upgrade </h4>
                            <li><a href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="active" ><a href="{{ route('upgrade') }}">Upgrade</a>
                            </li>
                        </ul>
                    </div>
                    <div class=" ">
                        <h2>Upgrade</h2>
                        <a class="row p-2" href="{{ route('index') }}">

                            <img class="logo-sm" src="{{ asset('/images/logo.png') }}" alt="">
                            <p class="tag_line_bold mt-1 ">Netaji Subhas University</p>
                        </a>
                    </div>
                </div>
            </div>
            <section class="inner_section event_detail">
                <div class="container">
                    <div class="row">


                        <div class="col-md-7">
                            <!-- <h4> <span id="ctl00_ContentPlaceHolder1_lblstdate">25 Feb 2022</span><span id="ctl00_ContentPlaceHolder1_lblendate"></span>|Kolkata <span>|</span> Online</h4> -->


                            <h3>Powered by upGrad Campus</h3>
                            <span class="line-bottom "> &nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <p style="font-size:18px;">Netaji Subhas University has collaborated with upGrad
                                campus to empower their students with the Business Analytics and Digital
                                Marketing Program. Netaji Subhas University has always been at the forefront
                                ensuring the successful holistic career of its students. Alliance with upGrad
                                campus will pave the way to secure this goal.</p>

                        </div>


                        <div class="col-md-5">
                            <!-- <h4> <span id="ctl00_ContentPlaceHolder1_lblstdate">25 Feb 2022</span><span id="ctl00_ContentPlaceHolder1_lblendate"></span>|Kolkata <span>|</span> Online</h4> -->



                            <img src="{{ asset('images/nsu/upgrade/NSU_upGrad.jpg') }}"
                                id="ctl00_ContentPlaceHolder1_imgbind">

                        </div>




                        <div class="col-md-12">
                            <!-- <h4> <span id="ctl00_ContentPlaceHolder1_lblstdate">25 Feb 2022</span><span id="ctl00_ContentPlaceHolder1_lblendate"></span>|Kolkata <span>|</span> Online</h4> -->
                            <div class="col-md-12">
                                <h3>About the program details: </h3>
                                <span class="line-bottom "> &nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <p style="font-size:18px" class="p-17 text-justify aos-init aos-animate" data-aos="zoom-in"
                                    data-aos-duration="1000">
                                    At upGrad campus, we help you become job-ready and prepared for the industry with
                                    the right skills. The Business Analytics certification program by upGrad Campus is
                                    designed to make you a data professional.
                                </p>
                                <p style="font-size:18px" class="p-17 text-justify aos-init" data-aos="zoom-in"
                                    data-aos-duration="1000">
                                    Business Analytics is the structured and incremental analysis of a company's
                                    statistical data to gain insights. Most of the world's top corporations employ
                                    business analytics, and it's especially valuable in Tech Startups, where they are
                                    eager to take advantage of any data-driven advantages that may help them break into
                                    the mass market. It is an ideal study option for anyone interested in programming or
                                    engaging with <a href="https://nsuniv.ac.in/course?academic-data-science"
                                        style="color:#007bff;">data science</a> because of the combination of technology
                                    and business.
                                </p>
                                <p style="font-size:18px" class="p-17 text-justify aos-init" data-aos="zoom-in"
                                    data-aos-duration="1000">
                                    Digital Marketing encompasses many different channels for promoting business
                                    interests leveraging the digital platforms to create brand awareness and enable
                                    promotion and eventually business.
                                </p>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <!-- <h4> <span id="ctl00_ContentPlaceHolder1_lblstdate">25 Feb 2022</span><span id="ctl00_ContentPlaceHolder1_lblendate"></span>|Kolkata <span>|</span> Online</h4> -->
                            <div class="col-md-12">
                                <h3>Benefits for students : </h3>
                                <span class="line-bottom text-warning "> &nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            </div>
                        </div>

                    </div>
                    <div class="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row upgrad-heading">

                                    <div class="col-sm-3 col-sm-3">
                                        <img src="{{ asset('images/nsu/upgrade/nsu1.png') }}" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="upgrad-content">
                                            <h2>
                                                Holistic understanding of Business Analytics and Digital Marketing</h2>

                                            <p>
                                                Learn the basics of Business Problem Solving, Insights and Storytelling,
                                                Predictive Analytics, Statistics and Exploratory Data Analysis.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="row upgrad-heading">
                                    <div class="col-sm-3 col-sm-3">
                                        <img src="{{ asset('images/nsu/upgrade/nsu2.png') }}" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="upgrad-content">
                                            <h2>Soft skills modules</h2>

                                            <p>
                                                1. Business communication <br>
                                                2. Reporting and Presentations

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row upgrad-heading">
                                    <div class="col-sm-3 col-sm-3">
                                        <img src="{{ asset('images/nsu/upgrade/nsu3.png') }}" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="upgrad-content">
                                            <h2>Live Industry Projects</h2>
                                            <p>
                                                Learn the basics of Business Problem Solving, Insights and Storytelling,
                                                Predictive Analytics, Statistics and Exploratory Data Analysis
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row upgrad-heading">
                                    <div class="col-sm-3 col-sm-3">
                                        <img src="{{ asset('images/nsu/upgrade/nsu4.png') }}" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="upgrad-content">
                                            <h2>Dedicated mentors</h2>
                                            <p>
                                                Personalised mentorship by upGrad mentors and live sessions with expert
                                                faculty.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



            </section>

            <section style="padding: 100px 0;
                            background: url({{ asset('images/nsu/upgrade/nsu-upgradd.jpg') }});
                            text-align: center;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-section" style="background: #000000ab;padding: 10px;">
                                <h3 class="text-light" style="font-size: 39px!important;">Get a guaranteed
                                    certification powered by upGrad Campus</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <br>
            <section class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.793546185714!2d86.26123134973862!3d22.810112629887442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f6096e56867d5b%3A0x1edd658ec7b7a21d!2sNetaji%20Subhas%20University!5e0!3m2!1sen!2sin!4v1647235672718!5m2!1sen!2sin"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </section>

        </section>
    @endslot
</x-layout1>
