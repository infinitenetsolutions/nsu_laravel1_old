<style>
    .menu_nav ul li a:before {
        font-family: "Font Awesome 5 Free";
        content: "\f518";
        display: inline-block;
        padding-right: 3px;
        vertical-align: middle;
        font-weight: 900;
        color: #fff;
    }

</style>
<?php
$home_url = '';

if ($_SERVER['HTTP_HOST'] == '127.0.0.1:8000') {
    $home_url = 'http://127.0.0.1:8001/upload/';
} else {
    $home_url = 'https://www.nsuniv.ac.in/nsuadmin/public/upload/';
} ?>
<!-- modal -->
<div class="row no-gutters stalwarts_box2">
    <div class="col-md-12 col-md-12 col-lg-12 col-xl-12">
        @include('include.offline_online_admission')
    </div>
    <div class="col-md-12 col-md-12 col-lg-12 col-xl-12">

        <div class="reco_box">

            <div class="modal fade" id="IET" role="dialog" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div id="ctl00_ContentPlaceHolder1_UpdatePanel2">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-label="Close"><span aria-hidden="true">×</span></button>
                                <h3>Online Form - Report a problem </h3>
                            </div>

                            <div class="modal-body text">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="form_box">
                                            <div class="form-group">
                                                <input name="ctl00$ContentPlaceHolder1$Mob" type="text" maxlength="12"
                                                    id="ctl00_ContentPlaceHolder1_Mob" class="form-control"
                                                    placeholder="Mobile">
                                                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator1"
                                                    style="color:Red;display:none;">Required</span>
                                                <span id="ctl00_ContentPlaceHolder1_RegularExpressionValidator1"
                                                    style="color:Red;display:none;">Only numeric</span>
                                            </div>
                                            <div class="form-group">
                                                <input name="ctl00$ContentPlaceHolder1$Email" type="text"
                                                    id="ctl00_ContentPlaceHolder1_Email" class="form-control"
                                                    placeholder="Email">
                                                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator3"
                                                    style="color:Red;display:none;">Required</span>
                                                <span id="ctl00_ContentPlaceHolder1_revEmailID"
                                                    style="color:Red;display:none;">Enter valid email.</span>
                                            </div>
                                            <div class="form-group">


                                                <input name="ctl00$ContentPlaceHolder1$captcha" type="text"
                                                    maxlength="20" id="ctl00_ContentPlaceHolder1_captcha"
                                                    class="form-control" placeholder="Captcha">
                                                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator4"
                                                    style="color:Red;display:none;">Required</span>

                                            </div>
                                            <div class="form-group"> <img src="Handler.ashx" id="imgCaptchanew"> <a
                                                    href="javascript:void(0)" onclick="javascript:RefreshCaptchanew();">
                                                    <img src="/images/refresh.png" alt=""></a> </div>
                                        </div>

                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="form_box">
                                            <div class="form-group">
                                                <textarea name="ctl00$ContentPlaceHolder1$Prob_details" rows="3"
                                                    cols="20" id="ctl00_ContentPlaceHolder1_Prob_details"
                                                    class="form-control" placeholder="Problem"
                                                    onkeyup="CheckLimit(this,250,'lblCountLimit');"></textarea>
                                                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator2"
                                                    style="color:Red;display:none;">Required</span>

                                            </div>
                                            <p>characters remaining!<br>
                                                You have <span id="ctl00_ContentPlaceHolder1_lblCountLimit">250</span>
                                                characters remaining!</p>

                                            <div class="form-group"> </div>
                                            <input type="submit" name="ctl00$ContentPlaceHolder1$btnsubmit"
                                                value="submit"
                                                onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$btnsubmit&quot;, &quot;&quot;, true, &quot;down&quot;, &quot;&quot;, false, false))"
                                                id="ctl00_ContentPlaceHolder1_btnsubmit">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //modal -->
