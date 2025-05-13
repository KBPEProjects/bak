<?php 
get_header();

wp_nav_menu(array(
    'menu'              => 'primary',
    'theme_location'    => 'primary',
    'depth'             => 2,
    'container'         => '',
    'container_class'   => '',
    'menu_class'        => 'main-nav'
));
var_dump(
    get_option('menu_contact_number'),
    get_option('menu_CTA_button_label'),
    get_option('menu_CTA_button_url'),
    get_option('footer_contact_speil')
);
/*
var_dump(
    get_the_title(),
    get_the_post_thumbnail_url(),
    get_fields()
);
print_r(get_fields(get_the_ID(),false,false), );

*/
get_footer();
?>