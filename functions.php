<?php
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'recursos-menu' => __( 'Menu de Recursos' ),
      'soporte-menu' => __( 'Menu de Soporte' ),
      'inve-menu' => __( 'Menu de inverspot.mx' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
?>

<?php
function wpb_adding_scripts() {

wp_register_script('collapse-menu', get_template_directory_uri().'/menu.js', array('jquery'), '1', true);

wp_enqueue_script('collapse-menu');
}

add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );
?>