<!-- Top Level Navigation -->
<div class="top_menubar">
    <ul class="container">
        <li class="admission_links"><a href="javascript:void(0);">Admissions <span
                    class="lnr lnr-chevron-down"></span></a>
            <div class="top_megamenu admission_box bg-warning1">
                <div class="container admission_menu">

                    <a class="close_btn2" href="javascript:void(0);"></a>
                    <div class="row">
                        <div class="mega_menu_left col-lg-3">
                            <span class="mega_menu_brand">

                                <a href="index-2.html" class="site-logo "><img
                                        src="{{ asset('images/logo-Netaji.png') }}" alt="Netaji University" /></a>
                            </span>
                            <ul class="mega_menu_nav_admission">
                                <li><a data-toggle="modal" data-target="#IET11" href="javascript:void(0);">How To
                                        Apply</a></li>

                                <li><a href="{{ route('career') }}">Career Test</a></li>
                                <!-- <li><a href="admissions-scholarship.html">Netaji Scholarship</a></li> -->

                                <li><a target="_blank" href="https://neevfinance.hagnosoft.com/webform">Education
                                        Loan</a></li>

                                {{-- <li><a href="faq">FAQs</a></li> --}}

                            </ul>
                            <a target="_blank" class="apply_btn border text-university text-white"
                                href="https://nsucms.in/prospectus/public" target="_blank">Admission
                                {{ date('Y') }}</a>

                        </div>
                        <div class="mega_menu col-lg-9">
                            <div class="last_date">
                                <div class="row">
                                    <div class="col-lg-6 side_border">
                                        <h5>Campus Helpline Numbers</h5>
                                        <div class="last_date2">
                                            <ul>career
                                                <li>
                                                    <h6>Address</h6>
                                                    <span>Pokhari,Near Bhilai Pahadi, Jamshedpur,Jharkhand</span>
                                                </li>
                                                <li>
                                                    <h6>Jamshedpur City Office</h6>
                                                    <span>Shatabdi Tower, 4th Floor, Sakchi, Jamshedpur,
                                                        Jharkhand</span>
                                                </li>
                                                <li>
                                                    <h6>Email</h6>
                                                    <span>info@nsuniv.ac.in</span>
                                                </li>
                                                <li>
                                                    <h6>Phone</h6>
                                                    <span>0657-223-3022, 9386-817-857</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 apply_at">

                                        <h4>Route Map For NSU </h4>
                                        <div class="last_date2 last_date22">
                                            <div class=" colfull">
                                                <a
                                                    href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.793679678996!2d86.2612313498239!3d22.810107684987724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f6096e56867d5b%3A0x1edd658ec7b7a21d!2sNetaji%20Subhas%20University!5e0!3m2!1sen!2sin!4v1646827163795!5m2!1sen!2sin">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.793679678996!2d86.2612313498239!3d22.810107684987724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f6096e56867d5b%3A0x1edd658ec7b7a21d!2sNetaji%20Subhas%20University!5e0!3m2!1sen!2sin!4v1646827163795!5m2!1sen!2sin"
                                                        width="100%" height="350" style="border:0;" allowfullscreen=""
                                                        loading="lazy"></iframe>
                                                </a>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>


        <li class="career_btn"><a href="{{ route('career') }}">Careers</a></li>
        <li class="career_btn"><a href="{{ route('upgrade') }}">Upgrad Campus</a></li>



        <li><a href="{{ route('news1') }}">News</a></li>

        <li><a href="" target="_blank">Important Notice</a></li>
        <li><a href="https://nsucms.in/nsucms/student/student_login" target="_blank">Student Login</a></li>
        <li></li>
        <!-- <li><a class="right_bar_search" href="javascript:void(0);"><i class="fa fa-search"></i></a> -->
        </li>
    </ul>
</div>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">

        <div class="logo">
            <a href="{{ route('index') }}"><img src="{{ asset('images/logo.png') }}" alt="Netaji unuiversity" /></a>
            <span style="
    position: absolute;
    font-size: 20px;
    top: 25px;
    line-height: 3px;
    font-weight: 800;
    color: #e3b121;
">Netaji Subhas <br><span style="
    font-size: 26px;
