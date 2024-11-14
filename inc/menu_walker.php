<?php

class AD_Walker extends Walker_Nav_Menu
{
    public function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        // Ensure $item->classes is an array
        if (!is_array($item->classes)) {
            $item->classes = [];
        }

        // Add your custom class
        $item->classes[] = 'custom-class';

        // Join classes with a space
        $class_names = implode(' ', array_filter($item->classes));

        if ($args->walker->has_children) {
            $output .= "<li class='nav-item nav-item-wrap $class_names'>";
        } else {
            $output .= "<li class='nav-item $class_names'>";
        }

        if ($item->url && $item->url != '#') {
            $output .= '<a class="nav-link" href="' . esc_url($item->url) . '">';
        } else {
            $output .= '<span>';
        }

        $output .= esc_html($item->title);

        if ($item->url && $item->url != '#') {
            $output .= '</a>';
        } else {
            $output .= '</span>';
        }

        if ($args->walker->has_children) {
            $output .= '<i class="margin-left-5 caret fa fa-angle-down"></i>';
        }
    }

    // Add classes to ul sub-menus
    public function start_lvl(&$output, $depth = 0, $args = array())
    {
        // Depth dependent classes
        $indent = ($depth > 0 ? str_repeat("\t", $depth) : ''); // Code indent
        $display_depth = ($depth + 1); // Because it counts the first submenu as 0
        $classes = array(
            'sub-menu',
            'menu-depth-' . $display_depth
        );
        $class_names = implode(' ', $classes);

        // Build HTML
        if ($display_depth == 1) {
            $output .= "\n" . $indent . '<ul class="sub-items ' . $class_names . '">' . "\n";
        } else {
            $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
        }
    }
}