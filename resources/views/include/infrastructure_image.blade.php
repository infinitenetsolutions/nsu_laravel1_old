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
                    <?php $sliders = DB::table('slider_tbl')->get(); ?>
                    @foreach ($sliders as $slider)
                        <div id="figurebanner1_repfigurebanner_ctl01_divfigure" class="carousel-item">
                            <img class="img-fluid" src=" {{ $url . 'slider/' . $slider->image_name }} "
                                alt="2fblg_lucknow.jpg">
                            <div class="banner_text"></div>
                        </div>
                    @endforeach



                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                        data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span> </a><a class="carousel-control-next"
                        href="#carouselExampleIndicators" role="button" data-slide="next"><span style="    margin-right: -419px;"
                            class="carousel-control-next-icon" aria-hidden="true">
                        </span><span class="sr-only">Next</span> </a>
                </div>


            </div>

        </div>
</section>
