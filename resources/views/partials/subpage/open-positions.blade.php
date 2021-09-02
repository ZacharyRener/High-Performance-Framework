<div class="col-md-8 col-md-offset-1 col-sm-8 body-txt pull-right about-body">
    @include('partials.subpage.sticky-sections')
    {!! get_the_content() !!}
    @while($job_positions->have_posts()) @php $job_positions->the_post(); @endphp

        <div class='position'>
            <a href='{{ get_the_permalink() }}'><p class='title'>{!! get_the_title() !!}</p></a>
            <p class='excerpt'>{{ App::getSnippet(get_the_excerpt(), 50) }}</p>
            <a href='{{ get_the_permalink() }}' class='button'>Learn More</a>
        </div>

    @endwhile
</div>