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
		'type'        => 'radio-buttonset',
		'settings'    => 'checkout_border_property',
		'label'       => esc_html__( 'Border Property', 'finest-quickview' ),
		'section'     => 'finest_styles',
		'default'     => 'border',
		'priority'    => 10,
		'choices'     => [
			'border'   => esc_html__( 'Border', 'finest-quickview' ),
			'style' => esc_html__( 'Style', 'finest-quickview' ),
			'color'  => esc_html__( 'Color', 'finest-quickview' ),
		],
		'active_callback' => [
			[
				'setting'  => 'button_normal_hover',
				'operator' => '==',
				'value'    => 'button_normal',
			]
		],
	] );

	Kirki::add_field( 'fmc_panel', [
		'type'        => 'dimension',
		'settings'    => 'check_btn_border',
		'label'       => esc_html__( 'Button Border', 'finest-quickview' ),
		'description' => esc_html__( 'Apply Button Border.', 'finest-quickview' ),
		'section'     => 'finest_styles',
		'default'     =>'0px',
		'active_callback' => [
			[
				'setting'  => 'checkout_border_property',
				'operator' => '===',
				'value'    => 'border',
			],
		],
		

	] );

	Kirki::add_field( 'fmc_panel', [
		'type'        => 'select',
		'settings'    => 'ckout_border_style',
		'label'       => esc_html__( 'Border Style', 'finest-quickview' ),
		'section'     => 'finest_styles',
		'default'     => 'None',
		'placeholder' => esc_html__( 'Select an option...', 'finest-quickview' ),
		'priority'    => 10,
		'multiple'    => 1,
		'choices'     => [
			'none' => esc_html__( 'None', 'finest-quickview' ),
			'dotted' => esc_html__( 'Dotted', 'finest-quickview' ),
			'dashed' => esc_html__( 'Dashed', 'finest-quickview' ),
			'solid' => esc_html__( 'Solid', 'finest-quickview' ),
			'double' => esc_html__( 'Double', 'finest-quickview' ),
			'groove' => esc_html__( 'Groove', 'finest-quickview' ),
			'ridge' => esc_html__( 'Ridge', 'finest-quickview' ),
			'inset' => esc_html__( 'Inset', 'finest-quickview' ),
			'outset' => esc_html__( 'Outset', 'finest-quickview' ),
			'initial' => esc_html__( 'Initial', 'finest-quickview' ),
		],
		'active_callback' => [
			[
				'setting'  => 'checkout_border_property',
				'operator' => '===',
				'value'    => 'style',
			],
		],
		
	] );

	Kirki::add_field( 'fmc_panel', [
		'type'        => 'color',
		'settings'    => 'checkout_border_color',
		'label'       => __( 'Border Color', 'finest-quickview' ),
		'description' => esc_html__( 'This is a border color', 'finest-quickview' ),
		'section'     => 'finest_styles',
		'default'     => '#0088CC',
		'choices'     => [
			'alpha' => true,
		],
		'active_callback' => [
			[
				'setting'  => 'checkout_border_property',
				'operator' => '===',
				'value'    => 'color',
			],
		],
		
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
		'type'        => 'radio-buttonset',
		'settings'    => 'checkout_border_property',
		'label'       => esc_html__( 'Border Property', 'finest-quickview' ),
		'section'     => 'finest_styles',
		'default'     => 'border',
		'priority'    => 10,
		'choices'     => [
			'border'   => esc_html__( 'Border', 'finest-quickview' ),
			'style' => esc_html__( 'Style', 'finest-quickview' ),
			'color'  => esc_html__( 'Color', 'finest-quickview' ),
		],
		'active_callback' => [
			[
				'setting'  => 'button_normal_hover',
				'operator' => '==',
				'value'    => 'button_normal',
			]
		],
	] );

	Kirki::add_field( 'fmc_panel', [
		'type'        => 'dimension',
		'settings'    => 'check_btn_border',
		'label'       => esc_html__( 'Button Border', 'finest-quickview' ),
		'description' => esc_html__( 'Apply Button Border.', 'finest-quickview' ),
		'section'     => 'finest_styles',
		'default'     =>'0px',
		'active_callback' => [
			[
				'setting'  => 'checkout_border_property',
				'operator' => '===',
				'value'    => 'border',
			],
		],
		

	] );

	Kirki::add_field( 'fmc_panel', [
		'type'        => 'select',
		'settings'    => 'ckout_border_style',
		'label'       => esc_html__( 'Border Style', 'finest-quickview' ),
		'section'     => 'finest_styles',
		'default'     => 'None',
		'placeholder' => esc_html__( 'Select an option...', 'finest-quickview' ),
		'priority'    => 10,
		'multiple'    => 1,
		'choices'     => [
			'none' => esc_html__( 'None', 'finest-quickview' ),
			'dotted' => esc_html__( 'Dotted', 'finest-quickview' ),
			'dashed' => esc_html__( 'Dashed', 'finest-quickview' ),
			'solid' => esc_html__( 'Solid', 'finest-quickview' ),
			'double' => esc_html__( 'Double', 'finest-quickview' ),
			'groove' => esc_html__( 'Groove', 'finest-quickview' ),
			'ridge' => esc_html__( 'Ridge', 'finest-quickview' ),
			'inset' => esc_html__( 'Inset', 'finest-quickview' ),
			'outset' => esc_html__( 'Outset', 'finest-quickview' ),
			'initial' => esc_html__( 'Initial', 'finest-quickview' ),
		],
		'active_callback' => [
			[
				'setting'  => 'checkout_border_property',
				'operator' => '===',
				'value'    => 'style',
			],
		],
		
	] );

	Kirki::add_field( 'fmc_panel', [
		'type'        => 'color',
		'settings'    => 'checkout_border_color',
		'label'       => __( 'Border Color', 'finest-quickview' ),
		'description' => esc_html__( 'This is a border color', 'finest-quickview' ),
		'section'     => 'finest_styles',
		'default'     => '#0088CC',
		'choices'     => [
			'alpha' => true,
		],
		'active_callback' => [
			[
				'setting'  => 'checkout_border_property',
				'operator' => '===',
				'value'    => 'color',
			],
		],
		
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