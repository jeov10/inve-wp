<?php
/*
Template Name: Contacto
*/
?>
<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<div class="container">
  <section class="form-container --u-margin-bottom --u-margin-top">
    <div class="full-contact-form slider-main">
      <p class="text-aling-center h1 u-color-white">A form goes here</p>
    </div>
    <div class="address-container">
      <div class="address">
        <p class="h2 u-color-accent u-fw-bold text-aling-left u-border-bottom">Dirección</p>
        <address class="text-aling-left u-color-primary">
          <br>
          <p class="u-fw-bold">Inverspot</p>
          <p>Avenida de las Palmas 1320</p>
          <p>Lomas de Chapultepec, CDMX, México</p>
          <p>Teléfono: 01 (55) 8000 6555</p>
          <br>
          <br>
          <p class="u-fw-bold">Correo Electrónico</p>
          <p><a href="#" class="link-item u-color-primary">hola@inverspot.mx</a></p>
        </address>
      </div>
    </div>
  </section>
  <div class="map">
    <div class="google-maps">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.7673358231136!2d-99.22509408547884!3d19.42245618689009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2018f56874b8d%3A0xc5da08cf34cb1978!2sAv.+Paseo+de+las+Palmas+1320%2C+Lomas+de+Chapultepec+V+Secc%2C+11000+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses!2smx!4v1495821729420" width="400" height="200" frameborder="0" allowfullscreen=""></iframe>
    </div>
  </div>
</div>
<?php get_footer(); ?>
