<?php

namespace App\Controllers\Partials;
use WP_Query;

trait GlobalSite {

    public function parent_id() {

        $leadershipParentId = 247;
        $libraryParentId = 649;
        $newsParentId = 247;
        $projectParentId = 712;
        $postParentId = 649;
        $careersParentId = 760;

        $parentId = wp_get_post_parent_id(get_the_ID()) == 0
            ? get_the_ID() 
            : wp_get_post_parent_id(wp_get_post_parent_id(get_the_ID())) == 0
                ? wp_get_post_parent_id(get_the_ID())
                : wp_get_post_parent_id(wp_get_post_parent_id(get_the_ID()));

        if(get_post_type() == "leadership")
            $parentId = $leadershipParentId;

        if(get_post_type() == "news")
            $parentId = $leadershipParentId;

        if(get_post_type() == "project")
            $parentId = $projectParentId;

        if(get_post_type() == "post" || get_post_type() == 'library')
            $parentId = $postParentId;   

        if(get_post_type() == "position")
            $parentId = $careersParentId;

        if($this->uri() == '/insights/guides/')
            $parentId = $libraryParentId;

        if(is_search())
            $parentId = $postParentId;

        return $parentId;
        
    }

    public static function responsive_wp_get_attachment_image($att_id, $size = 'project-thumb', $attr = array())
    {
        return preg_replace('/(width|height)="\d*"\s/', "", wp_get_attachment_image($att_id, $size, false, $attr));
    }

    public function child_pages() {

        $leadershipParentId = 247;
        $libraryParentId = 649;
        $newsParentId = 247;
        $projectParentId = 712;
        $postParentId = 649;
        $careersParentId = 760;

        $parentId = wp_get_post_parent_id(get_the_ID()) == 0 ?
            get_the_ID() : wp_get_post_parent_id(get_the_ID());

        if(get_post_type() == "leadership")
            $parentId = $leadershipParentId;

        if(get_post_type() == "news")
            $parentId = $leadershipParentId;

        if(get_post_type() == "project")
            $parentId = $projectParentId;

        if(get_post_type() == "post" || get_post_type() == 'library')
            $parentId = $postParentId;   

        if(get_post_type() == "library")
            $parentId = $libraryParentId;

        if(get_post_type() == "position")
            $parentId = $careersParentId;

        if(is_404()){
            $parentId = -1;
        }

        $mainLink = get_the_permalink($parentId);
        $mainTitle = get_the_title($parentId);

        $args = array(
            'posts_per_page' => -1,
            'order' => 'ASC',
            'post_type' => 'page',
            'post_parent' => $parentId,
            'post_status' => 'publish'
        );
        $children = get_children($args);

        

        $output = '';

        if($parentId == $projectParentId)
            $mainTitle = 'Projects';
        if(is_404())
            $mainTitle = 'Page Not Found';
        else if(is_search())
                $mainTitle = 'Search';
        $output .= "

        <div class='navigation'>

            <a href='$mainLink'>$mainTitle</a>";
            $output .= "<ul>";
            if($children):
                
                foreach($children as $child):
                    $pageId = $child->ID;
                    $childLink = get_the_permalink($child->ID);
                    $childTitle = get_the_title($child->ID);
                    $activeClass = $child->ID == get_the_ID() 
                        || $child->ID == $parentId
                            ? 'active' 
                            : '';
                    
                    $args = array(
                        'posts_per_page' => -1,
                        'order' => 'ASC',
                        'post_type' => 'page',
                        'post_parent' => $child->ID,
                        'post_status' => 'publish'
                    );
                    $children = get_children($args);
                    $hasChildrenClass = $children 
                        ? 'has-children'
                        : '';
                    $output .= "
                        <li class='$hasChildrenClass $activeClass'><a class='$activeClass sidebar-id-$pageId' href='$childLink'>$childTitle</a>
                    ";
                    if($children):
                        $output .= "<ul class='sub-menu'>";
                        foreach($children as $child):
                            $childLink = get_the_permalink($child->ID);
                            $childTitle = get_the_title($child->ID);
                            $activeClass = $child->ID == get_the_ID() 
                                || $child->ID == $parentId
                                    ? 'active' 
                                    : '';
                            $output .= "
                                <li><a class='$activeClass' href='$childLink'>$childTitle</a></li>
                            ";
                        endforeach;
                        $output .= "</ul>";
                    endif;
                    $output .= "</li>";
                endforeach;
                
            endif;
            $output .= "</ul>";
        $output .= "
        </div>

        ";

        return $output;
        
    }

    public static function getSnippet( $str, $wordCount = 10 ) {
        return implode( 
            '', 
            array_slice( 
            preg_split(
                '/([\s,\.;\?\!]+)/', 
                $str, 
                $wordCount*2+1, 
                PREG_SPLIT_DELIM_CAPTURE
            ),
            0,
            $wordCount*2-1
            )
        );
    }

    public function uri() {
        return $_SERVER['REQUEST_URI'];
    }

    public function default_sidebar() {
        return dynamic_sidebar( 'default-sidebar' );
    }

    public function theme_url() {
        return get_stylesheet_directory_uri();
    }

}
