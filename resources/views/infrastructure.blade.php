<x-layout1>
    @slot('body')
        <section class="inner-page">
            <div class="inner-hadding">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="{{ route('index') }}">Home</a>
                        <a href="#">Infrastructure</a>
                        <a href="#">{{ $data->sub_title }}</a>
                    </div>
                </div>
                <div class="container">


                    <div class="top-menu-sec">
                        <ul>
                            <h4>Infrastructure</h4>

                            @foreach ($quicks as $quick)
                                <li class="{{ Request::path() == $quick->title ? 'active' : '' }}"><a
                                        href="{{ route('infrastructure', $quick->title) }}">{{ $quick->title }}</a></li>
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
            <section class="inner_section pt-3 infra_play sangathan">
                <div class="container">
                    <p><?php echo substr($data->description, 0, 290); ?>.</p>
                </div>
                    @if (strlen($data->permalink) > 30)
                        <div class="row mt-2 mb-4 pb-2">
                            <div class="col-md-12"> <iframe width="100%" style="max-height:400px; min-height:400px"
                                    src="{{ str_replace($data->permalink, 'watch?v=', 'embed/') }}"
                                    allowfullscreen=""></iframe></div>
                        </div>
                    @endif


                </div>
                <br>
                <style>
                    .block::before {
                        /* background-color: rgba(33, 35, 49, 0.7); */
                        height: 450px;

                    }

                </style>
                <div class="" style="background: url({{ $url . 'infrastructure/' . $data->header_image }}),#6DB3F2;
                                               background-attachment: fixed;
                                               padding:10px
                                                        ">
                    <div class=" 
                     row mt-0 mb-4 mt-5">
                        <div class="col-12 col-md-8 pr-2 text-white">
                            <p class="text-justify "><?php echo substr($data->description, 292, 500); ?>.</p>

                        </div>
                        <div class="col-12 col-md-4  ">
                            <img src="{{ $url . 'infrastructure/' . $data->image_name }}" class="infra_img_bot">
                        </div>
                        <hr>

                    </div>
                </div>
                <div class=" container row mt-3 mb-5">
                    <div class=" col-md-6 pr-2">
                        <span class="d-block bg_brown2"><img src="{{ $url . 'infrastructure/' . $data->image_name1 }}"
                                class="infra_img_bot"></span>
                    </div>

                    <div class=" col-md-6 pr-2">
                        <p class="text-justify"><?php echo substr($data->description, 500, 723); ?>.</p>
                    </div>

                    <div class=" col-md-12 mt-2">
                        <p class="text-justify"><?php echo substr($data->description, 724, 38000); ?>.</p>

                    </div>
                </div>
            </section>

        </section>



        @if ($data->title == 'transport' || $data->title == 'transports')
            <section class="inner_section pt-3 research_page">
                <div class="container-fluid accordionBlock">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="accordion" id="accordion2">

                                    @foreach ($transports as $transport)
                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse"
                                                    data-parent="#accordion2" href="#collapseOne{{ $transport->id }}">
                                                    {{ $transport->name . ' - ' . $transport->bus_no }} (Route -
                                                    {{ $transport->from . ' TO ' . $transport->to . ' VIA ' . $transport->via }}
                                                    (for - @if ($transport->type != 'none')
                                                        {{ $transport->type }}
                                                    @else
                                                    @endif)
                                                    )
                                                </a>
                                            </div>
                                            <div id="collapseOne{{ $transport->id }}" class="accordion-body collapse">
                                                <div class="accordion-inner">
                                                    <table class="table_style">
                                                        <tbody>
                                                            <tr>
                                                                <th>
                                                                    Sr.No.
                                                                </th>
                                                                <th>
                                                                    Bus Stoppages
                                                                </th>
                                                                <th>
                                                                    Schedule Time
                                                                </th>
                                                            </tr>
                                                            <?php $transportbus = DB::table('transports')
                                                                ->where('bus_id', $transport->id)
                                                                ->get();
                                                            $i = 1;
                                                            ?>
                                                            @foreach ($transportbus as $stop)
                                                                <tr>
                                                                    <td data-th="S#">
                                                                        #{{ $i++ }}
                                                                    </td>
                                                                    <td data-th="Stoppages">
                                                                        <a href="#" target="_blank"> {{ $stop->stop }}
                                                                        </a>
                                                                    </td>
                                                                    <td data-th="Time">
                                                                        <a href="#" target="_blank">{{ $stop->time }}</a>
                                                                    </td>


                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

    @endslot
</x-layout1>
