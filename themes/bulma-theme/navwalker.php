<?php
/**
 * Bulma-Navwalker
 *
 * @package Bulma-Navwalker
 */

/**
 * Class Name: Navwalker
 * Plugin Name: Bulma Navwalker
 * Plugin URI:  https://github.com/Poruno/Bulma-Navwalker
 * Description: An extended Wordpress Navwalker object that displays Bulma framework's Navbar https://bulma.io/ in Wordpress.
 * Author: Carlo Operio - https://www.linkedin.com/in/carlooperio/, Bulma-Framework
 * Author URI: https://github.com/wp-bootstrap
 * License: GPL-3.0+
 * License URI: https://github.com/Poruno/Bulma-Navwalker/blob/master/LICENSE
 */


 class Navwalker extends Walker_Nav_Menu {

    public function start_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        $submenu_class = ($depth > 0) ? 'sub-menu' : '';
        $output .= "$indent<div class='navbar-dropdown $submenu_class'>";
    }

    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $is_current_item = 'class="active"';
        $liClasses = 'navbar-item ';

        $hasChildren = $args->walker->has_children;
        $liClasses .= $hasChildren ? " has-dropdown is-hoverable" : "";

        if ($hasChildren) {
            $output .= "\n$indent<div class='".$liClasses."'>";
            $output .= "\n$indent\t<a class='navbar-link' href='".$item->url."'>".$item->title."</a>";
        }
        else {
            $output .= "\n$indent<a class='".$liClasses."' href='".$item->url."'>".$item->title;
        }

        // Adds has_children class to the item so end_el can determine if the current element has children
        if ($hasChildren) {
            $item->classes[] = 'has_children';
        }
    }

    public function end_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $indent = str_repeat("\t", $depth);
        if (in_array("has_children", $item->classes)) {
            $output .= "\n$indent</div>";
        }
        $output .= "\n$indent</a>";
    }

    public function end_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</div>";
    }
}


?>