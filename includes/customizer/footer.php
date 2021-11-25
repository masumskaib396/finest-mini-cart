<?php
Kirki::add_section( 'header_settings', array(
	'title'          => esc_html__( 'Bottom Style', 'finest-mini-cart' ),
	'panel'          => 'fmc_panel',
	'priority'       => 160,
) );


// mmodal content
Kirki::add_field( 'fmc_panel', [
	'type'        => 'color',
	'settings'    => 'fini_cart_bg_color',
	'label'       => __( 'Background Color', 'finest-mini-cart' ),
	'section'     => 'header_settings',
	'default'     => '#fff',
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



