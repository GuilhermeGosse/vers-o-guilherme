<?php
if (!defined('ABSPATH')) {
  exit;
}
require get_template_directory().'/theme-customizer/theme-customizer.php';
require get_template_directory() . '/functions/setup.php';
require get_template_directory() . '/functions/enqueues.php';
require get_template_directory() . '/functions/navbar.php';

add_action('customize_register', 'sp_customize_register');
