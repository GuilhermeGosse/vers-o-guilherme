<?php wp_footer(); ?>
</body>
<footer class="container-fluid mt-5">
  <div class="row p-5">
    <div class="col-md-3 logo-footer">
      <div class="text-white text-center d-flex align-items-center flex-column">
        <a class="navbar-brand me-2" href="<?php echo esc_url(home_url('/')); ?>">
          <?php
          $logo = get_theme_mod('custom_logo');
          if ($logo) {
            echo wp_get_attachment_image($logo, 'full', false, array(
              'class' => 'img-fluid',
              'alt' => get_bloginfo('name'),
            ));
          } else {
            echo get_bloginfo('name');
          }
          ?>
        </a>
        <br>
        <p class="m-0">
          CNPJ: 29.768.006/0001-95<br>
          Endereço: Rua Paulo César Fidélis, 39<br>
          Salas 3 e 4 – Lot. Res. Vila Bella<br>
          Campinas – SP, 13087-727
        </p>
      </div>
    </div>


    <div class="col-md-3 text-white marca-registrada">
      <p style="color: #777;">Canal Solar (marca registrada)</p>
      <p>É um canal de notícias e informações sobre o setor de energia solar fotovoltaica.
        O conteúdo do canal é protegido pela lei de direitos autorais.
        É proibida a reprodução parcial ou total deste site em qualquer meio.</p>
    </div>

    <div class="col-md-3 ab-solar">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('cs_image-terceira-coluna'));?>" class="img-fluid" alt="">
    </div>

    <div class="col-md-3 selo-gptw">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('cs_image-quarta-coluna'));?>" class="img-fluid" alt="">
    </div>
  </div>

  <div class="row" style="background-color: #1C1C1C;">
    <div class="col-md text-white mt-2">
      <h6 style="color: #777;">© 2023 Canal Solar. Desenvolvido por <span>Canal Solar</span></h6>
    </div>
  </div>

</footer>

</html>