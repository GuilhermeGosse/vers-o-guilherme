<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <style type="text/css">
    a.nav-link:hover,
    a.nav-link.active,
    .principal .card-text,
    .subtitle {
      color: <?php echo get_theme_mod('cs_color'); ?> !important;
    }
    
    ul.post-categories,
    li.menu-item-object-custom a,
    .search-submit:hover,
    .email {
      background-color: <?php echo get_theme_mod('cs_color');?> !important;
    }
  </style>
</head>

<body>
  <div class="container-fluid text-md-center">
    <div class="row bg-dark" style="height: 30px;">
      <div class="col-4 d-flex align-items-center">
        <a class="text-light text-decoration-none" href="#">Quem somos</a>
      </div>
      <div class="col-4 text-white d-flex align-items-center justify-content-center">
        <?php
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
        $data = date('F j, Y');
        $data_formatada = strftime('%d de %B de %Y', strtotime($data));
        echo '<span>' . $data_formatada . '</span>';
        ?>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a href="#"><i class="fab fa-facebook text-light px-1"></i></a>
        <a href="#"><i class="fab fa-linkedin text-light px-1"></i></a>
        <a href="#"><i class="fab fa-youtube text-light px-1"></i></a>
        <a href="#"><i class="fab fa-instagram text-light px-1"></i></a>
        <a href="#"><i class="fab fa-spotify text-light px-1"></i></a>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row d-flex mt-2">
      <div class="col-md-1">
        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
          <?php
          $logo = get_theme_mod('custom_logo');
          if ($logo) {
            echo wp_get_attachment_image($logo, 'full', false, array(
              'class'    => 'img-fluid float-start',
              'alt'      => get_bloginfo('name'),
            ));
          } else {
            echo get_bloginfo('name');
          }
          ?>
        </a>
      </div>
      <div class="col-md-5">
        <div id="email">
          <h6 class="email"><i class="fa fa-envelope border-1" aria-hidden="true"></i> E-mail</h6>
        </div>
      </div>
      <div class="col-md-6 d-flex align-items-center justify-content-end">
        <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
          <label>
            <span class="screen-reader-text"><?php echo _x('Search for:', 'label', 'textdomain'); ?></span>
            <div class="input-group">
              <input type="search" class="form-control search-field border-dark" placeholder="<?php echo esc_attr_x('Buscar...', 'placeholder', 'textdomain'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
              <button type="submit" class="btn btn-dark search-submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
          </label>
        </form>
      </div>
    </div>
  </div>

  <div class="bg-dark" style="height: 1px; margin-top: 10px;"></div>
  <div class="d-flex justify-content-center py-3">
    <nav class="navbar navbar-expand-md navbar-light">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="main-menu">
        <?php
        wp_nav_menu(array(
          'theme_location'  => 'main-menu',
          'container'       => false,
          'menu_class'      => 'primary',
          'fallback_cb'     => '__return_false',
          'items_wrap'      => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
          'depth'           => 2,
          'walker'          => new bootstrap_5_wp_nav_menu_walker()
        ));
        ?>

      </div>
    </nav>
  </div>

  <hr class="divisor">