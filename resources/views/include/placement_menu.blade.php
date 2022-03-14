<div class="mega_menu pt-5 hidden-xs">

<div class="row no-gutters scroll-pan ">
    <div class="col-md-12 pr-2">
        <div class="row no-gutters menu_col4 infr-menu ">

            <?php $infrastructures = DB::table('pages')
                ->where('page_type', 'placement')
                ->get();
            ?>
            @foreach ($infrastructures as $infrastructure)
            <div class="col-md-3 section ">
                <div class="border1">
                    <a href="{{ route('placement', $infrastructure->title) }}"> <img  src="{{ $home_url . 'placement/' . $infrastructure->image_name }}" class="img-fluid">
                        <div class="menu_boxx1">
                            {{ $infrastructure->sub_title }}
                        </div>
                    </a>
                </div>
            </div> 
            @endforeach

            <div class="col-md-3 section ">
                <div class="border1">
                    <p style="font-size:50px"> <i class="fas fa-user"></i> </p>

                    <a href="{{ route('appointment') }}">

                        <div class="menu_boxx1">
                            Appointment Letter
                        </div>
                    </a>
                </div>
            </div>



            <div class="col-md-3 section ">
                <div class="border1">
                    <p style="font-size:50px"> <i class="fas fa-user"></i> </p>

                    <a href="{{ route('requiters') }}">

                        <div class="menu_boxx1">
                            Our Requiters
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 section ">
                <div class="border1">
                    <p style="font-size:50px"> <i class="fas fa-user"></i> </p>

                    <a href="{{ route('placement-contact') }}">
                        <div class="menu_boxx1">
                            Placement Contact
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
</div>