<?php
/* SLIDER REVOLUTION */
$array_sliders = array();
if (class_exists('RevSlider')) {
    $slider = new RevSlider();
    $objSliders = $slider->get_sliders();
    if (!empty($objSliders)) {
        foreach( $objSliders as $slider ){
            $array_sliders[$slider->alias] = $slider->title;
        }
    }
}

/* --------------------------------------------------------------
    1.- HOME: HERO SECTION
-------------------------------------------------------------- */
$cmb_home_hero = new_cmb2_box( array(
    'id'            => $prefix . 'home_hero_metabox',
    'title'         => esc_html__( 'Home: Hero Principal', 'investjp' ),
    'object_types'  => array( 'page' ),
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-home.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'cmb_styles' => true,
    'closed'     => false
) );

$cmb_home_hero->add_field( array(
    'id'         => $prefix . 'home_hero_slider',
    'name'       => esc_html__( 'Slider Revolution', 'gespetfood' ),
    'desc'       => esc_html__( 'Seleccione el Slider a usar en el gespetfood', 'gespetfood' ),
    'type'             => 'select',
    'show_option_none' => true,
    'default'          => '',
    'options'          => $array_sliders
) );


/* --------------------------------------------------------------
    2.- HOME: BOXES SECTION
-------------------------------------------------------------- */
$cmb_home_boxes = new_cmb2_box( array(
    'id'            => $prefix . 'home_boxes_metabox',
    'title'         => esc_html__( 'Home: Sección de Cajas', 'investjp' ),
    'object_types'  => array( 'page' ),
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-home.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'cmb_styles' => true,
    'closed'     => false
) );

$group_field_id = $cmb_home_boxes->add_field( array(
    'id'          => $prefix . 'home_boxes_group',
    'type'        => 'group',
    'description' => __( 'Cajas de links - Justo debajo del Slider', 'manzanilla' ),
    'options'     => array(
        'group_title'       => __( 'Caja {#}', 'manzanilla' ),
        'add_button'        => __( 'Agergar Otra Caja', 'manzanilla' ),
        'remove_button'     => __( 'Remover Caja', 'manzanilla' ),
        'sortable'          => true,
        'closed'         => true,
        'remove_confirm' => esc_html__( '¿Estas seguro de remover esta caja?', 'manzanilla' )
    )
) );

$cmb_home_boxes->add_group_field( $group_field_id, array(
    'id'   => 'box_bg',
    'name'      => esc_html__( 'Imagen de Fondo', 'manzanilla' ),
    'desc'      => esc_html__( 'Cargar un fondo para esta caja', 'manzanilla' ),
    'type'    => 'file',

    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Cargar Imagen de Fondo', 'manzanilla' ),
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

$cmb_home_boxes->add_group_field( $group_field_id, array(
    'id'   => 'title',
    'name'      => esc_html__( 'Titulo de Caja', 'manzanilla' ),
    'desc'      => esc_html__( 'Ingrese un Titulo para esta Caja', 'manzanilla' ),
    'type' => 'text'
) );

$cmb_home_boxes->add_group_field( $group_field_id, array(
    'id'   => 'link',
    'name'      => esc_html__( 'Link del boton de la Caja', 'manzanilla' ),
    'desc'      => esc_html__( 'Ingrese un link URL para esta Caja', 'manzanilla' ),
    'type' => 'text_url'
) );
