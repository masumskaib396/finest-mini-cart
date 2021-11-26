<?php
function fmc_options_scripts(){


    wp_enqueue_style('fmc-main', FMC_ASSETS_CSS . 'frontend.css',array(), FMC_VERSION );

    // product box
    $pro_bg_color = get_theme_mod( 'pro_bg_color', '#ffffff' );
    $pro_border = get_theme_mod( 'pro_border', '#ffffff' );

   $fmc_dynamic_css  = '';

   if($pro_bg_color){
        $fmc_dynamic_css .= '.finest-area-middle .finest-item .finest-item-inner { background-color: ' . esc_attr( $pro_bg_color ) . ' } ';
        $fmc_dynamic_css .= "\n";
    }
    if($pro_border){
        $fmc_dynamic_css .= '.finest-area-middle .finest-item .finest-item-inner { border: ' . esc_attr( $pro_border ) . ' } ';
        $fmc_dynamic_css .= "\n";
    }

    $fmc_dynamic_css = fmc_css_strip_whitespace( $fmc_dynamic_css );
	wp_add_inline_style( 'fmc-main', $fmc_dynamic_css );

}
add_action( 'wp_enqueue_scripts', 'fmc_options_scripts', 5 );