<?php
/**
 * Will add classes to create bulma menu in wordpress
 * http://bulma.io/documentation/components/nav/
 * Usage
 * wp_nav_menu(array(
 * 'theme_location'    => 'primary',
 * 'items_wrap' => '%3$s',
 * 'container_class'   => 'nav-right nav-menu',
 * 'walker'            => new bulma_walker_nav_menu
 * )); 
 * 
 */
class Bulma_Nav_Walker extends Walker_Nav_Menu {
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
        	$output .= '<div class="navbar-dropdown">';
    }

    public function end_lvl( &$output, $depth = 0, $args = array() ) {
        $output .= '</div>';
    }

    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $classes = array();
        if( !empty( $item->classes ) ) {
            $classes = (array) $item->classes;
        }

        $active_class = '';
        if( in_array('current-menu-item', $classes) ) {
            $active_class = 'is-active';
        } else if( in_array('current-menu-parent', $classes) ) {
            $active_class = 'active-parent';
        } else if( in_array('current-menu-ancestor', $classes) ) {
            $active_class = 'active-ancestor';
        }

        $url = '';
        if( !empty( $item->url ) ) {
            $url = $item->url;
        }

        $output .= '<a href="' . $url . '" class="navbar-item '. $active_class . '">' . $item->title . '</a>';
    }

    public function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= '</li>';
    }
}