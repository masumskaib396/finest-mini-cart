<?php
	Kirki::add_section( 'finest_styles', array(
		'title'          => esc_html__( 'Bottom Style', 'finest-mini-cart' ),
		'panel'          => 'finest_panel',
		'priority'       => 160,
	) );


	// mmodal content
	Kirki::add_field( 'finest_panel', [
		'type'        => 'color',
		'settings'    => 'modal_background_color',
		'label'       => __( 'Modal Background Color', 'finest-mini-cart' ),
		'description' => esc_html__( 'This is a color control - with alpha channel.', 'finest-mini-cart' ),
		'section'     => 'finest_styles',
		'default'     => '#0088CC',
		'choices'     => [
			'alpha' => true,
		],
	] );



