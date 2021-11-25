<?php

Kirki::add_section( 'general_settings', array(
    'title'          => esc_html__( 'General Options', 'finest-mini-cart' ),
    'panel'          => 'fmc_panel',
    'priority'       => 160,
) );

Kirki::add_field( 'fmc_panel', [
	'type'        => 'typography',
	'settings'    => 'global_typography',
	'label'       => esc_html__( 'Global Typography', 'finest-mini-cart' ),
	'section'     => 'general_settings',
	'default'     => [
		'font-family'    => 'Roboto',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '#finest-area, #finest-total, .product-total-left .product-quenty, .product-total-right #product-show-total, .finest-subtotal-left .product-subtotal, .finest-subtotal-right .subtotal-count, .finest-tax-left .product-tax-left, .finest-tax-right .tax-count, .finest-shipping-left .product-shipping, .finest-total-right .product-shipping-count,.finest-total-left span.finest-total-text, .finest-shipping-right, .finest-action-right, .finest-area-bot .finest-continue span ',
		],
	],
] );

// mmodal content
Kirki::add_field( 'fmc_panel', [
	'type'        => 'color',
	'settings'    => 'global_color',
	'label'       => __( 'Global Color', 'finest-mini-cart' ),
	'section'     => 'general_settings',
	'default'     => '#000000',
	'choices'     => [
		'alpha' => true,
	],
	'transport' => 'postMessage',
	'js_vars'   => [
		[
			'element'  => '#finest-area, #finest-total, .product-total-left .product-quenty, .product-total-right #product-show-total, .finest-subtotal-left .product-subtotal, .finest-subtotal-right .subtotal-count, .finest-tax-left .product-tax-left, .finest-tax-right .tax-count, .finest-shipping-left .product-shipping, .finest-total-right .product-shipping-count,.finest-total-left span.finest-total-text, .finest-shipping-right, .finest-action-right, .finest-area-bot .finest-continue span,
			.finest-area-middle.finest-items .finest-item-title a, .finest-cart-ttile h1, .finest-area-middle.finest-items .finest-item-qty-plus, .finest-area-middle.finest-items .finest-item-qty-minus, .finest-total-right span.total-price, input#finiest_coupon_code:focus, .finest-area-middle.finest-items .finest-item-qty .finest-item-qty-inner input ',
			'function' => 'css',
			'property' => 'color',
		],
	]
] );



Kirki::add_field( 'fmc_panel', [
	'type'        => 'color',
	'settings'    => 'mini_cart_box_bg_color',
	'label'       => __( 'Mini Cart Box Background Color', 'finest-mini-cart' ),
	'section'     => 'general_settings',
	'default'     => '#ffffff',
	'choices'     => [
		'alpha' => true,
	],
	'transport' => 'postMessage',
	'js_vars'   => [
		[
			'element'  => '#finest-area',
			'function' => 'css',
			'property' => 'background-color',
		],
	]
] );


Kirki::add_field( 'fmc_panel', [
    'type'        => 'switch',
    'settings'    => 'on_quick_view',
	'label'       => esc_html__( 'Show Quick View', 'finest-mini-cart' ),
    'section'     => 'general_settings',
    'default'     => 'on',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'finest-mini-cart' ),
        'off' => esc_html__( 'Disable', 'finest-mini-cart' ),
    ],
] );

Kirki::add_field( 'fmc_panel', [
	'type'        => 'switch',
	'settings'    => 'fmc_count_hide_checkout',
	'label'       => esc_html__( 'Show Cart on Checkout page', 'finest-mini-cart' ),
	'section'     => 'general_settings',
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'finest-mini-cart' ),
		'off' => esc_html__( 'Disable', 'finest-mini-cart' ),
	],

] );
Kirki::add_field( 'fmc_panel', [
	'type'        => 'switch',
	'settings'    => 'fmc_count_hide_cart',
	'label'       => esc_html__( 'Show Cart on Cart page', 'finest-mini-cart' ),
	'section'     => 'general_settings',
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'finest-mini-cart' ),
		'off' => esc_html__( 'Disable', 'finest-mini-cart' ),
	],
] );

