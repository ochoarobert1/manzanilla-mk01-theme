<?php
/* --------------------------------------------------------------
    1.- ABOUT: FIRST QUOTE SECTION
-------------------------------------------------------------- */
$cmb_about_content = new_cmb2_box( array(
    'id'            => $prefix . 'about_content_metabox',
    'title'         => esc_html__( 'About: Contenido debajo de foto principal', 'manzanilla' ),
    'object_types'  => array( 'page' ),
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-about.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'cmb_styles' => true,
    'closed'     => false
) );

$cmb_about_content->add_field( array(
    'id'        => $prefix . 'about_content_desc',
    'name'      => esc_html__( 'Contenido', 'manzanilla' ),
    'desc'      => esc_html__( 'Ingresa el contenido luego de la fotografía', 'manzanilla' ),
    'type' => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny' => false
    )
) );

/* --------------------------------------------------------------
    2.- ABOUT: FIRST QUOTE SECTION
-------------------------------------------------------------- */
$cmb_about_quotes1 = new_cmb2_box( array(
    'id'            => $prefix . 'about_quote1_metabox',
    'title'         => esc_html__( 'About: Cita Superior', 'manzanilla' ),
    'object_types'  => array( 'page' ),
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-about.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'cmb_styles' => true,
    'closed'     => false
) );

$cmb_about_quotes1->add_field( array(
    'id'        => $prefix . 'about_quote1_desc',
    'name'      => esc_html__( 'Descripción de la Cita', 'manzanilla' ),
    'desc'      => esc_html__( 'Ingrese la cita aquí', 'manzanilla' ),
    'type' => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny' => false
    )
) );

$cmb_about_quotes1->add_field( array(
    'id'        => $prefix . 'about_quote1_author',
    'name'      => esc_html__( 'Autor de la Cita', 'manzanilla' ),
    'desc'      => esc_html__( 'Ingrese el autor aquí', 'manzanilla' ),
    'type'      => 'text'
) );

/* --------------------------------------------------------------
    3.- ABOUT: SECOND QUOTE SECTION
-------------------------------------------------------------- */
$cmb_about_quotes2 = new_cmb2_box( array(
    'id'            => $prefix . 'about_quote2_metabox',
    'title'         => esc_html__( 'About: Cita Inferior', 'manzanilla' ),
    'object_types'  => array( 'page' ),
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-about.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'cmb_styles' => true,
    'closed'     => false
) );

$cmb_about_quotes2->add_field( array(
    'id'        => $prefix . 'about_quote2_desc',
    'name'      => esc_html__( 'Descripción de la Cita', 'manzanilla' ),
    'desc'      => esc_html__( 'Ingrese la cita aquí', 'manzanilla' ),
    'type' => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny' => false
    )
) );

$cmb_about_quotes2->add_field( array(
    'id'        => $prefix . 'about_quote2_author',
    'name'      => esc_html__( 'Autor de la Cita', 'manzanilla' ),
    'desc'      => esc_html__( 'Ingrese el autor aquí', 'manzanilla' ),
    'type'      => 'text'
) );
