<?php
/**
 * @file
 * The primary PHP file for this theme.
 */
function pedro_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
    $lastitem = sizeof($breadcrumb);
    $output .= '<ul class="breadcrumb">';
    $a=1;
    foreach($breadcrumb as $value) {
        if ($a!=$lastitem){
	  $output .= '<li class="breadcrumb-'.$a.'">'. $value . t(' »') . '</li>';
          $a++;
        }
        else {
            $output .= '<li class="breadcrumb-last">'.$value.'</li>';
        }
      }
     $output .= '</ul>';
    return $output;
  }
}