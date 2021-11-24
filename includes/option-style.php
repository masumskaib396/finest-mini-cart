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
    // checkoutbutton
    $chbgcolor = get_theme_mod( 'checkout_bg_color','#000000' );
    $choutcolor = get_theme_mod( 'color_checkout','#ffffff' );
    $chheight = get_theme_mod( 'checkout_height','55px' );
    $chradius = get_theme_mod( 'checkout_border_radius','5px' );
    $ch_paddign = get_theme_mod( 'checkout_padding','0px' );
    $chimplod = is_array($ch_paddign ) ?  implode(' ', $ch_paddign) : '';

    // continuebutton
    $conbgcolor = get_theme_mod( 'continue_bg_color','#000000' );
    $concolor = get_theme_mod( 'continue_color','#ffffff' );
    $conheight = get_theme_mod( 'continue_height','55px' );
    $conradius = get_theme_mod( 'continue_border_radius','5px' );
    $con_paddign = get_theme_mod( 'continue_padding','0px' );
    $conimplod = implode(' ', $con_paddign);

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
    
    // checkout button
    if($chbgcolor){
        $fmc_dynamic_css .= '.finest-action-right a { background-color:' . esc_attr( $chbgcolor ) .'} ';
        $fmc_dynamic_css .= "\n";
    }
    if($choutcolor){
        $fmc_dynamic_css .= '.finest-action-right a { color:' . esc_attr( $choutcolor ) .'} ';
        $fmc_dynamic_css .= "\n";
    }
    if($chheight){
        $fmc_dynamic_css .= '.finest-action-right a { height:' . esc_attr( $chheight ) .'}px ';
        $fmc_dynamic_css .= "\n";
    }
    if($chimplod){
        $fmc_dynamic_css .= '.finest-action-right { padding:' . esc_attr( $chimplod ) .'}';
        $fmc_dynamic_css .= "\n";
    }
    if($chradius){
        $fmc_dynamic_css .= '.finest-action-right a { border-radius:' . esc_attr( $chradius ) .'}px ';
        $fmc_dynamic_css .= "\n";
    }

     // continue button
     if($conbgcolor){
        $fmc_dynamic_css .= '.finest-area-bot .finest-continue span { background-color:' . esc_attr( $conbgcolor ) .'} ';
        $fmc_dynamic_css .= "\n";
    }
    if($concolor){
        $fmc_dynamic_css .= '.finest-area-bot .finest-continue span { color:' . esc_attr( $concolor ) .'} ';
        $fmc_dynamic_css .= "\n";
    }
    if($conheight){
        $fmc_dynamic_css .= '.finest-area-bot .finest-continue span { height:' . esc_attr( $conheight ) .'}px ';
        $fmc_dynamic_css .= "\n";
    }
    if($conimplod){
        $fmc_dynamic_css .= '.finest-area-bot .finest-continue span { margin:' . esc_attr( $conimplod ) .'}';
        $fmc_dynamic_css .= "\n";
    }
    if($conradius){
        $fmc_dynamic_css .= '.finest-area-bot .finest-continue span { border-radius:' . esc_attr( $conradius ) .'}px ';
        $fmc_dynamic_css .= "\n";
    }

    $fmc_dynamic_css = fmc_css_strip_whitespace( $fmc_dynamic_css );
	wp_add_inline_style( 'fmc-main', $fmc_dynamic_css );

}
add_action( 'wp_enqueue_scripts', 'fmc_options_scripts', 5 );