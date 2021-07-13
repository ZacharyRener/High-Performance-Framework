<?php

namespace App\Controllers\Partials;

trait Footer {

    public function copyright_text() {
        return get_field('footer_copyright', 'options')
            ? get_field('footer_copyright', 'options')
            : '&copy; ' . date( 'Y' ) . ' ' . get_bloginfo() . '. All Rights Reserved';
    }

    public function footer_has_disclaimer() {
        return get_field('enable_footer_disclaimer', 'options')
            ? get_field('enable_footer_disclaimer', 'options')
            : false;
    }

    public function footer_disclaimer() {
        return get_field('footer_disclaimer', 'options')
            ? get_field('footer_disclaimer', 'options')
            : '';
    }

    public function footer_menu() {

        $html = "";
        
        if(have_rows('footer_menu', 'options')){
            while(have_rows('footer_menu', 'options')){
                the_row();
                $title = get_sub_field('title');
                $link = get_sub_field('link');
                $html .= "<a href='$link'>$title</a>";
            }
        }

        return $html;

    }

}