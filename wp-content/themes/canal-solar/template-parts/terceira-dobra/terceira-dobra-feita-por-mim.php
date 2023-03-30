<div class="container">
    <div class="row mt-4">
        <div class="col-md-12 d-flex align-items-center">
            <h4 class="text-center px-3">NOTÍCIAS</h4>
            <div class="w-100 bg-black border-bottom mx-3"></div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col border-right border-black border-1" style="border-right: solid">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6,
                'tax_query' => array(
                    'relation' => 'OR',
                    array(
                        'taxonomy' => 'category',
                        'field'    => 'slug',
                        'terms'    => array('brasil', 'mundo'),
                    ),
                    array(
                        'taxonomy' => 'post_tag',
                        'field'    => 'slug',
                        'terms'    => array('tag-slug-1', 'tag-slug-2'),
                    ),
                ),
            );
            $query = new WP_Query($args);
            $count = 0;
            while ($query->have_posts()) :
                $query->the_post();
                $count++;
            ?>
                <?php if ($count % 3 == 1) { ?>
                    <div class="row">
                    <?php } ?>

                    <div class="col-md-4">
                        <div class="card border-0">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium', ['class' => 'card-img-top rounded-2', 'alt' => 'Imagem de Capa', 'style' => 'width: 225px; height: 150px']); ?>
                            </a>
                            <div class="card-body">
                                <a href="<?php the_permalink(); ?>">
                                    <p class="card-text">
                                        <span class="font-weight-bold"><?php the_title(); ?></span>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php if ($count % 3 == 0) { ?>
                    </div>
                <?php } ?>
            <?php
            endwhile;
            ?>
        </div>
        <div class="col-md-4 principal">
            <div class="row">
                <div class="col-md">
                    <div class="col-md-12 d-flex align-items-center">
                        <h6 class="text-center px-3">BRASIL</h6>
                        <div class="w-100 bg-black border-bottom mx-3"></div>
                    </div>

                    <?php
                    $args = array(
                        'category_name' => 'brasil',
                        'posts_per_page' => 3
                    );
                    $brasil_posts = new WP_Query($args);

                    if ($brasil_posts->have_posts()) : while ($brasil_posts->have_posts()) : $brasil_posts->the_post();
                    ?>
                            <a href="<?php the_permalink(); ?>">
                                <p class="card-text mt-2"><span><?php the_title(); ?></span></p>
                            </a>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>

                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md">
                    <div class="col-md-12 d-flex align-items-center">
                        <h6 class="text-center px-3">TECNOLOGIA</h6>
                        <div class="w-100 bg-black border-bottom mx-3"></div>
                    </div>

                    <?php
                    $args = array(
                        'category_name' => 'tecnologia',
                        'posts_per_page' => 3
                    );
                    $tecnologia_posts = new WP_Query($args);

                    if ($tecnologia_posts->have_posts()) : while ($tecnologia_posts->have_posts()) : $tecnologia_posts->the_post();
                    ?>
                            <a href="<?php the_permalink(); ?>">
                                <p class="card-text mt-2"><span><?php the_title(); ?></span></p>
                            </a>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>

                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md">
                    <div class="col-md-12 d-flex align-items-center">
                        <h6 class="text-center px-3">MUNDO</h6>
                        <div class="w-100 bg-black border-bottom mx-3"></div>
                    </div>

                    <?php
                    $args = array(
                        'category_name' => 'mundo',
                        'posts_per_page' => 3
                    );
                    $mundo_posts = new WP_Query($args);

                    if ($mundo_posts->have_posts()) : while ($mundo_posts->have_posts()) : $mundo_posts->the_post();
                    ?>
                            <a href="<?php the_permalink(); ?>">
                                <p class="card-text mt-2"><span><?php the_title(); ?></span></p>
                            </a>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>

                </div>
            </div>

        </div>
    </div>