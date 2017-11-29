<footer class="footer__top-border footer__padding-top">
  <div class="container">
    <div class="footer">
      <div class="brand-sitemap">
        <div class="brand-sitemap__item">
          <div class="brand-image">
            <img class="brand__image--white " alt="Inverspot" src="http://inverspot.apps-1and1.com/wp-content/uploads/2017/11/inverspotmorado.png">
          </div>
          <div class="brand__caption">
            <p class="u-color-primary u-fs-super-small">Tu punto de inversión inmobiliario</p>
          </div>
          <div class="address">
            <address>
              <p>Avenida de las Palmas 1320</p>
              <p>Lomas de Chapultepec</p>
              <p>CDMX</p><br>
              <br>
              <p>01 (55) 8000 6555</p>
              <p><a href="#" class="link-item u-color-primary">hola@inverspot.mx</a></p>
            </address>
          </div>
        </div>
        <div class="brand-sitemap__item">
          <div class="menu__footer">
            <p class="u-fw-bold u-color-primary">Recursos</p>
            <?php wp_nav_menu( array( 'theme_location' => 'recursos-menu',  'container_class' => '', 'menu_class' => ''  ) ); ?>
          </div>
        </div>
        <div class="brand-sitemap__item">
          <div class="menu__footer">
            <p class="u-fw-bold u-color-primary">Soporte</p>
            <?php wp_nav_menu( array( 'theme_location' => 'soporte-menu',  'container_class' => '', 'menu_class' => ''  ) ); ?>
          </div>
        </div>
        <div class="brand-sitemap__item">
          <div class="menu__footer">
            <p class="u-fw-bold u-color-primary">Inverspot.mx</p>
            <?php wp_nav_menu( array( 'theme_location' => 'inve-menu',  'container_class' => '', 'menu_class' => ''  ) ); ?>
          </div>
        </div>
      </div>
      <div class="footer__notice">
        <p class="u-fs-super-small text-aling-justify u-fc-black"><span class="u-color-accent u-fw-bold">1*</span> Tiempo estimado: Inverspot no se hace responsable por el tiempo que dure la construcción. los tiempos mencionados son estimados y pueden variar en función de cada proyecto.<span class="u-color-accent u-fw-bold">2*</span> Rendimientos estimados: Calculada en función en los precios actuales de la zona por proyecto. Inverspot no garantiza rendimientos.<span class="u-color-accent u-fw-bold">3*</span> La inversión: Inverspot, garantiza el capital invertido en los proyectos, siempre y cuando, no exista un riesgo nivel país.<span class="u-color-accent u-fw-bold">*</span> Las fotografías mostradas en cada proyecto, son de carácter ilustrativo y no necesariamente reflejan el proyecto final.</p>
      </div>
    </div>
  </div>
  <section class="bottom-bar u-bg-primary">
    <div class="container">
      <p class="u-color-white bottom-bar__p_-margin u-fs-super-small">©2017 inverspot.mx | All Rights Reserved</p>
    </div>
  </section>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="menu.js"></script>
	<?php wp_footer(); ?>
</body>
</html>
