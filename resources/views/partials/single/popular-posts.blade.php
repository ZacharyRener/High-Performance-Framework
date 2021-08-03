<div class='row about-body-section popular-posts'>
    <div class='container'>
        <div class='title'>
            <strong>Most popular posts</strong>
        </div>
        <div class='posts'>
            @if($get_popular_posts->have_posts())
                @while($get_popular_posts->have_posts())
                    @php $get_popular_posts->the_post(); @endphp

                    <div class='post'>
                        <a href='{{get_the_permalink()}}'>{{get_the_title()}}</a>
                    </div>

                @endwhile
            @endif
        </div>
    </div>
</div>