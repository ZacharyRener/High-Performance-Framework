<?php

namespace App\Controllers\Partials;
use WP_Query;

trait Posts {

    public function getPopularPosts() {

        $args = [
            'post_type' => 'any',
            'meta_key' => 'team_member',
            'meta_value' => $team_member,
            'posts' => -1,
        ];

        return new WP_Query($args);

    }

}