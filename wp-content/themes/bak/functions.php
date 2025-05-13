<?php

add_action('after_setup_theme','bak_setup');
function bak_setup(){
    load_theme_textdomain('bak',get_template_directory().'/languages' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support("nav_menus");
    register_nav_menus( [
        'primary' => __( 'Primary Menu', 'bak' ),
        'social' => __( 'Social Menu', 'bak' )
    ] );
    add_theme_support( 'title-tag' );
    add_theme_support( 'dark-editor-style' );
    add_post_type_support( 'page', 'excerpt' );
    if(!current_user_can('administrator')){ show_admin_bar(false); }
}
add_action('send_headers', 'security_kwf_add_headers');
function security_kwf_add_headers() {
    header('X-Frame-Options: SAMEORIGIN');
    header('X-Content-Type-Options: nosniff');
    header('X-XSS-Protection: 1; mode=block');
}

add_action( 'wp_footer', 'kwf_js_footer_scripts',99 );
function kwf_js_footer_scripts(){ ?>
	<script type="text/javascript">
	</script><?php
}
add_action( 'admin_init', 'hide_editor' );
function hide_editor() {
    /*
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;
    $template_file = get_post_meta($post_id, '_wp_page_template', true);
    //var_dump(get_post_meta($post_id));
    if($template_file == 'page-home2.php' || $post_id==8){ // edit the template name
        remove_post_type_support('page', 'editor');
    }*/
}
/*
add_action( 'wp_enqueue_scripts', 'fe_add_theme_scripts' );
function fe_add_theme_scripts(){
    $ver= strval(rand(100,999));
	// CSS...
	wp_enqueue_style('bootstrap', "//cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css",[],"5.3.2",'all' );
	wp_enqueue_style('fancybox', "//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css",[],"3.5.7",'all' );
	wp_enqueue_style('fontawesome', "//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css",[],"6.4.2",'all' );
	wp_enqueue_style('slick', "//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css",[],"1.9.0",'all' ); 
	wp_enqueue_style('header',esc_url(get_theme_file_uri('assets/css/header.css')),[],$ver,'all');
	wp_enqueue_style('core_common',esc_url(get_theme_file_uri('assets/css/core.common.css')),[],$ver,'all');
	wp_enqueue_style('core',get_stylesheet_uri(),[],$ver,'all' );
	wp_enqueue_style('header_moblie',esc_url(get_theme_file_uri('assets/css/mobile.header.css')),[],$ver,'all' );
	wp_enqueue_style('core_moblie',esc_url(get_theme_file_uri('assets/css/mobile.styles.css')),[],$ver,'all' );

	// JS...
	wp_enqueue_script('jquery',"//cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js",[],"3.7.1",true);
	if(is_front_page()){ wp_enqueue_script('typed',"//cdnjs.cloudflare.com/ajax/libs/typed.js/2.1.0/typed.umd.js",[],"2.1.0",true); }
    wp_enqueue_script('fancybox',"//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js",[],"3.5.7",true);
	wp_enqueue_script('sticky_sidebar',"//cdnjs.cloudflare.com/ajax/libs/sticky-sidebar/3.3.1/jquery.sticky-sidebar.min.js",['jquery'],"3.3.1",true);
	wp_enqueue_script('bootstrap',"//cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js",['jquery'],"5.3.2",true);
	wp_enqueue_script('slick',"//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js",[],"1.9.0",true); 
	wp_enqueue_script('core_common',esc_url(get_theme_file_uri('assets/js/core.common.js')),[],$ver,true);
	wp_enqueue_script('core',get_template_directory_uri().'/core.js',[],$ver,true);
}

*/
