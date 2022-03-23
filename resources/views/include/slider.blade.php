    <!-- Intro Header -->
    <header class="masthead mydiv">
        <div id="carouselBanner" class="owl-carousel owl-theme">



            <?php $sliders = DB::table('slider_tbl')->where('is_deleted','1')->get(); ?>
            @foreach ($sliders as $slider)
                <a id="homebanner1_RepBannerImg_ctl03_anch">
                    <div id="homebanner1_RepBannerImg_ctl03_divtop" class="item"
                        style="background-image: url({{ $url . 'slider/' . $slider->image_name }})">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="carousel-content row align-items-end">
                                    <div class="col">
                                        <h2>{{ $slider->title}}</h2>
                                        <p>{{ $slider->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <aside class="right_bar">
            <a class="right_bar_toggler" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a class="right_bar_admission" href="javascript:void(0);">Admissions <i class="fa fa-long-arrow-up"></i>
            </a>
            <a class="right_bar_search" href="javascript:void(0);">
                <i class="fa fa-search"></i>
            </a>
        </aside>
    </header>
    <!-- Study Section -->