">University</span></span>
        </div>

        <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse main-menu" id="navbarResponsive">


            <ul class="navbar-nav ml-auto">

                <li class="nav-item"><a class="nav-link" href="#">About NSU <span
                            class="span_icon"></span></a>
                    <div class="mega_menu pt-5 hidden-xs">

                        <div class="row pl-3 no-gutters scroll-pan ">
                            <div class="col-md-6 ">

                                <div class="row">
                                    <div class="col-md-6  ">
                                        <div class=" no-gutters menu_col4 ">
                                            <div class="right_mega_menu">
                                                <?php $abouts = DB::table('pages')
                                                    ->where('page_type', 'about')
                                                    ->limit(9)
                                                    ->get();
                                                ?>
                                                <ul>

                                                    @foreach ($abouts as $about)
                                                        <li><a href="{{ route('about', $about->title) }}">
                                                                {{ $about->sub_title }}</a></li>
                                                    @endforeach

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class=" no-gutters menu_col4 ">
                                            <div class="right_mega_menu">
                                                <ul>
                                                    <?php $facultyes = DB::table('faculty_tbl')
                                                        ->distinct()
                                                        ->get(['type']);
                                                    ?>
                                                    @foreach ($facultyes as $faculty)
                                                        <li><a href="{{ route('faculty', $faculty->type) }}">Meet
                                                                our {{ $faculty->type }}</a></li>
                                                    @endforeach

                                                    <?php $studentpdfs = DB::table('pdf')
                                                        ->where('type', 'aboutpdf')
                                                        ->limit(4)
                                                        ->get();
                                                    ?>
                                                    <?php $abouts = DB::table('pages')
                                                        ->where('page_type', 'about')
                                                        ->skip(9)
                                                        ->take(100)
                                                        ->get();
                                                    ?>
                                                    @foreach ($abouts as $about)
                                                        <li><a href="{{ route('about', $about->title) }}">
                                                                {{ $about->sub_title }}</a></li>
                                                    @endforeach

                                                    <li><a href="{{ route('govbody') }}"> The Governing Body</a></li>
                                                    @foreach ($studentpdfs as $studentpdf)
                                                        <li><a target="_blank"
                                                                href="{{ $home_url . 'pdf/' . $studentpdf->images }}">
                                                                {{ $studentpdf->title }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('images/nsu/about.jpeg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </li>




                <li class="nav-item"><a class="nav-link" href="{{ route('course_list') }}">Courses
                        <span class="span_icon"></span></a>
                    <div class="mega_menu programsList pt-3 hidden-xs">

                        <div class="row no-gutters pl-5 paddAdjust">
                            <div class="col-md-12 pr-2">
                                <div class="row no-gutters menu_col4 pl-5 ml-3">
                                    <div class="col-md-9">

                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="Graduate">
                                                <p class="pt-4">
                                                    <strong>Regular Courses</strong>
                                                </p>
                                                <div class="menu_nav nsu-courses p-2">
                                                    <ul>
                                                        <?php $courses = DB::table('course_tbl')
                                                            ->where('is_deleted', '1')
                                                            ->orderBy('course', 'ASC')
                                                            ->get(); ?>

                                                        @foreach ($courses as $course)
                                                            <li><a
                                                                    href="{{ route('course', ['course' => strtolower(str_replace(' ', '-', $course->course)), 'id' => $course->id]) }}">{{ $course->course }}</a>
                                                            </li>
                                                        @endforeach


                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-3 pr-3">
                                        <div class="right_mega_menu scroll-pan">
                                            <ul class="menu_top">
                                                <?php $programs = DB::table('course_tbl')
                                                    ->select('program')
                                                    ->where('is_deleted', '1')
                                                    ->groupBy('program')
                                                    ->orderBy(DB::raw('count(id) '), 'DESC')
                                                    ->get(); ?>
                                                @foreach ($programs as $program)
                                                    <li> <a
                                                            href="{{ route('program', strtolower(str_replace(' ', '-', $program->program))) }}"><b
                                                                class="color-orange text-uppercase">
                                                                <?php echo $program->program; ?>
                                                            </b></a> </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>


                    </div>

                </li>

                <li class="nav-item"><a class="nav-link" href="javascript:void(0);">Infrastructure <span
                            class="span_icon"></span></a>
                    @include('include.infrastructure_menu')


                </li>



                <li class="nav-item"><a class="nav-link" href="#">Placement <span
                            class="span_icon"></span></a>
                    @include('include.placement_menu')

                </li>


                <li class="nav-item"><a class="nav-link" href="javascript:void(0);">Student <span
                            class="span_icon"></span></a>
                    @include('include.student_menu')


                </li>
                <li class="nav-item"><a class="nav-link" href="javascript:void(0);">Gallery <span
                            class="span_icon"></span></a>
                    @include('include.gallery_menu')


                </li>

                <li class="nav-item"><a class="nav-link apply_btn" href="apply-now5034.html?1=1">Apply Now
                        2022</a>
                </li>
            </ul>
        </div>
        <!-- mobile menu -->
        <div class="mobile_nav">
            <a href="javascript:void(0);" class="mobile_nav_icon"></a>
            <div class="collapse navbar-collapse main-menu" id="navbarResponsive2">
                @include('include.mobile_menu')
            </div>

        </div>



    </div>
</nav>
