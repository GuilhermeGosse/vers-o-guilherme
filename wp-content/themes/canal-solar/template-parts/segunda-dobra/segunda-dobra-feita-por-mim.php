<div class="container">
    <div class="row mt-4">
        <div class="col-md-12 d-flex align-items-center">
            <h4 class="text-center px-3">DESTAQUES</h4>
            <div class="w-100 bg-black border-bottom mx-3"></div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <h5 class="subtitle" style="color: #18125e;">NOTÍCIAS</h5>

            <?php
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'DESC',
                'posts_per_page' => 3,
                'offset' => 5,
                'tax_query' => array(
                    'relation' => 'OR',
                    array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => array('brasil', 'mundo'),
                    ),
                ),
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
            ?>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <a href="<?php the_permalink(); ?>">
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


        <div class="col">
            <h5 class="subtitle" style="color:#18125e;">ARTIGOS</h5>

            <?php
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'DESC',
                'posts_per_page' => 3,
                'offset' => 6,
                'tax_query' => array(
                    'relation' => 'OR',
                    array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => array('brasil', 'mundo'),
                    ),
                ),
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
            ?>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <a href="<?php the_permalink(); ?>">
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

        <div class="col-md-4 align-content-center">
            espaço em branco, mas nem tão branco assim
        </div>
    </div>