<div class="row mt-4">
    <div class="col-md-4">
        <div class="col-md-12 d-flex align-items-center text-center border-top border-dark border-1 pt-3">
            <h6 class="mx-auto text-center">BLOG</h6>
        </div>

        <div class=" col md-4 emphasis mt-4">
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
                        'terms' => array('blog'),
                    ),
                ),
            );
            $query = new WP_Query($args);
            while ($query->have_posts()) : $query->the_post();
            ?>
                <a href="<?php the_permalink(); ?>" class="card-link">
                    <div class="card border-0">
                        <?php the_post_thumbnail('medium', array('class' => 'card-img', 'style' => 'height:230px')); ?>
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
                    'terms' => array('blog'),
                ),
            ),
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
        ?>

                <div class="row g-2 mt-1">
                    <div class="col-md-6">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" style="width: 180px; height: 120px;" alt="<?php the_title(); ?>">
                        </a>
                    <?php endif; ?>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <a href="<?php the_permalink(); ?>">
                                <span class="card-text">
                                    <?php the_title(); ?>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
    <div class="col-md-4">
        <div class="col-md-12 d-flex align-items-center text-center border-top border-dark border-1 pt-3">
            <h6 class="mx-auto text-center">EVENTOS</h6>
        </div>
        <div class=" col md-4 emphasis mt-4">
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
                        'terms' => array('eventos'),
                    ),
                ),
            );
            $query = new WP_Query($args);
            while ($query->have_posts()) : $query->the_post();
            ?>
                <a href="<?php the_permalink(); ?>" class="card-link">
                    <div class="card border-0">
                        <?php the_post_thumbnail('medium', array('class' => 'card-img', 'style' => 'height:230px')); ?>
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
                    'terms' => array('eventos'),
                ),
            ),
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
        ?>

                <div class="row g-2 mt-1">
                    <div class="col-md-6">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" style="width: 180px; height: 120px;" alt="<?php the_title(); ?>">
                        </a>
                    <?php endif; ?>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <a href="<?php the_permalink(); ?>">
                                <span class="card-text">
                                    <?php the_title(); ?>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
    <div class="col-md-4">
        <div class="col-md-12 d-flex align-items-center text-center border-top border-dark border-1 pt-3">
            <h6 class="mx-auto text-center">EQUIPAMENTOS</h6>
        </div>

        <div class=" col md-4 emphasis mt-4">
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
                        'terms' => array('equipamentos'),
                    ),
                ),
            );
            $query = new WP_Query($args);
            while ($query->have_posts()) : $query->the_post();
            ?>
                <a href="<?php the_permalink(); ?>" class="card-link">
                    <div class="card border-0">
                        <?php the_post_thumbnail('medium', array('class' => 'card-img', 'style' => 'height:230px')); ?>
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
                    'terms' => array('equipamentos'),
                ),
            ),
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
        ?>

                <div class="row g-2 mt-1">
                    <div class="col-md-6">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" style="width: 180px; height: 120px;" alt="<?php the_title(); ?>">
                        </a>
                    <?php endif; ?>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <a href="<?php the_permalink(); ?>">
                                <span class="card-text">
                                    <?php the_title(); ?>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
</div>