<?php
/**
 * @file
 * The primary PHP file for this theme.
 */


function pedro_breadcrumb($variables){
    $breadcrumb = $variables['breadcrumb'];
    if(!empty($breadcrumb)){
        // Provide a navigational heading to give context for breadcrumb links to
        // screen-reader users. Make the heading invisible with .element-invisible.
        $output = '<div class="container"><div class="row"><div class="col-md-12"><h2 class="element-invisible">' . t('You are here') . '</h2>';
        $output .= '<ul class="nav-header-menu nav-pills-header-menu">';
        $output .= 'li'.$breadcrumb[0]. '</li>';
                $output .= '</ul></div></div></div>';        
    }
}

function thedemo_breadcrumb($variables) {
    $breadcrumb = $variables['breadcrumb'];
    if (!empty($breadcrumb)) {
        // Provide a navigational heading to give context for breadcrumb links to
        // screen-reader users. Make the heading invisible with .element-invisible.
        $output = '<div class="container"><div class="row"><div class="col-md-12"><h2 class="element-invisible">' . t('You are here') . '</h2>';
        $output .= '<ul class="breadcrumb">';
        foreach ($breadcrumb as $key => $value) {
          $output .= '<li>' . $value . '</li>';
        }
        $output .= '</ul></div></div></div>';
        return $output;
    }
}



