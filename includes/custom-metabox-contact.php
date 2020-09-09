<?php
/* --------------------------------------------------------------
    1.- ABOUT: FIRST QUOTE SECTION
-------------------------------------------------------------- */
$cmb_contact_content = new_cmb2_box( array(
    'id'            => $prefix . 'contact_content_metabox',
    'title'         => esc_html__( 'Contacto: Contenido Adicional', 'manzanilla' ),
    'object_types'  => array( 'page' ),
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-contact.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'cmb_styles' => true,
    'closed'     => false
) );

$cmb_contact_content->add_field( array(
    'id'        => $prefix . 'contact_image_form',
    'name'      => esc_html__( 'Imagen al lado del Formulario', 'manzanilla' ),
    'desc'      => esc_html__( 'Cargar una Imagen para esta caja', 'manzanilla' ),
    'type'    => 'file',

    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Cargar Imagen', 'manzanilla' ),
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'medium'
) );

$cmb_contact_content->add_field( array(
    'id'        => $prefix . 'contact_form_desc',
    'name'      => esc_html__( 'Formulario de Contacto', 'manzanilla' ),
    'desc'      => esc_html__( 'Colocar aqui el shortcode del formulario', 'manzanilla' ),
    'type' => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny' => false
    )
) );
