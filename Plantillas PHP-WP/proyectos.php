<?php
/*
Template Name: Proyectos
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
<div class="proyectos">
      <div class="container">
        <div class="box__description">
          <p class="h1 u-color-primary text-aling-center">Proyectos Disponibles</p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="box">
        <div class="box__description">
          <p class="h1 u-fw-bold u-color-accent">Últimos Proyectos Fondeados</p>
        </div>
        <div class="box__description">
          <a href="#" class="link-item u-color-primary link-item__border-bottom"><class="h3 u-fw-bold">Ver todos</a>
        </div>
      </div>
    </div>
<?php get_footer(); ?>
