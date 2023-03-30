<?php

function sp_color_customizer ($wp_customize){
// Settings - Salvar no banco de dados
$wp_customize-> add_setting('sp_color', array('default' => '#18125e'));

//Sections
$wp_customize->add_section('sp_color_section', array(
    'title' => 'Cor Primária',
    'priority' => 3
));

//Controllers
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'sp_color',
        array(
            'label' => 'Cor Primária',
            'section' => 'sp_color_section',
            'settings' => 'sp_color'
        )
    )
);
}

?>