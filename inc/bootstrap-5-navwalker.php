<?php
/**
 * Custom Navwalker Class for Bootstrap 5
 */
class Bootstrap_5_Navwalker extends Walker_Nav_Menu {

    // Add Bootstrap 5 classes to submenu items
    function start_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        $submenu_class = ($depth > 0) ? ' dropdown-menu dropdown-menu-end' : ' dropdown-menu';
        $output .= "\n$indent<ul class=\"$submenu_class\">\n";
    }

    // Add Bootstrap 5 classes to menu item with dropdown
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $li_attributes = '';
        $class_names = $value = '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
        $classes[] = 'nav-item';

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = ($id) ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

        $a_class = ($args->walker->has_children) ? 'nav-link dropdown-toggle' : 'nav-link';
        $a_attributes = ' class="' . esc_attr($a_class) . '"';

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . $a_attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= ($args->walker->has_children) ? ' <i class="bi bi-chevron-down"></i></a>' : '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
