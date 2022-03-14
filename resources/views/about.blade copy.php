<x-layout1>
    @slot('body')
        <section class="inner-page">
            <div class="inner-hadding">
                <div class="inner-hadding">
                    <div class=" ml-5 mr-5">
                        <div class="top-menu-sec">
                            <ul>
                                <h4>About</h4>
                                @foreach ($quicks as $quick)
                                    <li><a href="{{ route('about', $quick->title) }}">{{ $quick->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="p-2 ">
                            <h2>{{ $data->title }}</h2>
                            <a class="row p-2" href="{{ route('index') }}">
                                <img class="logo-sm" src="{{ asset('/images/logo.png') }}" alt="">
                                <p class="tag_line_bold mt-1 ">Netaji Subhas University</p>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row ml-3 mr-3 ">
                <div class="col-sm-9 ">
                    <div class="mt-3 mb-3">
                        @if ($data->header_image != '')
                            <img src="{{ $url . 'about/' . $data->header_image }}" class="img-fluid">
                        @endif

                    </div>
                    <div class=" mb-5 ">

                        <p class="text-justify"><?php echo substr($data->description, 0, 1000); ?> </p>
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="{{ $url . 'about/' . $data->image_name }}" class="img-fluid">

                            </div>
                            <div class="col-sm-6">
                                <img src="{{ $url . 'about/' . $data->image_name1 }}" class="img-fluid">

                            </div>
                        </div>
                        <p class="text-justify"><?php echo substr($data->description, 1000); ?> </p>
                    </div>

                </div>
                <div class="col-sm-3">
                    <section class="aside-section">
                        <div class="bg-xs-dark_gray m-3 p-3">
                            <h3 class="text-center text-white">Quick Links</h3>
                            <hr>
                            <!-- <div class="aside-section-headings"></div> -->

                            <ul class="bullet_list">
                                @foreach ($quicks as $quick)
                                    <li> <b class="text-white ">
                                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                            <a class="text-capitalize text-dark"
                                                href="{{ route('about', $quick->title) }}">{{ $quick->title }}</a>
                                            <hr>

                                        </b>
                                    </li>
                                @endforeach

                            </ul>


                        </div>


                    </section>
                   @include('include.admission')
                </div>
            </div>
            </div>
            </div>




            <div class="block">
                <section class="academia-sec4"
                    style="background-image: url('{{ $url . 'about/' . $data->header_image }}')">
                    <div class="container">
                        <?php $affiliations = DB::table('affiliated_tbl')->get(); ?>
                        <div class="academia-sec4">
                            <h2 class=" p-2 ">Our Affliation<h2>
                                    <ul class="row">
                                        @foreach ($affiliations as $affiliation)
                                            <li class="col-12 col-md-4 col-lg-4 col-xl-4">
                                                <div class="colm-ac-sec4 p-3 text-center ">
                                                    <img class="h-150px"
                                                        src="{{ $url . 'affiliated/' . $affiliation->image_name }}"
                                                        alt="">
                                                    <div class="border p-2">
                                                        <h4>{{ $affiliation->title }}</h4>

                                                        <p>{{ $affiliation->sub_title }}</p>
                                                    </div>


                                                </div>
                                            </li>
                                        @endforeach

                                    </ul>
                        </div>
                    </div>
                </section>
            </div>


            <section class="academia-sec6">
                <div class="container">
                    <div class="row">
                        <div class="col-12 padAdjust">

                            <div class="row career no-gutters">
                                <div class="col-md-12">
                                    <div class="ac-sec5-download">
                                        <h3 style="margin-top:26px;">For more details please visit UGC Website</h3>
                                        <br /><br />
                                        <a href="pdf/Noida_Anti_Ragging_2021-22.pdf" target="_blank"><span>UGC</span></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </section>
    @endslot
</x-layout1>
