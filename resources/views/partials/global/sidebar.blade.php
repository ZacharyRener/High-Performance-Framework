<div class="col-md-3 col-sm-4">

    <aside id="secondary" class="widget-area" role="complementary">
        
        {!! $child_pages !!}

        {{ $default_sidebar }}

        @if(get_post_type() == "project")
            @include('partials.singles.modules.project-sidebar')
        @endif

        @if(get_field('additional_sidebar_content'))
            {!! the_field('additional_sidebar_content') !!}
        @endif

        @if(get_post_type() === "post" && !is_404() && !is_search())
            @include('partials.pages.modules.blog-sidebar')
        @endif

        <div class='offer-spacer'></div>
        <div class='offer-container'>
            @include('partials.pages.modules.offers')
        </div>

    </aside>
</div>