@php 
$args = [
    'post_type' => 'project',
    'meta_key' => 'team_member',
    'meta_value' => get_the_ID(),
    'posts' => -1,
];
$the_query = new WP_Query($args);
@endphp
@if($the_query->have_posts())
    <section id='featured-projects'>
        <h1>Featured Projects</h1>
        <div class='row'>
            @while($the_query->have_posts())
                @php $the_query->the_post(); @endphp
                <div class="col-md-4 post">
                    @if(has_post_thumbnail())
                        <img src="{{get_the_post_thumbnail_url()}}" />
                    @else
                        <div class="imageSpacer"></div>
                    @endif
                    
                    <a href="{{get_the_permalink()}}">
                        {{get_the_title()}}
                    </a>
                    <div class="post-footer">
                        
                        @php
                            $project_types = strip_tags (get_the_term_list( get_the_ID(), 'project-type', ' ',' '));
                            $project_types = str_replace('All', '', $project_types);    
                        @endphp
                        <div class="date">{{$project_types}}</div>
                    </div>
                </div>
            @endwhile
        </div>
    </section>
@endif