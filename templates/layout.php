    <?php
        $scsb = get_theme_mod('fmc_shopping_button', true);
        $stotal = get_theme_mod('fmc_shipping_total', true);
        $taxtotal = get_theme_mod('fmc_tax_total', true);
        $spcount = get_theme_mod('fmc_product_ount', true);
        $sqbox = get_theme_mod('fmc_qty_box', true);
        $spimg = get_theme_mod('fmc_product_image', true);
        $spprice = get_theme_mod('fmc_product_price', true);
        $sdelete = get_theme_mod('fmc_show_delete', true);
        $scfiled = get_theme_mod('fmc_coupon_filed', true);
        $scbutton = get_theme_mod('fmc_close_button', true);
        $ssubtotal = get_theme_mod('fmc_subtotal', true);
    ?>

    <div class="finest-area-top" >
        <div class="finest-cart-ttile">
            <h1><?php echo esc_html__('Quick Cart','finest-mini-cart'); ?></h1>
        </div>
        <?php if ( true == $scbutton ): ?>
        <div class="finest-close">
            <i class="icon icon-simple-remove"></i>
        </div>
        <?php endif; ?>
    </div>
    <?php
    $items = WC()->cart->get_cart();
    if ( sizeof($items) > 0 ) { ?>
    <div class="finest-area-middle finest-items">
        <?php
        $items = array_reverse( $items );
        foreach ( $items as $cart_item_key => $cart_item ) {
        $_product          = $cart_item['data'];
        $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
        if ( $_product->is_visible() ) {
            $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
            $cart_title = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ); ?>
            <div data-key="<?php echo $cart_item_key ?>" class="finest-item">
                <div class="finest-item-inner">
                    <div class="thumbnail-title-area">
                        <?php if ( true == $spimg ): ?>
                        <div class="finest-item-thumb">
                            <?php
                                if ( $product_permalink ) {
                                    printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail );
                                }
                                ?>
                        </div>
                        <?php endif; ?>
                            <div class="finest-titel-qty">
                                <div class="finest-item-title">
                                    <?php
                                    if ( $product_permalink ) {
                                        printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $cart_title );
                                    }
                                    ?>
                                </div>
                                <?php if ( true == $sqbox ): ?>
                                <div class="finest-item-qty">
                                    <div class="finest-item-qty-inner">
                                        <span class="finest-item-qty-minus">-</span>
                                        <input class="finest-item-qty-input" type="number" value="<?php echo $cart_item['quantity'] ?>" step="1" min="1" max="<?php echo $_product->get_stock_quantity(); ?>" data-key="<?php echo $cart_item_key; ?>"/>
                                        <span class="finest-item-qty-plus">+</span>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <div class="price-qty" >
                        <?php if ( true == $sdelete ): ?>
                        <div class="remove-icon" >
                            <span class="finest-item-remove finest-icon-remove" data-key="<?php echo $cart_item_key ?>"><i class="icon icon-Trash-2"></i></span>
                        </div>
                        <?php endif; ?>
                        <?php if ( true == $spprice ): ?>
                        <div class ="finest-item-price">
                            <span><?php echo $_product->get_price_html(); ?></span>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php } } ?>
    </div>
    <div class="finest-area-bot">
        <?php if ($scfiled): ?>
        <div class="finest-coupon">
            <div class="finiest_coupon_response" ></div>
            <div class="finest_coupon_field">
                <input type="text" id="finiest_coupon_code" placeholder= "Enter your Coupon code">
                <span class="finiest_coupon_submit"><?php echo esc_html__('Apply', 'finest-mini-cart'); ?> </span>
            </div>
        </div>
        <?php endif; ?>
        <?php if ($spcount): ?>
        <div class="product-content-area">
            <div class="product-total-left">
                <span class="product-quenty" ><?php echo esc_html__( 'Products', 'finest-mini-cart' ) ?></span>
            </div>
            <div class="product-total-right">
                <span id="product-show-total" ><?php echo WC()->cart->cart_contents_count; ?></span>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($ssubtotal): ?>
        <div class="product-content-area">
            <div class="finest-subtotal-left">
                <span class="product-subtotal" ><?php echo esc_html__( 'SubTotal', 'finest-mini-cart' ) ?></span>
            </div>
            <div id="finest-subtotal" class="finest-subtotal-right">
                <span class="subtotal-count" ><?php echo WC()->cart->get_cart_subtotal() ?> </span>
            </div>
        </div>
        <?php endif; ?>

        <?php if ( true == $taxtotal ) : ?>
        <div class="product-content-area">
            <div class="finest-tax-left">
                <span class="product-tax-left" ><?php echo esc_html__( 'Taxes', 'finest-mini-cart' ) ?></span>
            </div>
            <div id="finest-tax" class="finest-tax-right">
                <span class="tax-count" ><?php echo wc_price(wc_round_tax_total(WC()->cart->get_cart_contents_tax() + WC()->cart->get_shipping_tax() + WC()->cart->get_fee_tax())); ?> </span>
            </div>
        </div>
        <?php endif; ?>
        <?php if ( true == $stotal ): ?>
        <div class="product-content-area">
            <div class="finest-shipping-left">
                <span class="product-shipping" ><?php echo esc_html__( 'Shipping', 'finest-mini-cart' ) ?></span>
            </div>
            <div id="finest-shipping" class="finest-shipping-right">
                <span class="product-shipping-count" ><?php echo WC()->cart->get_cart_shipping_total(); ?> </span>
            </div>
        </div>
        <?php endif; ?>

        <div class="product-content-area">
            <div class="finest-total-left">
                <span class="finest-total-text" ><?php echo esc_html__( 'Total', 'finest-mini-cart' ) ?></span>
            </div>
            <div id="finest-total" class="finest-total-right">
                <span class="total-price">
                    <?php
                    $total = WC()->cart->total;
                    echo wc_price($total); ?>
                </span>
            </div>
        </div>
        <div class="finest-action-right">
            <a href="<?php echo esc_url( wc_get_checkout_url() ) ?>">
            <?php echo esc_html__( 'Checkout', 'finest-mini-cart' ) ?>
            </a>
        </div>
        <?php if ( true == $scsb ): ?>
        <div class="finest-continue">
            <span id="finest-continue">
                <?php echo esc_html__( 'Continue Shopping', 'finest-mini-cart' ) ?></span>
        </div>
        <?php endif; ?>
    </div>
    <?php } else { ?>
        <div class="finest-no-item">
            <?php echo esc_html__( 'Have no product in the cart!', 'finest-mini-cart' )?> </div>
        <?php } ?>
