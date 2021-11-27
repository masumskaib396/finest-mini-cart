<?php

$global_color = get_theme_mod( 'global_color', '#000' );
$mini_cart_box_bg_color = get_theme_mod( 'mini_cart_box_bg_color', '#fff' );
$global_typography = get_theme_mod( 'global_typography', 'Roboto' );
$coupon_height = get_theme_mod( 'coupon_height', 40 );
$coupon_width = get_theme_mod( 'coupon_width', 70 );

if($global_color){
    $fmc_dynamic_css .= '#finest-area, #finest-total, .product-total-left .product-quenty, .product-total-right #product-show-total, .finest-subtotal-left .product-subtotal, .finest-subtotal-right .subtotal-count, .finest-tax-left .product-tax-left, .finest-tax-right .tax-count, .finest-shipping-left .product-shipping, .finest-total-right .product-shipping-count, .finest-total-left span.finest-total-text, .finest-shipping-right, .finest-action-right, .finest-area-bot .finest-continue span, .finest-area-middle.finest-items .finest-item-title a, .finest-cart-ttile h1, .finest-area-middle.finest-items .finest-item-qty-plus, .finest-area-middle.finest-items .finest-item-qty-minus, .finest-total-right span.total-price, input#finiest_coupon_code:focus, .finest-area-middle.finest-items .finest-item-qty .finest-item-qty-inner input {color: ' . esc_attr( $global_color ) . ' } ';
    $fmc_dynamic_css .= "\n";
}

if($mini_cart_box_bg_color){
    $fmc_dynamic_css .= '#finest-area {background-color: ' . esc_attr( $mini_cart_box_bg_color ) . ' } ';
    $fmc_dynamic_css .= "\n";
}


if($global_typography){
    $fmc_dynamic_css .= '#finest-area, #finest-total, .product-total-left .product-quenty, .product-total-right #product-show-total, .finest-subtotal-left .product-subtotal, .finest-subtotal-right .subtotal-count, .finest-tax-left .product-tax-left, .finest-tax-right .tax-count, .finest-shipping-left .product-shipping, .finest-total-right .product-shipping-count, .finest-total-left span.finest-total-text, .finest-shipping-right, .finest-action-right, .finest-area-bot .finest-continue span{font-family: ' . esc_attr( $mini_cart_box_bg_color ) . ' } ';
    $fmc_dynamic_css .= "\n";

    $fmc_dynamic_css .= '#finest-area, #finest-total, .product-total-left .product-quenty, .product-total-right #product-show-total, .finest-subtotal-left .product-subtotal, .finest-subtotal-right .subtotal-count, .finest-tax-left .product-tax-left, .finest-tax-right .tax-count, .finest-shipping-left .product-shipping, .finest-total-right .product-shipping-count, .finest-total-left span.finest-total-text, .finest-shipping-right, .finest-action-right, .finest-area-bot .finest-continue span{font-weight: ' . esc_attr( $mini_cart_box_bg_color ) . ' } ';
    $fmc_dynamic_css .= "\n";
}

if($coupon_height || $coupon_width){
    $fmc_dynamic_css .= '#finiest_coupon_code {height: ' . esc_attr( $coupon_height ) . 'px } ';
    $fmc_dynamic_css .= "\n";
    $fmc_dynamic_css .= '#finiest_coupon_code {width: ' . esc_attr( $coupon_width ) . '% } ';
    $fmc_dynamic_css .= "\n";
}