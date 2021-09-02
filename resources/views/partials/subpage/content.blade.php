<div class="col-md-8 col-md-offset-1 col-sm-8 body-txt pull-right about-body">
    @include('partials.subpage.sticky-sections')
    @if(have_posts())
        @while(have_posts()) @php the_post(); @endphp
            @if(get_post_type() == 'news' || get_post_type() == 'post' || get_post_type() == 'position')
                <h1>{!! get_the_title() !!}</h1>
            @endif
            @if(get_post_type() == 'post')
                @php
                $author = get_the_author();
                if(get_field('team_member')){
                    $author = get_the_title(get_field('team_member'));
                }
                @endphp
                <p class='author'>{{ get_the_date() }}<span class='divider'>|</span>{{$author}}</p>
                @if(has_post_thumbnail())
                {!! get_the_post_thumbnail() !!}
                @endif
            @endif
            <span class='wrapper'>@php the_content(); @endphp</span>
            @if(get_post_type() == 'post' || get_post_type() == 'news')
                @php
                    $cat_string = '';
                    $post_cats = wp_get_post_categories(get_the_ID());
                    foreach($post_cats as $c) {
                        $cat = get_category($c);
                        $catLink = get_category_link($cat->cat_ID);
                        $cat_string .= $cat_string == '' 
                            ? "<a href='/insights/articles/'>$cat->name</a>"
                            : ", <a href='/insights/articles/'>$cat->name</a>";
                    }
                @endphp
                <div class='categories'>
                    <strong>Categories: </strong>{!! $cat_string !!}
                </div>
            @endif
            @if(get_post_type() == 'position')
                <p><strong class='mb-0 mt-5'>Apply Now:</strong></p>
                {!! do_shortcode('[gravityforms id=4 title=false]') !!}
            @endif
            
            @if(get_post_type() == 'post' && $assign_this_to_a_team_member)
                <div class="featured-content-wrapper sidebar-box">
                    <div class="featured-content">
                        <div class="col-xs-12">       
                            <div class="fpo-img pull-left">
                                <img src="{{get_the_post_thumbnail_url($team_member)}}" style="margin-bottom: 30px;">
                            </div>
                            <p>
                                <strong>About The Author</strong>
                                {!!strip_tags(get_the_excerpt($team_member))!!}
                            </p>              
                        </div>
                    </div>
                </div>
            @endif
        @endwhile
    @else 
        <div class="alert alert-warning">
            {{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
    @endif
    
    @if(get_post_type()=='post')
        @include('partials.single.popular-posts')
        <strong class='share'>Share</strong>
        {!! do_shortcode('[addtoany]') !!}
    @endif
    @if(get_post_type() == 'news')
        <strong class='share'>Share</strong>
        {!! do_shortcode('[addtoany]') !!}
    @endif
</div>