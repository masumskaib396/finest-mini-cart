<?php
	Kirki::add_section( 'finest_styles', array(
		'title'          => esc_html__( 'Bottom Style', 'finest-mini-cart' ),
		'panel'          => 'fmc_panel',
		'priority'       => 160,
	) );


	Kirki::add_field( 'fmc_panel', [
		'type'        => 'custom',
		'settings'    => 'checkout_box',
		'section'     => 'finest_styles',
			'default'         => '<h3 style="padding:12px 0px; text-align: center; font-size: 16px; background:#ddd; color:#222; margin:0;">' . __( 'Checkout', 'finest-mini-cart' ) . '</h3>',
		'priority'    => 10,
	] );
	

	// mmodal content
	Kirki::add_field( 'fmc_panel', [
		'type'        => 'color',
		'settings'    => 'checkout_bg_color',
		'label'       => __( 'Background Color', 'finest-mini-cart' ),
		'description' => esc_html__( 'Checkout Background Color', 'finest-mini-cart' ),
		'section'     => 'finest_styles',
		'default'     => '#000000',
		'choices'     => [
			'alpha' => true,
		],
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.finest-action-right a',
				'function' => 'css',
				'property' => 'background-color',
			],
		]
	] );
	
	Kirki::add_field( 'fmc_panel', [
		'type'        => 'color',
		'settings'    => 'color_checkout',
		'label'       => __( 'Color', 'finest-mini-cart' ),
		'description' => esc_html__( 'Checkout Color', 'finest-mini-cart' ),
		'section'     => 'finest_styles',
		'default'     => '#ffffff',
		'choices'     => [
			'alpha' => true,
		],
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.finest-action-right a',
				'function' => 'css',
				'property' => 'color',
			],
		]
	] );

	Kirki::add_field( 'fmc_panel', [
		'type'        => 'slider',
		'settings'    => 'checkout_height',
		'label'       => esc_html__( 'Height', 'finest-mini-cart' ),
		'section'     => 'finest_styles',
		'default'     => 55,
		'choices'     => [
			'min'  => 0,
			'max'  => 200,
			'step' => 1,
		],
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.finest-action-right a',
				'function' => 'css',
				'property' => 'height',
				'units'    => 'px',
			],
		]
	] );

	Kirki::add_field( 'fmc_panel', [
		'type'        => 'dimensions',
		'settings'    => 'checkout_padding',
		'label'       => esc_html__( 'Margin', 'finest-mini-cart' ),
		'description' => esc_html__( 'Applay Margin.', 'finest-mini-cart' ),
		'section'     => 'finest_styles',
		'default'     => [
			'padding-top'    => '10px',
			'padding-bottom' => '0px',
			'padding-left'   => '0px',
			'padding-right'  => '0px',
		],
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.finest-action-right',
				'function' => 'css',
				'property' => 'padding',
			],
		]

	] );

	Kirki::add_field( 'fmc_panel', [
		'type'        => 'slider',
		'settings'    => 'checkout_border_radius',
		'label'       => esc_html__( 'Radius', 'finest-mini-cart' ),
		'section'     => 'finest_styles',
		'default'     => 5,
		'choices'     => [
			'min'  => 0,
			'max'  => 200,
			'step' => 1,
		],
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.finest-action-right a',
				'function' => 'css',
				'property' => 'border-radius',
				'units'    => 'px',
			],
		]
	] );

	Kirki::add_field( 'fmc_panel', [
		'type'        => 'custom',
		'settings'    => 'checkout_box_button',
		'section'     => 'finest_styles',
			'default'         => '<h3 style="padding:12px 0px; text-align: center; font-size: 16px; background:#ddd; color:#222; margin:0;">' . __( 'Continue Shopping', 'finest-mini-cart' ) . '</h3>',
		'priority'    => 10,
	] );
	

	// mmodal content
	Kirki::add_field( 'fmc_panel', [
		'type'        => 'color',
		'settings'    => 'continue_bg_color',
		'label'       => __( 'Background Color', 'finest-mini-cart' ),
		'description' => esc_html__( 'Checkout Background Color', 'finest-mini-cart' ),
		'section'     => 'finest_styles',
		'default'     => '#000000',
		'choices'     => [
			'alpha' => true,
		],
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.finest-area-bot .finest-continue span',
				'function' => 'css',
				'property' => 'background-color',
			],
		]
	] );
	
	Kirki::add_field( 'fmc_panel', [
		'type'        => 'color',
		'settings'    => 'continue_color',
		'label'       => __( 'Color', 'finest-mini-cart' ),
		'description' => esc_html__( 'Checkout Color', 'finest-mini-cart' ),
		'section'     => 'finest_styles',
		'default'     => '#ffffff',
		'choices'     => [
			'alpha' => true,
		],
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.finest-area-bot .finest-continue span',
				'function' => 'css',
				'property' => 'color',
			],
		]
	] );

	Kirki::add_field( 'fmc_panel', [
		'type'        => 'slider',
		'settings'    => 'continue_height',
		'label'       => esc_html__( 'Height', 'finest-mini-cart' ),
		'section'     => 'finest_styles',
		'default'     => 55,
		'choices'     => [
			'min'  => 0,
			'max'  => 200,
			'step' => 1,
		],
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.finest-area-bot .finest-continue span',
				'function' => 'css',
				'property' => 'height',
				'units'    => 'px',
			],
		]
	] );

	Kirki::add_field( 'fmc_panel', [
		'type'        => 'dimensions',
		'settings'    => 'continue_padding',
		'label'       => esc_html__( 'Margin', 'finest-mini-cart' ),
		'description' => esc_html__( 'Applay Margin.', 'finest-mini-cart' ),
		'section'     => 'finest_styles',
		'default'     => [
			'margin-top'    => '10px',
			'margin-bottom' => '0px',
			'margin-left'   => '0px',
			'margin-right'  => '0px',
		],
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.finest-area-bot .finest-continue span',
				'function' => 'css',
				'property' => 'margin',
			],
		]

	] );

	Kirki::add_field( 'fmc_panel', [
		'type'        => 'slider',
		'settings'    => 'continue_border_radius',
		'label'       => esc_html__( 'Radius', 'finest-mini-cart' ),
		'section'     => 'finest_styles',
		'default'     => 5,
		'choices'     => [
			'min'  => 0,
			'max'  => 200,
			'step' => 1,
		],
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.finest-area-bot .finest-continue span',
				'function' => 'css',
				'property' => 'border-radius',
				'units'    => 'px',
			],
		]
	] );