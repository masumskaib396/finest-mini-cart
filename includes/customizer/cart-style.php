<?php

Kirki::add_section( 'cart_icon_box_section', array(
    'title'          => esc_html__( 'Cart Icon Box', 'finest-mini-cart' ),
    'panel'          => 'fmc_panel',
    'priority'       => 160,
) );

Kirki::add_field( 'fmc_panel', [
	'type'        => 'custom',
	'settings'    => 'cart_box',
	'section'     => 'cart_icon_box_section',
		'default'         => '<h3 style="padding:12px 0px; text-align: center; font-size: 16px; background:#ddd; color:#222; margin:0;">' . __( 'Cart Box', 'kirki' ) . '</h3>',
	'priority'    => 10,
] );

Kirki::add_field( 'fmc_panel', [
	'type'        => 'select',
	'settings'    => 'on_cart_position',
	'label'       => esc_html__( 'Cart Position', 'finest-mini-cart' ),
	'section'     => 'cart_icon_box_section',
	'default'     => 'cart_icon_right',
	'placeholder' => esc_html__( 'Select an Position...', 'finest-mini-cart' ),
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'cart_icon_right' => esc_html__( 'Cart Box Right', 'finest-mini-cart' ),
		'cart_icon_left' => esc_html__( 'Cart Box Left', 'finest-mini-cart' ),
	],
] );


Kirki::add_field( 'fmc_panel', [
	'type'        => 'slider',
	'settings'    => 'fmc_cart_icon_box_size',
	'label'       => esc_html__( 'Cart Box Size', 'finest-mini-cart' ),
	'section'     => 'cart_icon_box_section',
	'default'     => 70,
	'choices'     => [
		'min'  => 0,
		'max'  => 200,
		'step' => 1,
	],
] );