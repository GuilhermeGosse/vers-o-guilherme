<?php

function cs_image_customizer ($wp_customize){
// Settings - Salvar no banco de dados
$wp_customize-> add_setting('cs_image-terceira-coluna', array('default' => ''));
$wp_customize-> add_setting('cs_image-quarta-coluna', array('default' => ''));

//Sections
$wp_customize->add_section('cs_image_section', array(
    'title' => 'Imagens do Footer',
    'priority' => 4
));

//Controllers
$wp_customize->add_control(
    new WP_Customize_Cropped_Image_Control(
        $wp_customize,
        'cs_image-terceira-coluna',
        array(
            'label' => 'Selecione a imagem da terceira coluna',
            'section' => 'cs_image_section',
            'settings' => 'cs_image-terceira-coluna',
            'height' => 400,
            'width' => 400
        )
    )
);

$wp_customize->add_control(
    new WP_Customize_Cropped_Image_Control(
        $wp_customize,
        'cs_image-quarta-coluna',
        array(
            'label' => 'Selecione a imagem da quarta coluna',
            'section' => 'cs_image_section',
            'settings' => 'cs_image-quarta-coluna',
            'height' => 400,
            'width' => 400
        )
    )
);

}

?>