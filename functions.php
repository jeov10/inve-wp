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
