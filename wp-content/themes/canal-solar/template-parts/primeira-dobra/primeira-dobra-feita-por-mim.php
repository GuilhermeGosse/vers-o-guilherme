<div class="row mt-3 destaque">
  <div class="col-md-8 d-flex">
    <?php
    $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'orderby' => 'date',
      'order' => 'DESC',
      'tax_query' => array(
        'relation' => 'OR',
        array(
          'taxonomy' => 'post_tag',
          'field' => 'slug',
          'terms' => array('destaque'),
        ),
      ),
      'posts_per_page' => 1,
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) :
      while ($query->have_posts()) :
        $query->the_post();
    ?>
        <div class="card border-0">
          <?php the_post_thumbnail('large', array('class' => 'card-img', 'style' => 'height:450px; width:740px')); ?>
          <div class="card-img-overlay d-flex">
          <h4 class="d-flex position-absolute"><?php the_category(); ?></h4>
            <h4 class="card-text emphasis text-md-start d-flex align-self-end">
              <a class="text-light" href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
            </h4>
          </div>
        </div>

    <?php
      endwhile;
    endif;
    wp_reset_postdata();
    ?>
  </div>

  <div class="col-md-4">
    <?php
    $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'orderby' => 'date',
      'order' => 'DESC',
      'posts_per_page' => 3,
      'tax_query' => array(
        'relation' => 'OR',
        array(
          'taxonomy' => 'category',
          'field' => 'slug',
          'terms' => array('brasil', 'mundo'),
        ),
      ),
    );
    $secondary_posts = new WP_Query($args);

    if ($secondary_posts->have_posts()) :
      while ($secondary_posts->have_posts()) :
        $secondary_posts->the_post();
        $categories = get_the_category();
        if (!empty($categories)) {
          $category = $categories[0];   // mostrar apenas a primeira categoria
          $category_link = get_category_link($category->term_id);
        }
    ?>
        <div class="row mt-4">
          <div class="col-md-6">
            <h6 class="d-flex position-absolute">
              <ul class="post-categories"><a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($category->name); ?></a></ul> <a href="<?php the_permalink(); ?>">
            </h6>
            <?php if (has_post_thumbnail()) : ?>
              <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" style="width: 180px; height: 120px;" alt="<?php the_title(); ?>">
              </a>
            <?php endif; ?>
          </div>
          <div class="col-md-6">
            <a href="<?php the_permalink(); ?>">
              <span class="card-text">
                <?php the_title(); ?>
              </span>
            </a>
            <?php
            $excerpt = get_the_excerpt();
            if (strlen($excerpt) > 40) {      // caso a descrição for maior que 40 caracteres ele mostra [...] no final.
              $excerpt = substr($excerpt, 0, 40) . '[...]';
            }
            ?>
            <p><?php echo $excerpt; ?></p>
          </div>
        </div>
    <?php
      endwhile;
    endif;
    wp_reset_postdata();
    ?>
  </div>
</div>
</div>

<div class="container">
  <div class="row mt-4 outras-noticias-sem-img">
    <?php
    $query = new WP_Query(array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'orderby' => 'date',
      'order' => 'DESC',
      'posts_per_page' => 4,
      'tax_query' => array(
        'relation' => 'OR',
        array(
          'taxonomy' => 'category',
          'field' => 'slug',
          'terms' => array('brasil', 'mundo'),
        ),
      ),
    ));

    $count = 0;
    while ($query->have_posts()) {
      $query->the_post();
      $excerpt = get_the_excerpt();
      if (strlen($excerpt) > 50) {      // caso a descrição for maior que 50 caracteres ele mostra [...] no final.
        $excerpt = substr($excerpt, 0, 50) . '[...]';
      }
      $count++;
      if ($count % 4 == 0) {
        echo '<div class="col-md-3">';
      } else {
        echo '<div class="col-md-3 border-end border-dark">';
      }
      echo '<a href="' . get_permalink() . '"><span>' . get_the_title() . '</span></a>';
      echo '<p class="card-text">' . $excerpt . '</p>';
      echo '</div>';
      if ($count % 4 != 0) {
        echo '<div class="col-md-12 border-bottom border-dark d-md-none"></div>';
      }
    }

    wp_reset_postdata();
    ?>
  </div>
</div>