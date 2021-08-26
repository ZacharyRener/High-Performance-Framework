<div class="pathways @if($pathways_style == 'FULLBOX') {{ "fullwidth" }} @endif  slide-up" @if($pathways_style == 'NONE') {{ 'style="padding-top: 80px !important;"' }} @else {{ '' }} @endif >
    @if(!empty($pathway_heading))
        <p class='headline'>{{$pathway_heading}}</p>
        <hr/>
    @endif
    

        @if($pathways_style == 'INDBOX')
            @include('partials.home.pathways.individual-paths')
        @endif

        @if($pathways_style == 'SINGBOX')
            @include('partials.home.pathways.single-box-paths')
        @endif
        
        @if($pathways_style == 'FULLBOX')
            @include('partials.home.pathways.full-width-paths')
        @endif

 
</div>