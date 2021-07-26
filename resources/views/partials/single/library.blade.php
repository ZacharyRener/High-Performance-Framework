<?php

    $isVideo = has_term('videos', 'library_category');

?>

<div class="col-md-8 col-md-offset-1 col-sm-8 body-txt pull-right about-body">
    <div class="blog-view">
        <div class="blog">
            <?php

            $featured_src;
            $no_content = true;
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post(); ?>

                    <div class="row">
                        <div class="col-md-12"><h1><?php the_title(); ?></h1></div>
                    </div>

                    <div class="row">
                        <?php 
                        if ( strlen(get_field("on_page_text")) != 0  ) {
                            $contentClass = 'col-md-7';
                            if($isVideo)
                                $contentClass = 'col-md-12';
                            echo '<div class="'.$contentClass.'">';
                                $no_content = false;
                                if ( has_post_thumbnail() ) { 
                                    $featured_src = get_the_post_thumbnail_url(); 
                                } 
                            if (get_field("on_page_text") != "") { echo get_field("on_page_text"); }
                            echo '</div>';
                        }

                        if($isVideo == false) {

                            echo '<div style="margin-top:25px;background-color: #e1f5fe;padding-left:0px;padding-right:0px;" class="col-md-5">';
                                $tax_name = wp_get_post_terms(get_queried_object()->ID,'library_category',array("fields" => "names"));
                                echo '<h4 style="padding: 20px 25px;font-weight: 700;">Free Download</h4>';  ?>
                                <a href="<?php echo $featured_src; ?>" rel="lightbox"  >
                                    <img style="padding:26px; padding-top:0px;" src="<?php echo $featured_src; ?>" />
                                </a>
                                <?php 
                                echo do_shortcode('[gravityform id=2  title=false field_values="media_file='.get_field("file_attachment").'&wpaper_name='.get_field("name_of_attachment").'"]');
                            echo '</div>';

                        }

                    ?></div><?php
                } // end while
            } // end if
            ?>           
        </div>
    </div>
</div>