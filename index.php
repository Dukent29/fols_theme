<?php
$banner_image = get_theme_mod('banner_image');
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fols-security-theme
 */

get_header();
?>

<?php $bg_image = get_theme_mod('presentation_bg_image'); ?>

    <section class="presentation" style="background-image: url('<?php echo esc_url($bg_image); ?>');">
        <div class="container">
                <h1 class="title">Protection et Sécurité<br> Professionnelle pour<br> Votre Tranquillité d'Esprit</h1>
                <p class="subtitle">FOLS Security Group offre des solutions de sécurité complètes et personnalisées pour<br> les entreprises et les particuliers dans toute la France.</p>
            <div class="btn">
                <button>Découvrir Nos Services</button>
                <button>Demander un devis</button>
            </div>
        </div>
    </section>


    <section class="services">
        <div class="container">
            <h2 class="section-title">Nos Services de Sécurité</h2>
            <p class="section-description">
                Nous proposons une gamme complète de services de sécurité adaptés à vos besoins spécifiques, qu'il s'agisse de protéger votre entreprise, votre domicile ou vos événements.
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

<?php 
$image = get_field('pourquoi_image'); // returns array if using ACF image field
?>

<section class="pourquoi-fols">
    <div class="container">
        <div class="pourquoi-wrapper"> <!-- Flex container -->

            <div class="p-title">
                <h2 class="title">Pourquoi Choisir FOLS Security Group?</h2>
                <p class="prq-subtitle">
                    Depuis plus de 15 ans, nous fournissons des solutions de sécurité de premier ordre à nos clients en France. 
                    Notre approche personnalisée et notre expertise nous distinguent de la concurrence.
                </p>

                <ul class="reasons">
                    <li><strong>Expertise Professionnelle</strong> – Équipe d'experts certifiés avec des années d'expérience dans le secteur de la sécurité.</li>
                    <li><strong>Solutions Personnalisées</strong> – Approche sur mesure pour répondre aux besoins spécifiques de chaque client.</li>
                    <li><strong>Technologie de Pointe</strong> – Utilisation des dernières technologies et équipements de sécurité.</li>
                    <li><strong>Service 24/7</strong> – Assistance et surveillance disponibles 24h/24, 7j/7, 365 jours par an.</li>
                </ul>
            </div>

            <?php if ($image): ?>
                <div class="pourquoi-img">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>


<section class="commentaires">
    <div class="container">
        <div class="com-title">
            <h2 class="title">Ce Que Disent Nos Clients</h2>
            <p class="com-subtitle">Découvrez pourquoi nos clients nous font confiance pour leurs besoins en matière de sécurité.</p>
        </div>
    </div>
</section>

<section class="banner"></section>
<section class="contact">
  <div class="container">
    <div class="con-title">
      <h2>Prêt à Sécuriser Votre Environnement?</h2>
      <p>Contactez-nous dès aujourd'hui pour discuter de vos besoins en matière de sécurité et obtenir un devis personnalisé.</p>
      <div class="btn">
        <button class="primary">Nous Contacter</button>
        <button class="secondary">En Savoir Plus</button>
      </div>
    </div>
  </div>
</section>


<?php
get_footer();
