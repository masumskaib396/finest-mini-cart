<?php

if (function_exists('kirki')) {

	Kirki::add_panel( 'fmc_panel', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Finest Mini Cart Options', 'finest-mini-cart' ),
	) );



	// General
	if ( file_exists(  FMC_INC . 'customizer/general.php' ) ) {
		require_once(  FMC_INC . 'customizer/general.php' );
	}
	if ( file_exists(  FMC_INC . 'customizer/translations.php' ) ) {
		require_once(  FMC_INC . 'customizer/translations.php' );
	}
	// Style
	if ( file_exists(  FMC_INC . 'customizer/visibility.php' ) ) {
		require_once(  FMC_INC . 'customizer/visibility.php' );
	}

	// Style
	if ( file_exists(  FMC_INC . 'customizer/cart-style.php' ) ) {
		require_once(  FMC_INC . 'customizer/cart-style.php' );
	}


}
