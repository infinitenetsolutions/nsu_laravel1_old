<x-layout1>

    @slot('body')
        <div id="ctl00_ContentPlaceHolder1_UpdatePanel2">
            <section class="inner-page">
                <div class="inner-hadding">
                    <div class="container">
                        <div class="breadcrumb">
                            <a href="{{route('index')}}">Home</a>
                          <a href="#">Gallery</a>
                          <a href="#">Unversity Gallery</a>
                        </div>
                    </div>
                    <div class="container">

                        <div class="top-menu-sec">
                            <h4>Gallery</h4>

                            <ul>
                                <li><a href="{{ route('image-gallery') }}">University Gallery</a></li>
                                <li><a href="{{ route('media-gallery') }}">Media Gallery</a>
                                </li>
                            </ul>
                        </div>
                    
                            <div class="p-3 ">
                                <h2> <i class="fa fa-university" aria-hidden="true"></i>
                                    University Gallery </h2>
                                <a class="row p-2" href="{{ route('index') }}">
    
                                    <img class="logo-sm" src="{{ asset('/images/logo.png') }}" alt="">
                                    <p class="tag_line_bold mt-1 ">Netaji Subhas University</p>
                                </a>
                            </div>
                    </div>
                </div>
                <section class="inner_section event_list">
                    <div class="container">
                        <ul class="row">
                            @foreach($gallery_title as $title)

                                <?php $image = DB::table('gallery_tbl')->where('title',$title->title)->first();
                      
                            ?>

                                @if(strlen($image->link) < 30)
                                    <li class="col-12 col-sm-6 col-md-3"><a
                                            href="{{ route('image_gallery_details',$title->title) }}"
                                            title="{{ $image->title }}"><img
                                                src="{{ $url . 'gallery/' . $image->image_name }}"
                                                alt=""></a>
                                        <h5> {{ $image->title }}</h5>

                                    </li>
                                @endif
                            @endforeach
                        </ul>
                        <div class="text-center">

                            <nav id="ctl00_ContentPlaceHolder1_divpaging" aria-label="Page navigation example">

                            </nav>
                        </div>
                    </div>
                </section>
            </section>

        </div>
    @endslot
</x-layout1>
