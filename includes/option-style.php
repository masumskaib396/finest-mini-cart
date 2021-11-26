<?php
function fmc_options_scripts(){


    wp_enqueue_style('fmc-main', FMC_ASSETS_CSS . 'frontend.css',array(), FMC_VERSION );

    // product box
    $pro_bg_color = get_theme_mod( 'pro_bg_color', '#ffffff' );
    $pro_border = get_theme_mod( 'pro_border', '1px' );
    $pro_border_style = get_theme_mod( 'pro_border_style', 'solid' );
    $pro_border_color = get_theme_mod( 'pro_border_color', '#E9E9E9' );
    $pro_paddign = get_theme_mod( 'pro_padding' ) != ' ' ? get_theme_mod( 'pro_padding' ) : '' ;
    $propadding = is_array($pro_paddign ) ?  implode(' ', $pro_paddign) : '';
    $pro_radius = get_theme_mod( 'pro_border_radius', '0px' );

   $fmc_dynamic_css  = '';

   if($pro_bg_color){
        $fmc_dynamic_css .= '.finest-area-middle .finest-item .finest-item-inner { background-color: ' . esc_attr( $pro_bg_color ) . ' } ';
        $fmc_dynamic_css .= "\n";
    }
    if($pro_border){
        $fmc_dynamic_css .= '.finest-area-middle .finest-item .finest-item-inner,.finest-area-top { border-bottom: ' . esc_attr( $pro_border ) . ' } ';
        $fmc_dynamic_css .= "\n";
    }
    if($pro_border_style){
        $fmc_dynamic_css .= '.finest-area-middle .finest-item .finest-item-inner,.finest-area-top { border-bottom-style: ' . esc_attr( $pro_border_style ) . ' } ';
        $fmc_dynamic_css .= "\n";
    }
    if($pro_border_color){
        $fmc_dynamic_css .= '.finest-area-middle .finest-item .finest-item-inner,.finest-area-top { border-color: ' . esc_attr( $pro_border_color ) . ' } ';
        $fmc_dynamic_css .= "\n";
    }
    if($propadding){
        $fmc_dynamic_css .= '.finest-area-middle .finest-item .finest-item-inner {  padding: ' . esc_attr( $propadding ) . ' } ';
        $fmc_dynamic_css .= "\n";
    }
    if($pro_radius){
        $fmc_dynamic_css .= '.finest-area-middle .finest-item .finest-item-inner {  border-radius: ' . esc_attr( $pro_radius ) . ' } ';
        $fmc_dynamic_css .= "\n";
    }

    $fmc_dynamic_css = fmc_css_strip_whitespace( $fmc_dynamic_css );
	wp_add_inline_style( 'fmc-main', $fmc_dynamic_css );

}
add_action( 'wp_enqueue_scripts', 'fmc_options_scripts', 5 );