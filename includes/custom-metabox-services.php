<?php
/* --------------------------------------------------------------
    1.- ABOUT: FIRST QUOTE SECTION
-------------------------------------------------------------- */
$cmb_services_items = new_cmb2_box( array(
    'id'            => $prefix . 'services_metabox',
    'title'         => esc_html__( 'Services: Items', 'manzanilla' ),
    'object_types'  => array( 'page' ),
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-services.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'cmb_styles' => true,
    'closed'     => false
) );

$group_field_id = $cmb_services_items->add_field( array(
    'id'          => $prefix . 'services_items_group',
    'type'        => 'group',
    'title'         => esc_html__( 'Services: Items', 'manzanilla' ),
    'description' => __( 'Servicios dentro de la sección', 'manzanilla' ),
    'options'     => array(
        'group_title'       => __( 'Item {#}', 'manzanilla' ),
        'add_button'        => __( 'Agregar Otro Item', 'manzanilla' ),
        'remove_button'     => __( 'Remover Item', 'manzanilla' ),
        'sortable'          => true,
        'closed'            => false,
        'remove_confirm'    => esc_html__( '¿Estas seguro de remover este item?', 'manzanilla' )
    )
) );

$cmb_services_items->add_group_field( $group_field_id, array(
    'id'   => 'icon',
    'name'      => esc_html__( 'Icono del Servicio', 'manzanilla' ),
    'desc'      => esc_html__( 'Cargar un icono para este servicio', 'manzanilla' ),
    'type'    => 'file',

    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Cargar Icono del Servicio', 'manzanilla' ),
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'avatar'
) );

$cmb_services_items->add_group_field( $group_field_id, array(
    'id'   => 'title',
    'name'      => esc_html__( 'Titulo del Item', 'manzanilla' ),
    'desc'      => esc_html__( 'Ingrese un titulo alusivo al Item', 'manzanilla' ),
    'type' => 'text'
) );

$cmb_services_items->add_group_field( $group_field_id, array(
    'id'   => 'desc',
    'name'      => esc_html__( 'Descripción del Item', 'manzanilla' ),
    'desc'      => esc_html__( 'Ingrese una descripción alusiva al Item', 'manzanilla' ),
    'type' => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny' => false
    )
) );

/* --------------------------------------------------------------
    2.- SERVICES: CONTENT AFTER ITEMS
-------------------------------------------------------------- */
$cmb_services_content = new_cmb2_box( array(
    'id'            => $prefix . 'services_content_metabox',
    'title'         => esc_html__( 'Services: Contenido', 'manzanilla' ),
    'object_types'  => array( 'page' ),
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-services.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'cmb_styles' => true,
    'closed'     => false
) );

$cmb_services_content->add_field( array(
    'id'        => $prefix . 'services_content_desc',
    'name'      => esc_html__( 'Contenido', 'manzanilla' ),
    'desc'      => esc_html__( 'Ingresa el contenido luego de la fotografía', 'manzanilla' ),
    'type' => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny' => false
    )
) );
