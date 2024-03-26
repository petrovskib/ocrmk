<?php

require get_stylesheet_directory() . '/customizer/options-services.php';
require get_stylesheet_directory() . '/customizer/options-why-choose-us.php';
require get_stylesheet_directory() . '/sections/services.php';
require get_stylesheet_directory() . '/sections/why-choose-us.php';

add_action( 'after_setup_theme', 'epic_business_event_setup_theme' );
function epic_business_event_setup_theme() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
}

add_action( 'wp_enqueue_scripts', 'epic_business_event_chld_thm_parent_css' );
function epic_business_event_chld_thm_parent_css() {

    wp_enqueue_style( 
    	'epic_business_event_chld_css', 
    	trailingslashit( get_template_directory_uri() ) . 'style.css', 
    	array( 
    		'bootstrap',
    		'font-awesome-5',
    		'bizberg-main',
    		'bizberg-component',
    		'bizberg-style2',
    		'bizberg-responsive' 
    	) 
    );

    if ( is_rtl() ) {
        wp_enqueue_style( 
            'epic_business_event_parent_rtl',
            trailingslashit( get_template_directory_uri() ) . 'rtl.css'
        );
    }
    
}

add_action( 'init', 'epic_business_event_colors' );
function epic_business_event_colors(){

    $options = array(
        'bizberg_slider_title_box_highlight_color',
        'bizberg_slider_arrow_background_color',
        'bizberg_slider_dot_active_color',
        'bizberg_read_more_background_color',
        'bizberg_read_more_background_color_2',
        'bizberg_theme_color',
        'bizberg_link_color',
        'bizberg_background_color_2',
        'bizberg_link_color_hover',
        'bizberg_sidebar_widget_title_color',
        'bizberg_blog_listing_pagination_active_hover_color',
        'bizberg_heading_color',
        'bizberg_sidebar_widget_link_color_hover',
        'bizberg_footer_social_icon_color',
        'bizberg_footer_copyright_background'    
    );

    foreach ( $options as $value ) {
        
        add_filter( $value , function(){
            return '#e91e63';
        });

    }

}

add_filter( 'bizberg_slider_banner_settings', 'epic_business_event_slider_banner_settings' );
function epic_business_event_slider_banner_settings(){
    return 'none';
}

add_filter( 'bizberg_slider_gradient_primary_color', 'epic_business_event_slider_gradient_primary_color' );
function epic_business_event_slider_gradient_primary_color(){
    return '#3a4cb4';
}

add_filter( 'bizberg_header_btn_border_radius', 'epic_business_event_header_btn_border_radius' );
function epic_business_event_header_btn_border_radius(){
    return array(
        'top-left-radius'  => '0px',
        'top-right-radius'  => '0px',
        'bottom-left-radius' => '0px',
        'bottom-right-radius' => '0px'
    );
}

add_filter( 'bizberg_read_more_border_color', 'epic_business_event_header_button_border_color' );
function epic_business_event_header_button_border_color(){
    return '#cc1451';
}

add_filter( 'bizberg_header_button_border_dimensions', 'epic_business_event_header_button_border_dimensions' );
function epic_business_event_header_button_border_dimensions(){
     return array(
        'top-width'  => '0px',
        'bottom-width'  => '5px',
        'left-width' => '0px',
        'right-width' => '0px',
    );
}

add_filter( 'bizberg_slider_btn_border_radius', 'epic_business_event_slider_btn_border_radius' );
function epic_business_event_slider_btn_border_radius(){
    return array(
        'border-top-left-radius'  => '0px',
        'border-top-right-radius'  => '0px',
        'border-bottom-right-radius' => '0px',
        'border-bottom-left-radius' => '0px'
    );
}

add_filter( 'bizberg_read_more_border_dimensions', 'epic_business_event_read_more_border_dimensions' );
function epic_business_event_read_more_border_dimensions(){
    return array(
        'top-width'  => '0px',
        'bottom-width'  => '5px',
        'left-width' => '0px',
        'right-width' => '0px',
    );
}

add_filter( 'bizberg_sticky_content_sidebar' , 'epic_business_event_sticky_content_sidebar' );
function epic_business_event_sticky_content_sidebar(){
    return false;
}

add_filter( 'bizberg_footer_social_links' , 'epic_business_event_footer_social_links' );
function epic_business_event_footer_social_links(){
    return [];
}

add_filter( 'bizberg_excerpt_length', 'epic_business_event_excerpt_length' );
function epic_business_event_excerpt_length(){
    return '30';
}

add_filter( 'bizberg_header_navbar_background_1', 'epic_business_event_header_navbar_background_1' );
add_filter( 'bizberg_header_navbar_background_1_sticky_menu', 'epic_business_event_header_navbar_background_1' );
function epic_business_event_header_navbar_background_1(){
    return '#3a4cb4';
}

add_filter( 'bizberg_header_navbar_background_2', 'epic_business_event_header_navbar_background_2' );
add_filter( 'bizberg_header_navbar_background_2_sticky_menu', 'epic_business_event_header_navbar_background_2' );
function epic_business_event_header_navbar_background_2(){
    return '#e91e63';
}

add_filter( 'bizberg_header_menu_text_color', 'epic_business_event_header_menu_text_color' );
add_filter( 'bizberg_header_site_title_color', 'epic_business_event_header_menu_text_color' );
add_filter( 'bizberg_header_site_tagline_color', 'epic_business_event_header_menu_text_color' );
add_filter( 'bizberg_header_site_title_color_sticky_menu', 'epic_business_event_header_menu_text_color' );
add_filter( 'bizberg_header_site_tagline_color_sticky_menu', 'epic_business_event_header_menu_text_color' );
add_filter( 'bizberg_header_menu_text_color_sticky_menu', 'epic_business_event_header_menu_text_color' );
add_filter( 'bizberg_header_menu_toggle_color_mobile', 'epic_business_event_header_menu_text_color' );
function epic_business_event_header_menu_text_color(){
    return '#fff';
}

