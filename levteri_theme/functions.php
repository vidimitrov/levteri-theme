<?php 

register_sidebar(array(
  'name' => __( 'Right Sidebar' ),
  'id' => 'right-sidebar',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_widget'=>'<div class="wp-wid">',
  'after_widget'=>'</div>',
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));

register_nav_menu('top-side-menu', "Top side menu");

register_sidebar(array(
  'name' => __( 'Home Left Ad' ),
  'id' => 'home-left-ad',
  'description' => __( 'Home Left box' ),
  'before_widget'=>'<div class="wp-wid">',
  'after_widget'=>'</div>',
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));

register_sidebar(array(
  'name' => __( 'Home Center Ad' ),
  'id' => 'home-center-ad',
  'description' => __( 'Home Center box' ),
  'before_widget'=>'<div class="wp-wid">',
  'after_widget'=>'</div>',
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));

register_sidebar(array(
  'name' => __( 'Home Right Ad' ),
  'id' => 'home-right-ad',
  'description' => __( 'Home Right box' ),
  'before_widget'=>'<div class="wp-wid">',
  'after_widget'=>'</div>',
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));

function vfb_add_styles() {
    wp_register_style( 'vfb-custom-css', 
        get_template_directory_uri() . '/css/vfb-custom-css.css',
        array( 'visual-form-builder-css' ),
        false,
        'all'
    );
 
    wp_enqueue_style( 'vfb-custom-css' );
}
 
add_action( 'wp_enqueue_scripts', 'vfb_add_styles' );