@foreach($homepage_ind_pathways as $pathway)

    @php
    $indtext = $pathway->ind_text;
    $indbutton_link = $pathway->ind_button_link;
    $indbutton_border = $pathway->border_width;
    $indbutton_border_color = $pathway->border_color;
    $pathway_icon = $pathway->pathway_icon;
    $pathway_bg = $pathway->pathway_bg;
    $backgroundImage = !empty($pathway->pathway_bg)
        ? "background: url($pathway->pathway_bg);"
        : '';
    $excerpt = $pathway->excerpt;
    @endphp
				
    <div class="col-md-3 col-sm-6 a-button">
        <div class='wrapper'>
            <a style="border-width: {{ $indbutton_border }}px !important; border-color: {{ $indbutton_border_color }} !important; {{$backgroundImage}}" href="{{ $indbutton_link }}">
                <span>
                    @if(!empty($pathway_icon)) 
                        {!! '<picture><img src="'.$pathway_icon.'" /></picture>' !!}
                    @endif
                    <div class='content'>{{ $indtext }}</div>
                    <div class='excerpt'>{{ $excerpt }}</div>
                    <div class='button-wrapper'>
                        <a class='button' href='{{ $indbutton_link }}'>Learn More</a>
                    </div>
                </span>
            </a>
        </div>
    </div>

@endforeach		
