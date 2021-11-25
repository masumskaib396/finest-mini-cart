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
		'default'         => '<h3 style="padding:12px 0px; text-align: center; font-size: 16px; background:#ddd; color:#222; margin:0;">' . __( 'Cart Box', 'finest-mini-cart' ) . '</h3>',
	'priority'    => 10,
] );

Kirki::add_field( 'fmc_panel', [
	'type'        => 'select',
	'settings'    => 'on_cart_position',
	'label'       => esc_html__( 'Cart Position', 'finest-mini-cart' ),
	'section'     => 'cart_icon_box_section',
	'default'     => 'bottom-right',
	'placeholder' => esc_html__( 'Select an Position...', 'finest-mini-cart' ),
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'top-left' => esc_html__( 'Cart Box Top Left', 'finest-mini-cart' ),
		'top-right' => esc_html__( 'Cart Box Top Right', 'finest-mini-cart' ),
		'bottom-left' => esc_html__( 'Cart Box Bottom Left', 'finest-mini-cart' ),
		'bottom-right' => esc_html__( 'Cart Box Bottom Right', 'finest-mini-cart' ),
	],
] );

Kirki::add_field( 'fmc_panel', [
	'type'        => 'color',
	'settings'    => 'fmc_cart_icon_box_bg_color',
	'label'       => __( 'Icon Box Background Color', 'finest-mini-cart' ),
	'section'     => 'cart_icon_box_section',
	'default'     => '#000000',
	'choices'     => [
		'alpha' => true,
	],
	'transport' => 'postMessage',
	'js_vars'   => [
		[
			'element'  => '.finest-count',
			'function' => 'css',
			'property' => 'background-color',
		],
	]

] );

Kirki::add_field( 'fmc_panel', [
	'type'        => 'color',
	'settings'    => 'fmc_cart_icon_color',
	'label'       => __( 'Icon Color', 'finest-mini-cart' ),
	'section'     => 'cart_icon_box_section',
	'default'     => '#ffffff',
	'choices'     => [
		'alpha' => true,
	],
	'transport' => 'postMessage',
	'js_vars'   => [
		[
			'element'  => '.finest-cart-icon',
			'function' => 'css',
			'property' => 'color',
		],
	]
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
	'transport' => 'postMessage',
	'js_vars'   => [
		[
			'element'  => '.finest-count',
			'function' => 'css',
			'property' => 'width',
			'units'    => 'px',
		],
		[
			'element'  => '.finest-count',
			'function' => 'css',
			'property' => 'height',
			'units'    => 'px',
		],
		[
			'element'  => '.finest-count',
			'function' => 'css',
			'property' => 'line-height',
			'units'    => 'px',
		],
	]
] );

Kirki::add_field( 'fmc_panel', [
	'type'        => 'slider',
	'settings'    => 'fmc_cart_icon_box_radius',
	'label'       => esc_html__( 'Cart Box Border Radius', 'finest-mini-cart' ),
	'section'     => 'cart_icon_box_section',
	'default'     => 50,
	'choices'     => [
		'min'  => 0,
		'max'  => 200,
		'step' => 1,
	],
	'transport' => 'postMessage',
	'js_vars'   => [
		[
			'element'  => '.finest-count',
			'function' => 'css',
			'property' => 'border-radius',
			'units'    => 'px',
		],

	]
] );

Kirki::add_field( 'fmc_panel', [
	'type'        => 'slider',
	'settings'    => 'fmc_cart_icon_size',
	'label'       => esc_html__( 'Cart Icon Size', 'finest-mini-cart' ),
	'section'     => 'cart_icon_box_section',
	'default'     => 35,
	'choices'     => [
		'min'  => 0,
		'max'  => 70,
		'step' => 1,
	],
	'transport' => 'postMessage',
	'js_vars'   => [
		[
			'element'  => '.finest-cart-icon',
			'function' => 'css',
			'property' => 'font-size',
			'units'    => 'px',
		],
	]
] );

Kirki::add_field( 'fmc_panel', [
	'type'        => 'custom',
	'settings'    => 'cart_count_box',
	'section'     => 'cart_icon_box_section',
		'default'         => '<h3 style="padding:12px 0px; text-align: center; font-size: 16px; background:#ddd; color:#222; margin:0;">' . __( 'Cart Count Box', 'finest-mini-cart' ) . '</h3>',
	'priority'    => 10,
] );

Kirki::add_field( 'fmc_panel', [
	'type'        => 'typography',
	'settings'    => 'count_typography_setting',
	'label'       => esc_html__( 'Count Typography', 'finest-mini-cart' ),
	'section'     => 'cart_icon_box_section',
	'default'     => [
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '14px',
		'letter-spacing' => '0',
		'color'          => '#ffffff'
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.finest-count-number',
		],
	],
] );


Kirki::add_field( 'fmc_panel', [
	'type'        => 'color',
	'settings'    => 'fmc_count_box_bg_color',
	'label'       => __( 'Count Box Background Color', 'finest-mini-cart' ),
	'section'     => 'cart_icon_box_section',
	'default'     => '#7479FF',
	'choices'     => [
		'alpha' => true,
	],
	'transport' => 'postMessage',
	'js_vars'   => [
		[
			'element'  => '.finest-count-number',
			'function' => 'css',
			'property' => 'background-color',
		],
	]
] );

Kirki::add_field( 'fmc_panel', [
	'type'        => 'slider',
	'settings'    => 'fmc_cart_count_size',
	'label'       => esc_html__( 'Cart Count Box Size', 'finest-mini-cart' ),
	'section'     => 'cart_icon_box_section',
	'default'     => 24,
	'choices'     => [
		'min'  => 0,
		'max'  => 70,
		'step' => 1,
	],
	'transport' => 'postMessage',
	'js_vars'   => [
		[
			'element'  => '.finest-count-number',
			'function' => 'css',
			'property' => 'width',
			'units'    => 'px',
		],
		[
			'element'  => '.finest-count-number',
			'function' => 'css',
			'property' => 'height',
			'units'    => 'px',
		],
		[
			'element'  => '.finest-count-number',
			'function' => 'css',
			'property' => 'line-height',
			'units'    => 'px',
		],
	]

] );


Kirki::add_field( 'fmc_panel', [
	'type'        => 'slider',
	'settings'    => 'fmc_cart_count_box_radius',
	'label'       => esc_html__( 'Cart Count Border Radius', 'finest-mini-cart' ),
	'section'     => 'cart_icon_box_section',
	'default'     => 50,
	'choices'     => [
		'min'  => 0,
		'max'  => 200,
		'step' => 1,
	],
	'transport' => 'auto',
	'output'   => [
		[
			'element'  => '.finest-count-number',
			'function' => 'css',
			'property' => 'border-radius',
			'units'    => 'px',
		],

	]
] );
