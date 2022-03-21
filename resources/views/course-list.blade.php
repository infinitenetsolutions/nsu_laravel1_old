<x-layout1>

    @slot('body')
        <section class="inner-page">
            <div class="inner-hadding">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="{{route('index')}}">Home</a>
                        Programmes
                    </div>
                    <h1>Programmes</h1>
                </div>
            </div>


            <section class="inner_section programmes_list new_big_line">




                <div class="container mt-3" style="position: relative;">
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



                                            <table class="table table-one table-bordered table-responsive-lg">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Course name</th>
                                                        <th>Duration</th>
                                                        <th>Semester</th>
                                                        <th>Fees</th>
                                                        <th>Type</th>
                                                        <th>Details</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($courses as $course)
                                                        <tr>
                                                            <td><a href="javascript:void(0);" class="link"
                                                                    data-toggle="modal"
                                                                    data-target="#detail{{ $course->id }}">{{ $course->course }}</a>
                                                            </td>
                                                            <td>{{ $course->duration }} years</td>
                                                            <td>{{ ((int) $course->duration) * 2 }} semesters</td>
                                                            <td> <i class="fas fa-rupee-sign    "></i> 
                                                                {{ $course->fee }}/ semester</td>
                                                            <td>{{ $course->type }}</td>
                                                            <td> <a
                                                                    href="{{ route('course', ['course' => strtolower(str_replace(' ', '-', $course->course)), 'id' => $course->id]) }}">View more</a>
                                                            </td>

                                                        </tr>
                                                    @endforeach


                                                </tbody>
                                            </table>

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
