<?php
Kirki::add_section( 'product_settings', array(
    'title'          => esc_html__( 'Product', 'finest-mini-cart' ),
    'panel'          => 'fmc_panel',
    'priority'       => 160,
) );


Kirki::add_field( 'fmc_panel', [
    'type'        => 'color',
    'settings'    => 'fmc_cart_abc',
    'label'       => __( 'Icon Box Background Color', 'finest-mini-cart' ),
    'section'     => 'product_settings',
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