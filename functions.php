<?php
    add_theme_support("custom-logo");
    add_theme_support( 'post-thumbnails' );
    register_nav_menus(array(
        'primary_menu'=> 'main menu',
        'secound_menu'=> 'footer menu'
    ));
    // widget regester
    register_sidebar( array(
        'name'          => __( 'search sidebar', 'textdomain' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<h2>',
        'after_widget'  => '</h2>',
    ) );
    // footer siderbar
    register_sidebar(array(
        'name' => 'Footer Copyright Text',
        'id' => 'copyright-text',
        'description' => 'You can change the footer copyright text from here.',
    ));
?>