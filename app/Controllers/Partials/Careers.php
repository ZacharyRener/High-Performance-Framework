<?php

namespace App\Controllers\Partials;
use WP_Query;

trait Careers {

    public function job_positions() {
        $args = [
            'post_type' => 'position',
            'posts_per_page' => -1
        ];
        return new WP_Query($args);
    }

}