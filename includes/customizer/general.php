<?php

Kirki::add_section( 'general_settings', array(
    'title'          => esc_html__( 'General Options', 'finest-mini-cart' ),
    'panel'          => 'fmc_panel',
    'priority'       => 160,
) );

Kirki::add_field( 'fmc_panel', [
    'type'        => 'switch',
    'settings'    => 'on_cart_view',
	'label'       => esc_html__( 'Show Cart View', 'finest-mini-cart' ),
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

