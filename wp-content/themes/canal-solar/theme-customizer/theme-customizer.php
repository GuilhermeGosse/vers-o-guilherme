<?php  

require get_template_directory().'/theme-customizer/color.php';

function sp_customize_register($wp_customize) {
    sp_color_customizer($wp_customize);
    
}

?>