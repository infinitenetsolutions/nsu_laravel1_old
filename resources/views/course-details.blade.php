<x-layout1>
    <?php
    
    function url_check($url)
    {
        stream_context_set_default([
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
            ],
        ]);
    
        $array = get_headers($url);
        $string = $array[0];
        if (strpos($string, '200')) {
            return true;
        } else {
            return false;
        }
    } ?>
    @slot('body')
        <style>
            .course_text_box:before,
            .course_text_box:after {
                width: auto;
            }

            .programe_tabbing .nav-tabs li {
                border-left: 2px solid #e3ae21;
                border-right: 2px solid #e3ae21;
                border-top: 2px solid #e3ae21;
                padding-top: 10px;
            }

            .programe_tabbing .nav-tabs li span {
                font-size: 13px;
                padding-left: 3px;

                font-weight: 600;
                color: #555555 !important;
            }

            .programe_tabbing .nav-tabs li {
                padding-left: 0px;
            }

            .programe_tabbing .nav-tabs li:first-child {
                padding-left: 0px;
            }


            .programe_tabbing .nav-tabs li.active span {
                padding-bottom: 10px;
            }

            .course_info {
                margin: 20px 0 0;
            }

            .programe_tabbing {
                width: 70%;
            }

            .programe_tabbing .nav-tabs li {
                width: 16%;
            }

            .programe_tabbing .responsive-tabs-container {
                padding-top: 20px;
            }

            .aside-section ul li {
                color: #fff;
                font-weight: 600;
                font-size: 14px;
            }

            .aside-bullet li:before {
                top: 5px;
                position: absolute;
                font-family: "Font Awesome 5 Free";
                content: "\f101";
                display: inline-block;
                padding-right: 3px;
                vertical-align: middle;
                font-weight: 900;
            }

            .aside-bullet li {
                padding: 5px 20px;
            }

            .aside-section-headings::after,
            .aside-section-headings::before {
                background: linear-gradient(90deg, rgba(255, 82, 65, 1) 0%, rgba(199, 0, 19, 1) 100%) !important;
                border-radius: 8px;
                bottom: 1px;
                content: "";
                height: 2px;
                left: 0;
                position: absolute;
                width: 64px;
            }

            .aside-section-headings {
                position: relative;
            }

            .bg-xs-brown_white {
                background: #6c695d;
            }

            .bg-xs-dark_gray {
                background: #e3b121;
            }

        </style>
        <section class="inner-page bg-white ">
            <div class="inner-hadding  float-right">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="{{ route('index') }}">Home</a>
                        <a href="{{ route('course_list') }}"> Courses </a>
                        <a href="#">{{ $name[0]->course }}</a>
                    </div>
                </div>
                <div class="container">
                    <div class="top-menu-sec">

                        <div class="row">

                            <div class=" ">
                                <h4> <a class="text-warning" href="{{ route('index') }}">Home</a> </h4>
                                <ul>
                                    <li><a href="{{ route('course_list') }}"> Courses </a></li>
                                    <li class="active"><a href="#">{{ $name[0]->course }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <h2 class="pb-1 mt-3">{{ $name[0]->course }} {{ $name[0]->fullform }}</h2>


                </div>
            </div>
            <div class="container">
                <p>
                    <?php echo $data->about; ?>
                </p>
            </div>
            <section class="inner_section course_pages programmes_detail">

                <div class="container-fluid course_info">
                    <div class="container">


                        <div class="row course_text_box">

                            <div class="col-lg-4 bg-xs-dark_gray">
                                <p> <strong><i class="fal fa-rupee-sign    "></i> Course Fee</strong>
                                    {{ $name[0]->fee / 2 }} <i class="fas fa-rupee-sign    "></i> / Semester </p>
                            </div>

                            <div class="col-lg-4 bg-xs-brown_white">
                                <p><strong><i class="fal fa-hourglass-end"></i> Course Duration </strong>
                                    {{ $name[0]->duration }} Years</p>
                            </div>

                            <div class="col-lg-4 bg-xs-dark_gray">
                                <p><strong id="ctl00_ContentPlaceHolder1_pselection"><i class="fal fa-desktop-alt"></i>
                                        Apply Online</strong>


                                    For the time being Selection Process is ...<span
                                        id="ctl00_ContentPlaceHolder1_divsecpop"><a data-toggle="modal" data-target="#sel"
                                            href="javascript:void(0);"><i class="lnr lnr-plus-circle"
                                                aria-hidden="true"></i></a></span>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>



                <section class="container mt-1">
                    <section class="row">

                        <section class=" col-sm-8 programe_tabbing">
                            <div class="container-fluid">

                                <div class="responsive-tabs-container accordion-xs accordion-sm">
                                    <ul class="nav nav-tabs responsive-tabs">




                                        @if (strlen($data->fee) > 20)
                                            <li class="active"> <a href="#tab1" data-toggle="tab"> <span> Course
                                                        Fee
                                                    </span> </a>
                                            </li>
                                        @endif

                                        @if (url_check($url . 'CourseDetails/' . $data->syllabus))
                                            <li> <a href="#tab3" data-toggle="tab"> <span> Syllabus(Hons)</span></a>
                                            </li>
                                        @endif
                                        @if (url_check($url . 'CourseDetails/' . $data->syllabus1) == true)
                                            <li><a href="#tab7" data-toggle="tab"> <span>Syllabus(Genral) </span></a>
                                            </li>
                                        @endif

                                        @if (strlen($data->apply) > 20)
                                            <li><a href="#tab4" data-toggle="tab"><span>apply-online </span></a></li>
                                        @endif
                                        @if (url_check($url . 'CourseDetails/' . $data->fee_schedule))
                                            <li><a href="#tab5" data-toggle="tab"><span>Fee Schedule </span></a></li>
                                        @endif
                                        @if (url_check($url . 'CourseDetails/' . $data->guidelines))
                                            <li><a href="#tab6" data-toggle="tab"><span>Guideline </span></a></li>
                                        @endif

                                    </ul>
                                    <div class="tab-content">
                                        <h4 id="ctl00_ContentPlaceHolder1_headyear1" class="collapsible_heading open">
                                            1st
                                            Year <span class="lnr lnr-chevron-down"></span></h4>
                                        <a href="#recognitions1" class="accordion-link first"><span>1st Year</span></a>


                                        <ul class="tab-pane fade in active" id="tab1">
                                            <ul class="list theme-colored2 paper">

                                                <p class="text-left text-justify text-university"> <?php echo $data->fee; ?></p>
                                            </ul>
                                        </ul>

                                        <div class="tab-pane fade" id="tab2">
                                            <ul class="list theme-colored2 paper">

                                                <?php echo $data->offered; ?>

                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="tab3">
                                            <h4 class="line-bottom-theme-colored-2 mb-20">Sullabus(Hons) - <a
                                                    class="text-danger"
                                                    href="{{ $url . 'CourseDetails/' . $data->syllabus }}">
                                                    Download</a>
                                            </h4>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <iframe src="{{ $url . 'CourseDetails/' . $data->syllabus }}"
                                                        width="700" height="500"></iframe>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab7">
                                            <h4 class="line-bottom-theme-colored-2 mb-20">Syllabus(Genral) - <a
                                                    class="text-danger"
                                                    href="{{ $url . 'CourseDetails/' . $data->syllabus1 }}">
                                                    Download</a>
                                            </h4>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <iframe src="{{ $url . 'CourseDetails/' . $data->syllabus1 }}"
                                                        width="700" height="500"></iframe>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4">
                                            <ul class="list theme-colored2 paper">

                                                <?php echo $data->apply; ?>

                                            </ul>
                                            <div class="ml-4 mt-5">
                                                <a href="https://nsucms.in/prospectus/public/" class="btn btn-warning  ">APPLY NOW</a>
                
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab5">
                                            <h4 class="line-bottom-theme-colored-2 mb-0">Fee Schedule - <a
                                                    class="text-danger"
                                                    href="{{ $url . 'CourseDetails/' . $data->fee_schedule }}">
                                                    Download</a>
                                            </h4>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <iframe src="{{ $url . 'CourseDetails/' . $data->fee_schedule }}"
                                                        width="700" height="500"></iframe>

                                                </div>

                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="tab6">
                                            <h4 class="line-bottom-theme-colored-2 mb-0">Guidline - <a
                                                    class="text-danger"
                                                    href="{{ $url . 'CourseDetails/' . $data->guidelines }}">
                                                    Download</a>
                                            </h4>
                                            <div class="row">

                                                <div class="col-md-12">
                                                    <iframe src="{{ $url . 'CourseDetails/' . $data->guidelines }}"
                                                        width="700" height="500"></iframe>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="tab-pane" id="recognitions5">
                                            <div class="row">


                                            </div>
                                        </div>





                                    </div>
                                </div>
                             

                            </div>
                            <div class="ml-4 mt-5">
                                <a href="https://nsucms.in/prospectus/public/" class="btn btn-warning  ">APPLY NOW</a>

                            </div>
                        </section>

                        <section class=" col-sm-4 aside-section">
                            <div class="bg-xs-dark_gray m-3 p-3">
                                <h3 class="text-center text-white">ALL COURSES</h3>
                                <!-- <div class="aside-section-headings"></div> -->

                                <ul class="bullet_list aside-bullet">
                                    @foreach ($all_courses as $course)
                                        <li><a class="text-white"
                                                href="{{ route('course', ['course' => strtolower(str_replace(' ', '-', $course->course)), 'id' => $course->id]) }}">{{ $course->course }}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </section>



                    </section>

                </section>


            </section>


            <div class="reco_box">

                <div class="modal fade" id="sel" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <div class="modal-header2">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">×</span></button>
                                <h4 class="pl-5 pt-4">Apply Online</h4>
                            </div>

                            <div class="modal-body text eleg">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-2">
                                        <span class="text-university"> <?php echo $data->apply; ?></span>

                                    </div>
                                   
                                </div>
                                <div class="text-center">
                                    <a href="https://nsucms.in/prospectus/public/" class="btn btn-warning  ">APPLY NOW</a>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </section>
    @endslot
</x-layout1>
