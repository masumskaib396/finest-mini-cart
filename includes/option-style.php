<?php
function fmc_options_scripts(){


    wp_enqueue_style('fmc-main', FMC_ASSETS_CSS . 'frontend.css',array(), FMC_VERSION );

    $cboxs = get_theme_mod( 'fmc_cart_icon_box_size', '70px' );
    $cartbg = get_theme_mod( 'fmc_cart_icon_box_bg_color','#000000' );
    $iconcolor = get_theme_mod( 'fmc_cart_icon_color','#ffffff' );
    $iconsize = get_theme_mod( 'fmc_cart_icon_size','35px' );
    $boxradius = get_theme_mod( 'fmc_cart_icon_box_radius','50px' );
    $cbgcolor = get_theme_mod( 'fmc_count_box_bg_color','#7479FF' );
    $countfont = get_theme_mod( 'count_typography_setting','14px' );
    $countsize = get_theme_mod( 'fmc_cart_count_size','24px' );
    $countradius = get_theme_mod( 'fmc_cart_count_box_radius','50px' );

    $fmc_dynamic_css  = '';

     if($cboxs){
         $fmc_dynamic_css .= '.finest-count { width:' . esc_attr( $cboxs ) .'px } ';
         $fmc_dynamic_css .= "\n";
         $fmc_dynamic_css .= '.finest-count { height:' . esc_attr( $cboxs ) .'px } ';
         $fmc_dynamic_css .= "\n";
         $fmc_dynamic_css .= '.finest-count { line-height:' . esc_attr( $cboxs ) .'px } ';
         $fmc_dynamic_css .= "\n";
    }
    if($boxradius){
        $fmc_dynamic_css .= '.finest-count { border-radius:' . esc_attr( $boxradius ) .'px} ';
        $fmc_dynamic_css .= "\n";
   }
    if($cartbg){
         $fmc_dynamic_css .= '.finest-count { background-color:' . esc_attr( $cartbg ) .'} ';
         $fmc_dynamic_css .= "\n";
    }
    
    if($iconcolor){
         $fmc_dynamic_css .= '.finest-cart-icon { color:' . esc_attr( $iconcolor ) .'} ';
         $fmc_dynamic_css .= "\n";
    }
    if($iconsize){
         $fmc_dynamic_css .= '.finest-cart-icon { font-size:' . esc_attr( $iconsize ) .'px} ';
         $fmc_dynamic_css .= "\n";
    }
   
    if($cbgcolor){
        $fmc_dynamic_css .= '.finest-count-number { background-color:' . esc_attr( $cbgcolor ) .'} ';
        $fmc_dynamic_css .= "\n";
    }
    if($countsize){
        $fmc_dynamic_css .= '.finest-count-number { width:' . esc_attr( $countsize ) .'px} ';
        $fmc_dynamic_css .= "\n";
        $fmc_dynamic_css .= '.finest-count-number { height:' . esc_attr( $countsize ) .'px} ';
        $fmc_dynamic_css .= "\n";
        $fmc_dynamic_css .= '.finest-count-number { line-height:' . esc_attr( $countsize ) .'px} ';
        $fmc_dynamic_css .= "\n";
    }
    
    if($countradius){
        $fmc_dynamic_css .= '.finest-count-number { border-radius:' . esc_attr( $countradius ) .'px} ';
        $fmc_dynamic_css .= "\n";
    }
    // typography
    if( isset($countfont['font-family']) ){
        $fmc_dynamic_css .= '.finest-count-number {font-family:' . esc_attr( $countfont['font-family'] ) .'} ';
        $fmc_dynamic_css .= "\n";
    }
    if( isset($countfont['variant']) ){
        $fmc_dynamic_css .= '.finest-count-number {font-weight:' . esc_attr( $countfont['variant'] ) .'px} ';
        $fmc_dynamic_css .= "\n";
    }
    if( isset($countfont['font-size']) ){
        $fmc_dynamic_css .= '.finest-count-number {font-size:' . esc_attr( $countfont['font-size'] ) .'px} ';
        $fmc_dynamic_css .= "\n";
    }
    if( isset($countfont['letter-spacing']) ){
        $fmc_dynamic_css .= '.finest-count-number {letter-spacing:' . esc_attr( $countfont['letter-spacing'] ) .'px} ';
        $fmc_dynamic_css .= "\n";
    }
    if( isset($countfont['color']) ){
        $fmc_dynamic_css .= '.finest-count-number {color:' . esc_attr( $countfont['color'] ) .'} ';
        $fmc_dynamic_css .= "\n";
    }
    



    $fmc_dynamic_css = fmc_css_strip_whitespace( $fmc_dynamic_css );
	wp_add_inline_style( 'fmc-main', $fmc_dynamic_css );

}
add_action( 'wp_enqueue_scripts', 'fmc_options_scripts', 5 );