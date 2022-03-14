<x-layout1>

    @slot('body')
        <div id="ctl00_ContentPlaceHolder1_UpdatePanel2">
            <section class="inner-page">
                <div class="inner-hadding">
                    <div class="container">

                        <div class="top-menu-sec">
                            <h4>Home</h4>

                            <ul>
                                <li><a href="{{ route('news1') }}">News</a></li>
                                <li><a href="{{ route('image-gallery') }}">University Gallery</a></li>
                                <li><a href="{{ route('media-gallery') }}">Media Gallery</a>
                                </li>
                            </ul>
                        </div>
                        <h2> <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                            
                            Latest News </h2>

                    </div>
                </div>
                <section class="inner_section event_list">
                    <div class="container">
                        <ul class="row">
                            @foreach ($news as $image)
                      

                                <li class="col-12 col-sm-6 col-md-3"><a
                                        href="{{ route('image_gallery_details', $image->title) }}"
                                        title="{{ $image->title }}"><img
                                            src="{{ $url . 'latestnews/' . $image->images }}" alt=""></a>
                                    <h5> {{ $image->title }}</h5>

                                </li>
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
