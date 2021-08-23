<div class='row about-body-section popular-posts'>
    <div class='container'>
        <div class='title'>
            <strong>More Insights From This author</strong>
        </div>
        <div class='posts'>
            @if($get_popular_posts->have_posts())
                <div class="blogs about-body">
                @while($get_popular_posts->have_posts())
                    @php $get_popular_posts->the_post(); @endphp
                    
                    <div class="col-md-4 post">
                        @if(!empty(get_the_post_thumbnail_url()))
                            <img src="{{get_the_post_thumbnail_url()}}">
                        @else
                            <div class='imageSpacer'></div>
                        @endif
                        <div class="post-footer">
                            <div class="date">
                                {{get_the_date('F j, Y')}}
                            </div>
                        </div>
                        <a href="{{get_the_permalink()}}">
                            {{get_the_title()}}
                        </a>
                        <div class="excerpt">
                            {{ get_the_author() }}
                        </div>
                    </div>

                @endwhile
                </div>
            @endif
        </div>
    </div>
</div>