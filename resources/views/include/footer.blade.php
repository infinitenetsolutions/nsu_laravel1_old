<style>
    ul.brand-icon2 li a i {
        font-size: 14px !important;
    }

    .footer-section .footer-text {
        text-align: center !important;
    }
</style>
<!-- vt start -->
<div class="col-md-12 col-md-12 col-lg-12 col-xl-12">
    {{-- <div class="text_text">
        <span><a data-toggle="modal" data-target="#IET" href="javascript:void(0);">Report any technical problem in the Online Application Form
                <img src="images/submit.png" class="img-fluid pl-3" />
            </a>
        </span>
    </div> --}}

    <div class="reco_box">
        <div class="modal fade" id="IET" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div id="ctl00_ContentPlaceHolder1_UpdatePanel2">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true"
                                style="color:#e3ae21;border:3px solid #e3ae21;padding: 1px 6px;border-radius: 50%;line-height: 25px; opacity: 1;">&times;</span></button>        </div>
                            <!-- <h3>Online Form - Report a problem</h3> -->
                        </div>

                        <div class="modal-body text">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <iframe src="https://www.google.com/maps/embed?pb=!4v1580704861797!6m8!1m7!1sCAoSLEFGMVFpcE5SNWxBeEZ1Wks4Y0tiSFVQd2lvT01oVTl5VWRwa3BFbTdiSDVj!2m2!1d22.809599581886!2d86.264062143551!3f36.707148350228515!4f1.820868563873006!5f0.7820865974627469" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //vt end -->

<!-- virtual tour -->
<div id="VirtualTour" class="w3-modal" style="z-index: 999999; display: none;">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:100%; margin-bottom:50px;">
        <div class="w3-section" style="margin-bottom:-7px!important;">
            <iframe src="https://www.google.com/maps/embed?pb=!4v1580704861797!6m8!1m7!1sCAoSLEFGMVFpcE5SNWxBeEZ1Wks4Y0tiSFVQd2lvT01oVTl5VWRwa3BFbTdiSDVj!2m2!1d22.809599581886!2d86.264062143551!3f36.707148350228515!4f1.820868563873006!5f0.7820865974627469" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="w3-container w3-border-top w3-padding-16" style="background-color:#1b4169;">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true"
                        style="color:#fff;border:3px solid #fff;padding: 1px 6px;border-radius: 50%;line-height: 25px;">&times;</span></button>        </div>
    </div>
</div>
<!-- // virtual tour -->





<footer>
    <div class="container">

        <h4 class="footer_collapsible_heading">Quick Links <span class="lnr lnr-chevron-down"></span></h4>
        <div class="row">
            <span class="footer_collapse col-12 col-md-12">
                <div class="row">
                    <div class="col-12 col-md-2 col-lg-2 col-xl-2 ftr-colm1">
                        <!-- <h3>
                               Media</h3> -->
                        <img src=" {{asset('images/logo.png')}}" alt="Netaji unuiversity" style="width:100%;" />
                    </div>
                    <div class="col-12 col-md-2 col-lg-2 col-xl-2 ftr-colm1">
                        <h3>
                            About Nsu </h3>
                            <?php $abouts = DB::table('pages')
                     
                            ->where('page_type', 'about')
                            ->limit(9)
                            ->get();
                        ?>
                        <ul class="icon-before">
                            @foreach ($abouts as $about)
                            <li><a href="{{ route('about', $about->title) }}">
                                    {{ $about->sub_title }}</a></li>
                        @endforeach

                        </ul>
                    </div>
                    <div class="col-12 col-md-2 col-lg-2 col-xl-2 ftr-colm1">
                        <h3>
                            Infrastructure </h3>
                        <ul class="icon-before">
                            <li><a href="" target="_blank">Library</a></li>

                            <li><a href="">IT Infrastructure</a></li>
                            <li><a href="">Classroom</a></li>
                            <li><a href="">Laboratory</a></li>
                            <li><a href="">Canteen </a></li>
                            <li><a href="">Transport </a></li>
                            <li><a href="">Sports </a></li>


                        </ul>
                    </div>
                    <div class="col-12 col-md-2 col-lg-2 col-xl-2 ftr-colm1">
                        <h3>
                            Students</h3>
                        <ul class="icon-before">
                            <li><a href="">Anti Ragging Cells</a></li>
                            <li><a href="">Anti Discriminatory Cell</a></li>
                            <li><a href="">Academic Calendar</a></li>

                        </ul>
                    </div>

                    <div class="col-12 col-md-2 col-lg-2 col-xl-2 ftr-colm1">
                        <h3>
                            Contact Us</h3>
                        <ul class="reach-us brand-icon2">
                            <li><i class="fa-solid fa-location-dot mr-2 color-orange"></i> Pokhari,Near Bhilai Pahadi,Jamshedpur,Jharkhand</li>
                            <li><i class="fa-solid fa-phone color-orange"></i> 0657-223-3022</li>
                            <!-- <li><i class="fa-solid fa-mobile-screen color-orange"></i> 9334-666-453</li> -->

                            <li><i class="fa-solid fa-envelope mr-2 color-orange"></i> info@nsuniv.ac.in</li>
                            <li><i class="fa-solid fa-globe mr-2 color-orange"></i> nsuniv.ac.in</li>
                        </ul>
                        <ul class="social-media">

                            <li><a href="https://www.facebook.com/nsu.jamshedpur/" target="_blank">
                                    <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCjndfC0cVjGnscin5RZgaFA" target="_blank"><i class="fa fa-youtube" aria-hidden="true">
                                    </i></a></li>
                            <li><a href="https://in.linkedin.com/company/netaji-subhas-university" target="_blank"><i class="fa fa-linkedin" aria-hidden="true">
                                    </i></a></li>
                                    
                                    <li><a href="https://www.instagram.com/nsujamshedpur/?hl=en" target="_blank"><i style="color: #f46339" class="fab fa-instagram " aria-hidden="true">
                                 </i></a></li>
                        </ul>


                    </div>
                    <div class="col-12 col-md-2 col-lg-2 col-xl-2 ftr-colm1">
                        <h3>
                            Explore / Engage</h3>
                        <ul class="brand-icon2">
                            <li><a data-toggle="modal" data-target="#IET" href="javascript:void(0);">
                                    <i class="fa fa-video-camera"></i>
                                    360° VIEW</a></li>

                            <li><a data-toggle="modal" data-target=".bs-example-modal-lg" href="javascript:void(0);">
                                    <i class="fa fa-bookmark"></i>
                                    Get Started</a></li>

                            <li><a href="tel:9334833167">
                                    <i class="fa fa-address-book"></i>
                                    Call us</a></li>

                            <li><a href="https://api.whatsapp.com/send?phone=919386467619&amp;text=&amp;source=&amp;data=" target="_blank">
                                    <i class="fa fa-commenting"></i>
                                    Chat Now</a></li>

                        </ul>
                    </div>



                </div>
            </span>


        </div>
        <div class="row">
            <div class="col-md-12 ">
                <div class="footer-section">

                    <p class="footer-text">© 2022 <a href="">Netaji Subhas University.</a> All Rights Reserved || Developed With <i class="fa fa-heart" style="color:#c70013"></i> By <a href="http://infinitenetsolutions.com/" target="_blank">Infinite Net Solutions</a>
                    </p>
                </div>
            </div>
        </div>



    </div>
</footer>