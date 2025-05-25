<section class="services">
        <div class="container">
            <h2 class="section-title">Nos Services de Sécurité</h2>
            <p class="section-description">
                Nous proposons une gamme complète de services de sécurité adaptés à vos besoins spécifiques,<br> qu'il s'agisse de protéger votre entreprise, votre domicile ou vos événements.
            </p>

            <div class="services-grid">
                <?php
                $args = array(
                    'post_type' => 'service',
                    'posts_per_page' => 6,
                );
                $services = new WP_Query($args);

                if ($services->have_posts()) :
                    while ($services->have_posts()) : $services->the_post(); ?>
                        <div class="service-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="service-icon">
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                </div>
                            <?php endif; ?>
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo wp_trim_words(get_the_content(), 25, '...'); ?></p>
                            <a href="<?php the_permalink(); ?>" class="learn-more">En savoir plus →</a>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>

            <div class="view-all">
                <a href="<?php echo get_post_type_archive_link('service'); ?>" class="btn btn-primary">
                    Voir Tous Nos Services →
                </a>
            </div>
        </div>
    </section>