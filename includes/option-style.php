<?php
function fmc_options_scripts(){


    wp_enqueue_style('fmc-main', FMC_ASSETS_CSS . 'frontend.css',array(), FMC_VERSION );

    $cboxs = get_theme_mod( 'fmc_cart_icon_box_size' );

    $fmc_dynamic_css  = '';

     if($cboxs){
         $fmc_dynamic_css .= '.finest-count { width:' . esc_attr( $cboxs ) .'px } ';
         $fmc_dynamic_css .= "\n";
    }
     if($cboxs){
         $fmc_dynamic_css .= '.finest-count { height:' . esc_attr( $cboxs ) .'px } ';
         $fmc_dynamic_css .= "\n";
    }
     if($cboxs){
         $fmc_dynamic_css .= '.finest-count { line-height:' . esc_attr( $cboxs ) .'px } ';
         $fmc_dynamic_css .= "\n";
    }




    $fmc_dynamic_css = fmc_css_strip_whitespace( $fmc_dynamic_css );
	wp_add_inline_style( 'fmc-main', $fmc_dynamic_css );

}
add_action( 'wp_enqueue_scripts', 'fmc_options_scripts', 5 );