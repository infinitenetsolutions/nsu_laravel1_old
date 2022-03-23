<?php // total number of courses
$total_teacher = DB::table('faculty_tbl')->count();
// total number of teachers getting
$total_courses = DB::table('course_tbl')->count(); ?>
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
                    distinguished faculty, illustrious alumni, varied co-curricular activities and modernn <a
                        class="text-primary" href="{{ route('about', 'who-we-are') }}">view more</a>
                </p>

            </div>
            <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                <ul>
                    <li>
                        <h3 class="wow fadeInDown">{{ $total_courses }}+</h3>
                        <span class="wow fadeInUp">Courses</span>
                    </li>
                    <li>
                        <h3 class="wow fadeInDown">15000+</h3>
                        <span class="wow fadeInUp"> Student </span>
                    </li>
                    <li>
                        <h3 class="wow fadeInDown">{{ $total_teacher }}+</h3>
                        <span class="wow fadeInUp">Quilified Teachers</span>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</section>
