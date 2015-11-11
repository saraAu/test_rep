<?php 
add_theme_support( 'post-thumbnails' );
// Add custom image size to be used in the theme
 // Add custom image size to be used in the theme
add_action('after_setup_theme', function() {
    add_image_size ( 'our-size', 620, 320 );
});
add_filter('excerpt_more',function(){
return " [<a href=\"" . get_permalink() . "\">read more</a>]";
} );
?>