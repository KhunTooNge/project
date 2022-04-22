<?php
function koZayOnline_shop(){
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'koZayOnline_shop');


add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('post-thumbnails');

function my_widgets()
{
    // Sidebar widget
    $sidebar = [
        'name'         => 'My widget',
        'id'           => 'my-widget',
        'before_title' => '<h3 class="widget-title">',
        'after_title'  => '</h3>',
        'before_widget' => '',
        'after_widget'  => ''
   ];
    register_sidebar($sidebar);
}
add_action('widgets_init', 'my_widgets');
 