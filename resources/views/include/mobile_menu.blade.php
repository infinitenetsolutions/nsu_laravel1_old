<ul class="navbar-nav ml-auto">
                    <li class="nav-item hidden-xs"><a class="nav-link" href="admission-procedure-domestic.html">
                            Admissions</a>
                        <ul class="dropdown-menu">
                            <li><a href="">How to Apply</a></li>
                            <li><a href="">Career Test</a></li>
                            <li><a href="education-loan.html">Education Loan</a></li>
                            <li><a href="faqs.html">FAQs</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="#">About Netaji
                            <span class="span_icon"></span></a>
                            <?php $abouts = DB::table('pages')
                            ->where('page_type', 'about')
                            ->limit(9)
                            ->get();
                        ?>
                        <ul class="dropdown-menu">
                            @foreach ($abouts as $about)
                                <li><a href="{{ route('about', $about->title) }}">
                                        {{ $about->sub_title }}</a></li>
                            @endforeach
                        </ul>
                    </li>


                    <li class="nav-item"><a href="#" class="nav-link">Programs
                            <span class="span_icon"></span></a>

                            <?php $programs = DB::table('course_tbl')
                            ->select('program')
                            ->where('is_deleted', '1')
                            ->groupBy('program')
                            ->orderBy(DB::raw('count(id) '), 'DESC')
                            ->get(); ?>
              
                        <ul class="dropdown-menu">
                            @foreach ($programs as $program)
                            <li> <a class="color-orange text-capitalize"
                                href="{{ route('program', strtolower(str_replace(' ', '-', $program->program))) }}"><b
                                    >
                                    <?php echo $program->program; ?>
                                </b></a> </li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="nav-item"><a href="#" class="nav-link">Infrastructure
                        <span class="span_icon"></span></a>
                    <?php $infrastructures = DB::table('pages')
                        ->where('page_type', 'infrastructure')
                        ->limit(9)
                        ->get();
                    ?>
                    <ul class="dropdown-menu">
                        @foreach ($infrastructures as $infrastructure)
                            <li><a href="{{ route('infrastructure', $infrastructure->title) }}">
                                    {{ $infrastructure->sub_title }}</a></li>
                        @endforeach
                    </ul>
                </li>

                   

                    <li class="nav-item hidden-xs"><a class="nav-link" href="admission-procedure-domestic.html">
                            Placement</a>
                        <ul class="dropdown-menu">
                            <li><a href="">Placements</a></li>
                            <li><a href="">Appointment Letter</a></li>
                            <li><a href="education-loan.html">Our Esteemed Recuters</a></li>

                        </ul>
                    </li>

                    <li class="nav-item hidden-xs"><a class="nav-link" href="admission-procedure-domestic.html">
                            Student</a>
                        <ul class="dropdown-menu">
                            <li><a href="">Anti Ragging Cells</a></li>
                            <li><a href="">Anti Discriminatory Cell</a></li>
                            <li><a href="education-loan.html">Academic Calendar</a></li>

                        </ul>
                    </li>

                    <li class="nav-item hidden-xs"><a class="nav-link" href="admission-procedure-domestic.html">
                            Gallery</a>
                        <ul class="dropdown-menu">
                            <li><a href="">University Gallery</a></li>
                            <li><a href="">Media Gallery</a></li>

                        </ul>
                    </li>

                    </li>

                    <li class="nav-item"><a class="nav-link" href="contact_us.html">Contact</a></li>

                    <li class="nav-item"><a class="nav-link apply_btn" href="apply-now.html">Apply Online</a>
                    </li>
                </ul>