<?php
function fmc_options_scripts(){


    wp_enqueue_style('fmc-main', FMC_ASSETS_CSS . 'frontend.css',array(), FMC_VERSION );



    // // margin
    // $btn_margin = get_theme_mod( 'btn_margin' ) != false ? get_theme_mod( 'btn_margin' ) : '';
    // $marimpld = is_array( $btn_margin ) ? implode(' ',$btn_margin) : '';


    $fmc_dynamic_css  = '';

    // if($css){
    //     $fmc_dynamic_css .= '.finest-quickview-button .storquickview { ' . esc_attr( $css ) .' } ';
    //     $fmc_dynamic_css .= "\n";
    // }




    $fmc_dynamic_css = fmc_css_strip_whitespace( $fmc_dynamic_css );
	wp_add_inline_style( 'fmc-main', $fmc_dynamic_css );

}
add_action( 'wp_enqueue_scripts', 'fmc_options_scripts', 5 );