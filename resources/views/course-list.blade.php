<x-layout1>
    @slot('body')
        <section class="inner-page">
            <div class="inner-hadding">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="index-2.html">Home</a>
                        Programmes
                    </div>
                    <h1>Programmes</h1>
                </div>
            </div>


            <section class="inner_section programmes_list new_big_line">




                <div class="container" style="position: relative;">
                    <div id="Progressbar" class="preloader" style="display:none;">
                        <div class="mkmage-overlay preloader_image">
                        </div>

                    </div>
                    <h3 class="ml-2">Full Time Courses</h3>

                    <div class="program_list">
                        @foreach ($all_programs as $program)
                            <ul class="mt-4 mb-0 course_list" id="myList">
                                <div class="staff-container">
                                    <li class="item "><em class="text-capitalize">
                                            {{ $program->program }}
                                        </em>
                                        <br>
                                        <?php $courses = DB::table('course_tbl')
                                            ->where('program', $program->program)
                                            ->get(); ?>





                                        <ul>
                                            @foreach ($courses as $course)
                                                <li><a href="javascript:void(0);" class="link" data-toggle="modal"
                                                        data-target="#detail{{ $course->id }}">{{ $course->course }}</a>
                                                </li>

                                                <div class="modal fade" id="detail{{ $course->id }}" tabindex="-1"
                                                    role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <a href="javascript:void(0);" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span class="lnr lnr-cross-circle"></span>
                                                                </a>
                                                                <div class="slide_content">
                                                                    <div class="row">

                                                                        <div class="col-lg-12">
                                                                            <h3 class="mt-0 mb-4">
                                                                                {{ $course->course }}
                                                                                {{ $course->fullform }}

                                                                                <p class="text-gray"> Program -
                                                                                    {{ $program->program }} </p>
                                                                            </h3>

                                                                        </div>
                                                                        <?php $courses_details = DB::table('course_details')
                                                                            ->where('course_id', $course->id)
                                                                            ->get(); ?>
                                                                        @foreach ($courses_details as $course_d)
                                                                            <div class="col-lg-6 text-justify text-gray">
                                                                                <p class="text-muted1">

                                                                                    <?php echo $course_d->about; ?>


                                                                                </p>
                                                                                <br>


                                                                            </div>
                                                                            <div class="col-lg-6 text-justify ">
                                                                                <p>
                                                                                    <?php echo $course_d->offered; ?>


                                                                                </p>
                                                                                <p>
                                                                                    <?php echo $course_d->fee; ?>


                                                                                </p>
                                                                                <div class="course_btns">
                                                                                    <span
                                                                                        id="ctl00_ContentPlaceHolder1_repcoursebind_ctl23_repinnernew_ctl00_repinner1_ctl00_lblprogramclose"
                                                                                        style="color:Red;"></span>
                                                                                    <br />
                                                                                    <a id="ctl00_ContentPlaceHolder1_repcoursebind_ctl23_repinnernew_ctl00_repinner1_ctl00_lnkbtnview"
                                                                                        class="btn btn-warning"
                                                                                        href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$repcoursebind$ctl23$repinnernew$ctl00$repinner1$ctl00$lnkbtnview&#39;,&#39;&#39;)">View
                                                                                        Course Structure</a>

                                                                                    <a id="ctl00_ContentPlaceHolder1_repcoursebind_ctl23_repinnernew_ctl00_repinner1_ctl00_lnknotapp"
                                                                                        disabled="disabled"
                                                                                        class="btn btn-primary  disabled"
                                                                                        style="text-transform: initial!important; font-weight: normal; font: 800 15px 'Open Sans',Helvetica, Arial, sans-serif; margin-left: 0;">Admission
                                                                                        Not Open</a>
                                                                                    <br />
                                                                                    <span
                                                                                        id="ctl00_ContentPlaceHolder1_repcoursebind_ctl23_repinnernew_ctl00_repinner1_ctl00_lblCovid19"></span>

                                                                                </div>
                                                                            </div>
                                                                        @endforeach

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </ul>
                                    </li>
                                </div>
                            </ul>
                        @endforeach

                    </div>
                </div>
            </section>
        </section>
    @endslot
</x-layout1>
