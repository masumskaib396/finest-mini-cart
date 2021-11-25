<?php
Kirki::add_section( 'header_settings', array(
	'title'          => esc_html__( 'Bottom Style', 'finest-mini-cart' ),
	'panel'          => 'fmc_panel',
	'priority'       => 160,
) );


// Background Color
Kirki::add_field( 'fmc_panel', [
	'type'        => 'color',
	'settings'    => 'mini_cart_bg_color',
	'label'       => __( 'Mini Cart Box Background Color', 'finest-mini-cart' ),
	'section'     => 'header_settings',
	'default'     => '#ffff',
	'choices'     => [
		'alpha' => true,
	],
	'js_vars'   => [
		[
			'element'  => '.finest-area',
			'function' => 'css',
			'property' => 'background-color',
		],
	]
] );

Kirki::add_field( 'fmc_panel', [
	'type'        => 'slider',
	'settings'    => 'mini_cart_width',
	'label'       => esc_html__( 'Mini Cart Width ', 'finest-mini-cart' ),
	'section'     => 'header_settings',
	'default'     => 80,
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
			'property' => '.finest-area.finest-effect',
			'units'    => '%',
		],

	]
] );



