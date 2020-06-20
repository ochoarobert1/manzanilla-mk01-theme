<?php
/* --------------------------------------------------------------
WP CUSTOMIZE SECTION - CUSTOM SETTINGS
-------------------------------------------------------------- */

add_action( 'customize_register', 'manzanilla_customize_register' );

function manzanilla_customize_register( $wp_customize ) {

    /* SOCIAL */
    $wp_customize->add_section('mc_social_settings', array(
        'title'    => __('Redes Sociales', 'manzanilla'),
        'description' => __('Agregue aqui las redes sociales de la página, serán usadas globalmente', 'manzanilla'),
        'priority' => 175,
    ));

    $wp_customize->add_setting('mc_social_settings[facebook]', array(
        'default'           => '',
        'sanitize_callback' => 'manzanilla_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'facebook', array(
        'type' => 'url',
        'section' => 'mc_social_settings',
        'settings' => 'mc_social_settings[facebook]',
        'label' => __( 'Facebook', 'manzanilla' ),
    ) );

    $wp_customize->add_setting('mc_social_settings[twitter]', array(
        'default'           => '',
        'sanitize_callback' => 'manzanilla_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'twitter', array(
        'type' => 'url',
        'section' => 'mc_social_settings',
        'settings' => 'mc_social_settings[twitter]',
        'label' => __( 'Twitter', 'manzanilla' ),
    ) );

    $wp_customize->add_setting('mc_social_settings[instagram]', array(
        'default'           => '',
        'sanitize_callback' => 'manzanilla_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'instagram', array(
        'type' => 'url',
        'section' => 'mc_social_settings',
        'settings' => 'mc_social_settings[instagram]',
        'label' => __( 'Instagram', 'manzanilla' ),
    ) );

    $wp_customize->add_setting('mc_social_settings[linkedin]', array(
        'default'           => '',
        'sanitize_callback' => 'manzanilla_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'linkedin', array(
        'type' => 'url',
        'section' => 'mc_social_settings',
        'settings' => 'mc_social_settings[linkedin]',
        'label' => __( 'LinkedIn', 'manzanilla' ),
    ) );

    $wp_customize->add_setting('mc_social_settings[youtube]', array(
        'default'           => '',
        'sanitize_callback' => 'manzanilla_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'youtube', array(
        'type' => 'url',
        'section' => 'mc_social_settings',
        'settings' => 'mc_social_settings[youtube]',
        'label' => __( 'YouTube', 'manzanilla' ),
    ) );

    $wp_customize->add_section('mc_cookie_settings', array(
        'title'    => __('Cookies', 'manzanilla'),
        'description' => __('Opciones de Cookies', 'manzanilla'),
        'priority' => 176,
    ));

    $wp_customize->add_setting('mc_cookie_settings[cookie_text]', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'capability'        => 'edit_theme_options',
        'type'           => 'option'

    ));

    $wp_customize->add_control( 'cookie_text', array(
        'type' => 'textarea',
        'label'    => __('Cookie consent', 'manzanilla'),
        'description' => __( 'Texto del Cookie consent.' ),
        'section'  => 'mc_cookie_settings',
        'settings' => 'mc_cookie_settings[cookie_text]'
    ));

    $wp_customize->add_setting('mc_cookie_settings[cookie_link]', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'cookie_link', array(
        'type'     => 'dropdown-pages',
        'section' => 'mc_cookie_settings',
        'settings' => 'mc_cookie_settings[cookie_link]',
        'label' => __( 'Link de Cookies', 'manzanilla' ),
    ) );

}

function manzanilla_sanitize_url( $url ) {
    return esc_url_raw( $url );
}

/* --------------------------------------------------------------
CUSTOM CONTROL PANEL
-------------------------------------------------------------- */

function register_manzanilla_settings() {
    register_setting( 'manzanilla-settings-group', 'monday_start' );
    register_setting( 'manzanilla-settings-group', 'monday_end' );
    register_setting( 'manzanilla-settings-group', 'monday_all' );
}

add_action('admin_menu', 'manzanilla_custom_panel_control');

function manzanilla_custom_panel_control() {
    add_menu_page(
        __( 'Panel de Control', 'manzanilla' ),
        __( 'Panel de Control','manzanilla' ),
        'manage_options',
        'manzanilla-control-panel',
        'manzanilla_control_panel_callback',
        'dashicons-admin-generic',
        120
    );
    add_action( 'admin_init', 'register_manzanilla_settings' );
}

function manzanilla_control_panel_callback() {
    ob_start();
?>
<div class="manzanilla-admin-header-container">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="manzanilla" />
    <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
</div>
<form method="post" action="options.php" class="manzanilla-admin-content-container">
    <?php settings_fields( 'manzanilla-settings-group' ); ?>
    <?php do_settings_sections( 'manzanilla-settings-group' ); ?>
    <div class="manzanilla-admin-content-item">
        <table class="form-table">
            <tr valign="center">
                <th scope="row"><?php _e('Monday', 'manzanilla'); ?></th>
                <td>
                    <label for="monday_start">Starting Hour: <input type="time" name="monday_start" value="<?php echo esc_attr( get_option('monday_start') ); ?>"></label>
                    <label for="monday_end">Ending Hour: <input type="time" name="monday_end" value="<?php echo esc_attr( get_option('monday_end') ); ?>"></label>
                    <label for="monday_all">All Day: <input type="checkbox" name="monday_all" value="1" <?php checked( get_option('monday_all'), 1 ); ?>></label>
                </td>
            </tr>
        </table>
    </div>
    <div class="manzanilla-admin-content-submit">
        <?php submit_button(); ?>
    </div>
</form>
<?php 
    $content = ob_get_clean();
    echo $content;
}
