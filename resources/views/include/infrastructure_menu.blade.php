<div class="mega_menu pt-5 hidden-xs">
    <div class="row no-gutters scroll-pan ">
        <div class="col-md-12 pr-2">
            <div class="row no-gutters menu_col4 infr-menu ">
                <?php $infrastructures = DB::table('pages')
                    ->where('page_type', 'infrastructure')
                    ->get();
                ?>
                @foreach ($infrastructures as $infrastructure)
                    <div class="col-md-3 section ">
                        <div class="border1">
                            <a href="{{ route('infrastructure', $infrastructure->title) }}"> <img  src="{{ $home_url . 'infrastructure/' . $infrastructure->image_name }}" class="img-fluid">
                                <div class="menu_boxx1">
                                    {{ $infrastructure->sub_title }}
                                </div>
                            </a>
                        </div>
                    </div> 
                @endforeach
            </div>

        </div>



    </div>
</div>
