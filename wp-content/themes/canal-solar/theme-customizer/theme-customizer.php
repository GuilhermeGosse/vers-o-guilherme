<?php  

require get_template_directory().'/theme-customizer/color.php';
require get_template_directory().'/theme-customizer/image.php';

function sp_customize_register($wp_customize) {
    cs_color_customizer($wp_customize);
    cs_image_customizer($wp_customize);
}



?>