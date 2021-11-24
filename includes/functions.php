<?php

// footer cart icon loaded

if ( !function_exists( 'finest_mini_cart_wp_footer' ) ) {

    function finest_mini_cart_wp_footer() { ?>
            <div id="finest-area" class="finest-area finest-effect">
                <?php  include(plugin_dir_path(dirname(__FILE__)) . 'templates/layout.php'); ?>
            </div>
            <?php 
               $cartcheck = get_theme_mod( 'fmc_count_hide_checkout', true );
               $cartpage = get_theme_mod( 'fmc_count_hide_cart', true );
               $fmc_count_hide = '';
               if (  $cartcheck == 'yes' && is_checkout()  ) {
				    $fmc_count_hide = 'fmc-count-hide';
			    }
               if (  $cartpage == 'yes' && is_cart()()  ) {
				    $fmc_count_hide = 'fmc-count-hide';
			    }
            ?>
            <div id="finest-count" class="finest-count<?php echo( ( $fmc_count_hide != '' ) ? ' ' . esc_attr( $fmc_count_hide ) : '' ); ?>">
                <div class="finest-cart-icon" >
                    <!-- <span class="dashicons dashicons-cart"></span> -->
                    <i class="icon icon-shopping-bag-2"></i>
                </div>
                <div class="finest-count-number" >
                    <span id="cart-count-number"><?php echo WC()->cart->cart_contents_count; ?></span>
                </div>
            </div>
            <input type="hidden" id="finest-nonce" value="<?php echo wp_create_nonce( 'finest-security' ); ?>"/>
            <div class="finest-overlay"></div>
            <?php
            if ( ('finest_auto_show_normal' == 'yes') && ( isset( $_POST['add-to-cart'] ) || ( isset( $_GET['add-to-cart'] ) ) ) ) {
                    ?>

                    <script type="text/javascript">
                        jQuery(document).ready(function () {
                            setTimeout(function () {
                                include(plugin_dir_path(dirname(__FILE__)) . 'templates/layout.php');
                            }, 100);
                        });
                    </script>
                    <?php
                }
        }
}

add_action( 'wp_footer', 'finest_mini_cart_wp_footer');


// finest_get_cart_items

if ( !function_exists( 'finest_get_cart' ) ) {

    function finest_get_cart() {
        if ( ! isset( $_POST['security'] ) || ( ! wp_verify_nonce( $_POST['security'], 'finest-security' ) && ( $_POST['security'] != $_POST['nonce'] ) ) ) {
			die( '<div class="finest-error">' . esc_html__( 'Permissions check failed!', 'finest-mini-cart' ) . '</div>' );
		}
        $cart   = array();
        ob_start();
        include(plugin_dir_path(dirname(__FILE__)) . 'templates/layout.php');
        $output = ob_get_contents();
        ob_end_clean();
        $cart['count'] = WC()->cart->get_cart_contents_count();
        $cart['html']  = $output;
        echo json_encode( $cart );
        die();
    }
}

add_action( 'wp_ajax_finest_get_cart', 'finest_get_cart' );
add_action( 'wp_ajax_nopriv_finest_get_cart', 'finest_get_cart' );



// finest_update_qty

if ( !function_exists( 'finest_update_qty' ) ) {

    function finest_update_qty() {

        if ( ! isset( $_POST['security'] ) || ( ! wp_verify_nonce( $_POST['security'], 'finest-security' ) && ( $_POST['security'] != $_POST['nonce'] ) ) ) {
			die( '<div class="finest-error">' . esc_html__( 'Permissions check failed!', 'finest-mini-cart' ) . '</div>' );
		}

        if ( isset( $_POST['cart_item_key'] ) && isset( $_POST['cart_item_qty'] ) ) {
            WC()->cart->set_quantity( $_POST['cart_item_key'], intval( $_POST['cart_item_qty'] ) );
            $cart             = array();
            $cart['count']    = WC()->cart->get_cart_contents_count();
            $cart['subtotal'] = WC()->cart->get_cart_subtotal();
            $cart['total_price'] = WC()->cart->total;
            $cart['tax_price'] = wc_round_tax_total(WC()->cart->get_cart_contents_tax() + WC()->cart->get_shipping_tax() + WC()->cart->get_fee_tax());
            echo json_encode( $cart );
            die();
        }
    }
}
add_action( 'wp_ajax_finest_update_qty','finest_update_qty');
add_action( 'wp_ajax_nopriv_finest_update_qty', 'finest_update_qty');


// fmc_remove item

if ( !function_exists( 'finest_remove_item' ) ) {

    function finest_remove_item() {

        if ( ! isset( $_POST['security'] ) || ( ! wp_verify_nonce( $_POST['security'], 'finest-security' ) && ( $_POST['security'] != $_POST['nonce'] ) ) ) {
			die( '<div class="finest-error">' . esc_html__( 'Permissions check failed!', 'finest-mini-cart' ) . '</div>' );
		}

        if ( isset( $_POST['cart_item_key'] ) ) {
            WC()->cart->remove_cart_item( $_POST['cart_item_key'] );
            $cart             = array();
            $cart['count']    = WC()->cart->get_cart_contents_count();
            $cart['subtotal'] = WC()->cart->get_cart_subtotal();
            $cart['total_price'] = WC()->cart->total;
            $cart['tax_price'] = wc_round_tax_total(WC()->cart->get_cart_contents_tax() + WC()->cart->get_shipping_tax() + WC()->cart->get_fee_tax());
            echo json_encode( $cart );
            die();
        }
    }
}

