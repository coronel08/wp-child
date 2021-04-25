<?php
// Enque script and style from parent theme
function twentytwentyone_styles(){
    $parent_style = 'twenty-twenty-one-style';

    wp_enqueue_style('child-style', get_stylesheet_uri(),
    array($parent_style),
    wp_get_theme()->get('Version')
);
}

// Call function
add_action('wp_enqueue_scripts', 'twentytwentyone_styles')
?>

