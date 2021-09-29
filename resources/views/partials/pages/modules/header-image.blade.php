<div class="banner" style="height: {{ $banner_height }}px !important;">

    <div style="background-image: url('{{ $banner_image }}'); 
            background-position: {{ $banner_position }} !important; 
            height: {{ $banner_height }}px !important;" 
        class="slide-img banner-bg-img" >

        @if(get_field('enable_cta'))
            <div class='floating-cta'>
                <div class='cta container'>
                    <p>{!!$cta_text!!}</p>
                    <a href='{{$cta_button_link}}' class='button arrow red'>{!!$cta_button_text!!}</a>
                </div>
            </div>
            <div class='background-dimmer'></div>
        @endif

    </div>

</div>