add_filter( 'bizberg_header_menu_separator', 'epic_business_event_header_menu_separator' );
add_filter( 'bizberg_header_menu_separator_sticky_menu', 'epic_business_event_header_menu_separator' );
add_filter( 'bizberg_top_bar_border_bottom_color', 'epic_business_event_header_menu_separator' );
function epic_business_event_header_menu_separator(){
    return 'rgba(255,255,255,0.22)';
}

add_filter( 'bizberg_header_menu_color_hover', 'epic_business_event_header_menu_color_hover' );
add_filter( 'bizberg_header_menu_color_hover_sticky_menu', 'epic_business_event_header_menu_color_hover' );
function epic_business_event_header_menu_color_hover(){
    return '#2e2d2e';
}

add_filter( 'bizberg_primary_header_layout_bottom_border_size', 'epic_business_event_primary_header_layout_bottom_border_size' );
function epic_business_event_primary_header_layout_bottom_border_size(){
    return 1;
}

add_filter( 'bizberg_header_menu_background_mobile', 'epic_business_event_header_menu_background_mobile' );
function epic_business_event_header_menu_background_mobile(){
    return '#4747a3';
}

add_filter( 'bizberg_header_menu_background_hover_mobile', 'epic_business_event_header_menu_background_hover_mobile' );
function epic_business_event_header_menu_background_hover_mobile(){
    return '#363690';
}

add_filter( 'bizberg_header_menu_font_mobile', 'epic_business_event_header_menu_font_mobile' );
function epic_business_event_header_menu_font_mobile(){
    return '#fff';
}

add_filter( 'bizberg_blog_detail_comment_input_background_color', 'epic_business_event_blog_listing_border' );
function epic_business_event_blog_listing_border(){
    return '#fff';
}

add_filter( 'bizberg_header_menu_border_color_mobile', 'epic_business_event_header_menu_border_color_mobile' );
function epic_business_event_header_menu_border_color_mobile(){
    return 'rgba(255,255,255,0.18)';
}

add_filter( 'bizberg_header_button_color', 'epic_business_event_header_button_color' );
add_filter( 'bizberg_header_button_color_sticky_menu', 'epic_business_event_header_button_color' );
add_filter( 'bizberg_header_button_color_hover', 'epic_business_event_header_button_color' );
add_filter( 'bizberg_header_button_color_hover_sticky_menu', 'epic_business_event_header_button_color' );
function epic_business_event_header_button_color(){
    return '#212529';
}

add_filter( 'bizberg_header_button_border_color_sticky_menu', 'epic_business_event_header_button_border_color1' );
add_filter( 'bizberg_header_button_border_color', 'epic_business_event_header_button_border_color1' );
function epic_business_event_header_button_border_color1(){
    return '#121212';
}

add_action( 'bizberg_body_background_image' , 'epic_business_event_body_background_image' );
function epic_business_event_body_background_image(){
    return [
        'background-color'      => '#fff',
        'background-image'      => '',
        'background-repeat'     => 'repeat',
        'background-position'   => 'center center',
        'background-size'       => 'cover',
        'background-attachment' => 'scroll',
    ];
}

add_filter( 'bizberg_sidebar_spacing_status', 'epic_business_event_sidebar_spacing_status' );
function epic_business_event_sidebar_spacing_status(){
    return '0px';
}

add_filter( 'bizberg_sidebar_widget_background_color', 'epic_business_event_sidebar_widget_background_color' );
add_filter( 'bizberg_sidebar_widget_border_color', 'epic_business_event_sidebar_widget_background_color' );
function epic_business_event_sidebar_widget_background_color(){
    return 'rgba(251,251,251,0)';
}

add_filter( 'bizberg_sidebar_settings', 'epic_business_event_sidebar_settings' );
function epic_business_event_sidebar_settings(){
    return '4';
}

add_filter( 'bizberg_three_col_listing_radius', 'epic_business_event_three_col_listing_radius' );
function epic_business_event_three_col_listing_radius(){
    return 0;
}

add_filter( 'bizberg_site_title_font', 'epic_business_event_site_title_font' );
function epic_business_event_site_title_font(){
    return [
        'font-family'    => 'Poppins',
        'variant'        => 'regular',
        'font-size'      => '23px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'none',
        'text-align'     => 'left',
    ];
}

add_filter( 'bizberg_site_tagline_font', 'epic_business_event_site_tagline_font' );
function epic_business_event_site_tagline_font(){
    return [
        'font-family'    => 'Poppins',
        'variant'        => '300',
        'font-size'      => '13px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'none',
        'text-align'     => 'left',
    ];
}

add_action( 'after_switch_theme', 'epic_business_event_switch_theme' );
function epic_business_event_switch_theme() {

    $flag = get_theme_mod( 'epic_business_event_copy_settings', false );

    if ( true === $flag ) {
        return;
    }

    foreach( Kirki::$fields as $field ) {
        set_theme_mod( $field["settings"],$field["default"] );
    }

    //Set flag
    set_theme_mod( 'epic_business_event_copy_settings', true );
    
}

add_filter( 'bizberg_getting_started_screenshot', 'epic_business_event_getting_started_screenshot' );
function epic_business_event_getting_started_screenshot(){
    return true;
}