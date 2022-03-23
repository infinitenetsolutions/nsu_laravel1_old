<div class="block">
    <section class="academia-sec4"
        style="background-image: url('{{ $url . 'about/' . $data->header_image }}')">
        <div class="container">
            <?php $affiliations = DB::table('affiliated_tbl')->get(); ?>
            <div class="academia-sec4">
                <h2 class=" p-2 carousel-inner mt-5 text-white ">Our Affliation<h2>
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