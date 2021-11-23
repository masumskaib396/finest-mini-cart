<?php

Kirki::add_section( 'finest_settings', array(
    'title'          => esc_html__( 'General Options', 'finest-mini-cart' ),
    'panel'          => 'finest_panel',
    'priority'       => 160,
) );


Kirki::add_field( 'finest_panel', [
    'type'        => 'switch',
    'settings'    => 'on_quick_view',
	'label'       => esc_html__( 'Show Quick View', 'finest-mini-cart' ),
    'section'     => 'finest_settings',
    'default'     => 'on',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'finest-mini-cart' ),
        'off' => esc_html__( 'Disable', 'finest-mini-cart' ),
    ],
] );
