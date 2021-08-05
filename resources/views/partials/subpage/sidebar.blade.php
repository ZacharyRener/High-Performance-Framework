<div class="col-md-3 col-sm-4">

    <aside id="secondary" class="widget-area" role="complementary">
        
        {!! $child_pages !!}
            
        {{ $default_sidebar }}
    
        @if(get_post_type() == "project")
            @include('partials.single.project-sidebar')
        @endif

        @if(get_field('additional_sidebar_content'))
            {!! the_field('additional_sidebar_content') !!}
        @endif

        @if(get_post_type() == "post" || get_page_template_slug() == 'views/template-library.blade.php')
            @include('partials.subpage.blog-sidebar')
        @endif

        <div class='offer-spacer'></div>
        <div class='offer-container'>
            @include('partials.subpage.offers')
        </div>

    </aside>
</div>