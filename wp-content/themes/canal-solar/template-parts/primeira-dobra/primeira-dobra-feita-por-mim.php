
<div class="row mt-3 destaque">
<div class="col-md-8 d-flex emphasis">
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
            'terms' => array( 'destaque'),
        ),
    ),
    'posts_per_page' => 1, 
);
  $query = new WP_Query($args);
  if ($query->have_posts()) :
    while ($query->have_posts()) :
      $query->the_post();
  ?>
      <a href="<?php the_permalink(); ?>">
        <div class="card border-0">
          <?php the_post_thumbnail('large', array('class' => 'card-img')); ?>
          <div class="card-img-overlay text-md-start d-flex align-self-end">
            <h4 class="card-text emphasis">
              <?php the_title(); ?>
            </h4>
          </div>
        </div>
      </a>
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
            'terms' => array( 'brasil', 'mundo' ),
        ),
    ),
    );
    $secondary_posts = new WP_Query($args);

    if($secondary_posts->have_posts()) :
      while($secondary_posts->have_posts()) :
        $secondary_posts->the_post();
  ?>
  <div class="row mt-4">
  <div class="col-md-6">
    <a href="<?php the_permalink(); ?>">
        <?php if(has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" alt="<?php the_title(); ?>">
    </a>
        <?php endif; ?>
  </div>
  <div class="col-md-6">
        <p class="card-text">
        <?php the_title(); ?>
        </p>
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

<div class="row-mt-4">
  <?php
    $args = array(
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
            'terms' => array( 'brasil', 'mundo' ),
        ),
    ),
    );
    $others_posts = new WP_Query($args);

    if($others_posts->have_posts()) :
      while($others_posts->have_posts()) :
        $others_posts->the_post();
  ?>
 <div class="col-md-3 border-end border-dark">
 <a href="<?php the_permalink(); ?>"><p class="card-text"><span><?php the_title(); ?></span></p></a>
  </div>
  <?php
      endwhile;
      wp_reset_postdata();
    endif;
  ?>
</div>