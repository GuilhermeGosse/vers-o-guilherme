<div class="container">
    <div class="row mt-4">
        <div class="col-md-12 d-flex align-items-center">
            <h4 class="text-center px-3">ARTIGOS</h4>
            <div class="w-100 bg-black border-bottom mx-3"></div>
        </div>
    </div>

    <div class="row mt-4">
        <div class=" col-md-6 emphasis">
            <?php
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'DESC',
                'posts_per_page' => 1,
                'tax_query' => array(
                    'relation' => 'OR',
                    array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => array('artigos'),
                    ),
                ),
            );
            $query = new WP_Query($args);
            while ($query->have_posts()) : $query->the_post();
            ?>
                <a href="<?php the_permalink(); ?>" class="card-link">
                    <div class="card border-0">
                        <?php the_post_thumbnail('medium', array('class' => 'card-img', 'style' => 'width:520px; height:250px')); ?>
                        <div class="card-img-overlay d-flex">
                            <h4 class="card-text emphasis text-md-start d-flex align-self-end">
                                <?php the_title(); ?>
                            </h4>
                        </div>
                    </div>
                </a>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <?php
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => 2,
            'offset' => 1,
            'tax_query' => array(
                'relation' => 'OR',
                array(
                    'taxonomy' => 'category',
                    'field' => 'slug',
                    'terms' => array('artigos'),
                ),
            ),
        );
        $query = new WP_Query($args);
        while ($query->have_posts()) : $query->the_post();
        ?>
            <div class="col-md-3 principal">
                <div class="card border-0">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', ['class' => 'card-img', 'alt' => 'Featured Image', 'style' => 'width:250px; height: 150px']); ?></a>
                    <div class="card-body">
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
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </div>
    <div class="row mt-4 principal">
        <?php
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => 4,
            'offset' => 3,
            'tax_query' => array(
                'relation' => 'OR',
                array(
                    'taxonomy' => 'category',
                    'field' => 'slug',
                    'terms' => array('artigos'),
                ),
            ),
        );
        $query = new WP_Query($args);
        while ($query->have_posts()) : $query->the_post();
        ?>
            <div class="col-md-3">
                <div class="card border-0">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', ['class' => 'card-img', 'alt' => 'Featured Image', 'style' => 'width:250px; height: 150px']); ?></a>
                    <div class="card-body">
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
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </div>

</div>