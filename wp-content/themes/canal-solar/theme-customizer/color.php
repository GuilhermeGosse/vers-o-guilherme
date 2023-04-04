<?php

function cs_color_customizer ($wp_customize){
// Settings - Salvar no banco de dados
$wp_customize-> add_setting('cs_color', array('default' => '#18125e'));

//Sections
$wp_customize->add_section('cs_color_section', array(
    'title' => 'Cor Primária',
    'priority' => 3
));

//Controllers
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'cs_color',
        array(
            'label' => 'Cor Primária',
            'section' => 'cs_color_section',
            'settings' => 'cs_color'
        )
    )
);
}

?>