<?php

/*
Call all js css file
*/
if ( file_exists( FMC_INC . 'assets.php' ) ) {
    require_once( FMC_INC . 'assets.php' );
}

/*
Call all functions file
*/
if ( file_exists( FMC_INC . 'functions.php' ) ) {
    require_once( FMC_INC . 'functions.php' );
}

/*
Call all functions file
*/
if ( file_exists( FMC_INC . 'customizer/config.php' ) ) {
    require_once( FMC_INC . 'customizer/config.php' );
}

