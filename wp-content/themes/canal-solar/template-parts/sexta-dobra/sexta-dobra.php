<div class="row row-videos">
<div class="row mt-4">
            <div class="col-md-12 d-flex align-items-center">
              <div class="w-100 bg-black border-bottom mx-3"></div>
              <h4 class="text-center px-3">VÍDEOS</h4>
              <div class="w-100 bg-black border-bottom mx-3"></div>
            </div>
          </div>
    <?php
$videos = array(
    //episodio recente
    array("src" => "https://open.spotify.com/embed/episode/07xodnPPVsgIMaqIDf9W7b?utm_source=generator", "height" => 232),

    //os 3 episodios abaixo do mais recente
    array("src" => "https://open.spotify.com/embed/episode/0gQg2WJieh1Xoe98A17ZyU?utm_source=generator&theme=0", "height" => 232),
    array("src" => "https://open.spotify.com/embed/episode/5C1QFmFlgTTgOVdWn2wWeR?utm_source=generator", "height" => 232),
    array("src" => "https://open.spotify.com/embed/episode/680jpW4zCagjzKO5pkQGFZ?utm_source=generator", "height" => 232)
);

echo '<div class="col-md-8 papo-solar">
        <h6 class="mt-4 subtitle"><i class="fas fa-play" style="margin-right: 2px;"></i>Papo Solar</h6>
        <div class="row mt-3 videoContainer">';
        $iframe = '<iframe style="border-radius: 12px;" src="' . $videos[0]["src"] . '" width="100%" height="' . $videos[0]["height"] . 'px" frameborder="0" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>';
        echo '<div class="col-md-12">' . $iframe . '</div></div>
        <div class="row mt-3">';
        for ($i = 1; $i < count($videos); $i++) {
            $iframe = '<iframe style="border-radius: 12px;" src="' . $videos[$i]["src"] . '" width="100%" height="' . $videos[$i]["height"] . 'px" frameborder="0" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>';
            echo '<div class="col-md-4 videoContainer">' . $iframe . '</div>';
        }
        echo '</div>
    </div>';
?>
    <div class="col-md col-videos">
        <h6 class="mt-4 subtitle"><i class="fas fa-video" style="margin-right: 2px;"></i>Vídeos</h6>
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

                <div class="row mt-4 principal">
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
</div>