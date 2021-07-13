<?php

namespace App\Controllers\Partials;
use WP_Query;

trait Experience {

    public function mainProject() {

        $featured = get_post(get_field('featured_project'), ARRAY_A);

        return [
            'title' => get_the_title(get_field('featured_project')),
            'excerpt'=> $featured['post_content'],
            'image' => get_the_post_thumbnail_url(get_field('featured_project')),
            'link' => get_the_permalink(get_field('featured_project'))
        ];

    }

    public function recentProjects() {

        $args = [
            'post_type' => 'project',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' =>  'ASC',
            'offset' => 1,
        ];

        $query = new WP_Query($args);

        return $query;

    }

}