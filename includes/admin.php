<?php 

    function admin_menu() {
        $parent_slug = 'finest-mini-cart';
        $capability = 'manage_options';

        add_menu_page( __( 'Finest Mini Cart', 'finest-mini-cart' ), __( 'Minicart Option', 'finest-mini-cart' ), $capability, $parent_slug, 'plugin_option', 'dashicons-welcome-learn-more' );
        add_submenu_page( $parent_slug, __( 'Minicart Option', 'finest-mini-cart' ), __( 'Address Book', 'finest-mini-cart' ), $capability, $parent_slug, 'plugin_option' );
    }

    add_action( 'admin_menu',  'admin_menu'  );

    function plugin_option() { ?>
        <div class="wrap" >
            <h1><?php _e('Customize Option','finest-mini-cart'); ?></h1>
            <a href="<?php echo admin_url( 'customize.php' ); ?>" ><?php _e( 'Go to Customize', 'finest-mini-cart' ); ?></a>
        </div>
    <?php }
