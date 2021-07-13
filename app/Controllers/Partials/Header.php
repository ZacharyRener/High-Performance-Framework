<?php

namespace App\Controllers\Partials;

trait Header {

    public function social_media_list_items() {

        $html = "";

        if(have_rows('social_media', 'options')):
            while(have_rows('social_media', 'options')): the_row();
                $link = get_sub_field('link');
                $icon_name = get_sub_field('icon_name');
                $html .= "<li>
                  <a target='_blank' href='$link'>$icon_name</a>
                </li>";
            endwhile;
        endif;

        return $html;

    }

    public function has_logo() {
        return get_field('logo', 'options') || get_field('logo_svg_code', 'options');
    }

    public function uses_svg() {
        return get_field('enable_svg_logo', 'options');
    }

    public function logo_svg() {
        return get_field('logo_svg_code', 'options');
    }

    public function site_logo() {
        return get_field('logo', 'options');
    }

    public function uses_tray_menu() {
        return get_field('enable_tray_menu', 'options');
    }

}