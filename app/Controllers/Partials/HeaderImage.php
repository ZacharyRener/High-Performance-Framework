<?php

namespace App\Controllers\Partials;

trait HeaderImage {

    public function banner_height() {
        return get_field('top_banner_height', $this->parent_id());
    }

    public function banner_image() {
        return get_field('page_top_banner_image', $this->parent_id());
    }

    public function banner_position() {
        return get_field('top_banner_position', $this->parent_id());
    }

}