add_action( 'wp_ajax_finest_remove_item', 'finest_remove_item'  );
add_action( 'wp_ajax_nopriv_finest_remove_item', 'finest_remove_item');


//coupon code

function finest_coupon_ajax_call() {

    if ( ! isset( $_POST['security'] ) || ( ! wp_verify_nonce( $_POST['security'], 'finest-security' ) && ( $_POST['security'] != $_POST['nonce'] ) ) ) {
        die( '<div class="finest-error">' . esc_html__( 'Permissions check failed!', 'finest-mini-cart' ) . '</div>' );
    }

    $code = wc_sanitize_coupon_code($_REQUEST['coupon_code']);
    $code = strtolower($code);

    // Check coupon code to make sure is not empty
    if( empty( $code ) || !isset( $code ) ) {
        $wfc_cpnfield_empty_txt = esc_html__('Coupon Code Field is Empty!', 'finest-mini-cart');
        $wfc_cpnfield_empty = esc_html__('empty', 'finest-mini-cart');
        // Build our response
        $response = array(
            'result'    => $wfc_cpnfield_empty,
            'message'   => $wfc_cpnfield_empty_txt
        );

        header( 'Content-Type: application/json' );
        echo json_encode( $response );

        // Always exit when doing ajax
        WC()->cart->total;
        WC()->cart->set_session();
        die();
    }

    // Create an instance of WC_Coupon with our code
    $coupon = new WC_Coupon( $code );

    if (in_array($code, WC()->cart->get_applied_coupons())) {

        $wfc_cpn_alapplied_txt = esc_html__('Coupon Code Already Applied.', 'finest-mini-cart');
        $wfc_cpn_already = esc_html__('already applied', 'finest-mini-cart');

        $response = array(
            'result'    => $wfc_cpn_already,
            'message'   => $wfc_cpn_alapplied_txt,
        );

        header( 'Content-Type: application/json' );
        echo json_encode( $response );
        die();

    } elseif( !$coupon->is_valid() ) {

        $wfc_invalid_coupon_txt = esc_html__('Invalid code entered. Please try again.', 'finest-mini-cart');
        $wfc_invalid_result = esc_html__('not valid', 'finest-mini-cart');
        // Build our response
        $response = array(
            'result'    => $wfc_invalid_result,
            'message'   => $wfc_invalid_coupon_txt
        );

        header( 'Content-Type: application/json' );
        echo json_encode( $response );


        die();

    } else {

        WC()->cart->apply_coupon( $code );

        $wfc_coupon_applied_suc_txt = esc_html__( 'Coupon Applied Successfully.', 'finest-mini-cart' );
        $wfc_coupon_success = esc_html__( 'Success', 'finest-mini-cart' );
        // Build our response
        $response = array(
            'result'       => $wfc_coupon_success,
            'message'      => $wfc_coupon_applied_suc_txt
        );

        header( 'Content-Type: application/json' );
        echo json_encode( $response );
        die();

    }
}

add_action( 'wp_ajax_finest_coupon_ajax_call', 'finest_coupon_ajax_call' );
add_action( 'wp_ajax_nopriv_finest_coupon_ajax_call', 'finest_coupon_ajax_call');



// ajax add to cart

function finest_add_variation_to_cart() {
    ob_start();

    $product_id        = apply_filters( 'woocommerce_add_to_cart_product_id', absint( $_POST['product_id'] ) );
    $quantity          = isset( $_POST['quantity'] ) ? 1 : wc_stock_amount( $_POST['quantity'] );
    $variation_id      = isset( $_POST['variation_id'] ) ? absint( $_POST['variation_id'] ) : '';
    $variations        = isset( $_POST['variation'] ) ?  array_walk( $_POST['variation'] ) : '';

    $passed_validation = apply_filters( 'woocommerce_add_to_cart_validation', true, $product_id, $quantity, $variation_id, $variations, $cart_item_data );

    if ( $passed_validation && WC()->cart->add_to_cart( $product_id, $quantity, $variation_id, $variations ) ) {

        do_action( 'woocommerce_ajax_added_to_cart', $product_id );

        if ( 'woocommerce_cart_redirect_after_add' == 'yes' ) {
            wc_add_to_cart_message( $product_id );
        }

        // Return fragments
        WC_AJAX::get_refreshed_fragments();

    } else {

        // If there was an error adding to the cart, redirect to the product page to show any errors
        $data = array(
            'error' => true,
            'product_url' => apply_filters( 'woocommerce_cart_redirect_after_error', get_permalink( $product_id ), $product_id )
        );

        wp_send_json( $data );

    }

    die();
}

    add_action('wp_ajax_finest_add_variation_to_cart', 'finest_add_variation_to_cart');
    add_action('wp_ajax_nopriv_finest_add_variation_to_cart', 'finest_add_variation_to_cart');


/**
 * Get minified css and removed space
 */
function fmc_css_strip_whitespace( $css ) {
	$replace = array(
		'#/\*.*?\*/#s' => '',  // Strip C style comments.
		'#\s\s+#'      => ' ', // Strip excess whitespace.
	);
	$search  = array_keys( $replace );
	$css     = preg_replace( $search, $replace, $css );

	$replace = array(
		': '  => ':',
		'; '  => ';',
		' {'  => '{',
		' }'  => '}',
		', '  => ',',
		'{ '  => '{',
		';}'  => '}', // Strip optional semicolons.
		",\n" => ',', // Don't wrap multiple selectors.
		"\n}" => '}', // Don't wrap closing braces.
		'} '  => "}\n", // Put each rule on it's own line.
	);
	$search  = array_keys( $replace );
	$css     = str_replace( $search, $replace, $css );

	return trim( $css );
}


?>



