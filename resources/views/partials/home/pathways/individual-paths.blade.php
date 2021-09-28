<div class='pathway-wrapper bg-default'>
    <div class='container'>
        <div class='small-headline'>What We Do</div>
        <div class="col-sm-12 a-e-p-buttons row" @if($pathways_style == 'NONE') {{ 'style="display: none !important;"' }} @else {{ '' }} @endif >
        @foreach($homepage_ind_pathways as $pathway)

            @php
            $indtext = $pathway->ind_text;
            $indbutton_link = $pathway->ind_button_link;
            $indbutton_border = $pathway->border_width;
            $indbutton_border_color = $pathway->border_color;
            $pathway_icon = $pathway->pathway_icon;
            $pathway_bg = $pathway->pathway_bg;
            $backgroundImage = !empty($pathway->pathway_bg)
                ? "background-image: url($pathway->pathway_bg);"
                : '';
            @endphp

            <div class="col-md-6 col-sm-6 pathway">
                <style>
                    @if($loop->index == 0)
                    .bg-default {
                        {{$backgroundImage}}
                    }
                    @endif
                    .bg-{{$loop->index}} {
                        {{$backgroundImage}}
                    }
                </style>
                <div class='wrapper'>
                    <a style="border-width: {{ $indbutton_border }}px !important; border-color: {{ $indbutton_border_color }} !important;" href="{{ $indbutton_link }}">
                        <span>
                            @if(!empty($pathway_icon)) 
                                {!! '<img src="'.$pathway_icon.'"><br />' !!}
                            @endif
                            <div class='content' hover-bg="bg-{{$loop->index}}">{{ $indtext }}</div>
                        </span>
                    </a>
                </div>
            </div>

        @endforeach		
        </div>
    </div>
</div>