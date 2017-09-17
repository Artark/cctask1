<?php
/**
 * Implements hook_process_html().
 */
function opencharity_process_html(&$variables) {
    // Render the head scripts
    $variables['head_scripts'] = drupal_get_js('head_scripts');
    drupal_add_css('//fonts.googleapis.com/css?family=Open+Sans:400,600', array('group' => CSS_THEME));
}

function opencharity_preprocess_page(&$vars) {
    $vars['social_menu'] = menu_navigation_links('menu-social-menu');
}

function opencharity_links__system_menu_social_menu_menu($variables) {
    $output = '';
    foreach ($variables['links'] as $link) {
        $link = array_merge( $link, array( 'html'=> true ) );
        $output .= l('<span>'. $link['title'] .'</span>', $link['href'], $link);
    }
    return $output;
}